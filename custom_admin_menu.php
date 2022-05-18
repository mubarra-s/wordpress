function my_custom_menu_page() { ?><div class="wrap">

    <?php
    if( isset($_POST["submit"]) ) {
        $info = $_POST;
        unset($info["submit"]);
        foreach($info as $key => $value) {
            update_option( $key, $value );
        }
    }
    ?>
