<?php

 namespace Drupal\ptn_doors\Form;

 use Drupal\Core\Form\FormBase;
 use Drupal\Core\Form\FormStateInterface;

 class DoorsAdminMainForm extends FormBase {

   public $PTNDoors;

   public function __construct(){
     $this->PTNDoors = new \Drupal\ptn_doors\PTNDoors();
   }

   public function getFormId() {
     return 'door_admin_main_form';
   }

   public function buildForm(array $form, FormStateInterface $form_state) {
    // public function params
    $form = array();
    $buildings = array();
    $building_list_html = '<p><ul>';

    // read list of buildings
    $result = db_query('SELECT * FROM ptn_buildings ORDER BY building_name ASC');
    foreach ($result as $record) {
      $buildings[$record->bid] = $record->building_name;
      $building_edit_link = '/admin/ptn_doors/edit_building/' . $record->bid;
      $building_list_html .= '<li><a href="' . $building_edit_link . '">' . $record->building_name . '</a></li>';
    }
    $building_list_html .= '</ul></p>';

    // build form
    $form['utility_links'] = array(
      '#markup' => $this->PTNDoors->ptn_doors_get_utility_links()
    );

    $form['heading'] = array(
      '#markup' => '<h1>Building and Door Request Management</h1>'
    );

    $form['building_links'] = array(
      '#markup' => $building_list_html
    );

    $form['#submit'] = array();

    // return
    return $form;
   }

   public function validateForm(array &$form, FormStateInterface $form_state) {

   }

   public function submitForm(array &$form, FormStateInterface $form_state) {

   }

 }

?>
