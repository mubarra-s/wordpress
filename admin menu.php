<?php

// Register a custom menu page.
function gpt_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Generate Post Type', 'textdomain' ),
        __( 'Generate Post Type', 'textdomain' ),
        'manage_options',
        'generate_post_type',
        'generate_post_type_menu_page'
    ); 
}
add_action( 'admin_menu', 'gpt_register_my_custom_menu_page' );
 
// Display a custom menu page
function generate_post_type_menu_page() { ?>
    <div class="wrap">

        <h1>Generate Post Type</h1>

        <?php
        /*
        update_option("gpt_post_name", "" );
        update_option("gpt_post_single_name", "" );
        update_option("gpt_post_slug", "" );
        update_option("gpt_post_key", "" );
        */

        // Get datya from database
        $gpt_post_name = get_option("gpt_post_name");
        // var_dump($gpt_post_name); echo "<br/><hr/><br/>";
        $gpt_post_single_name = get_option("gpt_post_single_name");
        // var_dump($gpt_post_single_name); echo "<br/><hr/><br/>";
        $gpt_post_slug = get_option("gpt_post_slug");
        // var_dump($gpt_post_slug); echo "<br/><hr/><br/>";
        $gpt_post_key = get_option("gpt_post_key");
        // var_dump($gpt_post_key); echo "<br/><hr/><br/>";

        ?>


        <table class="wp-list-table widefat fixed striped table-view-list posts">
            <thead>
                <tr>
                    <th>Post Title</th>
                    <th>Post Single Title</th>
                    <th>Post Slug</th>
                    <th>Post Key</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(is_array($gpt_post_name) && count($gpt_post_name) > 0) {
                    for( $x=0; $x<count($gpt_post_name); $x++ ) {
                ?>
                <tr>
                    <td><?php echo $gpt_post_name[$x]; ?></td>
                    <td><?php echo $gpt_post_single_name[$x]; ?></td>
                    <td><?php echo $gpt_post_slug[$x]; ?></td>
                    <td><?php echo $gpt_post_key[$x]; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" value="<?php echo $x; ?>" name="gpt_id" />
                            <input type="submit" name="gpt_delete" value="Delete" />
                        </form>
                    </td>
                </tr>
                <?php
                    }
                } ?>
            </tbody>
        </table>

        <form action="" method="post">

            <table class="form-table" role="presentation">
                <tbody>
                    <tr>
                        <th scope="row"><label for="post_name">Post Title</label></th>
                        <td><input name="post_name" type="text" id="post_name" value="" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="post_single_name">Post Single Title</label></th>
                        <td><input name="post_single_name" type="text" id="post_single_name" value="" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="post_slug">Post Slug</label></th>
                        <td><input name="post_slug" type="text" id="post_slug" value="" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="post_key">Post Key</label></th>
                        <td><input name="post_key" type="text" id="post_key" value="" class="regular-text" /></td>
                    </tr>
                </tbody>
            </table>

            <p class="submit"><input type="submit" name="gpt_submit" id="gpt_submit" class="button button-primary" value="Save Changes"></p>

        </form>

    </div>
<?php }

function generate_post_type_menu_page_init() {
    if( isset($_POSt["gpt_delete"]) ) {

    }
    if( isset($_POST["gpt_submit"]) ) {

        // Get datya from database
        $gpt_post_name = get_option("gpt_post_name");
        $gpt_post_single_name = get_option("gpt_post_single_name");
        $gpt_post_slug = get_option("gpt_post_slug");
        $gpt_post_key = get_option("gpt_post_key");

        // Checking Database Data is array or not array
        $gpt_post_name = (is_array($gpt_post_name) && count($gpt_post_name) > 0) ? $gpt_post_name : array(); 
        $gpt_post_single_name = (is_array($gpt_post_single_name) && count($gpt_post_single_name) > 0) ? $gpt_post_single_name : array(); 
        $gpt_post_slug = (is_array($gpt_post_slug) && count($gpt_post_slug) > 0) ? $gpt_post_slug : array(); 
        $gpt_post_key = (is_array($gpt_post_key) && count($gpt_post_key) > 0) ? $gpt_post_key : array(); 

        // Store in array
        $gpt_post_name[] = $_POST["post_name"];
        $gpt_post_single_name[] = $_POST["post_single_name"];
        $gpt_post_slug[] = $_POST["post_slug"];
        $gpt_post_key[] = $_POST["post_key"];

        // Store data in Database
        update_option("gpt_post_name", $gpt_post_name );
        update_option("gpt_post_single_name", $gpt_post_single_name );
        update_option("gpt_post_slug", $gpt_post_slug );
        update_option("gpt_post_key", $gpt_post_key );
    }
} add_Action("init", "generate_post_type_menu_page_init");
