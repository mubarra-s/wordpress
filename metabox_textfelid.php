<?php

function metabox_textfield_func( $field ) {
    if( $field["type"] == "text" ) { ?>

        <?php $value = get_post_meta( $field["post_id"], $field["name"], true ); ?>

        <div>
            <label for="<?php echo $field["id"]; ?>"><?php _e( $field["title"], 'metabox' ); ?></label>
            <input type="text" id="<?php echo $field["id"]; ?>" name="<?php echo $field["name"]; ?>" value="<?php echo $value; ?>" />
        </div>

    <?php }
} add_action( "metabox_field", "metabox_textfield_func" );

function metabox_textfield_save_func( $field ) {
    if( $field["type"] == "text" ) {

        update_post_meta( $field["post_id"], $field["name"], $field["value"] );

    }
} add_action( "metabox_save", "metabox_textfield_save_func" );
