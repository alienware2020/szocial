<?php
    
    /**
     * Szocial Theme Customizer
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
     class Szocial_Customizer{
         public static function Szocial_Register($wp_customize){
             self::Szocial_Sections($wp_customize);
             self::Szocial_Controls($wp_customize);    
         }
    
         public static function Szocial_Sections($wp_customize){
             $wp_customize->add_panel('aboutus_setting_panel', array(
                'title' => __('Abut Us', 'Szocial'),
                'description' => __('Allows you to change the content of about us page.', 'Szocial'), 
                'capability' => 'edit_theme_options'
             ));
             $wp_customize->add_panel('social_media_marketing_panel', array(
                'title' => __('social media marketing', 'Szocial'),
                'description' => __('Allows you to change the content of Social Media Marketing.', 'Szocial'), 
                'capability' => 'edit_theme_options'
             ));
             $wp_customize->add_section('header_section', array(
                'title' => __('Header Background Section', 'Szocial'),
                'description' => __('Allow you to change header section', 'Szocial'),
                //'panel' => 'aboutus_setting_panel',
                'capability' => 'edit_theme_options'
            ));
             $wp_customize->add_section('about_us_section', array(
                'title' => __('About us Details', 'Szocial'),
                'description' => __('Allow you to change About Us page details', 'Szocial'),
                //'panel' => 'aboutus_setting_panel',
                'capability' => 'edit_theme_options'
            ));
    
             //section for social media marketing
             $wp_customize->add_section('social_media_marketing_section', array(
                'title' => __('Social Media Marketing Details', 'Szocial'),
                'description' => __('Allow you to change Social Media Marketing details', 'Szocial'),
                'capability' => 'edit_theme_options'
            ));
    
             //section for packages
             $wp_customize->add_section('package_section', array(
                'title' => __('Package Details', 'Szocial'),
                'description' => __('Allow you to change Package details', 'Szocial'),
                'capability' => 'edit_theme_options'
            ));
    
            //section for corporate Identity Design
             $wp_customize->add_section('corporate_identity_design_section', array(
                'title' => __('Corporate Identity Design Details', 'Szocial'),
                'description' => __('Allow you to change the content of corporate identity design.', 'Szocial'),
                'capability' => 'edit_theme_options'
            ));
    
            //section for Contact Us
             $wp_customize->add_section('contact_section', array(
                'title' => __('Contact Details', 'Szocial'),
                'description' => __('Allow you to change contact details', 'Szocial'),
                'capability' => 'edit_theme_options'
            ));
    
            //section for Footer
             $wp_customize->add_section('footer_section', array(
                'title' => __('Footer section', 'Szocial'),
                'description' => __('Allow you to change social details', 'Szocial'),
                'capability' => 'edit_theme_options'
            ));
         }
    
         public static function Szocial_Section_Content($wp_customize){
            $section_content=array(
                'about_us_section' => array(
                    'about_us_header',
                    'about_us_content'
                ),
                'header_section' => array(
                    'header_background_image',
                    'header_background_sub_text'
                ),
                'social_media_marketing_section' => array(
                    'social_marketing_event_content',
                    'social_marketing_corporate_design_content',
                    'social_marketing_webshop_maker_content',                    
                    'social_marketing_online_marketing_content'
                ),
                'package_section' => array(
                    'package_Kishal_content',
                    'package_Nagyhal_content',
                    'package_Capa_content',                    
                ),
                'corporate_identity_design_section' => array(
                    'corporate_identity_design_content'
                ),
                'footer_section' => array(
                    'szocial_fb_link',
                    'szocial_twitter_link',
                    'szocial_google_plus_link',
                    'szocial_linkedin_link',
                ),
                'contact_section' => array(
                    'contact_number',
                    'contact_email',
                    'contact_address'
                )
            );
            return $section_content;
         }
    
         public static function Szocial_Settings($wp_customize){
            $szocial_settings=array(
                'about_us_header' => array(
                    'id' => 'szocial_options[about_us_header]',
                    'label' => __('About Us Header', 'Szocial'),
                    'description' => __('Write a heading for about us', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'text',
                    'default' => ''
                ),
                'about_us_content' => array(
                    'id' => 'szocial_options[about_us_content]',
                    'label' => __('About Us Content', 'Szocial'),
                    'description' => __('Write a content for about us', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'header_background_image' => array(
                    'id' => 'szocial_options[header_background_image]',
                    'label' => __('Image', 'Szocial'),
                    'description' => __('Upload image for header background', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'image',
                    'default' => ''
                ),
                'header_background_sub_text' => array(
                    'id' => 'szocial_options[header_background_sub_text]',
                    'label' => __('Background sub Text', 'Szocial'),
                    'description' => __('Write a sub text for background', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'social_marketing_event_content' =>  array(
                    'id' => 'szocial_options[social_marketing_event_content]',
                    'label' => __('Event content', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'social_marketing_corporate_design_content' =>  array(
                    'id' => 'szocial_options[social_marketing_corporate_design_content]',
                    'label' => __('Corporate Design content', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'social_marketing_webshop_maker_content' =>  array(
                    'id' => 'szocial_options[social_marketing_webshop_maker_content]',
                    'label' => __('Webshop Maker content', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'social_marketing_online_marketing_content' =>  array(
                    'id' => 'szocial_options[social_marketing_online_marketing_content]',
                    'label' => __('Online Marketing content', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'package_Kishal_content' => array(
                    'id' => 'szocial_options[package_Kishal_content]',
                    'label' => __('Kishal Package Content', 'Szocial'),
                    'description' => __('Write features for Kishal package', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'package_Nagyhal_content' => array(
                    'id' => 'szocial_options[package_Nagyhal_content]',
                    'label' => __('Nagy hal Package Content', 'Szocial'),
                    'description' => __('Write features for Nagy hal package', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'package_Capa_content' => array(
                    'id' => 'szocial_options[package_Capa_content]',
                    'label' => __('Cápa Package Content', 'Szocial'),
                    'description' => __('Write features for Cápa package', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'corporate_identity_design_content' =>  array(
                    'id' => 'szocial_options[corporate_identity_design_content]',
                    'label' => __('Corporate identity design content', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'textarea',
                    'default' => ''
                ),
                'contact_number' => array(
                    'id' => 'szocial_options[contact_number]',
                    'label' => __('Contact number', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'text',
                    'default' => ''
                ),
                'contact_email' => array(
                    'id' => 'szocial_options[contact_email]',
                    'label' => __('Email', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'text',
                    'default' => ''
                ),
                'contact_address' => array(
                    'id' => 'szocial_options[contact_address]',
                    'label' => __('Contact address', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'text',
                    'default' => ''
                ),
                'szocial_fb_link' => array(
                    'id' => 'szocial_options[szocial_fb_link]',
                    'label' => __('Facebook Link', 'Szocial'),
                    'description' => __('Set facebook link', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'link',
                    'default' => ''
                ),
                'szocial_twitter_link' => array(
                    'id' => 'szocial_options[szocial_twitter_link]',
                    'label' => __('Twitter Link', 'Szocial'),
                    'description' => __('Set twitter link', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'link',
                    'default' => ''
                ),
                'szocial_google_plus_link' => array(
                    'id' => 'szocial_options[szocial_google_plus_link]',
                    'label' => __('Google Plus Link', 'Szocial'),
                    'description' => __('Set Google Plus link', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'link',
                    'default' => ''
                ),
                'szocial_linkedin_link' => array(
                    'id' => 'szocial_options[szocial_linkedin_link]',
                    'label' => __('LinkedIn Link', 'Szocial'),
                    'description' => __('Set LinkedIn link', 'Szocial'),
                    'type' => 'option',
                    'setting_type' => 'link',
                    'default' => ''
                )
            );
            return $szocial_settings;
         }
    
         public static function add_setting($wp_customize, $setting_id, $default, $type) {
            $wp_customize->add_setting($setting_id, array(
                'default' => $default,
                'capability' => 'edit_theme_options',
                'type' => $type
                    )
            );
         }
    
         public static function Szocial_Controls($wp_customize){
            $sections = self::Szocial_Section_Content();
            $settings = self::Szocial_Settings();
            foreach ($sections as $section_id => $section_content) {
                foreach ($section_content as $section_content_id) {
                    switch($settings[$section_content_id]['setting_type']) {
                        case 'text':
                            self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type']);
                            $wp_customize->add_control(new WP_Customize_Control(
                                    $wp_customize, $settings[$section_content_id]['id'], array(
                                    'label' => $settings[$section_content_id]['label'],
                                    'description' => $settings[$section_content_id]['description'],
                                    'section' => $section_id,
                                    'settings' => $settings[$section_content_id]['id'],
                                    'type' => 'text'
                                    )
                            ));
                            break;
                        case 'image':
                            self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type']);
                            $wp_customize->add_control(new WP_Customize_Image_Control(
                                    $wp_customize, $settings[$section_content_id]['id'], array(
                                'label' => $settings[$section_content_id]['label'],
                                'description' => $settings[$section_content_id]['description'],
                                'section' => $section_id,
                                'settings' => $settings[$section_content_id]['id']
                                    )
                            ));
                            break;
    
                    case 'textarea':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type']);
    
                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'textarea'
                                )
                        ));
                        break;
    
                    case 'link':
    
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type']);
    
                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'text'
                                )
                        ));
    
                        break;
                        default:
                            break;
                    }
                }
            }
         }
    
     }
    
     add_action('customize_register', array('Szocial_Customizer', 'Szocial_Register'));
    
?>