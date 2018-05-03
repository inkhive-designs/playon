<?php
//social-icons
function playon_customize_register_social( $wp_customize ){
   $wp_customize -> add_section('playon_social_section', array(
        'title' => __('Social Icons','playon'),
        'priority' => 2,
        'panel' => 'playon_header_panel'
    ));

    $social_networks = array(
        'none' => __('-' ,'playon'),
        'facebook-f' => __('Facebook' ,'playon'),
        'twitter' => __('Twitter' ,'playon'),
        'google-plus-g' => __('Google Plus' ,'playon'),
        'instagram' => __('instagram' ,'playon'),
        'vine' => __('Vine' ,'playon'),
        'vimeo-v' => __('Vimeo' ,'playon'),
        'youtube' => __('Youtube' ,'playon'),
        'flickr' => __('Flickr' ,'playon'),
        'pinterest-p' => __('Pinterest' ,'playon'),
    );
    $social_count = count($social_networks);

    for( $x=1; $x <= ($social_count - 4); $x++):

        $wp_customize -> add_setting('playon_social_'.$x, array(
            'default' => 'none',
            'sanitize_callback' => 'playon_sanitize_social',
        ));
        $wp_customize -> add_control('playon_social_'.$x, array(
            'settings' => 'playon_social_'.$x,
            'section' => 'playon_social_section',
            'label'     => __('Icon ', 'playon').$x,
            'type'      => 'select',
            'choices'    => $social_networks,
        ));

        $wp_customize -> add_setting('playon_social_url'.$x, array(
            'sanitize_callback' => 'esc_url_raw'
        ));

        $wp_customize -> add_control('playon_social_url'.$x, array(
            'settings' => 'playon_social_url'.$x,
            'section' => 'playon_social_section',
            'description' => __('Icon ' , 'playon').$x.__(' Url', 'playon'),
            'type'  =>  'url',
            'choices' => $social_networks,
        ));
    endfor;

    //sanitization function
    function playon_sanitize_social($input){
        $social_networks = array(
            'none' ,
            'facebook-f',
            'twitter',
            'google-plus-g',
            'instagram',
            'vine',
            'vimeo-v',
            'youtube',
            'flickr',
            'pinterest-p');

        if(in_array($input,$social_networks)):
            return $input;
        else:
            return '';
        endif;
    }
}
add_action('customize_register','playon_customize_register_social');