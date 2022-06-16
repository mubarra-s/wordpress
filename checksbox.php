<?php

function metabox_checkbox_func( $field ) {
    if( $field["type"] == "checkbox" ) { ?>

        <?php $value = get_post_meta( $field["post_id"], $field["name"], true ); ?>

        <div>
            <input type="checkbox" id="<?php echo $field["id"]; ?>" name="<?php echo $field["name"]; ?>" value="1" <?php if($value == 1) { ?>checked="checked"<?php } ?> />
            <label for="<?php echo $field["id"]; ?>"><?php _e( $field["title"], 'metabox' ); ?></label>
        </div>

    <?php }
} add_action( "metabox_field", "metabox_checkbox_func" );

function metabox_checkbox_save_func( $field ) {
    var_dump($field["value"]);
    exit;
    
    if( $field["type"] == "checkbox" ) {

        if( isset($_POST[$field["name"]]) ) {
            update_post_meta( $field["post_id"], $field["name"], 1 );
        } else {
            update_post_meta( $field["post_id"], $field["name"], 0 );
        }

    }
} add_action( "metabox_save", "metabox_checkbox_save_func" );

?>
