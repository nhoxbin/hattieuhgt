<?php
    if ((!empty($_GET['page']) && !file_exists("pages/{$_GET['page']}.php")) ||
        (!empty($_GET['news']) && !file_exists("news/{$_GET['news']}.php"))) {
        die('404 not found!');
    }
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="public/images/favicon.png" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- This site is optimized with the Yoast SEO plugin v7.6.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <?php
        $required = 'header';
        if (!empty($_GET['page'])) {
            include "pages/{$_GET['page']}.php";
        } elseif (!empty($_GET['news'])) {
            include "news/{$_GET['news']}.php";
        } else { ?>
            <!-- default header -->
            <title>Hạt tiêu Hoàng Gia Tuấn Chuyên Cung Cấp Hạt Tiêu Chất Lượng </title>
            <meta name="description" content="Chuyên Cấp Hạt Tiêu Đen, Hạt Tiêu Trắng Đảm Bảo An Toàn Chất Lượng." />
    <?php } ?>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='/wp-content/plugins/contact-form-7/includes/css/styles167b.css?ver=4.6' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css' href='/wp-content/plugins/revslider/public/assets/css/settingsfc61.css?ver=5.2.5.4' type='text/css' media='all' />
    <link rel='stylesheet' id='MainStyle-css' href='/wp-content/themes/kinetika/style8449.css?ver=screen' type='text/css' media='all' />
    <style id='MainStyle-inline-css' type='text/css'>
        font-family: 'Open Sans', sans-serif;
    </style>
    <link rel='stylesheet' id='verticalmenuCSS-css' href='/wp-content/themes/kinetika/css/verticalmenu6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='videoJSCSS-css' href='/wp-content/themes/kinetika/js/videojs/video-js6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='owlcarousel_css-css' href='/wp-content/themes/kinetika/css/owlcarousel/owl.carousel6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='magnific_lightbox-css' href='/wp-content/themes/kinetika/css/magnific/magnific-popup6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='Animations-css' href='/wp-content/themes/kinetika/css/animations6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='fontAwesome-css' href='/wp-content/themes/kinetika/css/fonts/font-awesome/css/font-awesome.min6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='etFonts-css' href='/wp-content/themes/kinetika/css/fonts/et-fonts/et-fonts6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='featherFonts-css' href='/wp-content/themes/kinetika/css/fonts/feather-webfont/feather6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='lineFonts-css' href='/wp-content/themes/kinetika/css/fonts/fontello/css/fontello6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='simepleLineFont-css' href='/wp-content/themes/kinetika/css/fonts/simple-line-icons/simple-line-icons6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='css_jplayer-css' href='/wp-content/themes/kinetika/css/html5player/jplayer.dark6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='supersized_CSS-css' href='/wp-content/themes/kinetika/css/supersized/supersized6959.css?ver=4.9.3' type='text/css' media='screen' />
    <link rel='stylesheet' id='mtheme-ie-css' href='/wp-content/themes/kinetika/css/ie6959.css?ver=4.9.3' type='text/css' media='all' />
    <link rel='stylesheet' id='Lato-css' href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' type='text/css' media='screen' />
    <link rel='stylesheet' id='Crimson-css' href='https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='screen' />
    <link rel='stylesheet' id='PT_Mono-css' href='https://fonts.googleapis.com/css?family=PT+Mono' type='text/css' media='screen' />
    <link rel='stylesheet' id='ResponsiveCSS-css' href='/wp-content/themes/kinetika/css/responsive6959.css?ver=4.9.3' type='text/css' media='screen' />
    <style id='ResponsiveCSS-inline-css' type='text/css'>
        body,
        .entry-content,
        .sidebar-widget,
        .homemenu .sf-menu .megamenu-textbox,
        .homemenu .sf-menu ul li a {
            font-family: 'Open Sans';
        }

        .woocommerce .product h1,
        .woocommerce .product h2,
        .woocommerce .product h3,
        .woocommerce .product h4,
        .woocommerce .product h5,
        .woocommerce .product h6,
        .entry-content>h1,
        .entry-content>h2,
        .entry-content>h3,
        .entry-content>h4,
        .entry-content>h5,
        .entry-content>h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .hero-text-wrap,
        .sidebar h3,
        .entry-title h1,
        h1.section-title,
        .pricing-table-service .pricing-title h2,
        .portfolio-end-block h2.section-title {
            font-family: 'Open Sans';
        }

        .homemenu .sf-menu a,
        .homemenu .sf-menu,
        .homemenu .sf-menu ul li a,
        .vertical-menu ul.mtree,
        .vertical-menu ul.mtree a {
            font-family: 'Open Sans';
        }

        .slideshow_title,
        .static_slideshow_title {
            font-family: 'Open Sans';
        }

        .slideshow_caption,
        .static_slideshow_caption {
            font-family: 'Open Sans';
        }

        h2.hero-title {
            font-family: 'Open Sans';
        }

        .pace,
        .theme-is-dark .pace {
            background-image: url(/wp-content/uploads/2016/12/logo-hat-tieu-co-tam.png);
        }

        .logo img {
            width: 250px;
        }

        .stickymenu-zone.sticky-menu-activate .logo img {
            height: auto;
            width: 200px;
        }

        .logo img {
            top: 10px;
        }

        .stickymenu-zone.sticky-menu-activate .logo img {
            top: 30px;
        }

        .logo img {
            margin-left: 10px;
        }

        .vertical-logoimage {
            width: 300px;
        }

        .vertical-logoimage {
            margin-top: 25px;
        }

        .logo-mobile .logoimage {
            width: 155px;
        }

        .logo-mobile .logoimage {
            height: auto;
        }

        .pace {
            background-size: 250px auto;
        }

        .boxed-site-layout .outer-wrap,
        .boxed-site-layout .fullscreen-footer-wrap,
        .boxed-site-layout #copyright,
        .boxed-site-layout .vertical-left-bar,
        .boxed-site-layout .vertical-right-bar,
        .vertical-menu {
            background: rgba(82, 48, 19, 1);
        }

        .vertical-menu ul.mtree li.mtree-node>a:before,
        .vertical-menu ul.mtree a {
            color: #ffffff;
        }

        .vertical-menu ul.mtree li>a:hover {
            color: #603b07;
        }

        .vertical-menu ul.mtree li.mtree-open>a,
        .vertical-menu ul.mtree li.mtree-open>a:hover,
        .vertical-menu ul.mtree a:hover {
            color: #190200;
        }

        .vertical-footer-wrap .fullscreen-footer-info {
            color: #f2f2f2;
        }

        .vertical-footer-wrap .fullscreen-footer-info {
            border-top-color: #f2f2f2;
        }

        .vertical-menu ul.mtree a,
        ul.mtree li.mtree-node>ul>li:last-child {
            border-bottom-color: #afafaf;
        }

        body,
        body.theme-boxed {
            background-color: #ededed;
        }

        .container-wrapper {
            background: rgba(237, 237, 237, 0.85);
        }

        .woocommerce .entry-summary div[itemprop="description"],
        .entry-content,
        .entry-content .pullquote-left,
        .entry-content .pullquote-right,
        .entry-content .pullquote-center {
            color: #0a0a0a;
        }

        .woocommerce div.product .product_title,
        .woocommerce #content div.product .product_title,
        .woocommerce-page div.product .product_title,
        .woocommerce-page #content div.product .product_title,
        .entry-content h1,
        .entry-content h2,
        .entry-content h3,
        .entry-content h4,
        .entry-content h5,
        .entry-content h6 {
            color: #0c0c0c;
        }

        .footer-container-wrap,
        #copyright {
            background: #523013;
        }

        #footer h3 {
            color: #f9f9f9;
        }

        #footer,
        #footer .footer-column .sidebar-widget,
        #footer .contact_address_block .contact_name {
            color: #f9f9f9;
        }

        #footer a,
        #footer .footer-column .sidebar-widget a {
            color: #ffffff;
        }

        #footer.sidebar ul li {
            border-top-color: #ffffff;
        }

        #copyright {
            color: #ffffff;
        }

        #copyright {
            color: #ffffff;
        }

        #recentposts_list .recentpost_info .recentpost_title,
        #popularposts_list .popularpost_info .popularpost_title,
        .sidebar a {
            color: #828282;
        }

        font-family: \'Open Sans\', sans-serif;.mfp-bg,.theme-is-dark .mfp-bg { background-color:#ffffff; }.mfp-arrow,.mfp-close,.mfp-content .maginific-lightbox-sharing .lightbox-share i,.mfp-title,.mfp-counter { color:#ffffff; }

        .gridblock-background-hover {
            background-color: #ededed;
        }

        .theme-is-dark .mobile-menu-toggle,
        .mobile-menu-toggle,
        .header-is-simple.theme-is-dark .mobile-menu-icon,
        .header-is-simple.theme-is-light .mobile-menu-icon {
            background-color: #523013;
        }

        body .responsive-mobile-menu,
        body.theme-is-light .responsive-mobile-menu {
            background-image: url(/wp-content/uploads/2015/07/menu-hat-tieu-den-co-tam.jpg);
        }

        .slideshow_title,
        .static_slideshow_title {
            font-family: ;
        }

        html {
            position: absolute;
            height: 100%;
            width: 100%;
            min-height: 100%;
            min-width: 100%;
        }

        body,
        #supersized li {
            background: ;
        }
    </style>

    <link rel='stylesheet' id='Open+Sans-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=greek-ext,vietnamese,cyrillic,greek,latin-ext,cyrillic-ext,latin' type='text/css' media='screen' />
    <script type='text/javascript' src='/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript' src='/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.minfc61.js?ver=5.2.5.4'></script>
    <script type='text/javascript' src='/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.minfc61.js?ver=5.2.5.4'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/pace.min.js'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <script type="text/javascript">
    var mtheme_uri = "wp-content/themes/kinetika/index.html";
    </script>
    <!-- SEO -->
    <meta name="publisher" content="Hạt tiêu Hoàng Gia Tuấn Gia Vị Mọi Nhà" />
</head>
<?php
    $class = '';
    if (!empty($_GET['page']) && $_GET['page'] !== 'tin-tuc') {
        $class = 'page-template page-template-template-fullpage page-template-template-fullpage-php page page-id-8992 single-author theme-is-dark left-logo page-is-not-fullscreen no-title-background pagebuilder-active theme-fullwidth body-dashboard-push footer-is-on nosidebar';
    } elseif (!empty($_GET['news'])) {
        $class = 'page-template page-template-template-bloglist page-template-template-bloglist-php page page-id-5931 single-author theme-is-dark left-logo page-is-not-fullscreen no-title-background theme-fullwidth body-dashboard-push footer-is-on rightsidebar';
    } else {
        $class = 'home blog single-author theme-is-dark left-logo page-is-fullscreen fullscreen-slideshow fullscreen-eventbox-inactive theme-fullwidth body-dashboard-push footer-is-on';
    }
?>
<body data-rsssl=1 class="<?= $class ?>">
    <div class="preloader-cover-screen"></div>
    <div class="responsive-menu-wrap">
        <span class="mobile-menu-icon"><i class="mobile-menu-icon-toggle feather-icon-menu"></i></span>
        <div class="mobile-menu-toggle">
            <div class="logo-mobile">
                <a href="/"><img class="logoimage" src="/wp-content/uploads/2016/12/logo-hat-tieu-co-tam.png" alt="logo" /></a> </div>
        </div>
    </div>
    <div class="responsive-mobile-menu">
        <div class="mobile-social-header">
            <div class="footer-column">
                <div class="sidebar-widget">
                    <aside id="msocial-widget-3" class="widget MSocial_Widget">
                        <div class="social-header-wrap">
                            <ul>
                                 <li class="social-icon">
                                    <a class="ntips" title="Facebook" href="https://www.facebook.com/CongTyTNHHTMHoangGiaTuan/" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                
                                <li class="contact-text"><i class="fa fa-phone-square"></i> &nbsp;
                                    Hotline: 0975 555 906 </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- <form method="get" id="mobile-searchform" action="https://hattieu.vn/">
            <input type="text" value="" name="s" id="ms" class="right" />
            <button id="mobile-searchbutton" title="Search" type="submit"><i class="feather-icon-search"></i></button>
        </form> -->
        <nav>
            <ul id="menu-menu_cotam" class="mtree">
                <?php
                    $navs = [[
                            'title' => 'Giới Thiệu',
                            'url' => '/gioi-thieu-hat-tieu-hgt.html'
                        ], [
                            'title' => 'Tiêu Đen',
                            'url' => '/hat-tieu-den.html'
                        ], [
                            'title' => 'Tiêu Trắng',
                            'url' => '/hat-tieu-trang.html'
                        ], [
                            'title' => 'Sản Phẩm Khác',
                            'url' => '/tin-tuc.html'
                        ], [
                            'title' => 'chính sách bán hàng',
                            'url' => '/chinh-sach-ban-hang-hat-tieu.html'
                        ], [
                            'title' => 'Liên Hệ',
                            'url' => '/lien-he.html'
                    ]];
                    foreach ($navs as $key => $value) {
                ?>
                    <li id="menu-item-<?= $key ?>" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="<?= $value['title'] ?>"><?= $value['title'] ?></a></li>
                <?php } ?>
            </ul>
        </nav>
        <div class="cleafix"></div>
    </div>
    <div class="mtheme-fullscreen-toggle fullscreen-toggle-off"><i class="fa fa-expand"></i></div>
    <div class="stickymenu-zone outer-wrap">
        <div class="outer-header-wrap clearfix">
            <nav>
                <div class="mainmenu-navigation">
                    <div class="header-logo-section">
                        <div class="logo sticky-alt-logo-present">
                            <a href="/">
                                <img class="logo-theme-main" src="/wp-content/uploads/2016/12/logo-hat-tieu-co-tam.png" alt="logo" />
                                <img class="logo-sticky-main" src="/wp-content/uploads/2016/12/logo-hat-tieu-co-tam.png" alt="stickylogo" />
                            </a>
                        </div>
                    </div>
                    <div class="homemenu">
                        <ul id="menu-menu_cotam-1" class="sf-menu mtheme-left-menu">
                            <?php
                                foreach ($navs as $key => $value) {
                            ?>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-<?= $key ?>"><a href="<?= $value['url'] ?>"><?= $value['title'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="wpml-lang-selector-wrap">
    </div>
    <div id="home" class="container-wrapper container-fullwidth">
        <?php
            $required = 'body';
            if (isset($_GET['page'])) {
                include "pages/{$_GET['page']}.php";
            } elseif (!empty($_GET['news'])) {
                include "news/{$_GET['news']}.php";
            }
        ?>
    </div>

    <?php if (empty($_GET['page'])) { // default footer (home) ?>
        <footer>
            <div class="fullscreen-footer-wrap">
                <div class="fullscreen-footer-info">
                    Copyright Ⓒ 2019 Hạt Tiêu Hoàng Gia Tuấn . All rights reserved. </div>
                <div class="fullscreen-footer-social">
                    <div class="login-socials-wrap clearfix">
                        <aside id="msocial-widget-2" class="widget MSocial_Widget">
                            <div class="social-header-wrap">
                                <ul>
                                    <li class="social-icon">
                                        <a class="ntips" title="Facebook" href="https://www.facebook.com/CongTyTNHHTMHoangGiaTuan/" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <!-- <li class="social-icon">
                                        <a class="ntips" title="Google+" href="https://plus.google.com/u/0/100059868102241979260" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                        </a> -->
                                    </li>
                                    <li class="social-icon">
                                        <a class="ntips" title="Zalo" href="https://zalo.me/0975555906" target="_blank">
                                            <i class="fa fa-comments"></i>
                                        </a>
                                    </li>
                                    <li class="contact-text"><i class="fa fa-phone-square"></i> &nbsp;
                                    0975 555 906 </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </footer>
    <?php } else { ?>
        <footer>
            <div id="goto-top" title="top of page"><i class="fa fa-chevron-up"></i></div>
            <div class="footer-container-wrap clearfix">
                <div class="footer-container clearfix">
                    <div id="footer" class="sidebar widgetized clearfix">
                        <div class="footer-column">
                            <div class="sidebar-widget">
                                <aside id="mtheme_image_widget-2" class="widget widget_mtheme_image_widget">
                                    <img class="footer-mtheme-image" width="260" src="/wp-content/uploads/2016/12/logo-hat-tieu-co-tam.png" alt="logo" />
                                </aside>
                            </div>
                            <div class="sidebar-widget">
                                <aside id="contact_details-2" class="widget mtheme_contact_widget">
                                    <ul class="contact_address_block">
                                        <li><span class="contact_address">Thôn Sơn Tân xã Sơn Bình huyện Châu Đức Tỉnh Bà Rịa-Vũng Tàu</span></li>
                                        <li>
                                        </li>
                                        <li><span class="contact_mobile">Hotline: 0975 555 906</span></li>
                                        <!-- <li><span class="contact_email"><a href="mailto:&#105;&#110;fo&#64;&#104;&#97;ttie&#117;cot&#97;m&#46;com">i&#110;f&#111;&#64;&#104;a&#116;&#116;&#105;e&#117;c&#111;&#116;&#97;m.&#99;o&#109;</a></span></li> -->
                                    </ul>
                                </aside>
                            </div>
                            <div class="sidebar-widget">
                                <aside id="msocial-widget-4" class="widget MSocial_Widget">
                                    <div class="social-header-wrap">
                                        <ul>
                                            <li class="social-icon">
                                                <a class="ntips" title="Facebook" href="https://www.facebook.com/CongTyTNHHTMHoangGiaTuan/" target="_blank">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="social-icon">
                                                <a class="ntips" title="Zalo" href="https://zalo.me/0975555906" target="_blank">
                                                    <i class="fa fa-comments"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copyright">Copyright Ⓒ 2019 Hạt Tiêu Hoàng Gia Tuấn . All rights reserved.</div>
        </footer>
    <?php } ?>

    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>

    <script type='text/javascript' src='/wp-content/plugins/contact-form-7/includes/js/scripts167b.js?ver=4.6'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/typed.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/menu/verticalmenu.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/videojs/video.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/jquery.touchSwipe.min.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/menu/superfish.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/jquery.nicescroll.min.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/jquery.easing.min.js'></script>

    <script type='text/javascript' src='/wp-content/themes/kinetika/js/page-elements.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/jquery.fitvids.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/jquery.stellar.min.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/waypoints/waypoints.min.js'></script>
    <script type='text/javascript' src='/wp-includes/js/hoverIntent.minc245.js?ver=1.8.1'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='/wp-includes/js/jquery/ui/tooltip.mine899.js?ver=1.11.4'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/modernizr.custom.47002.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/classie.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/jquery.stickymenu.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/stickySidebar.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/magnific/jquery.magnific-popup.min.js'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/common.js'></script>
    <script type='text/javascript' src='/wp-includes/js/wp-embed.min6959.js?ver=4.9.3'></script>
    <script type='text/javascript' src='/wp-content/themes/kinetika/js/owlcarousel/owl.carousel.min.js'></script>
    <?php
        $required = 'js';
        if (empty($_GET['page'])) {
    ?>
        <script type='text/javascript' src='/wp-content/themes/kinetika/js/owlcarousel/owl.carousel.min.js'></script>
        <script type='text/javascript' src='/wp-content/themes/kinetika/js/html5player/jquery.jplayer.min.js'></script>
        <script type='text/javascript' src='/wp-content/themes/kinetika/js/supersized/supersized.3.2.7.min.js'></script>
        <script type='text/javascript' src='/wp-content/themes/kinetika/js/supersized/supersized.shutter.js'></script>

        <script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function($) {
                jQuery.supersized({
                    slideshow: 1,
                    autoplay: 1,
                    start_slide: 1,
                    image_path: 'https://hattieu.vn/wp-content/themes/kinetika/images/supersized/',
                    stop_loop: 0,
                    random: 0,
                    slide_interval: 8000,
                    transition: 1,
                    transition_speed: 1000,
                    new_window: 0,
                    pause_hover: 0,
                    keyboard_nav: 1,
                    performance: 2,
                    image_protect: 0,
                    min_width: 0,
                    min_height: 0,
                    vertical_center: 1,
                    horizontal_center: 1,
                    fit_always: 0,
                    fit_portrait: 1,
                    fit_landscape: 0,
                    slide_links: 'blank',
                    thumb_links: 1,
                    thumbnail_navigation: 0,
                    slides: [
                        { image: 'https://hattieu.vn/wp-content/uploads/2015/07/Hat-tieu-den-nui-hoa.jpg', title: '<div class="fullscreen-slideshow-color" data-color="bright"></div><div class="slideshow-content-wrap"><div class="slideshow_title  slideshow_title_animation">Hạt Tiêu Hoàng Gia Tuấn </div><div class="slideshow_caption"><p> Được chắt lọc từ tinh tuý từ thiên niên. Nguyên bản tươi ngon và chất lượng để đem đến cho bạn nguồn thực phẩm gia vị tuyệt vời trên cả mong đợi.</p><br /></div><div class="slideshow_content_link "><a class="supersized-button" href="/gioi-thieu-hat-tieu-co-tam">Xem thêm</a></div></div>', thumb: '', url: '' },
                        { image: 'https://hattieu.vn/wp-content/uploads/2015/07/hat-tieu-den-co-tam.jpg', title: '<div class="fullscreen-slideshow-color" data-color="bright"></div><div class="slideshow-content-wrap"><div class="slideshow_title  slideshow_title_animation">Hạt Tiêu Đen</div><div class="slideshow_caption"><p>Không đơn thuần chỉ là gia vị cho những món ngon, tiêu đen còn đem tới những lợi ích hoàn hảo cho sức khoẻ của bạn.</p><br /></div><div class="slideshow_content_link "><a class="supersized-button" href="/hat-tieu-den">Xem thêm</a></div></div>', thumb: '', url: '' },
                        { image: 'https://hattieu.vn/wp-content/uploads/2015/07/hat-tieu-trang-co-tam.jpg', title: '<div class="fullscreen-slideshow-color" data-color="bright"></div><div class="slideshow-content-wrap"><div class="slideshow_title  slideshow_title_animation">Hạt Tiêu Trắng</div><div class="slideshow_caption"><p>Là thành phẩm từ một cách chế biến hồ tiêu hoàn toàn khác, hạt tiêu trắng hay gọi hạt tiêu sọ làm tăng độ cay, nồng có khả năng kích thích vị giác của bạn ngay lần đầu thử qua.</p><br /></div><div class="slideshow_content_link "><a class="supersized-button" href="/hat-tieu-trang">Xem thêm</a></div></div>', thumb: '', url: '' },
                        { image: 'https://hattieu.vn/wp-content/uploads/2015/07/dau-dau-phong-co-tam.jpg', title: '<div class="fullscreen-slideshow-color" data-color="bright"></div><div class="slideshow-content-wrap"><div class="slideshow_title  slideshow_title_animation">Dầu đậu phộng</div><div class="slideshow_caption"><p>Được chọn lọc từ khâu trồng trọt đến khi tinh chế ra được sản phẩm dầu ăn. Giúp đem lại nguồn dinh dưỡng dồi dào và bảo vệ sức khoẻ cho gia đình bạn tốt hơn.</p><br /></div><div class="slideshow_content_link "><a class="supersized-button" href="/dau-dau-phong">Xem thêm</a></div></div>', thumb: '', url: '' },
                        { image: 'https://hattieu.vn/wp-content/uploads/2015/07/Hat-tieu-xanh-co-tam.jpg', title: '<div class="fullscreen-slideshow-color" data-color="bright"></div><div class="slideshow-content-wrap"><div class="slideshow_title  slideshow_title_animation">Tiêu chuẩn GAP</div><div class="slideshow_caption"><p>Hạt tiêu Hoàng Gia Tuấn  tự hào khi áp dụng thành công tiêu chuẩn G.A.P một cách nghiêm khắc nhất để có thể tạo ra những sản phẩm hồ tiêu chất lượng.</p><br /></div></div>', thumb: '', url: '' }
                    ],
                    progress_bar: 1,
                    mouse_scrub: 1
                });
                if ($.fn.swipe) {
                    jQuery(".page-is-fullscreen #supersized,.pattern-overlay").swipe({
                        excludedElements: "button, input, select, textarea, .noSwipe",
                        swipeLeft: function() {
                            jQuery("#nextslide").trigger("click");
                        },
                        swipeRight: function() {
                            jQuery("#prevslide").trigger("click");
                        }
                    });
                }
            });
            /* ]]> */
        </script>
    <?php
        } else {
            include "pages/{$_GET['page']}.php";
        }
    ?>
</body>
</html>