<?php
/**
 * The filter below adds a drop down menu per field under the Appearance tab;
 * a choice of "hidden" is added to that drop down menu
 *
 * @source: //gravitywiz.com/how-to-hide-gravity-form-field-labels-when-using-placeholders/
 */

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );