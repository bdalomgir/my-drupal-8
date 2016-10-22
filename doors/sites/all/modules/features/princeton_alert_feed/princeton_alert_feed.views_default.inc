<?php
/**
 * @file
 * princeton_alert_feed.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function princeton_alert_feed_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'alert';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Alert Feeds';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Alert';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '20';
  $handler->display->display_options['style_plugin'] = 'table';
  /* Field: Content: Alert PDF */
  $handler->display->display_options['fields']['field_alert_pdf']['id'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['table'] = 'field_data_field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['field'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['label'] = '';
  $handler->display->display_options['fields']['field_alert_pdf']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_pdf']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_alert_pdf']['type'] = 'file_url_plain';
  /* Field: Content: Issue Date */
  $handler->display->display_options['fields']['field_alert_date']['id'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['table'] = 'field_data_field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['field'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['label'] = '';
  $handler->display->display_options['fields']['field_alert_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_date']['settings'] = array(
    'format_type' => 'custom_date',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_alert_pdf]';
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['target'] = '_blank';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'warning' => 'warning',
  );
  /* Filter criterion: Search: Search Terms */
  $handler->display->display_options['filters']['keys']['id'] = 'keys';
  $handler->display->display_options['filters']['keys']['table'] = 'search_index';
  $handler->display->display_options['filters']['keys']['field'] = 'keys';
  $handler->display->display_options['filters']['keys']['exposed'] = TRUE;
  $handler->display->display_options['filters']['keys']['expose']['operator_id'] = 'keys_op';
  $handler->display->display_options['filters']['keys']['expose']['label'] = 'Search Terms';
  $handler->display->display_options['filters']['keys']['expose']['operator'] = 'keys_op';
  $handler->display->display_options['filters']['keys']['expose']['identifier'] = 'keys';
  $handler->display->display_options['filters']['keys']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    3 => 0,
  );

  /* Display: Alert */
  $handler = $view->new_display('block', 'Alert', 'block');

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page_1');
  $handler->display->display_options['exposed_block'] = TRUE;
  $handler->display->display_options['path'] = 'alerts';

  /* Display: Feed: Minor Alert */
  $handler = $view->new_display('views_data_export', 'Feed: Minor Alert', 'views_data_export_1');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Issue Date */
  $handler->display->display_options['fields']['field_alert_date']['id'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['table'] = 'field_data_field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['field'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['label'] = '';
  $handler->display->display_options['fields']['field_alert_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_date']['settings'] = array(
    'format_type' => 'custom_date',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_alert_pdf]';
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['target'] = '_blank';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Alert PDF */
  $handler->display->display_options['fields']['field_alert_pdf']['id'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['table'] = 'field_data_field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['field'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['label'] = '';
  $handler->display->display_options['fields']['field_alert_pdf']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_pdf']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_alert_pdf']['type'] = 'file_url_plain';
  $handler->display->display_options['path'] = 'feed/minor-alert';

  /* Display: Feed: Minor Alert */
  $handler = $view->new_display('views_data_export', 'Feed: Minor Alert', 'views_data_export_2');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Issue Date */
  $handler->display->display_options['fields']['field_alert_date']['id'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['table'] = 'field_data_field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['field'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['label'] = '';
  $handler->display->display_options['fields']['field_alert_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_date']['settings'] = array(
    'format_type' => 'custom_date',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_alert_pdf]';
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['target'] = '_blank';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Alert PDF */
  $handler->display->display_options['fields']['field_alert_pdf']['id'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['table'] = 'field_data_field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['field'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['label'] = '';
  $handler->display->display_options['fields']['field_alert_pdf']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_pdf']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_alert_pdf']['type'] = 'file_url_plain';
  $handler->display->display_options['path'] = 'feed/major-alert';

  /* Display: Feed: All Alerts */
  $handler = $view->new_display('views_data_export', 'Feed: All Alerts', 'views_data_export_3');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '0';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'views_data_export_csv';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Issue Date */
  $handler->display->display_options['fields']['field_alert_date']['id'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['table'] = 'field_data_field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['field'] = 'field_alert_date';
  $handler->display->display_options['fields']['field_alert_date']['label'] = 'Date';
  $handler->display->display_options['fields']['field_alert_date']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_date']['settings'] = array(
    'format_type' => 'custom_date',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_repeat_rule' => 'show',
  );
  /* Field: Content: Type */
  $handler->display->display_options['fields']['type']['id'] = 'type';
  $handler->display->display_options['fields']['type']['table'] = 'node';
  $handler->display->display_options['fields']['type']['field'] = 'type';
  /* Field: Content: Alert Status */
  $handler->display->display_options['fields']['field_alert_status']['id'] = 'field_alert_status';
  $handler->display->display_options['fields']['field_alert_status']['table'] = 'field_data_field_alert_status';
  $handler->display->display_options['fields']['field_alert_status']['field'] = 'field_alert_status';
  /* Field: Content: Alert Category */
  $handler->display->display_options['fields']['field_alert_type']['id'] = 'field_alert_type';
  $handler->display->display_options['fields']['field_alert_type']['table'] = 'field_data_field_alert_type';
  $handler->display->display_options['fields']['field_alert_type']['field'] = 'field_alert_type';
  $handler->display->display_options['fields']['field_alert_type']['delta_offset'] = '0';
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = '[field_alert_pdf]';
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['target'] = '_blank';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
  /* Field: Content: Alert Description */
  $handler->display->display_options['fields']['field_alert_body']['id'] = 'field_alert_body';
  $handler->display->display_options['fields']['field_alert_body']['table'] = 'field_data_field_alert_body';
  $handler->display->display_options['fields']['field_alert_body']['field'] = 'field_alert_body';
  /* Field: Content: Body */
  $handler->display->display_options['fields']['body']['id'] = 'body';
  $handler->display->display_options['fields']['body']['table'] = 'field_data_body';
  $handler->display->display_options['fields']['body']['field'] = 'body';
  /* Field: Content: Alert PDF */
  $handler->display->display_options['fields']['field_alert_pdf']['id'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['table'] = 'field_data_field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['field'] = 'field_alert_pdf';
  $handler->display->display_options['fields']['field_alert_pdf']['label'] = 'PDF';
  $handler->display->display_options['fields']['field_alert_pdf']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_alert_pdf']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_alert_pdf']['type'] = 'file_url_plain';
  /* Field: Content: Alert Link */
  $handler->display->display_options['fields']['field_alert_link']['id'] = 'field_alert_link';
  $handler->display->display_options['fields']['field_alert_link']['table'] = 'field_data_field_alert_link';
  $handler->display->display_options['fields']['field_alert_link']['field'] = 'field_alert_link';
  $handler->display->display_options['defaults']['filter_groups'] = FALSE;
  $handler->display->display_options['defaults']['filters'] = FALSE;
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type_1']['id'] = 'type_1';
  $handler->display->display_options['filters']['type_1']['table'] = 'node';
  $handler->display->display_options['filters']['type_1']['field'] = 'type';
  $handler->display->display_options['filters']['type_1']['value'] = array(
    'warning' => 'warning',
    'alert' => 'alert',
  );
  $handler->display->display_options['filters']['type_1']['group'] = 1;
  $handler->display->display_options['path'] = 'feed/all-alerts';
  $export['alert'] = $view;

  return $export;
}
