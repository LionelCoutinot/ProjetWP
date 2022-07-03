<?php 



function monTheme_setup(){
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'main' => 'Menu de navigation'
    ]);
}

function monTheme_style(){
    wp_enqueue_style('bootstrap css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('mon css',  get_stylesheet_uri(),  array(), '1.0'); 
    wp_enqueue_script('bootstrap js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',  [], false, true);
}

$defaults = array(
    'default-image'          => '',
    'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
    'default-position-x'     => 'left',    // 'left', 'center', 'right'
    'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
    'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
    'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
    'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
    'default-color'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   } 

  // Personnaliser le menu avec des filtres 
function monTheme_menu_cls($classes){
    $classes[]="nav-item";
    return $classes;
}

function monTheme_menu_attr($atts){
    $atts['class'] = "nav-link";
    return $atts;
}


// Créer de nouveaux types de publications. Ne pas oublier d"enregister les modifications" dans le menu "Réglages -> permalien"
function monTheme_custom_post_type() {
    register_post_type(
        'projet',
         array(
          'label' => 'Projets',
          'labels' => array(
            'name' => 'Projet',
            'singular_name' => 'Projet',
            'all_items' => 'Projets',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Éditer le projet',
            'new_item' => 'Nouveau projet',
            'view_item' => 'Voir le projet',
            'search_items' => 'Rechercher parmi les projets',
            'not_found' => 'Pas de projet trouvé',
            'not_found_in_trash'=> 'Pas de projet dans la corbeille',
            'menu_name'         => 'projet',
            'menu_icon'=>'dashicons-projet',
            ),
          'public' => true,
          'capability_type' => 'post',
          'supports' => array(
            'title',
            'editor',			
			'excerpt',
            'thumbnail'
          ),
          'has_archive' => true
        )
      );
}

function montheme_register_prestation() {
    register_taxonomy('prestation', 'projet', [
        'labels' => [
            'name' => 'prestation',
            'singular_name'     => 'prestation',
            'plural_name'       => 'prestations',
            'search_items'      => 'Rechercher des prestations',
            'all_items'         => 'Tous les prestations',
            'edit_item'         => 'Editer la prestation',
            'update_item'       => 'Mettre à jour le prestation',
            'add_new_item'      => 'Ajouter une nouvelle prestation',
            'new_item_name'     => 'Ajouter une nouvelle prestation',
            'menu_name'         => 'prestation',
            'menu_icon'=>'dashicons-prestation',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);
}





add_action('init', 'montheme_register_prestation');
add_action('init', 'monTheme_custom_post_type');
add_filter('nav_menu_css_class', 'monTheme_menu_cls');
add_filter('nav_menu_link_attributes', 'monTheme_menu_attr');
add_action( 'init', 'register_my_menus' );
add_theme_support( 'custom-background', $defaults );
add_action('after_setup_theme', 'monTheme_setup');
add_action('wp_enqueue_scripts', 'monTheme_style');
	