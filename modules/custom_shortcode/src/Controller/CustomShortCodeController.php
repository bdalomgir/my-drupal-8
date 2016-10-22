<?php
/**
 * @file
 * Contains \Drupal\custom_shortcode\Controller\CustomShortCodeController.
 */
namespace Drupal\custom_shortcode\Controller;
use Drupal\Core\Controller\ControllerBase;
/**
 * CustomShortCodeController.
 */
class CustomShortCodeController extends ControllerBase {
  /**
   * Generates an example page.
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => '',
    );
  }
}