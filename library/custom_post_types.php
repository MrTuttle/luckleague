<?php 

if ( ! function_exists('chris_custom_post_type') ) {

// Register Custom Post Type
function chris_custom_post_type()
{
    $labels = array(
        'name'                => _x( 'Trainings', 'Post Type General Name', 'chris' ),
        'singular_name'       => _x( 'Training', 'Post Type Singular Name', 'chris' ),
        'menu_name'           => __( 'Library', 'chris' ),
        'parent_item_colon'   => __( 'Parent Library:', 'chris' ),
        'all_items'           => __( 'All Training', 'chris' ),
        'view_item'           => __( 'View Training', 'chris' ),
        'add_new_item'        => __( 'Add New Training', 'chris' ),
        'add_new'             => __( 'Add Training', 'chris' ),
        'edit_item'           => __( 'Edit Training', 'chris' ),
        'update_item'         => __( 'Update Training', 'chris' ),
        'search_items'        => __( 'Search Training', 'chris' ),
        'not_found'           => __( 'Not found', 'chris' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'chris' ),
    );
    $args = array(
        'label'               => __( 'training', 'chris' ),
        'description'         => __( 'trainings', 'chris' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor'),
        'taxonomies'          => array( 'training_category','training_tags'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
       // 'rewrite' => array('slug' => 'training'),
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    register_post_type( 'training', $args );

}

// Hook into the 'init' action
add_action( 'init', 'chris_custom_post_type', 0 );

}

if ( ! function_exists( 'products_taxonomy' ) ) {

// Register Custom Taxonomy
function products_taxonomy()
{
    $labels = array(
        'name'                       => _x( 'Training Categories', 'Taxonomy General Name', 'chris' ),
        'singular_name'              => _x( 'Training Category', 'Taxonomy Singular Name', 'chris' ),
        'menu_name'                  => __( 'Training Categories', 'chris' ),
        'all_items'                  => __( 'Training Categories', 'chris' ),
        'parent_item'                => __( 'Parent Training Category', 'chris' ),
        'parent_item_colon'          => __( 'Parent Training Category:', 'chris' ),
        'new_item_name'              => __( 'New Training Category', 'chris' ),
        'add_new_item'               => __( 'Add Training Category', 'chris' ),
        'edit_item'                  => __( 'Edit Training Category', 'chris' ),
        'update_item'                => __( 'Update Training Category', 'chris' ),
        'separate_items_with_commas' => __( 'Separate Training Category with commas', 'chris' ),
        'search_items'               => __( 'Search Training Categories', 'chris' ),
        'add_or_remove_items'        => __( 'Add or remove training categories', 'chris' ),
        'choose_from_most_used'      => __( 'Choose from the most used training categories', 'chris' ),
        'not_found'                  => __( 'Not Found', 'chris' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false
        //'rewrite' => array('slug' => 'training')
    );

    register_taxonomy( 'training_category', array( 'training' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'products_taxonomy', 0 );
}

if ( ! function_exists('rolodex_custom_post_type') ) {

// Register Custom Post Type
function rolodex_custom_post_type()
{
    $labels = array(
        'name'                => _x( 'Rolodexes', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Rolodex', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Rolodexes', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Rolodex:', 'text_domain' ),
        'all_items'           => __( 'All Rolodexes', 'text_domain' ),
        'view_item'           => __( 'View Rolodex', 'text_domain' ),
        'add_new_item'        => __( 'Add New Rolodex', 'text_domain' ),
        'add_new'             => __( 'Add Rolodex', 'text_domain' ),
        'edit_item'           => __( 'Edit Rolodex', 'text_domain' ),
        'update_item'         => __( 'Update Rolodex', 'text_domain' ),
        'search_items'        => __( 'Search Rolodex', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'rolodex', 'text_domain' ),
        'description'         => __( 'Rolodex', 'text_domain' ),
        'labels'              => $labels,
        'taxonomies'          => array( 'rolodex_category','rolodex_tags'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'rolodex', $args );

}

// Hook into the 'init' action
add_action( 'init', 'rolodex_custom_post_type', 0 );

}

if ( ! function_exists( 'rolodex_custom_taxonomy' ) ) {

// Register Custom Taxonomy
function rolodex_custom_taxonomy()
{
    $labels = array(
        'name'                       => _x( 'Rolodex Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Rolodex Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Rolodex Categories', 'text_domain' ),
        'all_items'                  => __( 'All Rolodex Categories', 'text_domain' ),
        'parent_item'                => __( 'Parent Rolodex Category', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Rolodex Category:', 'text_domain' ),
        'new_item_name'              => __( 'New Rolodex Category', 'text_domain' ),
        'add_new_item'               => __( 'Add New Rolodex Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit Rolodex Category', 'text_domain' ),
        'update_item'                => __( 'Update Rolodex Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Rolodex Categories with commas', 'text_domain' ),
        'search_items'               => __( 'Search Rolodex Categories', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Rolodex Categories', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used categories', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'rolodex_category', array( 'rolodex' ), $args );

}

if ( ! function_exists( 'tags_rolodex_taxonomy' ) ) {

// Register Custom Taxonomy
function tags_rolodex_taxonomy() {

  $labels = array(
    'name'                       => 'Tags',
    'singular_name'              => 'Tag',
    'menu_name'                  => 'Tags',
    'all_items'                  => 'All Tags',
    'parent_item'                => 'Parent Tag',
    'parent_item_colon'          => 'Parent Tag:',
    'new_item_name'              => 'New Tag',
    'add_new_item'               => 'Add New Tag',
    'edit_item'                  => 'Edit Tag',
    'update_item'                => 'Update Tag',
    'separate_items_with_commas' => 'Separate tags with commas',
    'search_items'               => 'Search Tas',
    'add_or_remove_items'        => 'Add or remove tags',
    'choose_from_most_used'      => 'Choose from the most used tags',
    'not_found'                  => 'Not Found',
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => false,
  );
  register_taxonomy( 'rolodex_tags', array( 'rolodex' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tags_rolodex_taxonomy', 0 );

}

// Hook into the 'init' action
add_action( 'init', 'rolodex_custom_taxonomy', 0 );
}

if ( ! function_exists( 'tags_training_taxonomy' ) ) {

// Register Custom Taxonomy
function tags_training_taxonomy() {

  $labels = array(
    'name'                       => 'Tags',
    'singular_name'              => 'Tag',
    'menu_name'                  => 'Tags',
    'all_items'                  => 'All Tags',
    'parent_item'                => 'Parent Tag',
    'parent_item_colon'          => 'Parent Tag:',
    'new_item_name'              => 'New Tag',
    'add_new_item'               => 'Add New Tag',
    'edit_item'                  => 'Edit Tag',
    'update_item'                => 'Update Tag',
    'separate_items_with_commas' => 'Separate tags with commas',
    'search_items'               => 'Search Tags',
    'add_or_remove_items'        => 'Add or remove tags',
    'choose_from_most_used'      => 'Choose from the most used tags',
    'not_found'                  => 'Not Found',
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'training_tags', array( 'training' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'tags_training_taxonomy', 0 );

}

 ?>