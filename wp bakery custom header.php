<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <?php do_action("wp_head_before"); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <?php do_action("wp_head_after"); ?>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

    <?php // Details -- Fonts - Background color - Colors
      // Fonts
      // font-family: 'Roboto', sans-serif;

      // Background color
      // #ffffff

      // Colors
      // #ffffff
      // #312f44
      // #4c74c9
      // #ebebeb
      // #17bd60
      // #02004b
      // #f5f5f5
      // rgba(0, 0, 0, 0.8)
      // #f0f0f0
      // rgba(0, 0, 0, 0.25)
      // #000000
    // Details -- Fonts - Background color - Colors ?>

		<style type="text/css">
			/* HEADER */

      /* .main__header { margin: auto; position: absolute; width: 100%; top: 0; left: 0; z-index: 99; background: #FFF; } */
      .main__header { background: #FFF; }
      .main__header--logo-title { padding: 0; }
      .main__header--logo-title a,
      .main__header--logo-title img { display: block; }

			.main__header--menu{}
			.main__header--menu ul{padding:0;margin:auto;list-style:none;}
			.main__header--menu ul li{display:inline-block}
      .main__header--menu ul li a,
      .main__header--menu ul li a:hover,
      .main__header--menu ul li.current-menu-item a { font-family: 'Nunito', sans-serif; font-size: 16px; font-weight: 500; font-stretch: normal; font-style: normal; line-height: normal; letter-spacing: 1px; text-align: center; color: #e96825; text-transform: uppercase; text-decoration: none; }
			.main__header--menu ul li a:hover,
			.main__header--menu ul li.current-menu-item a { color: #e96825; font-weight: 900; }
			.main__header--menu ul li ul{z-index:99}

			.main__header--menu-mobile{margin:auto 0 auto auto;display:none}
			.main__header--menu-mobile-icon{width:30px;height:24px;display:block;position:relative;border-top:2px solid #999;overflow:hidden;cursor:pointer;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}
			.main__header--menu-mobile-icon:after,
			.main__header--menu-mobile-icon:before{content:"";display:block;width:100%;height:2px;background:#999;position:absolute;top:50%;left:0;-webkit-transform:translateY(-100%);transform:translateY(-100%);-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}
			.main__header--menu-mobile-icon:after{width:50%;top:100%}
			.main__header--menu-mobile-icon:hover{border-top-color:#333}
			.main__header--menu-mobile-icon:hover:after,
			.main__header--menu-mobile-icon:hover:before{background:#333;width:100%}

			.mobile_nav{z-index:9999999999}
			.mobile_nav--content ul{margin:auto;padding:0;list-style:none}
			.mobile_nav--content li{margin:0 auto;text-align:center}
			.mobile_nav--content li.menu-item-has-children>a{position:relative}
			.mobile_nav--content li.menu-item-has-children>a:after{content:"";width:0;height:0;border:5px solid transparent;border-top:5px solid #ccc;position:absolute;top:50%;-webkit-transform:translateY(-50%) translateX(10px);-moz-transform:translateY(-50%) translateX(10px);transform:translateY(-50%) translateX(10px);}
			.mobile_nav--content ul ul{display:none}

      .main__header--grid { display: grid; grid-template-columns: 1fr; grid-gap: 15px; align-items: center; width: 100%; }
      .main__header--grid.fr2 { grid-template-columns: 1fr 1fr; }
      .main__header--grid.custom { grid-template-columns: 2fr 1fr; }
      .main__header--item { color: #FFF; font-size: 14px; }

      /* FOOTER */
      .main__footer--upper { padding: 33px 0 41px; }
      .main__footer--logo { max-width: 180px; margin: 0 auto 32px; }
      .main__footer--textarea p { font-size: 20px; font-weight: normal; font-stretch: normal; font-style: normal; line-height: 1.6; letter-spacing: normal; text-align: center; color: #6b6b6b; max-width: 565px; margin: auto; }
      .main__footer--textarea .widget { border: 0; margin: 0 auto 30px; padding: 0; }
      .main__footer--textarea ul { margin: auto; padding: 0; list-style: none; text-align: center; }
      .main__footer--textarea ul li { display: inline-block; margin: 0 24px; }
      .main__footer--textarea ul li a:hover, .main__footer--textarea ul li a { font-size: 18px; font-weight: 300; font-stretch: normal; font-style: normal; line-height: 1.33; letter-spacing: normal; text-align: center; color: #8b8b8b; }
      .main__footer--textarea ul li a:hover { font-size: 18px; font-weight: bold; font-stretch: normal; font-style: normal; line-height: 1.33; letter-spacing: normal; text-align: center; color: #784ced; }
      .main__footer--textarea .widget:last-child { margin-bottom: auto; }
      .main__footer--bottom { padding: 32px 0 41px; border-top: 1px solid #dfdfdf; display: grid; grid-template-columns: 1fr 1fr; grid-gap: 30px; }
      .main__footer--copyright { font-size: 14px; font-weight: 600; font-stretch: normal; font-style: normal; line-height: 1.29; letter-spacing: normal; color: #adadad; }
      .main__footer--social_media { text-align: right; }
      .main__footer--social_media .vm-social-media { display: inline-block; }
      .main__footer--social_media_title { font-family: 'Poppins', sans-serif; font-size: 14px; font-weight: normal; font-stretch: normal; font-style: normal; line-height: 1.29; letter-spacing: normal; color: #312f44; display: inline-block; margin-right: 35px; }
      .vm-social-media li { margin-right: 40px; }
      .vm-social-media li.sm_facebook a:hover,
      .vm-social-media li.sm_facebook a,
      .vm-social-media li a:hover,
      .vm-social-media li a { width: auto; height: auto; background: transparent; color: #adadad; line-height: 1; }
      .vm-social-media li.sm_facebook a:hover,
      .vm-social-media li a:hover { color: #312f44; }

			/* CUSTOM */
			::marker{ color:#000000; }

			/* MOBILE NAV */
			.mobile-nav{display:none}
			.mobile-nav--inner{padding:30px 10px 18px}
			.mobile_nav--close{cursor:pointer}
			.mobile_nav--close-icon{width:17px;height:24px}
			.mobile_nav--close-icon:after,
			.mobile_nav--close-icon:before{height:4px}
			.mobile-nav .main__header--menu-myaccount,
			.mobile-nav .main__header--menu-myaccount:hover{display:block;margin:0 auto 22px}
			.mobile-nav ul{margin:auto;padding:0;list-style:none;text-align:center}
			.mobile-nav ul li a,
			.mobile-nav ul li a:hover{font-family:Roboto,sans-serif;font-size:16px;font-weight:700;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:normal;text-align:center;color:#000;padding:14px 14px 16px;display:block;position:relative}
			.mobile-nav ul li{border-bottom:2px solid #ebebeb;display:block;line-height:1}
			.mobile-nav ul li:first-child{border-top:2px solid #ebebeb}
			.mobile-nav ul li ul li:last-child{border-bottom:0}
			.mobile-nav ul li ul{display:none}
			.mobile-nav ul li.menu-item-has-children > a:after{content:"";display:inline-block;width:0;height:0;border:4px solid transparent;border-top:5px solid #000;margin-left:12px;position:absolute;top:50%;transform:translateY(-50%)}

      .home_banner h1 { font-size: 60px; font-weight: bold; font-stretch: normal; font-style: normal; line-height: 1.33; letter-spacing: -1.67px; color: #ffffff; max-width: 460px; margin: 0 0 24px; }
      .home_banner p { font-size: 20px; font-weight: 600; font-stretch: normal; font-style: normal; line-height: 1.4; letter-spacing: -0.05px; color: #ffffff; max-width: 460px; margin: 0 0 60px; }

			@media only screen and (max-width: 1000px) {
				.main__header--menu{display:none}
				.main__header--menu-mobile{display:block}
        .main__header--grid.custom { grid-template-columns: 1fr 10fr; }
			}
            @media only screen and (max-width: 1240px) {
            .main__header--grid.fr2 { grid-template-columns: 3fr 2fr !important;}
			}
			@media only screen and (max-width: 900px) {
				.main__footer--grid{grid-template-columns:1fr}
				.main__footer--item h4,
				.main__footer--item ul{text-align:center}
			}

			@media only screen and (max-width: 768px) {
				.md-vm-flex{display:flex}
				.md-vm-flex-column-reverse{flex-direction:column-reverse}
			}
		</style>

		<script>jQuery(document).ready(function(e) {
			jQuery(".mobile-nav--content li.menu-item-has-children > a").click(function(e){
				e.preventDefault();
				jQuery(this).next().slideToggle();
			});
			jQuery(".main__header--menu-mobile, .mobile_nav--close").click(function(){
				jQuery(".mobile-nav").slideToggle();
			});
		});</script>

  </head>
  <body <?php body_class("relative"); ?>>

		<?php #Header Start ::::::::::::::::::::::::::::::::::::::::: ?>

		<?php do_action("mobile_nav"); ?>

    <?php /*
    <header id="main__header" class="main__header">
      <div class="main__header--inner">
        <div class="main__header--wrap vm-wrap">
          <div class="main__header--logo">
            <h1 class="main__header--logo-title">
              <a class="main__header--logo-link" href="<?php echo site_url("/"); ?>"><?php do_action("logo"); // header main logo ?></a>
            </h1>
          </div>
          <nav class="main__header--menu">
            <?php do_action("main_menu"); // Call the main menu ?>
          </nav>
          <nav class="main__header--menu-mobile">
            <span class="main__header--menu-mobile-icon"></span>
          </nav>
        </div>
      </div>
    </header>
    */ ?>

		<?php #Header End ::::::::::::::::::::::::::::::::::::::::: ?>
