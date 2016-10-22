<?php
 namespace Drupal\ptn_doors\Form;

 use Drupal\Core\Form\FormBase;
 use Drupal\Core\Form\FormStateInterface;

 class DoorRequestApproveForm extends FormBase {

   public function getFormId() {
     return 'door_request_approve_form';
   }

   public function buildForm(array $form, FormStateInterface $form_state) {

       global $user;

       // Check to see if $user has the administrator role.
       if (in_array('bac-admin', $user->roles) || in_array('administrator', $user->roles)) {

      /*
       // authorized?
       if(empty($_SESSION['phpCAS']['user'])) {
         _ptn_doors_check_auth();
         drupal_access_denied();
       }  // load request node
       */
       $request_node = node_load($request_nid);
       if(empty($request_node->nid) || 'door_request' != $request_node->type) {
         echo "bad request id";
         die;
       }
       $requester_comments = $request_node->body[LANGUAGE_NONE][0]['value'];
       $requester_last_name = $request_node->field_door_requester_last_name[LANGUAGE_NONE][0]['value'];
       $requester_first_name = $request_node->field_door_requester_first_name[LANGUAGE_NONE][0]['value'];
       $requester_street_1 = $request_node->field_door_requester_street_1[LANGUAGE_NONE][0]['value'];
       $requester_street_2 = $request_node->field_door_requester_street_2[LANGUAGE_NONE][0]['value'];
       $requester_department = $request_node->field_door_requester_department[LANGUAGE_NONE][0]['value'];
       $requester_phone_primary = $request_node->field_door_requester_phone_pri[LANGUAGE_NONE][0]['value'];
       $requester_phone_emergency = $request_node->field_door_requester_phone_emer[LANGUAGE_NONE][0]['value'];
       $requester_fax = $request_node->field_door_requester_fax[LANGUAGE_NONE][0]['value'];
       $requester_email = $request_node->field_door_requester_email[LANGUAGE_NONE][0]['value'];
       $requester_organization = $request_node->field_door_requester_org[LANGUAGE_NONE][0]['value'];
       $requester_status = $request_node->field_door_requester_status[LANGUAGE_NONE][0]['value'];
       $event_title = $request_node->field_door_event_title[LANGUAGE_NONE][0]['value'];
       $event_date = $request_node->field_door_event_date[LANGUAGE_NONE][0]['value'];
       $event_start_time = $request_node->field_door_event_start_time[LANGUAGE_NONE][0]['value'];
       $event_end_time = $request_node->field_door_event_end_time[LANGUAGE_NONE][0]['value'];
       $approved_reserved = $request_node->field_door_approved_reserved[LANGUAGE_NONE][0]['value'];
       $approved_by = $request_node->field_door_approved_by[LANGUAGE_NONE][0]['value'];
       $unlock_time = $request_node->field_door_unlock_time[LANGUAGE_NONE][0]['value'];
       $lock_time = $request_node->field_door_lock_time[LANGUAGE_NONE][0]['value'];

       // parse door request data
       $door_data = $request_node->field_door_request_data[LANGUAGE_NONE][0]['value'];
       $door_data_parts = explode('|', $door_data);
       $building_id = $door_data_parts[0];
       $exterior_doors = (count($door_data_parts) > 1) ? $door_data_parts[1] : '';
       $interior_doors = (count($door_data_parts) == 3) ? $door_data_parts[2] : '';

       // load building info
       $building_record = NULL;
       $result = db_query('SELECT * FROM ptn_buildings WHERE bid = :bid', array(':bid' => $building_id));
       foreach ($result as $record) {
         $building_record = $record;
       }
       if(empty($building_record->building_name)) {
         echo "Could not read building info";
         die;
       }

       // load door info
       $exterior_door_records = array();
       if(!empty($exterior_doors)) {
         $result = db_query('SELECT * FROM ptn_building_doors WHERE did IN (' . t($exterior_doors) . ')');
         foreach ($result as $record) {
           array_push($exterior_door_records, $record);
         }
       }

       // build form

       $form = array();

       // request record ID
       $form['request_nid'] = array(
         '#type' => 'hidden',
         '#value' => $request_node->nid
       );

       $form['request_wrapper'] = array('#markup' => '<ul class="request-wrapper">');
       // request from
       $form['requester_id'] = array(
         '#markup' => '<li><span class="label">Request from</span><span class="text">' . $requester_first_name . ' ' . $requester_last_name . ' - ' . $requester_email . '</span></li>',
       );

       // requester phone
       $requester_fax_display = (empty($requester_fax)) ? '' : '(Fax: ' . $requester_fax . ')';
       $form['requester_phone'] = array(
         '#markup' => '<li><span class="label">Requester Phone</span><span class="text">' . $requester_phone_primary . ' (Emergency: ' . $requester_phone_emergency .') ' . $requester_fax_display . '</span></li>',
       );

       // requester address
       $form['requester_address'] = array(
         '#markup' => '<li><span class="label">Requester Address</span><span class="text">' . $requester_street_1 . ' ' . $requester_street_2 . '</span></li>',
       );

       // requester status
       $form['requester_status'] = array(
         '#markup' => '<li><span class="label">Requester Status</span><span class="text">' . $requester_status . '</span></li>',
       );

       // department
       $form['requester_department'] = array(
         '#markup' => '<li><span class="label">Department</span><span class="text">' . $requester_department . '</span></li>',
       );

       // organization
       $form['requester_organization'] = array(
         '#markup' => '<li><span class="label">Organization</span><span class="text">' . $requester_organization . '</span></li>',
       );

       // approval
       $form['requester_approval'] = array(
         '#markup' => '<li><span class="label">Approved and Reserved</span><span class="text">' . $approved_reserved . ' (approved by: ' . $approved_by . ')</span></li>',
       );

       // event name
       $form['event_name'] = array(
         '#markup' => '<li><span class="label">Event</span><span class="text">' . $event_title . '</span></li>',
       );

       // event date/time
       $form['event_date'] = array(
         '#markup' => '<li><span class="label">Event Date</span><span class="text">' . $event_date . '</span></li>',
       );

       // event start/end
       $form['event_start_end'] = array(
         '#markup' => '<li><span class="label">Start/End</span><span class="text">' . $event_start_time . ' - ' . $event_end_time . '</span></li>',
       );

       // lock/unlock
       $form['event_lock_unlock'] = array(
         '#markup' => '<li><span class="label">Unlock At / Lock At</span><span class="text">' . $unlock_time . ' - ' . $lock_time . '</span></li>',
       );


       if($requester_comments) {
         $form['requester_comments'] = array(
           '#markup' => '<li><span class="label">Comments</span><span class="text">' . $requester_comments . '</span></li>',
         );
       }


       // building requested
       $form['building_requested'] = array(
         '#markup' => '<li><span class="label">Building Requested</span><span class="text">' . $building_record->building_name . '</span></li>',
       );


       // exterior doors
       $exterior_list_html = '';
       foreach ($exterior_door_records as $one_exterior_door) {
         $exterior_list_html .= '<li>' . $one_exterior_door->door_name . '</li>';
       }
       rtrim($exterior_list_html, ',');
       $form['exterior_doors'] = array(
         '#markup' => '<li><span class="label">Exterior Doors</span><span class="text">' . $exterior_list_html . '</span></li>',
       );

       // interior doors
       $form['interior_doors'] = array(
         '#markup' => '<li><span class="label">Interior Doors</span><span class="text">' . $interior_doors . '</span></li>',
       );
       $form['request_wrapper2'] = array(
         '#markup' => '</ul>',
       );


       $result = db_query("SELECT aord FROM ptn_building_approval_or_dissaproval WHERE bid = :bid", array(':bid' => $request_node->nid))->fetchField();

       if (empty($result)){
        // approval comments


       $form['approval_comments'] = array(
         '#type' => 'textarea',
         '#title' => t('Admin remarks'),
         '#description' => t('These comments will be mentioned in the email to the requestor'),
         '#default_value' => '',
         '#cols' => 60,
         '#rows' => 5,
       );
      // submit
       $form['approve_fix'] = array('#markup' => '<div class="approve-wrapper">');
       $form['approve_fix2'] = array('#markup' => '<h5>Action required. Approve or deny this request</h5>');

       $form['approve'] = array(
         '#type' => 'submit',
         '#access' => TRUE,
         '#value' => 'APPROVE',
         '#submit' => array('ptn_doors_approve_request_submit'),
       );

       $form['deny'] = array(
         '#type' => 'submit',
         '#access' => TRUE,
         '#value' => 'DENY',
         '#submit' => array('ptn_doors_deny_request_submit'),
         '#attributes' => array(
             'onclick' => 'if(!confirm("Deny this request?")){return false;}'
          ),
       );
       }
       if($result == 1){
           $form['approved_already'] = array('#markup' => '<div class="approve-wrapper"><h5>This request has been <span class="green">approved</span> by an admin</h5>');
           $form['reset'] = array(
         '#type' => 'submit',
         '#access' => TRUE,
         '#value' => 'RESET',
         '#submit' => array('ptn_doors_reset_request_submit'),
         '#attributes' => array(
             'onclick' => 'if(!confirm("Reset this request? Admin must approve or decline again.")){return false;}'
          ),
       );
       $form['approve_wrapper'] = array('#markup' => '</div>');
       }
       if ($result == 2){
           $form['denied_already'] = array('#markup' => '<div class="approve-wrapper"><h5>This request has been <span class="red">denied</span> by an admin</h5>');
           $form['reset'] = array(
         '#type' => 'submit',
         '#access' => TRUE,
         '#value' => 'RESET',
         '#submit' => array('ptn_doors_reset_request_submit'),
         '#attributes' => array(
             'onclick' => 'if(!confirm("Reset this request? Admin must approve or decline again.")){return false;}'
          ),

       );
         $form['approve_wrapper'] = array('#markup' => '</div>');
     }
       } else {
         drupal_access_denied();
       }
         return $form;
   }

   public function validateForm(array &$form, FormStateInterface $form_state) {

   }

   public function submitForm(array &$form, FormStateInterface $form_state) {
          /*
          // authorized?
          if(empty($_SESSION['phpCAS']['user'])) {
            _ptn_doors_check_auth();
            drupal_access_denied();
          }
          */

          // read form params
          $request_nid = $form_state['input']['request_nid'];
          $approval_comments = t($form_state['input']['approval_comments']);

          // load request node
          $request_node = node_load($request_nid);
          if(empty($request_node->nid) || 'door_request' != $request_node->type) {
            echo "bad request id";
            die;
          }

          $query = 'DELETE FROM ptn_building_approval_or_dissaproval WHERE bid = :bid';
          db_query($query, array(':bid' => t($request_nid)));
          header('Location: ' . $_SERVER['HTTP_REFERER']);
   }


 }

?>
