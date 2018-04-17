<?php
/**
 * Created by PhpStorm.
 * User: Gourav
 * Date: 2/23/2018
 * Time: 3:51 PM
 */
/*
** Function to Get Theme Layout
*/
//Import Admin Modules
require get_template_directory() . '/framework/admin_modules/register_styles.php';
require get_template_directory() . '/framework/admin_modules/register_widgets.php';
require get_template_directory() . '/framework/admin_modules/theme_setup.php';
require get_template_directory() . '/framework/admin_modules/content_width.php';

function playon_get_blog_layout(){
    $ldir = 'framework/layouts/content';
    if (get_theme_mod('playon_blog_layout') ) :
        get_template_part( $ldir , get_theme_mod('playon_blog_layout') );
    else :
        get_template_part( $ldir ,'playon');
    endif;
}
add_action('playon_blog_layout', 'playon_get_blog_layout');

/*
** Function to check if Sidebar is enabled on Current Page 
*/

function playon_load_sidebar() {
    $load_sidebar = true;
    if ( get_theme_mod('playon_disable_sidebar') ) :
        $load_sidebar = false;
    elseif( get_theme_mod('playon_disable_sidebar_home') && is_home() )	:
        $load_sidebar = false;
    // Exceptional Case for Archive Pages. In Pro Version, there should be a different setting.	
    elseif( get_theme_mod('playon_disable_sidebar_home') && is_archive() )	:
        $load_sidebar = false;
    elseif( get_theme_mod('playon_disable_sidebar_front') && is_front_page() ) :
        $load_sidebar = false;
    endif;

    return  $load_sidebar;
}

/*
**	Determining Sidebar and Primary Width
*/
function playon_primary_class() {
    $sw = esc_html(get_theme_mod('playon_sidebar_width',4));
    $class = "col-md-".(12-$sw);

    if ( !playon_load_sidebar() )
        $class = "col-md-12";
    echo $class;

}
add_action('playon_primary-width', 'playon_primary_class');

function playon_secondary_class() {
    $sw = esc_html(get_theme_mod('playon_sidebar_width',4));
    $class = "col-md-".$sw;

    echo $class;
}
add_action('playon_secondary-width', 'playon_secondary_class');


/*
 * Pagination Function. Implements core paginate_links function.
 */
function playon_pagination() {
    global $wp_query;
    $big = 12345678;
    $page_format = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array'
    ) );
    if( is_array($page_format) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination"><div><ul>';
        echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
        foreach ( $page_format as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></div></div>';
    }
}

/*
** Customizer Controls
*/
if (class_exists('WP_Customize_Control')) {
    class Playon_WP_Customize_Category_Control extends WP_Customize_Control {
        /**
         * Render the control's content.
         */
        public function render_content() {
            $dropdown = wp_dropdown_categories(
                array(
                    'name'              => '_customize-dropdown-categories-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => __( '&mdash; Select &mdash;', 'playon' ),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                )
            );

            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );

            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $dropdown
            );
        }
    }
}
