<?php


new \Kirki\Panel(
    'panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'Sifa Panel', 'sifa' ),
        'description' => esc_html__( 'Sifa Panel Description.', 'sifa' ),
    ]
);

// header_top_section
function header_top_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_top_section',
        [
            'title'       => esc_html__( 'Header Info', 'sifa' ),
            'description' => esc_html__( 'Header Section Information.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 100,
        ]
    );
    // header_top_bar section 

    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'header_layout_custom',
            'label'       => esc_html__( 'Chose Header Style', 'sifa' ),
            'section'     => 'header_top_section',
            'priority'    => 10,
            'choices'     => [
                'header_1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
                'header_2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
                'header_3'  => get_template_directory_uri() . '/inc/img/header/header-3.png'
            ],
            'default'     => 'header_1',
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_topbar_switch',
            'label'       => esc_html__( 'Header Topbar Switch', 'sifa' ),
            'description' => esc_html__( 'Header Topbar switch On/Off', 'sifa' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    );    

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_right_switch',
            'label'       => esc_html__( 'Header Right Switch', 'sifa' ),
            'description' => esc_html__( 'Header Right switch On/Off', 'sifa' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    ); 

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_preloader_switch',
            'label'       => esc_html__( 'Header Preloader Switch', 'sifa' ),
            'description' => esc_html__( 'Header Preloader switch On/Off', 'sifa' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_search_switch',
            'label'       => esc_html__( 'Header Search Switch', 'sifa' ),
            'description' => esc_html__( 'Header Search switch On/Off', 'sifa' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    ); 

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_auth_switch',
            'label'       => esc_html__( 'Header Auth Switch', 'sifa' ),
            'description' => esc_html__( 'Header Auth switch On/Off', 'sifa' ),
            'section'     => 'header_top_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    ); 


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_backtotop_switch',
            'label'       => esc_html__( 'Header Back to Top Switch', 'sifa' ),
            'description' => esc_html__( 'Header Back to Top switch On/Off', 'sifa' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_top_button_switch',
            'label'       => esc_html__( 'Header Top Button On/Off', 'sifa' ),
            'description' => esc_html__( 'Header Top Button switch On/Off', 'sifa' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    );
    

    new \Kirki\Field\Text(
        [
            'settings' => 'header_button_text',
            'label'    => esc_html__( 'Button Text', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'Donate Now ', 'sifa' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_button_link',
            'label'    => esc_html__( 'Button URL', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_phone',
            'label'    => esc_html__( 'Phone Number', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '+88 01310-069824', 'sifa' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'header_email',
            'label'    => esc_html__( 'Email ID', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'sifa@support.com', 'sifa' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'header_address',
            'label'    => esc_html__( 'Address Text', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '734 H, Bryan Burlington, NC 27215', 'sifa' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_address_link',
            'label'    => esc_html__( 'Address URL', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => 'https://www.google.com/maps/@36.0758266,-79.4558848,17z',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_top_time',
            'label'    => esc_html__( 'Header top time', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => 'Sunday - Friday: 9 am - 8 pm',
            'priority' => 10,
        ]
    );
    new \Kirki\Field\textarea(
        [
            'settings' => 'header_top_menu',
            'label'    => esc_html__( 'Header top menu', 'sifa' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '#', 'sifa' ),
            'priority' => 10,
        ]
    );


}
header_top_section();


// header_side_section
function header_side_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_side_section',
        [
            'title'       => esc_html__( 'Header Side Info', 'sifa' ),
            'description' => esc_html__( 'Header Side Information.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 110,
        ]
    );
    // header_side_section section 

    // header_side_logo_section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_side_logo',
            'label'       => esc_html__( 'Header Side Logo', 'sifa' ),
            'description' => esc_html__( 'Header Side Default/Primary Logo Here', 'sifa' ),
            'section'     => 'header_side_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_side_info_switch',
            'label'       => esc_html__( 'Header Side Info Switch', 'sifa' ),
            'description' => esc_html__( 'Header Side Info switch On/Off', 'sifa' ),
            'section'     => 'header_side_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    );  

    new \Kirki\Field\Textarea(
        [
            'settings'    => 'header_top_offcanvas_textarea',
            'label'       => esc_html__( 'Offcanvas About Us', 'sifa' ),
            'section'     => 'header_side_section',
            'default'     => esc_html__( 'Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .', 'sifa' ),
        ]
    );

    // Contacts Text 
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_contacts_text',
            'label'    => esc_html__( 'Contacts Text', 'sifa' ),
            'section'  => 'header_side_section',
            'default'  => esc_html__( 'CONTACT US', 'sifa' ),
            'priority' => 10,
        ]
    );

}
header_side_section();

// header_social_section
function header_social_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_social_section',
        [
            'title'       => esc_html__( 'Social Area', 'sifa' ),
            'description' => esc_html__( 'Social URL.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 120,
        ]
    );
    // header_top_bar section 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_facebook_link',
            'label'    => esc_html__( 'Facebook URL', 'sifa' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_twitter_link',
            'label'    => esc_html__( 'Twitter URL', 'sifa' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );  

    new \Kirki\Field\URL(
        [
            'settings' => 'header_linkedin_link',
            'label'    => esc_html__( 'Linkedin URL', 'sifa' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_instagram_link',
            'label'    => esc_html__( 'Instagram URL', 'sifa' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );            

}
header_social_section();

// header_logo_section
function header_logo_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo', 'sifa' ),
            'description' => esc_html__( 'Header Logo Settings.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 130,
        ]
    );

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'sifa' ),
            'description' => esc_html__( 'Theme Default/Primary Logo Here', 'sifa' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_secondary_logo',
            'label'       => esc_html__( 'Header Secondary Logo / White', 'sifa' ),
            'description' => esc_html__( 'Theme Secondary Logo Here', 'sifa' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'preloader_logo',
            'label'       => esc_html__( 'Preloader Icon', 'sifa' ),
            'description' => esc_html__( 'Preloader Icon Logo Here', 'sifa' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/img/logo/preloder.png',
        ]
    );
}
header_logo_section();


// header_logo_section
function header_breadcrumb_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'header_breadcrumb_section',
        [
            'title'       => esc_html__( 'Breadcrumb', 'sifa' ),
            'description' => esc_html__( 'Breadcrumb Settings.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 160,
        ]
    );

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'breadcrumb_image',
            'label'       => esc_html__( 'Breadcrumb Image', 'sifa' ),
            'description' => esc_html__( 'Breadcrumb Image add/remove', 'sifa' ),
            'section'     => 'header_breadcrumb_section',
        ]
    );


    new \Kirki\Field\Color(
        [
            'settings'    => 'breadcrumb_bg_color',
            'label'       => __( 'Breadcrumb BG Color', 'sifa' ),
            'description' => esc_html__( 'You can change breadcrumb bg color from here.', 'sifa' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => '#f3fbfe',
        ]
    );

    new \Kirki\Field\Dimensions(
        [
            'settings'    => 'breadcrumb_padding',
            'label'       => esc_html__( 'Dimensions Control', 'sifa' ),
            'description' => esc_html__( 'Description', 'sifa' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => [
                'padding-top'  => '',
                'padding-bottom' => '',
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'breadcrumb_typography',
            'label'       => esc_html__( 'Typography Control', 'sifa' ),
            'description' => esc_html__( 'The full set of options.', 'sifa' ),
            'section'     => 'header_breadcrumb_section',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => '.tpbreadcrumb-title',
                ],
            ],
        ]
    );


}
header_breadcrumb_section();

// header_logo_section
function full_site_typography(){
    // header_logo_section section 
    new \Kirki\Section(
        'full_site_typography',
        [
            'title'       => esc_html__( 'Typography', 'sifa' ),
            'description' => esc_html__( 'Typography Settings.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 190,
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'sifa_typo_body',
            'label'       => esc_html__( 'Typography Body Text', 'sifa' ),
            'description' => esc_html__( 'Body Typography Control.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'body',
                ],
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'sifa_typo_h1',
            'label'       => esc_html__( 'Typography Heading 1 Font', 'sifa' ),
            'description' => esc_html__( 'H1 Typography Control.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h1',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'sifa_typo_h2',
            'label'       => esc_html__( 'Typography Heading 2 Font', 'sifa' ),
            'description' => esc_html__( 'H2 Typography Control.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h2',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'sifa_typo_h3',
            'label'       => esc_html__( 'Typography Heading 3 Font', 'sifa' ),
            'description' => esc_html__( 'H3 Typography Control.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h3',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'sifa_typo_h4',
            'label'       => esc_html__( 'Typography Heading 4 Font', 'sifa' ),
            'description' => esc_html__( 'H4 Typography Control.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h4',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'sifa_typo_h5',
            'label'       => esc_html__( 'Typography Heading 5 Font', 'sifa' ),
            'description' => esc_html__( 'H5 Typography Control.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h5',
                ],
            ],
        ]
    );


    new \Kirki\Field\Typography(
        [
            'settings'    => 'sifa_typo_h6',
            'label'       => esc_html__( 'Typography Heading 6 Font', 'sifa' ),
            'description' => esc_html__( 'H6 Typography Control.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => 'h6',
                ],
            ],
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'full_site_typography_settings',
            'label'       => esc_html__( 'Typography Control', 'sifa' ),
            'description' => esc_html__( 'The full set of options.', 'sifa' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => '.tpbreadcrumb-title',
                ],
            ],
        ]
    );
}
full_site_typography();

// header_logo_section
function footer_layout_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'footer_layout_section',
        [
            'title'       => esc_html__( 'Footer', 'sifa' ),
            'description' => esc_html__( 'Footer Settings.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 190,
        ]
    );
    // footer_widget_number section 
    new \Kirki\Field\Select(
        [
            'settings'    => 'footer_widget_number',
            'label'       => esc_html__( 'Footer Widget Number', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => '4',
            'placeholder' => esc_html__( 'Choose an option', 'sifa' ),
            'choices'     => [
                '1' => esc_html__( '1', 'sifa' ),
                '2' => esc_html__( '2', 'sifa' ),
                '3' => esc_html__( '3', 'sifa' ),
                '4' => esc_html__( '4', 'sifa' ),
            ],
        ]
    );

    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'footer_layout',
            'label'       => esc_html__( 'Footer Layout Control', 'sifa' ),
            'section'     => 'footer_layout_section',
            'priority'    => 10,
            'choices'     => [
                'footer_1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
                'footer_2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
                'footer_3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
            ],
            'default'     => 'footer_1',
        ]
    );

    // footer_layout_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_bg_image',
            'label'       => esc_html__( 'Footer BG Image', 'sifa' ),
            'description' => esc_html__( 'Footer Image add/remove', 'sifa' ),
            'section'     => 'footer_layout_section',
        ]
    );

    // footer_layout_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_logo_image',
            'label'       => esc_html__( 'Footer Logo Image', 'sifa' ),
            'description' => esc_html__( 'Footer Logo add/remove', 'sifa' ),
            'section'     => 'footer_layout_section',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'footer_bg_color',
            'label'       => __( 'Footer BG Color', 'sifa' ),
            'description' => esc_html__( 'You can change footer bg color from here.', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_layout_2_switch',
            'label'       => esc_html__( 'Footer Style 2 Switch', 'sifa' ),
            'description' => esc_html__( 'Footer Style 2 On/Off', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    );      

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_layout_3_switch',
            'label'       => esc_html__( 'Footer Style 3 Switch', 'sifa' ),
            'description' => esc_html__( 'Footer Style 3 On/Off', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'sifa' ),
                'off' => esc_html__( 'Disable', 'sifa' ),
            ],
        ]
    );      

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_copyright_switch',
            'label'       => esc_html__( 'Footer Copyright On/Off', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => true,
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label'    => esc_html__( 'Footer Copyright', 'sifa' ),
            'section'  => 'footer_layout_section',
            'default'  => esc_html__( 'Copyright &copy; 2023 Theme_Pure. All Rights Reserved', 'sifa' ),
            'priority' => 10,
        ]
    );  


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_social_switch',
            'label'       => esc_html__( 'Footer Social On / Off', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => false,
            'priority' => 10,
        ]
    ); 


  new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_bottom_copyright_area_switch',
            'label'       => esc_html__( 'Footer Bottom  Copyright Area On/Off', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => true,
            'priority' => 10,
        ]
    ); 
    new \Kirki\Field\textarea(
        [
            'settings'    => 'footer_bottom_menu',
            'label'       => esc_html__( 'Footer Bottom Menu', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => esc_html__( 'Footer Bottom menu', 'sifa' ),
            'priority' => 10,
        ]
    ); 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_cta_switch',
            'label'       => esc_html__( 'Footer Cta On / Off', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => false,
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\text(
        [
            'settings'    => 'footer_top_cta_title',
            'label'       => esc_html__( 'Footer Top Cta Title', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => esc_html__( 'Footer Top Cta Title', 'sifa' ),
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\textarea(
        [
            'settings'    => 'footer_top_cta',
            'label'       => esc_html__( 'Footer Top Cta', 'sifa' ),
            'section'     => 'footer_layout_section',
            'default'     => esc_html__( 'Footer Top Cta', 'sifa' ),
            'priority' => 10,
        ]
    ); 


}
footer_layout_section();

// blog_section
function blog_section(){
    // blog_section section 
    new \Kirki\Section(
        'blog_section',
        [
            'title'       => esc_html__( 'Blog Section', 'sifa' ),
            'description' => esc_html__( 'Blog Section Settings.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'sifa_blog_btn_switch',
            'label'       => esc_html__( 'Blog BTN On/Off', 'sifa' ),
            'section'     => 'blog_section',
            'default'     => true,
            'priority' => 10,
        ]
    ); 

    // blog_section BTN 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'sifa_blog_cat',
            'label'    => esc_html__( 'Blog Category Meta On/Off', 'sifa' ),
            'section'  => 'blog_section',
            'default'  => false,
            'priority' => 10,
        ]
    );

    // blog_section Author Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'sifa_blog_author',
            'label'    => esc_html__( 'Blog Author Meta On/Off', 'sifa' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );
    // blog_section Date Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'sifa_blog_date',
            'label'    => esc_html__( 'Blog Date Meta On/Off', 'sifa' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );

    // blog_section Comments Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'sifa_blog_comments',
            'label'    => esc_html__( 'Blog Comments Meta On/Off', 'sifa' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );


    // blog_section Blog BTN text 
    new \Kirki\Field\Text(
        [
            'settings' => 'sifa_blog_btn',
            'label'    => esc_html__( 'Blog Button Text', 'sifa' ),
            'section'  => 'blog_section',
            'default'  => "Read More",
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'sifa_singleblog_social',
            'label'    => esc_html__( 'Single Blog Social Share', 'sifa' ),
            'section'  => 'blog_section',
            'default'  => false,
            'priority' => 10,
        ]
    );

}
blog_section();


// 404 section
function error_404_section(){
    // 404_section section 
    new \Kirki\Section(
        'error_404_section',
        [
            'title'       => esc_html__( '404 Page', 'sifa' ),
            'description' => esc_html__( '404 Page Settings.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );


    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'sifa_error_title',
            'label'    => esc_html__( 'Not Found Title', 'sifa' ),
            'section'  => 'error_404_section',
            'default'  => "Sorry We Can't Find That Page! ",
            'priority' => 10,
        ]
    );

    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'sifa_error_404',
            'label'    => esc_html__( 'Not Found 404', 'sifa' ),
            'section'  => 'error_404_section',
            'default'  => "404",
            'priority' => 10,
        ]
    );
    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'sifa_error_text',
            'label'    => esc_html__( 'Not Found 404', 'sifa' ),
            'section'  => 'error_404_section',
            'default'  => "Oops! The page you are looking for does not exist. It might have been moved or deleted.",
            'priority' => 10,
        ]
    );




    // 404_section description
    new \Kirki\Field\Text(
        [
            'settings' => 'sifa_error_link_text',
            'label'    => esc_html__( 'Error Link Text', 'sifa' ),
            'section'  => 'error_404_section',
            'default'  => "Back To Home",
            'priority' => 10,
        ]
    );


}
error_404_section();

// theme color section
function theme_color_section(){
    new \Kirki\Section(
        'theme_color_section',
        [
            'title'       => esc_html__( 'Theme Color', 'sifa' ),
            'description' => esc_html__( 'Sifa theme color Settings.', 'sifa' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'sifa_color_1',
            'label'       => __( 'Theme Color 1', 'sifa' ),
            'description' => esc_html__( 'this is theme color 1 control.', 'sifa' ),
            'section'     => 'theme_color_section',
            'default'     => '#00A3C3',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'sifa_color_2',
            'label'       => __( 'Theme Color 2', 'sifa' ),
            'description' => esc_html__( 'this is theme color 2 control.', 'sifa' ),
            'section'     => 'theme_color_section',
            'default'     => '#16243E',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'sifa_gra_color_1',
            'label'       => __( 'Gradient Color 1', 'sifa' ),
            'description' => esc_html__( 'this is theme gradient 1 color control.', 'sifa' ),
            'section'     => 'theme_color_section',
            'default'     => '#004D6E',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'sifa_gra_color_2',
            'label'       => __( 'Gradient Color 2', 'sifa' ),
            'description' => esc_html__( 'this is theme gradient 2 color control.', 'sifa' ),
            'section'     => 'theme_color_section',
            'default'     => '#00ACCC',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'sifa_body',
            'label'       => __( 'Body Text Color', 'sifa' ),
            'description' => esc_html__( 'this is theme body text color control.', 'sifa' ),
            'section'     => 'theme_color_section',
            'default'     => '#333F4D',
        ]
    );
}
theme_color_section();