<?php
/**
 * @file
 * Contains \Drupal\villas_common\Form\CronForm.
 */
namespace Drupal\villas_common\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CronForm extends FormBase {
  /**
   * Returns Form ID
   */
  public function getFormId() {
    return 'cron_form';
  }

  /**
   * Form Actions and Fields
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Update'),
      '#button_type' => 'primary',
    );
    return $form;
  }

  /**
   * Process Form Submit
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    villas_custom_villas_content_process();
    drupal_set_message($this->t('Villas Data Updated Successfully!') );
  }
}