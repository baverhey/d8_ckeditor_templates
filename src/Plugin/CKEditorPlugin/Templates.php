<?php

namespace Drupal\LS_my_ckeditor\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\ckeditor\Annotation\CKEditorPlugin;
use Drupal\Core\Annotation\Translation;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "templates" plugin.
 *
 * @CKEditorPlugin(
 *   id = "templates",
 *   label = @Translation("CKEditor Templates"),
 *   module = "ckeditor"
 * )
 */
class Templates extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface
{


  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor)
  {
    return array('dialog');
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor)
  {
    return array();
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal()
  {
    return false;
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile()
  {
    $plugin = drupal_get_path('module', 'LS_my_ckeditor') . '/js/plugins/templates/plugin.js';

    return $plugin;
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor)
  {
    return array();
  }



  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getButtons()
  {
    return array(
      'Templates' => array(
        'label' => t('Templates'),
        'image' => drupal_get_path('module', 'LS_my_ckeditor') . '/js/plugins/templates/icons/templates.png',
      ),
    );
  }
}
