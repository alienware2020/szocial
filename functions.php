<?php
    define( 'WP_DEBUG', true );
    if (!defined('SZOCIAL_DIR')) {
        define('SZOCIAL_DIR', get_template_directory() . '/');
    }
    
    if (!defined('SZOCIAL_DIR_URI')) {
        define('SZOCIAL_DIR_URI', get_template_directory_uri() . '/');
    }
    
    include SZOCIAL_DIR . '/includes/customizer.php';
    
            function szocial_script_enqueue(){
                wp_enqueue_style('bootstrap', SZOCIAL_DIR_URI . 'css/bootstrap.min.css', array(), '1.0.0', 'all');
                wp_enqueue_style('fontawesome', SZOCIAL_DIR_URI . 'css/font-awesome.css', array(), '1.0.0', 'all');
                wp_enqueue_style('responsive', SZOCIAL_DIR_URI . 'css/responsive.css', array(), '1.0.0', 'all');
                wp_enqueue_style('customstyle', SZOCIAL_DIR_URI . 'css/main.css', array(), '1.0.0', 'all');
    
                wp_enqueue_script('jquery', SZOCIAL_DIR_URI . 'js/jquery.min.js', array(), '1.0.0', true);
                wp_enqueue_script('bootstrapjs', SZOCIAL_DIR_URI . 'js/bootstrap.min.js', array(), '1.0.0', true);
                wp_enqueue_script('customjs', SZOCIAL_DIR_URI . 'js/custom.js', array(), '1.0.0', true);
    
            }
    
            add_action('wp_enqueue_scripts', 'szocial_script_enqueue');
            function szocial_theme_setup(){
                add_theme_support('menus');
                register_nav_menu('primary', 'Primary Header Navigation');
                register_nav_menu('secondary', 'Footer Navigation');
    
            }    
            add_action('init', 'szocial_theme_setup');
    
            function szocial_customizer_register($wp_customize){
                $wp_customize->add_section('bg_section', array(
                    'title'=>__('Colors','Szocial'),
                    'description'=>'Modify the color'
                ));
                $wp_customize->add_setting('background_color', array(
                    'default'=>'#fefefe',
                    'description'=>'Modify the color'
                ));
                $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_color', array(
                    'label'=> __('Edit color', 'Szocial'),
                    'section'=>'bg_section',
                    'settings'=>'background_color'
                )));
            }
    
        function onepage_get_option($option_name, $default_value = '') {
            $option_data = get_option('szocial_options');
            if (isset($option_data[$option_name]) && $option_data[$option_name] != '') {
                return $option_data[$option_name];
            } 
            elseif ($default_value) {
                return $default_value;
            } else {
                return false;
            }
        }
    
        function szocial_css_customizer(){
?>
<style type="text/css">
    .header{background-image:url("<?php echo esc_url(onepage_get_option('header_background_image', SZOCIAL_DIR_URI . "assets/images/slider-1.jpg")); ?>")}
</style>
<?php
    }
    add_action('wp_head', 'szocial_css_customizer');
?>