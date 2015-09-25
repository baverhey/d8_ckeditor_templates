<?php

/**
 * @file
 * Definition of \Drupal\ls_widgetbootstrap_ckeditor\Plugin\CKEditorPlugin\LS_widgetbootstrap_ckeditor.
 */

namespace Drupal\widgetcommon\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;
use Drupal\ckeditor\Annotation\CKEditorPlugin;
use Drupal\Core\Annotation\Translation;


/**
 * Defines the "ColorButton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "colorbutton",
 *   label = @Translation("ColorButton")
 * )t
 */
class widgetcommon extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile() {
    return drupal_get_path('module', 'widgetcommon') . '/js/plugins/widgetcommon/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  function getButtons() {
    return array(
//        'TextColor' => array(
//          'label' => t('Text Color'),
//          'image' => drupal_get_path('module', 'colorbutton') . '/js/plugins/colorbutton/icons/textcolor.png',
//        ),
      'widgetcommonQuotebox' => array(
        'label' => t('common Quote box'),
        'image' => drupal_get_path('module', 'widgetcommon') . '/js/plugins/widgetcommon/icons/widgetcommonQuotebox.png',
      ),
      'widgetcommonBox' => array(
        'label' => t('common Box'),
        'image' => drupal_get_path('module', 'widgetcommon') . '/js/plugins/widgetcommon/icons/widgetcommonBox.png',
      )
    );
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return array();
  }
}
