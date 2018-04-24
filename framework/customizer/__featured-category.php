<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 4/18/2018
 * Time: 4:15 PM
 */

function playon_customize_register_featured_fcategory( $wp_customize )
{

    /**
     * Class to create a custom multiselect dropdown control
     */
    class Playon_Dropdown_Custom_control extends WP_Customize_Control
    {
        /**
         * Render the content on the theme customizer page
         */
        public $type = 'multiple-select';

        public function render_content() {

            if ( empty( $this->choices ) )
                return;
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select name="category" <?php $this->link(); ?> multiple="multiple" size="25">
                    <?php
                    foreach ( $this->choices as $value => $label ) {
                        $selected = ( in_array( $value, $this->value() ) ) ? selected( 1, 1, false ) : '';
                        echo '<option value="' . esc_attr( $value ) . '"' . $selected . '>' . $label . '</option>';
                    }
                    ?>
                </select>
            </label>
            <?php
        }
    }


    //==============================================================//

    $wp_customize->add_section(
        'playon_fcat_sec',
        array(
            'title'     => __('Featured Category','playon'),
            'priority'  => 80,
        )
    );
    $wp_customize->add_setting(
        'playon_cat_title',
        array( 'sanitize_callback' => 'sanitize_text_field' )
    );

    $wp_customize->add_control(
        'playon_cat_title', array(
            'settings' => 'playon_cat_title',
            'label'    => __( 'Title for the Featured Category Area','playon' ),
            'section'  => 'playon_fcat_sec',
            'type'     => 'text',
        )
    );

    function playon_cats() {
        $cats = array();
        $cats[0] = "All";
        foreach ( get_categories() as $categories => $category ) {
            $cats[$category->term_id] = $category->name;
        }
        return $cats;
    }
    /**
     * Validate the options against the existing categories
     * @param  string[] $input
     * @return string
     */
    function playon_sanitize_cat( $input )
    {
        $valid = playon_cats();

        foreach ($input as $value) {
            if ( !array_key_exists( $value, $valid ) ) {
                return [];
            }
        }

        return $input;
    }

    $wp_customize->add_setting( 'playon_featured_cat', array(
        'default' => 0,
        'transport'   => 'refresh',
        'sanitize_callback' => 'playon_sanitize_cat'
    ));


    $wp_customize->add_control(
        new Playon_Dropdown_Custom_control (
            $wp_customize,
            'playon_featured_cat',
            array(
                'settings' => 'playon_featured_cat',
                'label'    => 'Featured category',
                'section'  => 'playon_fcat_sec', // Enter the name of your own section
                'type'     => 'multiple-select', // The $type in our class
                'choices' => playon_cats()
            )
        )
    );




}
add_action( 'customize_register', 'playon_customize_register_featured_fcategory' );