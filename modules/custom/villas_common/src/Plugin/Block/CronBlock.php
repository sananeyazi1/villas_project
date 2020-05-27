<?php
/**
 * @file
 * Contains \Drupal\villas_common\Plugin\Block\CronBlock.
 */

namespace Drupal\villas_common\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'cron' block.
 *
 * @Block(
 *   id = "cron_block",
 *   admin_label = @Translation("Cron block"),
 *   category = @Translation("Custom Cron block")
 * )
 */
class CronBlock extends BlockBase {

  /**
   * implements a cron block
   */
  public function build() {

    $form = \Drupal::formBuilder()->getForm('Drupal\villas_common\Form\CronForm');

    return $form;
   }
}