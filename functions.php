<?php 

// adding custom footer social links support
///////////////////////////////////////////////////////

function register_customize_menu($wp_customize) {

    $wp_customize->add_section('custom_header_img', array(
        'title'     => __('Header image', 'cleanblog'),
        'panel'     => '',
        'priority'  => 3 
        ));

    $wp_customize->add_setting(
      'custom_header_img',
      array(
          'default'           => get_template_directory_uri() . '/img/home-bg.jpg',
          'transport'         => 'refresh'          
      )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'custom_header_img',
            array(
                'label'          => __( 'Your header image', 'cleanblog' ),
                'section'        => 'custom_header_img',
                'settings'       => 'custom_header_img',
                'context'        => 'menu_custom_image'
            )
        )
    );


  // Add Custom social links
    $wp_customize->add_section( 'custom_social_links' , array(
    'title'      => __('Social links','cleanblog'), 
    'panel'      => '',
    'priority'   => 1000    
    ) );  


    $wp_customize->add_setting(
      'custom_facebook_link',
      array(
          'default'           => __( 'http://facebook.com', 'cleanblog' ),
          'transport'         => 'refresh',
          'sanitize_callback' => 'sanitize_text'          
      )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_facebook_link',
            array(
                'label'          => __( 'Your Facebook URL', 'cleanblog' ),
                'section'        => 'custom_social_links',
                'settings'       => 'custom_facebook_link',
                'type'           => 'text'
            )
        )
    );


    $wp_customize->add_setting(
      'custom_twitter_link',
      array(
          'default'           => __( 'http://twitter.com', 'cleanblog' ),
          'transport'         => 'refresh',
          'sanitize_callback' => 'sanitize_text'          
      )
    );    

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_twitter_link',
            array(
                'label'          => __( 'Your Twitter URL', 'cleanblog' ),
                'section'        => 'custom_social_links',
                'settings'       => 'custom_twitter_link',
                'type'           => 'text'
            )
        )
    );     


    $wp_customize->add_setting(
      'custom_linkedin_link',
      array(
          'default'           => __( 'http://linkedin.com', 'cleanblog' ),
          'transport'         => 'refresh',
          'sanitize_callback' => 'sanitize_text'          
      )
    );    

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_linkedin_link',
            array(
                'label'          => __( 'Your LinkedIn URL', 'cleanblog' ),
                'section'        => 'custom_social_links',
                'settings'       => 'custom_linkedin_link',
                'type'           => 'text'
            )
        )
    ); 


    $wp_customize->add_setting(
      'custom_github_link',
      array(
          'default'           => __( 'http://github.com', 'cleanblog' ),
          'transport'         => 'refresh',
          'sanitize_callback' => 'sanitize_text'          
      )
    );    

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_github_link',
            array(
                'label'          => __( 'Your Github URL', 'cleanblog' ),
                'section'        => 'custom_social_links',
                'settings'       => 'custom_github_link',
                'type'           => 'text'
            )
        )
    ); 


// Sanitize text 
    function sanitize_text( $text ) {

        return sanitize_text_field( $text );

    }

} // closing function

add_action( 'customize_register', 'register_customize_menu' );


// Add theme support for Custom Header Image
// $defaults = array(
//   'default-image'          => get_template_directory_uri() . '/img/home-bg.jpg', 
//   'uploads'                => true
// );
// add_theme_support( 'custom-header', $defaults );


// Theme plugins requirements
////////////////////////////////////////////////////////


/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.5.0-alpha
 * @author     Thomas Griffin
 * @author     Gary Jones
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'WP Subtitle',
            'slug'      => 'wp-subtitle',
            'required'  => true,
        ),

        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => true,
        ),

    );

    /*
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are wrapped in a sprintf(), so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
            'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
            'installing'                      => __( 'Installing Plugin: %s', 'theme-slug' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'theme-slug' ),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop(
                'Sorry, but you do not have the correct permissions to install the %s plugin.',
                'Sorry, but you do not have the correct permissions to install the %s plugins.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop(
                'Sorry, but you do not have the correct permissions to activate the %s plugin.',
                'Sorry, but you do not have the correct permissions to activate the %s plugins.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop(
                'Sorry, but you do not have the correct permissions to update the %s plugin.',
                'Sorry, but you do not have the correct permissions to update the %s plugins.',
                'theme-slug'
            ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'theme-slug'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'theme-slug'
            ),
            'return'                          => __( 'Return to Required Plugins Installer', 'theme-slug' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'theme-slug' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'theme-slug' ), // %s = dashboard link.
            'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'tgmpa' ),

            'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );

    tgmpa( $plugins, $config );

}


// adding custom footer social links support
///////////////////////////////////////////////////////

// function millolab_register_theme_customizer( $wp_customize ) {
//     $wp_customize->add_section('custom_twitter_link', array(
//         'title'     => __('Add Twitter Link', 'cleanblog'),
//         'panel'     => 'social_settings',
//         'priority'  => 10
//         ));
//     $wp_customize->add_setting('wpt_twitter_link', array(
//         'default'               => __('Custom Twitter link', 'Clean Blog Theme'),
//         'sanitize_callback'     => 'sanitize_text'
//         ));
//     $wp_customize->add_control(
//         new WP_Customize_Control(
//             $wp_customize,
//             'custom_twitter_link', array(
//                 'label'     =>  __('Twitter link', 'Clean Blog Theme'),
//                 'section'   => 'custom_twitter_link',
//                 'setting'   => 'cleanblog_twitter_link',
//                 'type'      =>  'text'
//                 )
//             )
//         );
//     $wp_customize->add_panel('social_settings', array(
//         'prority'           => 10,
//         'theme_supports'    => '',
//         'title'             => __('Social Settings', 'Clean Blog Theme'),
//         'description'       => __('Introduce your social links', 'Clean Blog Theme'),
//         ));
// }

// add_action('customize_register', 'millolab_register_theme_customizer');



// adding css
////////////////////////////////////////////////////////
function theme_styles() {

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'font-awesome','http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' );
    wp_enqueue_style( 'google_font2','http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );


// adding js
////////////////////////////////////////////////////////
function theme_js() {

    global $wp_scripts;

    wp_register_script('html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false);
    wp_register_script('respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false);

    $wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
    $wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');

    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/clean-blog.js', array('jquery'), '', true );


}

 add_action( 'wp_enqueue_scripts', 'theme_js');


// enabling featured image
////////////////////////////////////////////////////////
add_theme_support( 'post-thumbnails' ); 



// enabling nav menu
////////////////////////////////////////////////////////
function register_my_menu() {
    register_nav_menu('menu',__( 'Menu' ));
}
add_action( 'init', 'register_my_menu' );




?>