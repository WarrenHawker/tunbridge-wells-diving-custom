<?php function divingClubPostTypes() {
    register_post_type('coaches', array(
        'public' => true,
        'capability_type' => 'coach',
        'map_meta_cap' => true,
        'supports' => array('title', 'editor'),
        'show_in_rest' => true, 
        //true uses new block editor, false uses classic editor
        'menu_icon' => 'dashicons-groups', 
        'labels' => array(
            'name' => 'Coaches',
            'add_new_item' => 'Add New Coach',
            'edit_item' => 'Edit Coach',
            'all_items' => 'All Coaches', 
            'singular_name' => 'Coach'
        )
    )  );
}


?>