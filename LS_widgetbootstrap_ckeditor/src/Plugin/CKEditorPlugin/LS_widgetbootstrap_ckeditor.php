<?php

/**
 * @file
 * Definition of \Drupal\ls_widgetbootstrap_ckeditor\Plugin\CKEditorPlugin\LS_widgetbootstrap_ckeditor.
 */

namespace Drupal\LS_widgetbootstrap_ckeditor\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "ColorButton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "colorbutton",
 *   label = @Translation("ColorButton")
 * )
 */
class LS_widgetbootstrap_ckeditor extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

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
    return drupal_get_path('module', 'ls_widgetbootstrap_ckeditor') . '/js/plugins/widgetbootstrap/plugin.js';
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
      'widgetbootstrapAccordion' => array(
        'label' => t('Accordion'),
        'image' => drupal_get_path('module', 'ls_widgetbootstrap_ckeditor') . '/js/plugins/widgetbootstrap/icons/widgetbootstrapAccordion.png',
      ),
      'widgetbootstrapAlert' => array(
        'label' => t('Alert'),
       'image' => drupal_get_path('module', 'ls_widgetbootstrap_ckeditor') . '/js/plugins/widgetbootstrap/icons/widgetbootstrapAlert.png',
      ),
      'widgetbootstrapLeftCol' => array(
        'label' => t('Left Col'),
        'image' => drupal_get_path('module', 'ls_widgetbootstrap_ckeditor') . '/js/plugins/widgetbootstrap/icons/widgetbootstrapLeftCol.png',
      ),
      'widgetbootstrapRightCol' => array(
        'label' => t('Right Col'),
        'image' => drupal_get_path('module', 'ls_widgetbootstrap_ckeditor') . '/js/plugins/widgetbootstrap/icons/widgetbootstrapRightCol.png',
      ),
      'widgetbootstrapThreeCol' => array(
        'label' => t('Three Col'),
        'image' => drupal_get_path('module', 'ls_widgetbootstrap_ckeditor') . '/js/plugins/widgetbootstrap/icons/widgetbootstrapThreeCol.png',
      ),
      'widgetbootstrapTwoCol' => array(
        'label' => t('Two Col'),
        'image' => drupal_get_path('module', 'ls_widgetbootstrap_ckeditor') . '/js/plugins/widgetbootstrap/icons/widgetbootstrapTwoCol.png',
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
