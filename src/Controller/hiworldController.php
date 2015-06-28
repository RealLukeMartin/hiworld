<?php
/**
 * @file
 * Contains \Drupal\hiworld\Controller\hiworldController.
 */

namespace Drupal\hiworld\Controller;

use Drupal\Core\Controller\ControllerBase;

class hiworldController extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('Hello, World!'),
    );
  }
}
