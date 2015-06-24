/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

//http://drupal.stackexchange.com/questions/139075/implementing-ckeditors-plugin-in-drupal-8
(function ($, Drupal, CKEDITOR) {
    "use strict";

    Drupal.behaviors.myCkeditor = {
        attach: function (context, settings) {
            var templates_path = '/modules/custom/my_ckeditor/templates/ckeditor/';

            var templates = [
                {
                    title:       Drupal.t('Title'),
                    description: Drupal.t('Description'),
                    image:       'preview.gif',
                    html:        'My Template'
                }
            ];

            // Remove default templates
            CKEDITOR.on("instanceLoaded", function () {
                CKEDITOR.config.templates_files = [];
            });

            // Load tempaltes
            CKEDITOR.on("instanceReady", function () {
                if (CKEDITOR.plugins.get('templates')) {
                    CKEDITOR.config.templates_replaceContent = false;
                    CKEDITOR.addTemplates('default', {
                        imagesPath: templates_path,
                        templates:  templates
                    });
                }
            });
        }
    };

})(jQuery, Drupal, CKEDITOR);



/**
 * The templates definition set to use. It accepts a list of names separated by
 * comma. It must match definitions loaded with the {@link #templates_files} setting.
 *
 *		config.templates = 'my_templates';
 *
 * @cfg {String} [templates='default']
 * @member CKEDITOR.config
 */

/**
 * The list of templates definition files to load.
 *
 *		config.templates_files = [
 *			'/editor_templates/site_default.js',
 *			'http://www.example.com/user_templates.js
 *		];
 *
 * @cfg
 * @member CKEDITOR.config
 */
CKEDITOR.config.templates_files = [
	CKEDITOR.getUrl( 'plugins/templates/templates/default.js' )
];

/**
 * Whether the "Replace actual contents" checkbox is checked by default in the
 * Templates dialog.
 *
 *		config.templates_replaceContent = false;
 *
 * @cfg
 * @member CKEDITOR.config
 */
CKEDITOR.config.templates_replaceContent = true;
