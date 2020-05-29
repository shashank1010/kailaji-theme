<?php

class Kailaji_Customizer {

    public static function kailaji_register($wp_customize) {
        self::kailaji_Sections($wp_customize);
        self::kailaji_Controls($wp_customize);
    }

    public static function kailaji_Sections($wp_customize) {
        $wp_customize->add_panel('home_why_us_section', array(
            'title' => __('Home Page Why Us Section', 'kailaji-alloys'),
            'description' => __('Allows you to set Why Us for Kailaji Theme.', 'kailaji-alloys'),
            'priority' => '5',
            'capability' => 'edit_theme_options'
        ));
        /**
         * Home Page Why Us area 1
         */
        $wp_customize->add_section('home_why_us_1', array(
            'title' => __('First Why Us', 'kailaji-alloys'),
            'description' => __('Allows you to setup First Why Us Area for Kailaji Theme.', 'kailaji-alloys'),
            'panel' => 'home_why_us_section',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page Why Us area 1
         */
        $wp_customize->add_section('home_why_us_2', array(
            'title' => __('Second Why Us', 'kailaji-alloys'),
            'description' => __('Allows you to setup Secomd Why Us for Kailaji Theme.', 'kailaji-alloys'),
            'panel' => 'home_why_us_section',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page Why Us area 1
         */
        $wp_customize->add_section('home_why_us_3', array(
            'title' => __('Third Why Us', 'kailaji-alloys'),
            'description' => __('Allows you to setup Third Why Us for Kailaji Theme.', 'kailaji-alloys'),
            'panel' => 'home_why_us_section',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
        /**
         * Home Page Why Us area 1
         */
        $wp_customize->add_section('home_why_us_4', array(
            'title' => __('Forth Why Us', 'kailaji-alloys'),
            'description' => __('Allows you to setup Forth Why Us for Kailaji Theme.', 'kailaji-alloys'),
            'panel' => 'home_why_us_section',
            'priority' => '',
            'capability' => 'edit_theme_options'
                )
        );
    }

    public static function kailaji_Section_Content() {
        $section_content = array(
            'home_why_us_1' => array(
                'kailaji_whyus_img1',
                'kailaji_whyus_head1',
                'kailaji_whyus_des1',
                'kailaji_whyus_link1',
            ),
            'home_why_us_2' => array(
                'kailaji_whyus_img2',
                'kailaji_whyus_head2',
                'kailaji_whyus_des2',
                'kailaji_whyus_link2',
            ),
            'home_why_us_3' => array(
                'kailaji_whyus_img3',
                'kailaji_whyus_head3',
                'kailaji_whyus_des3',
                'kailaji_whyus_link3',
            ),
            'home_why_us_4' => array(
                'kailaji_whyus_img4',
                'kailaji_whyus_head4',
                'kailaji_whyus_des4',
                'kailaji_whyus_link4',
            )
        );
        return $section_content;
    }

    public static function kailaji_Settings() {
        //Stylesheet Reader

        $theme_settings = array(
            'kailaji_whyus_img1' => array(
                'id' => 'kailaji_options[kailaji_whyus_img1]',
                'label' => __('First Why Us Image', 'kailaji-alloys'),
                'description' => __('Upload the image for the First column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'kailaji_whyus_head1' => array(
                'id' => 'kailaji_options[kailaji_whyus_head1]',
                'label' => __('First Why Us Heading', 'kailaji-alloys'),
                'description' => __('Here mention the heading for the First Column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'kailaji_whyus_des1' => array(
                'id' => 'kailaji_options[kailaji_whyus_des1]',
                'label' => __('First Why Us Description', 'kailaji-alloys'),
                'description' => __('Mention the short description for the First Column heading.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'kailaji_whyus_link1' => array(
                'id' => 'kailaji_options[kailaji_whyus_link1]',
                'label' => __('First Why Us Link', 'kailaji-alloys'),
                'description' => __('Mention the URL here to link the Image to any pages.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'kailaji_whyus_img2' => array(
                'id' => 'kailaji_options[kailaji_whyus_img2]',
                'label' => __('Second Why Us Image', 'kailaji-alloys'),
                'description' => __('Upload the Image for the Second column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'kailaji_whyus_head2' => array(
                'id' => 'kailaji_options[kailaji_whyus_head2]',
                'label' => __('Second Why Us Heading', 'kailaji-alloys'),
                'description' => __('Here mention the heading for the Second Column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'kailaji_whyus_des2' => array(
                'id' => 'kailaji_options[kailaji_whyus_des2]',
                'label' => __('Second Why Us Description', 'kailaji-alloys'),
                'description' => __('Mention the short description for the Second Column Heading.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'kailaji_whyus_link2' => array(
                'id' => 'kailaji_options[kailaji_whyus_link2]',
                'label' => __('Second Why Us Link', 'kailaji-alloys'),
                'description' => __('Mention the URL here to link the Image to any pages.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'kailaji_whyus_img3' => array(
                'id' => 'kailaji_options[kailaji_whyus_img3]',
                'label' => __('Third Why Us Image', 'kailaji-alloys'),
                'description' => __('Upload the image for the Third Column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'kailaji_whyus_head3' => array(
                'id' => 'kailaji_options[kailaji_whyus_head3]',
                'label' => __('Third Why Us Heading', 'kailaji-alloys'),
                'description' => __('Here mention the heading for the Thrid Column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'kailaji_whyus_des3' => array(
                'id' => 'kailaji_options[kailaji_whyus_des3]',
                'label' => __('Third Why Us Description', 'kailaji-alloys'),
                'description' => __('Mention the short description for the Thrid Column Heading.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'kailaji_whyus_link3' => array(
                'id' => 'kailaji_options[kailaji_whyus_link3]',
                'label' => __('Third Why Us Link', 'kailaji-alloys'),
                'description' => __('Mention the URL here to link the Image to any pages.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
            'kailaji_whyus_img4' => array(
                'id' => 'kailaji_options[kailaji_whyus_img4]',
                'label' => __('Fourth Why Us Image', 'kailaji-alloys'),
                'description' => __('Upload the image for the Second Column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'image',
                'default' => ''
            ),
            'kailaji_whyus_head4' => array(
                'id' => 'kailaji_options[kailaji_whyus_head4]',
                'label' => __('Fourth Why Us Heading', 'kailaji-alloys'),
                'description' => __('Here mention the heading for the Fourth Column.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'text',
                'default' => ''
            ),
            'kailaji_whyus_des4' => array(
                'id' => 'kailaji_options[kailaji_whyus_des4]',
                'label' => __('Fourth Why Us Description', 'kailaji-alloys'),
                'description' => __('Mention the short description for the Fourth Column Heading.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'textarea',
                'default' => ''
            ),
            'kailaji_whyus_link4' => array(
                'id' => 'kailaji_options[kailaji_whyus_link4]',
                'label' => __('Fourth Why Us Link', 'kailaji-alloys'),
                'description' => __('Mention the URL here to link the Image to any pages.', 'kailaji-alloys'),
                'type' => 'option',
                'setting_type' => 'link',
                'default' => '#'
            ),
        );
        return $theme_settings;
    }

    public static function kailaji_Controls($wp_customize) {
        $sections = self::kailaji_Section_Content();
        $settings = self::kailaji_Settings();
        /*
         * Begin: Calling Selective refresh function for each settings.
         */
        foreach ($settings as $k => $v) {
            $wp_customize->selective_refresh->add_partial($v['id'], array(
                'selector' => '.' . $k,
            ));
        }
        /*
         * End: Calling Selective refresh function for each settings.
         */
        foreach ($sections as $section_id => $section_content) {
            foreach ($section_content as $section_content_id) {
                switch ($settings[$section_content_id]['setting_type']) {
                    case 'image':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_url');
                        $wp_customize->add_control(new WP_Customize_Image_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                                )
                        ));
                        break;

                    case 'text':
                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_text');

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

                    case 'textarea':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_textarea');



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

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_url');

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

                    case 'color':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_color');

                        $wp_customize->add_control(new WP_Customize_Color_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id']
                                )
                        ));
                        break;

                    case 'number':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_number');

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

                    case 'select':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_select');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'select',
                            'choices' => $settings[$section_content_id]['choices']
                                )
                        ));
                        break;

                    case 'radio':

                        self::add_setting($wp_customize, $settings[$section_content_id]['id'], $settings[$section_content_id]['default'], $settings[$section_content_id]['type'], 'kailaji_sanitize_radio');

                        $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize, $settings[$section_content_id]['id'], array(
                            'label' => $settings[$section_content_id]['label'],
                            'description' => $settings[$section_content_id]['description'],
                            'section' => $section_id,
                            'settings' => $settings[$section_content_id]['id'],
                            'type' => 'radio',
                            'choices' => $settings[$section_content_id]['choices']
                                )
                        ));
                        break;

                    default:
                        break;
                }
            }
        }
    }

    public static function add_setting($wp_customize, $setting_id, $default, $type, $sanitize_callback) {
        $wp_customize->add_setting($setting_id, array(
            'default' => $default,
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array('Kailaji_Customizer', $sanitize_callback),
            'type' => $type
                )
        );
    }

    /**
     * adds sanitization callback funtion : textarea
     * @package inkthemes
     */
    public static function kailaji_sanitize_textarea($value) {
        $value = esc_html($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : url
     * @package inkthemes
     */
    public static function kailaji_sanitize_url($value) {
        $value = esc_url($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : text
     * @package inkthemes
     */
    public static function kailaji_sanitize_text($value) {
        $value = sanitize_text_field($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : email
     * @package inkthemes
     */
    public static function kailaji_sanitize_email($value) {
        $value = sanitize_email($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package inkthemes
     */
    public static function kailaji_sanitize_number($value) {
        $value = preg_replace("/[^0-9+ ]/", "", $value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : number
     * @package inkthemes
     */
    public static function kailaji_sanitize_color($value) {
        $value = sanitize_hex_color($value);
        return $value;
    }

    /**
     * adds sanitization callback funtion : select
     * @package inkthemes
     */
    public static function kailaji_sanitize_select($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

    /**
     * adds sanitization callback funtion : radio
     * @package inkthemes
     */
    public static function kailaji_sanitize_radio($value, $setting) {
        global $wp_customize;
        $control = $wp_customize->get_control($setting->id);
        if (array_key_exists($value, $control->choices)) {
            return $value;
        } else {
            return $setting->default;
        }
    }

}

// Setup the Theme Customizer settings and controls...
add_action('customize_register', array('Kailaji_Customizer', 'kailaji_register'));