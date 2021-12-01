<?php

function fn_customizer_settings($wp_customizer){
        //add a customizer setting
        // include new section
        $wp_customizer->add_section('header',array(
                'title'=>__('Header Settings','torando'),
                'priority'=>70
        ));
        

        //adding header title filed
          $wp_customizer->add_setting('header_text_filed',array(
                'capability'=>'edit_theme_options',
                'default'=>'phone'
        ));
        //adding text control
        $wp_customizer->add_control('header_text_control', array(
                'label' => __('Phone', 'torando'),
                'description' => 'Change Phone',
                'section' => 'header',
                'settings' => 'header_text_filed'
        ));

    

        //adding header description filed
          $wp_customizer->add_setting('header_desc_filed',array(
                'capability'=>'edit_theme_options',
                'default'=>'Email'
        ));
        //adding text control
        $wp_customizer->add_control('header_description_control', array(
                'label' => __('Email', 'torando'),
                'description' => 'Change Email',
                'section' => 'header',
                'settings' => 'header_desc_filed'
        ));


        $wp_customizer->add_setting( 'themeslug_url_setting_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'themeslug_sanitize_url',
        ) );

        $wp_customizer->add_control( 'themeslug_url_setting_id', array(
        'type' => 'url',
        'section' => 'header', // Add a default or your own section
        'label' => __( 'Custom URL' ),
        'description' => __( 'This is a custom url input.' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.youtube.com' ),
        'settings' => 'themeslug_url_setting_id'

        ),
        ) );

       function themeslug_sanitize_url( $url ) {
       return esc_url_raw( $url );
        }

         $wp_customizer->add_setting( 'themeslug_url_setting_idd', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'themeslug_sanitize_urll',
        ) );

        $wp_customizer->add_control( 'themeslug_url_setting_idd', array(
        'type' => 'url',
        'section' => 'header', // Add a default or your own section
        'label' => __( 'Custom URL' ),
        'description' => __( 'This is a custom url input.' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.facebook.com' ),
        'settings' => 'themeslug_url_setting_idd'

        ),
        ) );

       function themeslug_sanitize_urll( $url ) {
       return esc_url_raw( $url );
        }

         $wp_customizer->add_setting( 'themeslug_url_setting_iddd', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'themeslug_sanitize_urlll',
        ) );

        $wp_customizer->add_control( 'themeslug_url_setting_iddd', array(
        'type' => 'url',
        'section' => 'header', // Add a default or your own section
        'label' => __( 'Custom URL' ),
        'description' => __( 'This is a custom url input.' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.instagram.com' ),
        'settings' => 'themeslug_url_setting_iddd'

        ),
        ) );

       function themeslug_sanitize_urlll( $url ) {
       return esc_url_raw( $url );
        }

         $wp_customizer->add_setting( 'themeslug_url_setting_idddd', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'themeslug_sanitize_urllll',
        ) );

        $wp_customizer->add_control( 'themeslug_url_setting_idddd', array(
        'type' => 'url',
        'section' => 'header', // Add a default or your own section
        'label' => __( 'Custom URL' ),
        'description' => __( 'This is a custom url input.' ),
        'input_attrs' => array(
        'placeholder' => __( 'http://www.twitter.com' ),
        'settings' => 'themeslug_url_setting_id'

        ),
        ) );

       function themeslug_sanitize_urllll( $url ) {
       return esc_url_raw( $url );
        }

}

add_action('customize_register', 'fn_customizer_settings');

?>