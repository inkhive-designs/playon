<?php
/**
 * Adds a meta box to the post editing screen
 */
function playon_custom_meta() {
    add_meta_box( 'playon_meta', __( 'Display Options', 'playon' ), 'playon_meta_callback', 'post','side','high' );
}
add_action( 'add_meta_boxes', 'playon_custom_meta' );

/**
 * Outputs the content of the meta box
 */

function playon_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'playon_nonce' );
    $playon_stored_meta = get_post_meta( $post->ID );
    ?>

    <p>
    <div class="playon-row-content">
        <label for="enable-video">
            <?php _e( 'Enter Video Link', 'playon' )?>
            <input type="text" name="enable-video" id="enable-video" value="<?php echo  get_post_meta( get_the_ID(),'enable-video', true )?>"/>
        </label>
    </div>
    </p>

    <?php
}


function playon_meta_save($post_id){

    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );

    $is_valid_nonce = ( isset( $_POST[ 'playon_nonce' ] ) && wp_verify_nonce( $_POST[ 'playon_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
       if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
    if ( isset( $_POST['enable-video'] ) )
        update_post_meta( $post_id, 'enable-video', $_POST['enable-video']  );
}
//add_action( 'save_post', 'aproduct_images_save' );
add_action( 'save_post', 'playon_meta_save' );