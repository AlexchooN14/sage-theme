<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

// Custom 

function shop_custom_logo_setup() {
	$defaults = array(
		'header-text' => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'shop_custom_logo_setup' );

// Change WordPress Admin Login Logo
function biotrade_wp_admin_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url('<?php echo get_template_directory_uri()."/resources/images/biotrade-logo.svg"; ?>');
            background-repeat: no-repeat;
            background-size: 300px 100px;
            width: auto;
            height: 120px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'biotrade_wp_admin_login_logo' );

/* Change WordPress Admin Login Logo Link URL  */
function biotrade_wp_admin_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'biotrade_wp_admin_login_logo_url' );

/* Change WordPress Admin Login Logo's Title  */
function biotrade_wp_admin_login_logo_title( $headertext ) {
    $headertext = esc_html__( get_bloginfo('name'), 'plugin-textdomain' );
    return $headertext;
}
add_filter( 'login_headertext', 'biotrade_wp_admin_login_logo_title' );
 