<?php
  namespace Drupal\ptn_doors;

  use Drupal\Core\State\State;
  use Drupal\Core\State\StateInterface;
  use Drupal\Core\Url;

  /**
   *
   */
  class PTNDoors {

    public function ptn_doors_custom_mail($from = NULL, $to, $subject, $message) {

      // set params
      $my_module = 'ptn_doors';
      $my_mail_token = microtime();
      if (empty($from)) $from = (!empty(\Drupal::state('ptn_doors.settings')->get('site_mail')) ? \Drupal::state('ptn_doors.settings')->get('site_mail') : 'webmaster@princeton.edu') ;


      $message = array(
        'id' => $my_module . '_' . $my_mail_token,
        'to' => $to,
        'subject' => $subject,
        'body' => array($message),
        'headers' => array(
          'From' => $from,
          'Sender' => $from,
          'Return-Path' => $from,
        ),
      );
      $system = drupal_mail_system($my_module, $my_mail_token);
      $message = $system->format($message);
      if ($system->mail($message)) {
        return TRUE;
      }
      else {
        return FALSE;
      }
    }

    public function ptn_doors_get_utility_links() {
      $utility_links = "Utilities: ";
      $utility_links .= "<a href='/admin/ptn_doors/main'>buildings</a> | ";
      $utility_links .= "<a href='/admin/ptn_doors/add_building'>add building</a> | ";
      $utility_links .= "<a href='/admin/ptn_doors/import'>import buildings and doors</a> | ";
      $utility_links .= "<a href='/admin/ptn_doors/notifications'>notification settings</a>";
      $utility_links .= "<hr/>";
      return $utility_links;
    }

    /**
     * For getting the list of building notification contacts
     */
    public function ptn_doors_get_notification_contacts($contact_type) {

      // validate
      if(empty($contact_type)) {
        drupal_set_message('Missing contact type', 'error');
        return "ERROR";
      }

      // build list html
      $contact_list = $this->ptn_doors_get_notification_emails($contact_type);
      if (!empty($contact_list)) {
        $contact_list_html = '<div id="contact-list-' . $contact_type . '"><ul>';
        foreach ($contact_list as $one_contact) {
          $contact_list_html .= '<li>' . $one_contact . ' ';
          $contact_list_html .= '<a href="'.Url::fromRoute('ptn_doors.doors_admin_remove_contact_form', array('contact_type' => $contact_type, 'contact_address' => $one_contact))->toString().'" onclick="if(!confirm(\'Removing ' . $one_contact . ' from contact list.  Are you sure?\')){return false;}">[x]</a>';
          $contact_list_html .= '</li>';
        }
        $contact_list_html .= '</ul></div>';

      // empty list
      } else {
        $contact_list_html = '<div id="contact-list-' . $contact_type . '">(no contacts set)</div>';
      }

      // return
      return $contact_list_html;

    }

    /**
     * For getting an array of contacts, for the given notification type
     */
    public function ptn_doors_get_notification_emails($contact_type) {

      // validate
      if(empty($contact_type)) {
        drupal_set_message('Missing contact type', 'error');
        return;
      }

      // read contacts
      $contact_list = array();
      $var_prefix = 'ptn_doors_contact_';
      $var_name = $var_prefix . $contact_type;

      $list = \Drupal::state('ptn_doors.settings')->get($var_name);

      // convert to array
      if (strpos($list, '|') === false) {
        $contact_list = (strlen($list) > 0) ? array($list) : array();
      } else {
        $contact_list = explode('|', $list);
      }

      // return
      return $contact_list;

    }

    public function ptn_doors_set_notification_emails($contact_type, $contact_list){
       // validate
       if(empty($contact_type)) {
         drupal_set_message('Missing contact type', 'error');
         return;
       }

       // set list
       $var_prefix = 'ptn_doors_contact_';
       $var_name = $var_prefix . $contact_type;
       $new_list = implode('|', $contact_list);
       \Drupal::state('ptn_doors.settings')->set($var_name, $new_list);
    }

  }


?>
