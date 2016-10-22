<?php

namespace Drupal\custom_shortcode\Plugin\Filter;

use Drupal\Core\Url;
use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;
use Drupal\file\Entity\File;
use Drupal\taxonomy\Entity\Term;
use Drupal\Core\Entity\Node;

/**
 * @Filter(
 *   id = "filter_custom",
 *   title = @Translation("ShortCode Filter"),
 *   description = @Translation("Help this text format short code good times!"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 * )
 */
class FilterCustom extends FilterBase {

    public function process($text, $langcode) {

        preg_match_all("/(\[contact_form_id=(.+?)])/", $text, $output_array);
        /* echo '<pre>';
          echo $text;
          print_r($output_array); exit; */
        if (isset($output_array[2][0])) {
            $entity = \Drupal::entityManager()->getStorage('contact_form')->load($output_array[2][0]);
            if ($entity) {
                $message = \Drupal::entityManager()
                        ->getStorage('contact_message')
                        ->create(array(
                    'contact_form' => $entity->id(),
                ));

                $form = \Drupal::service('entity.form_builder')->getForm($message);
                $form = \Drupal::service('renderer')->render($form);
                $text = str_replace($output_array[0][0], $form, $text);
            }
        }

        return new FilterProcessResult($text);
    }

}
