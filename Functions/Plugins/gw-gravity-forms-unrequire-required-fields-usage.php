<?php
/**
* Gravity Wiz // Gravity Forms Unrequire Required Fields for Testing 
* 
* When bugs pop up on your forms, it can be really annoying to have to fill out all the required fields for every test
* submission. This snippet saves you that hassle by unrequiring all required fields so you don't have to fill them out.
* 
* @version	 1.0
* @author    David Smith <david@gravitywiz.com>
* @license   GPL-2.0+
* @link      http://gravitywiz.com/speed-up-gravity-forms-testing-unrequire-required-fields/
* @link2     https://gist.github.com/spivurno/8748689
* @copyright 2013 Gravity Wiz
*/
 
class GWUnrequire {
    
    var $args = null;
    
    public function __construct( $args = array() ) {
        
        extract( wp_parse_args( $args, array(
            'admins_only' => true,
            'require_query_param' => true
        ) ) );
        
        if( $admins_only && ! current_user_can( 'activate_plugins' ) )
            return;
        
        if( $require_query_param && ! isset( $_GET['gwunrequire'] ) )
            return;
        
        add_filter( 'gform_pre_validation', array( $this, 'unrequire_fields' ) );
        
    }
    
    function unrequire_fields( $form ) {
        
        foreach( $form['fields'] as &$field ) {
            $field['isRequired'] = false;
        }
        
        return $form;
    }
        
}
 
new GWUnrequire();

# Basic Usage
#   requires that the user be logged in as an administrator and that a 'gwunrequire' parameter be added to the query string
#   http://youurl.com/your-form-page/?gwunrequire=1
new GWUnrequire();
 
# Enable for All Users (Including Visitors)
#   still requires the 'gwunrequire' parameter be added to the query string
new GWUnrequire( array( 
    'admins_only' => false
) );
 
# Enable Automatically w/o Requiring the 'gwunrequire' Query Parameter
#   admin users will never be required to fill out required fields
new GWUnrequire( array( 
    'require_query_param' => false
) );
