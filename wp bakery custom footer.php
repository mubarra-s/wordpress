<?php #if(function_exists("VM_FOOTER")) { echo VM_FOOTER(); } if(function_exists("VM_WP_FOOTER")) { VM_WP_FOOTER(); } ?>

<?php #Footer Start ::::::::::::::::::::::::::::::::::::::::: ?>

<?php do_action("wp_footer_before"); ?>

<?php /*

<footer id="main__footer" class="main__footer">
  <div class="main__footer--wrap">
    <div class="main__footer--inner">

      <div class="main__footer--upper">
        <div class="main__footer--logo">
          <?php do_action("footer_logo"); ?>
        </div>
        <div class="main__footer--textarea">
          <?php dynamic_sidebar("footer_widget_1"); ?>
        </div>
      </div>

      <div class="main__footer--bottom">
        <div class="copyright">
          <?php if(!empty( get_theme_mod("footer_copyright") )) { echo '<div class="main__footer--copyright">'.get_theme_mod("footer_copyright").'</div>'; } ?>
        </div>
        <?php // Social Media
        echo '<div class="main__footer--social_media">';
          echo '<span class="main__footer--social_media_title">' . __("Follow us", "theappchefs") . '</span>';
          do_action("vm_social_media");
        echo '</div>';
        // Social Media ?>
      </div>

    </div>
  </div>
</footer>

*/ ?>

<style type="text/css">
  .gsh_popup,
  .signin_popup,
  .signup_popup { position: fixed; top: 0; left: 0; width: 100%; height: 100%; display: flex; z-index: 99999; }
  .gsh_popup.close,
  .signin_popup.close,
  .signup_popup.close { z-index: -99999; visibility: hidden; opacity: 0; }
  .gsh_popup--sheet,
  .signin_popup--sheet,
  .signup_popup--sheet { position: absolute; top: 0; left: 0; width: 100%; height: 100%; cursor: pointer; filter: blur(8px); backdrop-filter: blur(8px); background-color: rgba(0, 0, 0, 0.25); }
  .gsh_popup.close .gsh_popup--sheet,
  .signin_popup.close .signin_popup--sheet,
  .signup_popup.close .signup_popup--sheet { display: none; }
  .gsh_popup--close,
  .signin_popup--close,
  .signup_popup--close { width: 24px; height: 24px; position: absolute; top: 32px; right: 32px; cursor: pointer; }
  .gsh_popup--inner,
  .signin_popup--inner,
  .signup_popup--inner { margin: auto; position: relative; z-index: 1; }
  .gsh_popup--close:before,
  .gsh_popup--close:after,
  .signin_popup--close:before,
  .signin_popup--close:after,
  .signup_popup--close:before,
  .signup_popup--close:after {content: "";display: block;width: 18px;height: 2px;position: absolute;top: 50%;left: 50%;background: #02004b; -webkit-transform: translate(-50%) rotate(45deg); -moz-transform: translate(-50%) rotate(45deg); -ms-transform: translate(-50%) rotate(45deg); -o-transform: translate(-50%) rotate(45deg); transform: translate(-50%) rotate(45deg); }
  .gsh_popup--close:after,
  .signin_popup--close:after,
  .signup_popup--close:after { -webkit-transform: translate(-50%) rotate(-45deg); -moz-transform: translate(-50%) rotate(-45deg); -ms-transform: translate(-50%) rotate(-45deg); -o-transform: translate(-50%) rotate(-45deg); transform: translate(-50%) rotate(-45deg); }

  .gsh_loader { display: flex; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 9999; background: #FFFFFF; }
  .gsh_loader.close { display: none; }
  .gsh_loader img { max-width: 430px; margin: auto; }
</style>

<div id="gsh_popup" class="gsh_popup close vm-animate">
  <div class="gsh_popup--inner">
    <div class="gsh_popup--wrap">
      <div class="gsh_popup--content">
        <div class="gsh_popup--close close-signin-popup" onclick="close_gsh_popup();"></div>
        <div id="gsh_popup_content"></div>
      </div>
    </div>
  </div>
  <div class="gsh_popup--sheet close-signin-popup" onclick="close_gsh_popup();"></div>
</div>

<div id="signin_popup" class="signin_popup close vm-animate">
  <div class="signin_popup--inner">
    <div class="signin_popup--wrap">
      <div class="signin_popup--content">
        <div class="signin_popup--close close-signin-popup"></div>
        <?php echo do_shortcode("[SIGNIN]"); ?>
      </div>
    </div>
  </div>
  <div class="signin_popup--sheet close-signin-popup"></div>
</div>

<div id="signup_popup" class="signup_popup close vm-animate">
  <div class="signup_popup--inner">
    <div class="signup_popup--wrap">
      <div class="signup_popup--content">
        <div class="signup_popup--close close-signup-popup"></div>
        <?php echo do_shortcode("[SIGNUP]"); ?>
      </div>
    </div>
  </div>
  <div class="signup_popup--sheet close-signup-popup"></div>
</div>

<div id="gsh_loader" class="gsh_loader close vm-animate">
  <img src="<?php echo get_stylesheet_directory_uri()."/img/loader1.gif"; ?>" alt="<?php echo __("Loader", "gsh"); ?>" />
</div>

<script type="text/javascript">
  function open_gsh_loader() { jQuery("#gsh_loader").removeClass("close"); }
  function close_gsh_loader() { jQuery("#gsh_loader").addClass("close"); }

  function open_gsh_popup() { jQuery("#gsh_popup").removeClass("close"); }
  function close_gsh_popup() { jQuery("#gsh_popup").addClass("close"); }

  function open_signin_popup() { jQuery("#signin_popup").removeClass("close"); }
  function close_signin_popup() { jQuery("#signin_popup").addClass("close"); }

  function open_signup_popup() { jQuery(".signup_popup").removeClass("close"); }
  function close_signup_popup() { jQuery(".signup_popup").addClass("close"); }

  jQuery(document).ready(function() {
    jQuery(".open-signin-popup").click(function() { open_signin_popup(); });
    jQuery(".close-signin-popup").click(function() { close_signin_popup(); });

    jQuery(".open-signup-popup").click(function() { open_signup_popup(); });
    jQuery(".close-signup-popup").click(function() { close_signup_popup(); });

    <?php if( !empty($_GET["signup"]) && $_GET["signup"] == 2 ) { // Signup Section 2 Active ?>
      jQuery(".SIGNUP--form-section-1").fadeOut();
      jQuery(".SIGNUP--form-section-2").fadeIn();
      open_signup_popup();
    <?php } // Signup Section 2 Active ?>
  });
</script>

<?php wp_footer(); #WP FOOTER ?>

<?php do_action("wp_footer_after"); ?>

<?php #Footer End ::::::::::::::::::::::::::::::::::::::::: ?>

</body></html>
