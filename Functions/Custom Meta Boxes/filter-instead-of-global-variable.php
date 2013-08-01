<?php
// Creating Custom Boxes using Meta Box plugin With Filters instead of Global Variable
// Post by TC Barrett - http://www.tcbarrett.com/2013/07/creating-custom-boxes-using-meta-box-plugin-with-filters-instead-of-global-variable/
// Obviously you need to have the Metabox plugin installed for this to work.

/**
 * Use a filter to fetch a list of metaboxes
 * (so these can now be updated/removed/added to theme or other plugins)
 * Parse list into something the Meta Box plugin understands
 * Make Meta Box objects!
 */

add_action( 'admin_init', 'tcb_register_meta_boxes' );
function tcb_register_meta_boxes(){
  if( !class_exists('RW_Meta_Box') )
    return;

  $_metaboxes = apply_filters( 'tcb_register_meta_boxes', array() );
  $metaboxes  = tcb_mb_parse_internal_list( $_metaboxes );

  foreach( $metaboxes as $metabox ):
    new RW_Meta_Box( $metabox );
  endforeach;
}

/**
 * Takes a list that can be more easily inspected (and filtered)
 *  converts into a format used by MetaBox plugin
 */
function tcb_mb_parse_internal_list( $mb ){
  $metaboxes = array();

  foreach( $mb as $mbid => $mbdetails ):
    $fields = array();
    foreach( $mbdetails['fields'] as $mbfid => $mbfdetails ):
      $mbfdetails['id'] = $mbfid;
      $fields[]         = $mbfdetails;
    endforeach;
    $mbdetails['id']     = $mbid;
    $mbdetails['fields'] = $fields;
    $metaboxes[]         = $mbdetails;
  endforeach;

  return $metaboxes;
}

/**
 * Example filter for my WP Glossary plugin
 */
add_filter( 'tcb_register_meta_boxes', 'tcb_wpg_register_meta_boxes' );
function tcb_wpg_register_meta_boxes( $metaboxes ){
  $metaboxes['glossary_reference'] = array(
    'title'    => 'Glossary References',
    'pages'    => array('glossary'),
    'context'  => 'normal',
    'priority' => 'low',
    'fields'   => array(
      'wpg_ref_title' => array(
        'name'  => 'Reference Title',
        'desc'  => 'Give the reference a title',
        'type'  => 'text',
        'clone' => false,
      )
    )
  );

  return $metaboxes;
}