<?php   
function venture_kids_post_types() {

    //Event Post Type
    register_post_type('event', array(
        // 'capability_type' => 'event', 
        'map_meta_cap' => true, 
        'supports' => array('title', 'editor', ),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}
add_action('init', 'venture_kids_post_types'); 

?>