<?php
//social-icons
function inkshades_customize_register_social( $wp_customize ){
   $wp_customize -> add_section('inkshades_social_section', array(
        'title' => __('Social Icons','inkshades'),
        'priority' => 2,
        'panel' => 'inkshades_header_panel'
    ));

    $social_networks = array(
        'none' => __('-' ,'inkshades'),
        'facebook' => __('Facebook' ,'inkshades'),
        'twitter' => __('Twitter' ,'inkshades'),
        'google-plus' => __('Google Plus' ,'inkshades'),
        'instagram' => __('instagram' ,'inkshades'),
        'rss' => __('RSS Feeds' ,'inkshades'),
        'vine' => __('Vine' ,'inkshades'),
        'vimeo-square' => __('Vimeo' ,'inkshades'),
        'youtube' => __('Youtube' ,'inkshades'),
        'flickr' => __('Flickr' ,'inkshades'),
        'pinterest' => __('Pinterest' ,'inkshades'),
    );
    $social_count = count($social_networks);

    for( $x=1; $x <= ($social_count - 4); $x++):

        $wp_customize -> add_setting('inkshades_social_'.$x, array(
            'default' => 'none',
            'sanitize_callback' => 'inkshades_sanitize_social',
        ));
        $wp_customize -> add_control('inkshades_social_'.$x, array(
            'settings' => 'inkshades_social_'.$x,
            'section' => 'inkshades_social_section',
            'label'     => __('Icon ', 'inkshades').$x,
            'type'      => 'select',
            'choices'    => $social_networks,
        ));

        $wp_customize -> add_setting('inkshades_social_url'.$x, array(
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize -> add_control('inkshades_social_url'.$x, array(
            'settings' => 'inkshades_social_url'.$x,
            'section' => 'inkshades_social_section',
            'description' => __('Icon ' , 'inkshades').$x.__(' Url', 'inkshades'),
            'type'  =>  'url',
            'choices' => $social_networks,
        ));
    endfor;

    //sanitization function
    function inkshades_sanitize_social($input){
        $social_networks = array(
            'none' ,
            'facebook',
            'twitter',
            'google-plus',
            'instagram',
            'rss',
            'vine',
            'vimeo-square',
            'youtube',
            'flickr',
            'pinterest');

        if(in_array($input,$social_networks)):
            return $input;
        else:
            return '';
        endif;
    }
}
add_action('customize_register','inkshades_customize_register_social');