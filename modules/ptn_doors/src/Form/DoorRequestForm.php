<?php
 namespace Drupal\ptn_doors\Form;

 use Symfony\Component\HttpFoundation\RedirectResponse;
 use Drupal\Core\Url;
 use Drupal\Core\Ajax\AjaxResponse;
 use Drupal\Core\Ajax\ChangedCommand;
 use Drupal\Core\Ajax\CssCommand;
 use Drupal\Core\Ajax\HtmlCommand;
 use Drupal\Core\Ajax\ReplaceCommand;
 use Drupal\Core\Ajax\InsertCommand;
 use Drupal\Core\Ajax\AppendCommand;
 use Drupal\Core\Ajax\InvokeCommand;
 use Drupal\Core\Ajax\AfterCommand;
 use Drupal\Core\Form\FormBase;
 use Drupal\Core\Form\FormStateInterface;
 use Drupal\Core\State\State;
 use Drupal\Core\State\StateInterface;
 use Drupal\Core\Render\Element;
 use Drupal\node\Entity\Node;

 /**
  *
  */
 class DoorRequestForm extends FormBase {

  public $PTNDoors;

  public function __construct(){
     $this->PTNDoors = new \Drupal\ptn_doors\PTNDoors();
  }

  public function getFormId() {
    return 'door_request_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {


     // logout url?
   $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

   if (false !== strpos($url,'logout')) {
   include_once('sites/all/libraries/CAS/CAS.php');
   phpCAS::client(CAS_VERSION_2_0,'fed.princeton.edu',443,'cas');
   phpCAS::setNoCasServerValidation();
   phpCAS::logout();
   }


   /*
     if(empty($_SESSION['phpCAS']['user'])) {
       _ptn_doors_check_auth();
       drupal_access_denied();
     }
   */

   if (false !== strpos($url,'list')) {
     global $user;

     // Check to see if $user has the administrator role.
     if (in_array('bac-admin', $user->roles) || in_array('administrator', $user->roles)) {
   $form['pre_text_table'] = array('#markup' => '<table width="100%"><thead><tr><th>E-mail</th><th>Status</th><th>View</th></tr></thead>');
   $form['pre_text_table_body'] = array('#markup' => '<tbody>');
   $result = db_query('SELECT * FROM field_data_field_door_requester_email ORDER BY `entity_id` DESC LIMIT 0,45');
   $countformpt = 1;
   foreach ($result as $record) {
   $buildingslistemail = $record->field_door_requester_email_value;
   $buildingslistrid = $record->entity_id;
   $resultaordnull = db_query("SELECT aord FROM ptn_building_approval_or_dissaproval WHERE bid = :bid", array(':bid' => $record->entity_id))->fetchField();
   if($resultaordnull == 1 && $resultaordnull !== 2){
   $form['pre_text_'.$countformpt++.''] = array('#markup' =>
     '<tr><td>'.$buildingslistemail.'</td><td class="green">Approved</td><td><a href="http://'.$_SERVER['SERVER_NAME'].'/door-request-approve/'.$buildingslistrid.'">View</a></td></tr>'
   );
   } elseif($resultaordnull == 2 && $resultaordnull !== 1){
   $form['pre_text_'.$countformpt++.''] = array('#markup' =>
     '<tr><td>'.$buildingslistemail.'</td><td class="red">Denied</td><td><a href="http://'.$_SERVER['SERVER_NAME'].'/door-request-approve/'.$buildingslistrid.'">View</a></td></tr>'
   );
   } else {
   $form['pre_text_'.$countformpt++.''] = array('#markup' =>
     '<tr><td>'.$buildingslistemail.'</td><td class="yellow">Awaiting Response</td><td><a href="http://'.$_SERVER['SERVER_NAME'].'/door-request-approve/'.$buildingslistrid.'">View</a></td></tr>'
   );
   }
   }
   $form['pre_text_table_body_close'] = array('#markup' => '</tbody>');
   $form['pre_text_table_close'] = array('#markup' => '</table>');

   } else {
   $form['access_denied_text'] = array('#markup' => '<div class="denied">Access denied! You must be an administrator to access this page.</div>');
   }
   return $form;
   } else {
   //is authenticated?
     // build form

     // load building list
     $buildings = array();
     $buildings[''] = '-- Select A Building --';
     $result = db_query('SELECT * FROM ptn_buildings ORDER BY building_name ASC');
     foreach ($result as $record) {
       $buildings[$record->bid] = $record->building_name;
     }

     // user vitals

     $form['pre_text'] = array('#markup' =>
         '<p>If this request requires the unlocking of building\'s electronically controlled "PROX" door. Please contact the appropriate Building Access Coordinator (BAC) and have them submit a building unlock schedule change to <a href="mailto:BACSDAFS@princeton.edu">BACSDAFS@princeton.edu</a></p>' .
         '<p>Electronically controlled "PROX" doors WILL NOT be unlocked based on this form submission.</p>' .
         '<p>Submit COMPLETED form 24 HOURS IN ADVANCE of the requested Lock/Unlock time to accommodate processing time for card access and manual opening of buildings and rooms.</p>' .
         '<p>Last minute arrangements and/or changes for your request WILL NOT be guaranteed.</p>'.
         '<p><div class="logout-cas"><b>You are logged into PAC</b> <a href="'.$url.'/logout">Logout</a></div></p>'
     );

     $form['requester_last_name'] = array(
       '#type' => 'textfield',
       '#title' => t('Last Name'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['requester_first_name'] = array(
       '#type' => 'textfield',
       '#title' => t('First Name'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => FALSE,
     );

     $form['requester_street_1'] = array(
       '#type' => 'textfield',
       '#title' => t('Street Address 1'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['requester_street_2'] = array(
       '#type' => 'textfield',
       '#title' => t('Street Address 2'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => FALSE,
     );

     $form['requester_department'] = array(
       '#type' => 'textfield',
       '#title' => t('Department'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['requester_phone_primary'] = array(
       '#type' => 'textfield',
       '#title' => t('Telephone (Primary)'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['requester_phone_emergency'] = array(
       '#type' => 'textfield',
       '#title' => t('Telephone (Emergency)'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['requester_fax'] = array(
       '#type' => 'textfield',
       '#title' => t('Fax'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => FALSE,
     );

     $form['requester_email'] = array(
       '#type' => 'textfield',
       '#title' => t('Email'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['requester_organization'] = array(
       '#type' => 'textfield',
       '#title' => t('Organization\'s Name'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['requester_status'] = array(
       '#type' => 'radios',
       '#title' => t('Status'),
       '#default_value' => 'STUDENT',
       '#options' => array('FACULTY' => 'Faculty', 'STAFF' => 'Staff', 'STUDENT' => 'Student'),
       '#required' => true,
     );

     $form['status_fix'] = array('#markup' => '<div class="clr">');

     $form['event_title'] = array(
       '#type' => 'textfield',
       '#title' => t('Title of Event'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['event_date'] = array(
       '#type' => 'date_select',
       '#title' => t('Event Date'),
       '#default_value' => date('Y-m-d', (time() + (7*86400))),  // +1 week
       '#date_year_range' => '0:+3',
       '#date_format' => 'Y-m-d',
       '#required' => true,
     );

     $form['event_start_time'] = array(
       '#type' => 'date_select',
       '#title' => t('Start Time'),
       '#default_value' => date('Y-m-d', (time() + (7*86400))) . ' 17:00',  // +1 week
       '#date_format' => 'g:i a',
       '#required' => true,
     );

     $form['event_end_time'] = array(
       '#type' => 'date_select',
       '#title' => t('End Time'),
       '#default_value' => date('Y-m-d', (time() + (7*86400))) . ' 19:00',  // +1 week
       '#date_format' => 'g:i a',
       '#required' => true,
     );

     $form['approved_reserved'] = array(
       '#type' => 'radios',
       '#title' => t('Is the location approved and reservation completed'),
       '#default_value' => 'NO',
       '#options' => array('NO' => 'No', 'YES' => 'Yes'),
       '#required' => true,
     );

     $form['approved_reserved_fix'] = array('#markup' => '<div class="clr">');

     $form['approved_by'] = array(
       '#type' => 'textfield',
       '#title' => t('Approved By'),
       '#size' => 10,
       '#maxlength' => 25,
       '#required' => TRUE,
     );

     $form['unlock_time'] = array(
       '#type' => 'date_select',
       '#title' => t('Desired Time to Unlock'),
       '#default_value' => date('Y-m-d', (time() + (7*86400))) . ' 16:30',  // +1 week
       '#date_format' => 'g:i a',
       '#required' => true,
     );

     $form['lock_time'] = array(
       '#type' => 'date_select',
       '#title' => t('Desired Time to Lock'),
       '#default_value' => date('Y-m-d', (time() + (7*86400))) . ' 19:30',  // +1 week
       '#date_format' => 'g:i a',
       '#required' => true,
     );

     $form['requester_comments'] = array(
       '#type' => 'textarea',
       '#title' => t('Brief summary of why you need this lock/unlock request'),
       '#default_value' => '',
       '#cols' => 60,
       '#rows' => 5,
       '#required' => true,
     );

     $form['comments_fix'] = array('#markup' => '<div class="clr">');

     $form['post_text'] = array('#markup' =>
         '<p>CANCELLATION POLICY: In the event of a cancellation, you must notify The Department of Public Safety at 609-258-1000 within 4 hours of the start of the event.</p>' .
         '<p>LAST MINUTE ARRANGEMENTS AND/OR CHANGES FOR YOUR REQUEST WILL NOT BE GUARANTEED!!!</p>'
     );

     // building wrapper

     $form['buildings_wrapper'] = array('#prefix' => '<div id="buildings-wrapper">', '#suffix' => '</div>');

     // building count
     $building_max = 5;
     $building_max_reached = FALSE;
     $building_count_storage = $form_state->get(['storage', 'building_count']);
     if(isset($building_count_storage)) {
       $building_count = $building_count_storage;
     } else {
       $building_count = 1;
       $form_state->set(['storage', 'building_count'], $building_count);
     }

     // display buildings
     for($i=1; $i<=$building_count; $i++) {

       // cap building list at 5
       if ($i > $building_max) {
         $form['buildings_wrapper']['building_spacer_' . $i] = array('#markup' => '<br/><br/><p><strong>(limit ' . $building_max . ' buildings)</strong></p>');
         $building_max_reached = TRUE;
         continue;
       }

       // spacer
       $form['buildings_wrapper']['building_spacer_' . $i] = array('#markup' => '<strong>Building ' . $i . '</strong><hr/>');

       // building selector
       $form['buildings_wrapper']['building_id_' . $i] = array(
         '#type' => 'select',
         '#title' => t('Please select a building you are requesting access to'),
         '#required' => TRUE,
         '#options' => $buildings,
         '#ajax' => array(
           'event' => 'change',
           'wrapper' => 'door-wrapper-' . $i,
           'callback' => array($this, 'ptnDoorsAjax'),
           'method' => 'replace',
         ),
       );

       // door selector
       $form['buildings_wrapper']['door_wrapper_' . $i] = array('#prefix' => '<div id="door-wrapper-' . $i . '">', '#suffix' => '</div>');

       // add doors for building, if selected
       $building_count_storage = $form_state->get(['storage', 'building_count']);

       if(!empty($form_state->get(['input', 'building_id_' . $i]))) {

         // exterior doors
         $bid_for_doors = $form_state->get(['input', 'building_id_' . $i]);
         $door_cb_list = '<label for="door-wrapper-' . $i . '">Please Select which Doors You Need Access To For This Building</label>';
         $door_count = 0;
         $result = db_query('SELECT * FROM ptn_building_doors WHERE bid = :bid ORDER BY door_name', array(':bid' => abs($bid_for_doors)));
         foreach ($result as $record) {
           $form_state_record_did = $form_state->get(['input', 'edit-did-' . $i . '-' . $record->did]);
           $checked_value = (isset($form_state_record_did)) ? 'CHECKED' : '';
           $door_cb_list .= '<input type="checkbox" name="edit-did-' . $i . '-' . $record->did . '" value="SELECTED" ' . $checked_value . '> ' . $record->door_name .'';
           $door_count++;
         }

         if ($door_count == 0) $door_cb_list .= "<p>(none available)</p>";
         $form['buildings_wrapper']['door_wrapper_' . $i]['exterior_' . $i] = array('#markup' => $door_cb_list);

         // interior doors
         $form['buildings_wrapper']['door_wrapper_' . $i]['interior_' . $i] = array(
           '#type' => 'textfield',
           '#title' => t('Please List All Interior Room Numbers You Need Access To'),
           '#size' => 10,
           '#maxlength' => 250,
         );

       }


     }
       if($building_count > 1) {
         $form['buildings_wrapper']['door_wrapper_' . $i]['add_spacer_1'] = array('#markup' => '');
         $form['buildings_wrapper']['door_wrapper_' . $i]['add_more'] = array(
           '#type' => 'submit',
           "#limit_validation_errors" => array(),
           //'#submit' => array($this, 'ptnDoorsPublicRequestRemoveBuildingSubmit'),
           '#value' => t('[-] Remove Building'),
   	    '#attributes' => array(
           'class' => array('remove'),
        ),
           '#ajax' => array(
             'callback' => array($this, 'ptnDoorsPublicRequestRemoveBuilding'),
             'wrapper' => 'buildings-wrapper',
             'method' => 'replace',
             'effect' => 'fade',
           ),
         );
         $form['buildings_wrapper']['door_wrapper_' . $i]['add_spacer_2'] = array('#markup' => '');
       }

     $form['buildings_wrapper']['add_more'] = array(
       '#type' => 'submit',
       '#value' => t('[+] Add Another Building'),
       '#attributes' => array('onclick' => 'return (false);'),
       '#executes_submit_callback' => false,
       '#ajax' => array(
         'callback' => array($this, 'ptnDoorsPublicRequestAddBuilding'),
         'wrapper' => 'buildings-wrapper',
         'method' => 'replace',
         'effect' => 'fade',
       ),
     );
     // submit

     $form['submit_spacer'] = array('#markup' => '<br/><br/><hr/><br/><br/>');
     $form['submit'] = array('#type' => 'submit', '#value' => t('Submit Access Request'));
     $form['bottom_spacer'] = array('#markup' => '<br/><br/><br/>');
     //$form['#submit'][] = 'ptn_doors_public_request_submit';

     // return
     return $form;
     }
  }

  public function ptnDoorsAjax(array &$form, FormStateInterface $form_state){
    $ajax_response = new AjaxResponse();

    // building count
    $building_max = 5;
    $building_max_reached = FALSE;
    $building_count_storage = $form_state->get(['storage', 'building_count']);
    if(isset($building_count_storage)) {
     $building_count = $building_count_storage;
    } else {
     $building_count = 1;
     $form_state->set(['storage', 'building_count'], $building_count);
    }

    $building_list_id = $building_count;

    if(!empty($building_list_id)) {

      // exterior doors
      $bid_for_doors = $building_list_id;
      $door_cb_list = '<label for="door-wrapper-' . $building_list_id . '">Please Select which Doors You Need Access To For This Building</label>';
      $door_count = 0;
      $result = db_query('SELECT * FROM ptn_building_doors WHERE bid = :bid ORDER BY door_name', array(':bid' => abs($bid_for_doors)));
      foreach ($result as $record) {
        $form_state_record_did = $form_state->get(['input', 'edit-did-' . $building_list_id . '-' . $record->did]);
        $checked_value = (isset($form_state_record_did)) ? 'CHECKED' : '';
        $door_cb_list .= '<input type="checkbox" name="edit-did-' . $building_list_id . '-' . $record->did . '" value="SELECTED" ' . $checked_value . '> ' . $record->door_name .'';
        $door_count++;
      }

      if ($door_count == 0) $door_cb_list .= "<p>(none available)</p>";
      //$form['buildings_wrapper']['door_wrapper_' . $building_list_id]['exterior_' . $building_list_id] = array('#markup' => $door_cb_list);

      // interior doors
      $form['buildings_wrapper']['door_wrapper_' . $building_list_id]['interior_' . $building_list_id] = array(
        '#type' => 'textfield',
        '#title' => t('Please List All Interior Room Numbers You Need Access To'),
        '#size' => 10,
        '#maxlength' => 250,
      );

      //$form['buildings_wrapper']['door_wrapper_' . $building_list_id]['add_spacer_1'] = array('#markup' => '');
/*
      $form['buildings_wrapper']['door_wrapper_' . $building_list_id]['add_more'] = array(
        '#type' => 'submit',
        '#value' => t('[+] Add Another Building'),
        '#ajax' => array(
          'callback' => array($this, 'ptnDoorsPublicRequestAddBuilding'),
          'wrapper' => 'buildings-wrapper',
          'method' => 'replace',
          'effect' => 'fade',
        ),
      );
*/
    //  $form['buildings_wrapper']['door_wrapper_' . $building_list_id]['add_spacer_2'] = array('#markup' => '');
    } else {
      echo 'There was something wrong with validation';
    }

    if ($building_count > $building_max) {
      //$form['buildings_wrapper']['building_spacer_' . $building_list_id] = array('#markup' => '<br/><br/><p><strong>(limit ' . $building_max . ' buildings)</strong></p>');
      $building_max_reached = TRUE;
    }

    //$form_state->setRebuild(TRUE);
    //return $form['buildings_wrapper']['door_wrapper_' . $building_list_id];
    //$form_state['rebuild'] = TRUE;

    $ajax_response->addCommand(new InsertCommand('#door-wrapper-'.$building_list_id, '<div id="door-wrapper-'.$building_list_id.'">'.$door_cb_list.drupal_render($form['buildings_wrapper']['door_wrapper_' . $building_list_id]['interior_' . $building_list_id]).drupal_render($form['buildings_wrapper']['door_wrapper_' . $building_list_id]['add_more']).'</div>'));
    return $ajax_response;

  }
/*
  public function ptnDoorsPublicRequestAddBuilding(array &$form, FormStateInterface $form_state) {
    $ajax_response = new AjaxResponse();

    // load building list
    $buildings = array();
    $buildings[''] = '-- Select A Building --';
    $result = db_query('SELECT * FROM ptn_buildings ORDER BY building_name ASC');
    foreach ($result as $record) {
      $buildings[$record->bid] = $record->building_name;
    }

    // building count
    $building_max = 5;
    $building_max_reached = FALSE;
    $building_count_storage = $form_state->get(['storage', 'building_count']);
    if(isset($building_count_storage)) {
     $building_count = $building_count_storage;
    } else {
     $building_count = 1;
     $form_state->set(['storage', 'building_count'], $building_count);
    }


    $building_list_id = $building_count + 1;
    //echo "Building List ID: ".$building_list_id;
    if ($building_count > $building_max) {
      //$form['buildings_wrapper']['building_spacer_' . $building_list_id] = array('#markup' => '<br/><br/><p><strong>(limit ' . $building_max . ' buildings)</strong></p>');
      $building_max_reached = TRUE;
    }

    if($building_max_reached != TRUE){
      // spacer
      $form['buildings_wrapper']['building_spacer_' . $building_list_id] = array('#markup' => '<strong>Building ' . $building_list_id . '</strong><hr/>');

      // building selector
      $form['buildings_wrapper']['building_id_' . $building_list_id] = array(
        '#type' => 'select',
        '#title' => t('Please select a building you are requesting access to'),
        '#required' => TRUE,
        '#options' => $buildings,
        '#ajax' => array(
          'event' => 'change',
          'wrapper' => 'door-wrapper-' . $building_list_id,
          'callback' => array($this, 'ptnDoorsAjax'),
          'method' => 'replace',
        ),
      );

      $form['buildings_wrapper']['door_wrapper_' . $building_list_id] = array('#prefix' => '<div id="door-wrapper-' . $building_list_id . '">', '#suffix' => '</div>');

    }


    //$form_state['rebuild'] = TRUE;
    // Now get the correct form element and return it:
    return $form['buildings_wrapper'];

    //$ajax_response->addCommand(new AppendCommand('#door-wrapper-'.($building_list_id-1), drupal_render($form['buildings_wrapper']['building_spacer_' . $building_list_id]).drupal_render($form['buildings_wrapper']['building_id_' . $building_list_id]).drupal_render($form['buildings_wrapper']['door_wrapper_' . $building_list_id])));
    //return ;

  }
  */

  public function ptnDoorsPublicRequestAddBuilding(array &$form, FormStateInterface $form_state) {
    $ajax_response = new AjaxResponse();

    // load building list
    $buildings = array();
    $buildings[''] = '-- Select A Building --';
    $result = db_query('SELECT * FROM ptn_buildings ORDER BY building_name ASC');
    foreach ($result as $record) {
      $buildings[$record->bid] = $record->building_name;
    }

    // building count
    $building_max = 5;
    $building_max_reached = FALSE;
    $building_count_storage = $form_state->get(['storage', 'building_count']);
    if(isset($building_count_storage)) {
     $building_count = $building_count_storage;
    } else {
     $building_count = 1;
     $form_state->set(['storage', 'building_count'], $building_count);
    }


    $building_list_id = $building_count + 1;
    //echo "Building List ID: ".$building_list_id;
    if ($building_count > $building_max) {
      //$form['buildings_wrapper']['building_spacer_' . $building_list_id] = array('#markup' => '<br/><br/><p><strong>(limit ' . $building_max . ' buildings)</strong></p>');
      $building_max_reached = TRUE;
    }

    if($building_max_reached != TRUE){
      // spacer
      // building selector
      $form['buildings_wrapper']['building_id_' . $building_list_id] = array(
        '#type' => 'select',
        '#attached' => array(
          'drupalSettings' => true
        ),
        '#title' => t('Please select a building you are requesting access to'),
        '#required' => TRUE,
        '#options' => $buildings,
        '#ajax' => array(
          'event' => 'change',
          'wrapper' => 'door-wrapper-' . $building_list_id,
          'callback' => array($this, 'ptnDoorsAjax'),
          'method' => 'replace',
        ),
      );

      echo $form['#attached']['js'];

      //$form['buildings_wrapper']['door_wrapper_' . $building_list_id] = array('#prefix' => '<div id="door-wrapper-' . $building_list_id . '">', '#suffix' => '</div>');

    }

    $ajax_response->addCommand(new AfterCommand('#door-wrapper-'.($building_list_id-1), '<strong>Building ' . $building_list_id . '</strong><hr/><div id="door-wrapper-' . $building_list_id . '">'.drupal_render($form['buildings_wrapper']['building_id_' . $building_list_id]).'</div>'));
    return $ajax_response;

  }

  public function ptnDoorsPublicRequestRemoveBuilding(array &$form, FormStateInterface $form_state) {
   return $form['buildings_wrapper'];
  }

 /**
  * submit handler for ptn_doors_public_request_add_building
  */
  public function ptnDoorsPublicRequestAddBuildingSubmit(array &$form, FormStateInterface $form_state) {
    $building_count = $form_state->get(['storage', 'building_count']);
    $form_state->set(['storage', 'building_count'], ($building_count + 1));
    $form_state->set(['rebuild'], TRUE);
  }
  public function ptnDoorsPublicRequestRemoveBuildingSubmit(array &$form, FormStateInterface $form_state) {
    $building_count = $form_state->get(['storage', 'building_count']);
    $form_state->set(['storage', 'building_count'], ($building_count - 1));
    $form_state->set(['rebuild'], TRUE);
  }

  public function ptnDoorsUpdateDoorList(array &$form, FormStateInterface $form_state){
    // building count

    $building_list_name = $form_state->getTriggeringElement();

    $building_list_name = $building_list_name['#array_parents'][1];
    $building_list_name_parts = explode('_', $building_list_name);
    $building_list_id = $building_list_name_parts[2];

    return $form['buildings_wrapper']['door_wrapper_' . $building_list_id];

  }

  public function submitForm(array &$form, FormStateInterface $form_state) {


     // read overall request info
     $requester_last_name = $form_state->get(['input', 'requester_last_name']);
     $requester_first_name = $form_state->get(['input', 'requester_first_name']);
     $requester_street_1 = $form_state->get(['input', 'requester_street_1']);
     $requester_street_2 = $form_state->get(['input', 'requester_street_2']);
     $requester_department = $form_state->get(['input', 'requester_department']);
     $requester_phone_primary = $form_state->get(['input', 'requester_phone_primary']);
     $requester_phone_emergency = $form_state->get(['input', 'requester_phone_emergency']);
     $requester_fax = $form_state->get(['input', 'requester_fax']);
     $requester_email = $form_state->get(['input', 'requester_email']);
     $requester_organization = $form_state->get(['input', 'requester_organization']);
     $requester_status = $form_state->get(['input', 'requester_status']);
     $event_title = $form_state->get(['input', 'event_title']);
     $event_date =
       $form_state->get(['input', 'event_date', 'month']) .'/' .
       $form_state->get(['input', 'event_date']['day']) .'/' .
       $form_state->get(['input', 'event_date']['year']);
     $event_start_time =
       $form_state->get(['input', 'event_start_time']['hour']) . ':' .
       $form_state->get(['input', 'event_start_time']['minute']) . ' ' .
       $form_state->get(['input', 'event_start_time']['ampm']);
     $event_end_time =
       $form_state->get(['input', 'event_end_time']['hour']) . ':' .
       $form_state->get(['input', 'event_end_time']['minute']) . ' ' .
       $form_state->get(['input', 'event_end_time']['ampm']);
     $approved_reserved = $form_state->get(['input', 'approved_reserved']);
     $approved_by = $form_state->get(['input', 'approved_by']);
     $unlock_time =
       $form_state->get(['input', 'unlock_time']['hour']) . ':' .
       $form_state->get(['input', 'unlock_time']['minute']) . ' ' .
       $form_state->get(['input', 'unlock_time']['ampm']);
     $lock_time =
       $form_state->get(['input', 'lock_time']['hour']) . ':' .
       $form_state->get(['input', 'lock_time']['minute']) . ' ' .
       $form_state->get(['input', 'lock_time']['ampm']);
     $requester_comments = $form_state->get(['input', 'requester_comments']);

     // loop over building requests
     $requests = array();
     $has_more_buildings = TRUE;
     $building_counter = 1;
     while($has_more_buildings == TRUE) {

       // parse building info
       $building_id = $form_state->get(['input', 'building_id_' . $building_counter]);
       $interior_doors = $form_state->get(['input', 'interior_' . $building_counter]);
       $exterior_doors = array();
       foreach($form_state->get(['input']) as $key => $val) {
         if(strstr($key, 'edit-did-' . $building_counter . '-')) {
           $door_field_parts = explode('-', $key);
           if(!empty($door_field_parts[3])) {
             $door_id = $door_field_parts[3];
             array_push($exterior_doors, $door_id);
           }
         }
       }
       $request_detail_data = $building_id . '|';
       $request_detail_data .= implode(',', $exterior_doors) . '|';
       $request_detail_data .= $interior_doors;

       $node = Node::create([
        // The node entity bundle.
        'type' => 'door_request',
        'langcode' => 'en',
        'created' => REQUEST_TIME,
        'changed' => REQUEST_TIME,
        // The user ID.
        'uid' => 1,
        'title' => "DOORS - " . $event_date . ' (' . $requester_email . ')',
        'field_door_request_body' => $requester_comments,
        'field_door_requester_last_name' => $requester_last_name,
        'field_door_requester_first_name' => $requester_first_name,
        'field_door_requester_street_1' => $requester_street_1,
        'field_door_requester_street_2' => $requester_street_2,
        'field_door_requester_department' => $requester_department,
        'field_door_requester_phone_pri' => $requester_phone_primary,
        'field_door_requester_phone_emer' => $requester_phone_emergency,
        'field_door_requester_fax' => $requester_fax,
        'field_door_requester_email' => $requester_email,
        'field_door_requester_org' => $requester_organization,
        'field_door_requester_status' => $requester_status,
        'field_door_event_title' => $event_title,
        'field_door_event_date' => $event_date,
        'field_door_event_start_time' => $event_start_time,
        'field_door_event_end_time' => $event_end_time,
        'field_door_approved_reserved' => $approved_reserved,
        'field_door_approved_by' => $approved_by,
        'field_door_unlock_time' => $unlock_time,
        'field_door_lock_time' => $lock_time,
        'field_door_request_data' => $request_detail_data,
        'field_door_request_status' => 'NEW',

      ]);
      $node->save();

/*
       // save request node
       $node = new stdClass();
       $node->type = "door_request";
       $node->title = "DOORS - " . $event_date . ' (' . $requester_email . ')';
       $node->language = LANGUAGE_NONE;
       $node->uid = 1;
       node_object_prepare($node);
       $node->body[$node->language][0]['value'] = $requester_comments;
       $node->field_door_requester_last_name[$node->language][0]['value'] = $requester_last_name;
       $node->field_door_requester_first_name[$node->language][0]['value'] = $requester_first_name;
       $node->field_door_requester_street_1[$node->language][0]['value'] = $requester_street_1;
       $node->field_door_requester_street_2[$node->language][0]['value'] = $requester_street_2;
       $node->field_door_requester_department[$node->language][0]['value'] = $requester_department;
       $node->field_door_requester_phone_pri[$node->language][0]['value'] = $requester_phone_primary;
       $node->field_door_requester_phone_emer[$node->language][0]['value'] = $requester_phone_emergency;
       $node->field_door_requester_fax[$node->language][0]['value'] = $requester_fax;
       $node->field_door_requester_email[$node->language][0]['value'] = $requester_email;
       $node->field_door_requester_org[$node->language][0]['value'] = $requester_organization;
       $node->field_door_requester_status[$node->language][0]['value'] = $requester_status;
       $node->field_door_event_title[$node->language][0]['value'] = $event_title;
       $node->field_door_event_date[$node->language][0]['value'] = $event_date;
       $node->field_door_event_start_time[$node->language][0]['value'] = $event_start_time;
       $node->field_door_event_end_time[$node->language][0]['value'] = $event_end_time;
       $node->field_door_approved_reserved[$node->language][0]['value'] = $approved_reserved;
       $node->field_door_approved_by[$node->language][0]['value'] = $approved_by;
       $node->field_door_unlock_time[$node->language][0]['value'] = $unlock_time;
       $node->field_door_lock_time[$node->language][0]['value'] = $lock_time;
               //...
       $node->field_door_request_data[$node->language][0]['value'] = $request_detail_data;
       $node->field_door_request_status[$node->language][0]['value'] = 'NEW';
       $node = node_submit($node);
       node_save($node);
       array_push($requests, $node);
*/
       // load building record
       $building_record = NULL;
       $result = db_query('SELECT * FROM ptn_buildings WHERE bid = :bid', array(':bid' => $building_id));
       foreach ($result as $record) {
         $building_record = $record;
       }

       if(empty($building_record->bid)) {
         drupal_set_message('Could not read building record for notifications.', 'error');
         $response = new RedirectResponse(\Drupal::url('ptn_doors.door_request'));
         $response->send();
         return;
       }

       $this_request_url = 'http://' . $_SERVER['SERVER_NAME'] . '/door-request-approve/' . $node->id;

       // send bac/daf email notification
       if('ELEC' == $building_record->elec_or_man) {
         $elec_man_contact_array = ptn_doors_get_notification_emails("electric");
       } elseif('MAN' == $building_record->elec_or_man) {
         $elec_man_contact_array = ptn_doors_get_notification_emails("manual");
       }

       foreach ($elec_man_contact_array as $elec_man_contact) {

       global $base_url;
       $subject = 'Door Request';
    $body = '<style>
   *{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;}
   body {font-family:"Arial",Verdana;font-size:13px;line-height:18px;color:#5f5e5e;background:#f2f4f7;text-align:center;}
   body p {margin: 13px 0;}
   body a {color:#5f5e5e;text-decoration:none;}
   body .message {background:#fff;width:580px;margin:90px auto 30px auto;}
   body .message .header {display:table;width:100%;padding:12px;}
   body .message .header .header-image {float:left;padding: 0 0 10px;}
   body .message .alert {background:#ee7f2d;background:#ee7f2d;background-image:-webkit-linear-gradient(-45deg, rgba(241,149,81, 0.5) 25%, transparent 25%, transparent 50%, rgba(241,149,81, 0.5) 50%, rgba(241,149,81, 0.5) 75%, transparent 75%, transparent);
     background-image:linear-gradient(-45deg, rgba(241,149,81, 0.5) 25%, transparent 25%, transparent 50%, rgba(241,149,81, 0.5) 50%, rgba(241,149,81, 0.5) 75%, transparent 75%, transparent);
     -webkit-background-size:60px 60px;
     background-size:60px 60px; height:64px;line-height:64px;text-align:center;color:#fff;font-size:22px;padding:0 10px;letter-spacing:1px;}
   body .message .text {padding:50px 10px;font-weight:bold;}
   body .message .decide {padding:0 0 50px;}
   body .message .decide a.button {display:block;text-decoration:none;width:250px;margin:0 auto;background:#3e3e3e;color:#fff;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;padding:20px;font-size:22px;}
   body .message .link {padding:0 0 40px;}
   body .copyright {color:#8f8f8f;text-align:center;font-size:11px;padding: 0 0 50px 0;}
   </style>

   <div class="message">
     <div class="header">
         <div class="header-image"><a href="' .$base_url .'"><img src="'.$base_url.'/images/logo.png" width="224" height="65"/></a></div>
       </div>
       <div class="alert">
         New Building Access Request. Action Required
       </div>
     <div class="text">
         <p>To Authorized BAC Admin</p>
       <p>A request has been filled out for building access by '.$requester_email.'<br/>on '.date("F j, Y, g:i a").'.</p>
       <p>Please follow the link below to Approve or Deny this request.</p>
       </div>
       <div class="decide"><a class="button" href="'.$this_request_url.'">View Request Here</a></div>
       <div class="link">Or copy and paste the following link into your browser:<br/>'.$this_request_url.'</div>
   </div>

   <div class="copyright">&copy;2013 The Trustees of <a href="http://www.princeton.edu">Princeton University</a> &middot; Princeton, New Jersey 08544 USA</div>';
         ptn_doors_custom_mail(NULL, $elec_man_contact, $subject, $body);
     }



       // more buildings?
       $building_counter++;
       $building_id_and_counter = $form_state->get(['input', 'building_id_' . $building_counter]);
       if(!isset( $building_id_and_counter )) {
         $has_more_buildings = FALSE;
         continue;
       }

     }

     // continue to confirmation page
     drupal_goto('door-request-confirm');

  }

 }
