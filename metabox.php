<?php

// Calls the class on the post edit screen.
function call_someClass() {
    new someClass();
}
 
if ( is_admin() ) {
    add_action( 'load-post.php',     'call_someClass' );
    add_action( 'load-post-new.php', 'call_someClass' );
}
 
// The Class.
class someClass {
 
    // Hook into the appropriate actions when the class is constructed.
    public function __construct() {
        add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
        add_action( 'save_post',      array( $this, 'save'         ) );
    }
 
    // Adds the meta box container.
    public function add_meta_box( $post_type ) {

        // Get metabox_arr data
        $metabox_arr = apply_filters( 'metabox_arr', array() );

        if( is_array($metabox_arr) && count($metabox_arr) > 0 ) {
            foreach($metabox_arr as $arr) {

                // Limit meta box to certain post types.
                $post_types = array( $arr["post_type"] );
        
                if ( in_array( $post_type, $post_types ) ) {
                    add_meta_box(
                        $arr["id"],
                        __( $arr["title"], 'textdomain' ),
                        array( $this, 'render_meta_box_content' ),
                        $post_type,
                        'advanced',
                        'high'
                    );
                }

            }
        }
    }
 
    // Save the meta when the post is saved.
    // @param int $post_id The ID of the post being saved.
    public function save( $post_id ) {
 
        // We need to verify this came from the our screen and with proper authorization,
        // because save_post can be triggered at other times. 
        // Check if our nonce is set.
        if ( ! isset( $_POST['myplugin_inner_custom_box_nonce'] ) ) {
            return $post_id;
        }
 
        $nonce = $_POST['myplugin_inner_custom_box_nonce'];
 
        // Verify that the nonce is valid.
        if ( ! wp_verify_nonce( $nonce, 'myplugin_inner_custom_box' ) ) {
            return $post_id;
        }
 
        // If this is an autosave, our form has not been submitted,
        // so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }
 
        // Check the user's permissions.
        if ( 'page' == $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            }
        } else {
            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }
        }

        // Get metabox_arr data
        $metabox_arr = apply_filters( 'metabox_arr', array() );

        if( is_array($metabox_arr) && count($metabox_arr) > 0 ) {
            foreach($metabox_arr as $arr) {

                if( is_array($arr["fields"]) && count($arr["fields"]) > 0 ) {
                    foreach( $arr["fields"] as $field ) {

                        if( array_key_exists( $field["name"], $_POST ) ) {
                            
                            $field["post_id"] = $post_id;
                            $field["value"] = $_POST[$field["name"]];

                            do_action( "metabox_save", $field );

                        }

                    }
                }

            }
        }

    }
 
 
    // Render Meta Box content.
    // @param WP_Post $post The post object.
    public function render_meta_box_content( $post, $metabox ) {
 
        // Add an nonce field so we can check for it later.
        wp_nonce_field( 'myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce' );
 
        // Get metabox_arr data
        $metabox_arr = apply_filters( 'metabox_arr', array() );

        if( is_array($metabox_arr) && count($metabox_arr) > 0 ) {
            foreach($metabox_arr as $arr) {

                if($metabox["id"] == $arr["id"]) {

                    if( is_array($arr["fields"]) && count($arr["fields"]) > 0 ) {
                        foreach( $arr["fields"] as $field ) {
    
                            $field["post_id"] = $post->ID;

                            do_action( "metabox_field", $field );

                        }
                    }

                }

            }
        } ?>

    <?php }
}
