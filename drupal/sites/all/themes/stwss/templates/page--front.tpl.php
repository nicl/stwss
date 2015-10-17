<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
    <div class="container">
        <div class="navbar-header">
            <?php if ($logo): ?>
                <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </A>
            <?php endif; ?>

            <?php if (!empty($site_name)): ?>
                <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
            <?php endif; ?>

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
            <div class="navbar-collapse collapse">
                <nav role="navigation">
                    <?php if (!empty($primary_nav)): ?>
                        <?php print render($primary_nav); ?>
                    <?php endif; ?>
                    <?php if (!empty($page['navigation'])): ?>
                        <?php print render($page['navigation']); ?>
                    <?php endif; ?>
                </nav>
            </div>
        <?php endif; ?>
    </div>
</header>

<div class="jumbotron banner">
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1024px; height: 342px; overflow: hidden;">
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 1024px; height: 342px;">
            <div>
                <a u="image" href="/about-us"><img src="/sites/all/themes/stwss/img/main-banner-welcome.jpg" /></a>
            </div>
            <div>
                <a u="image" href="/cap-money-course"><img src="/sites/all/themes/stwss/img/main-banner-cap.png" /></a>
            </div>
            <div>
                <a u="image" href="/local-mission"><img src="/sites/all/themes/stwss/img/main-banner-balham.jpg" /></a>
                <a u="caption" href="/local-mission" t="transition_name1" style="position: absolute; bottom: 20px; left: 0px; width: 100%;" class="banner-text">
                    <div class="banner-inner">
                        <h1>Transforming our area</h1>
                        <p>We want to live out our faith in community and transform our area.</p>
                    </div>
                </a>
            </div>
            <div>
                <a u="image" href="/alpha"><img src="/sites/all/themes/stwss/img/main-banner-alpha.jpg" /></a>
                <a u="caption" href="/alpha" t="transition_name1" style="position: absolute; bottom: 20px; left: 0px; width: 100%;" class="banner-text">
                    <div class="banner-inner">
                        <h1>Got questions about life</h1>
                        <p>Alpha is for everyone who's curious. Alpha starts Tuesday 6th October 7:45 (with supper).</p>
                    </div>
                </a>
            </div>

            <!-- <div> -->
            <!--     <img u="image" src="/sites/all/themes/stwss/img/main-banner-alpha.jpg" /> -->
            <!-- </div> -->
        </div>

        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
         /* jssor slider arrow navigator skin 12 css */
         /*
            .jssora12l                  (normal)
            .jssora12r                  (normal)
            .jssora12l:hover            (normal mouseover)
            .jssora12r:hover            (normal mouseover)
            .jssora12l.jssora12ldn      (mousedown)
            .jssora12r.jssora12rdn      (mousedown)
          */
         .jssora12l, .jssora12r {
             display: block;
             position: absolute;
             /* size of arrow element */
             width: 30px;
             height: 46px;
             cursor: pointer;
             background: url(/sites/all/themes/stwss/img/a12.png) no-repeat;
             overflow: hidden;
         }
         .jssora12l { background-position: -16px -37px; }
         .jssora12r { background-position: -75px -37px; }
         .jssora12l:hover { background-position: -136px -37px; }
         .jssora12r:hover { background-position: -195px -37px; }
         .jssora12l.jssora12ldn { background-position: -256px -37px; }
         .jssora12r.jssora12rdn { background-position: -315px -37px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora12l" style="top: 123px; left: 0px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora12r" style="top: 123px; right: 0px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->

        <!-- <\!--#region Bullet Navigator Skin Begin -\-> -->
        <!-- <\!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -\-> -->
        <!-- <style> -->
        <!--  /* jssor slider bullet navigator skin 21 css */ -->
        <!--  /* -->
        <!--     .jssorb21 div           (normal) -->
        <!--     .jssorb21 div:hover     (normal mouseover) -->
        <!--     .jssorb21 .av           (active) -->
        <!--     .jssorb21 .av:hover     (active mouseover) -->
        <!--     .jssorb21 .dn           (mousedown) -->
        <!--   */ -->
        <!--  .jssorb21 { -->
        <!--      position: absolute; -->
        <!--  } -->
        <!--  .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av { -->
        <!--      position: absolute; -->
        <!--      /* size of bullet elment */ -->
        <!--      width: 19px; -->
        <!--      height: 19px; -->
        <!--      text-align: center; -->
        <!--      line-height: 19px; -->
        <!--      color: white; -->
        <!--      font-size: 12px; -->
        <!--      background: url(/sites/all/themes/stwss/img/b21.png) no-repeat; -->
        <!--      overflow: hidden; -->
        <!--      cursor: pointer; -->
        <!--  } -->
        <!--  .jssorb21 div { background-position: -5px -5px; } -->
        <!--  .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; } -->
        <!--  .jssorb21 .av { background-position: -65px -5px; } -->
        <!--  .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; } -->
        <!-- </style> -->
        <!-- <\!-- bullet navigator container -\-> -->
        <!-- <div u="navigator" class="jssorb21" style="bottom: 16px; right: 6px;"> -->
        <!--     <\!-- bullet navigator item prototype -\-> -->
        <!--     <div u="prototype"></div> -->
        <!-- </div> -->
        <!-- <\!--#endregion Bullet Navigator Skin End -\-> -->

    </div>

    <!-- <div class="banner-image"> -->
    <!--   <img src="/sites/all/themes/stwss/img/main-banner.jpg" class="img-responsive" /> -->
    <!-- </div> -->
</div>


<div class="main-container container">

    <header role="banner" id="page-header">
        <?php if (!empty($site_slogan)): ?>
            <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

        <?php print render($page['header']); ?>
    </header> <!-- /#page-header -->

    <div class="alert alert-info alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Welcome to our new site. Please bear with us as we improve the
        site! We'd love to hear your thoughts on what we're doing well, and what could be improved. To leave feedback click <a href="https://docs.google.com/forms/d/1bpAQhbI2IxrmxgPQwt-S9A3LoYdFLQEh_PvWxndIFfM/viewform?usp=send_form">here</a></div>

    <!-- <p class="lead text-center">Welcome to the St Thomas with St -->
    <!--     Stephen's website! We are a vibrant Anglican church in Clapham -->
    <!--     Park. We want to live out our faith in community and transform our -->
    <!--     area.</p> -->

    <div class="row welcome-cards">
        <div class="col-md-3"><div class="card action-point welcome"><a href="/about-us"><h2>Welcome</h2></a></div></div>
        <div class="col-md-3"><div class="card action-point sundays"><a href="/sundays"><h2>Our services</h2></a></div></div>
        <div class="col-md-3"><div class="card action-point alpha"><a href="/alpha"><h2>Exploring faith</h2></a></div></div>
        <div class="col-md-3"><div class="card action-point cyp"><a href="/children"><h2>Children & young people</h2></a></div></div>
    </div>

    <div class="row service-map">
        <div class="col-md-4">
            <h4>Sundays 10:15am, St Thomas'</h4>
            <p>Our main morning service, with Sunday School and communion most weeks. Our current sermon series is looking at Jesus’ Sermon on the Mount.</p>
            <h4>Sundays 7pm, St Stephen's church</h4>
            <p>Monthly informal evening service, with an emphasis on worship, testimony, teaching and prayer.</p>
            <p><a href="/services">Find out more about our services and locations ></a></p>
        </div>
        <div class="col-md-8 map">
            <!-- <img src="/sites/all/themes/stwss/img/st-thomas-map.jpg" alt="Map of St Thomas location" /> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9947.726187284585!2d-0.13538796826171373!3d51.44105100696213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760431f9eb056f%3A0x834ece120d0eb99a!2sSt+Thomas&#39;+Church+(Telford+Park)!5e0!3m2!1sen!2suk!4v1434291141795" width="100%" height="200px" frameborder="0" style="border:0"></iframe>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <?php print render($page['footer_left']) ?>
        </div>
        <div class="col-md-4">
            <?php print render($page['footer_middle']) ?>
        </div>
        <div class="col-md-4">
            <?php print render($page['footer_right']) ?>
        </div>
    </div>

</div>
<footer class="footer">
    <div class="container">

        <div class="row activites">
            <div class="col-md-3">
                <address>
                    <h4>Main address</h4>
                    St Thomas with St Stephen<br>
                    Parish Office<br>
                    Weir Road<br>
                    London SW12 0NU<br>
                    <strong>Phone:</strong> 020 8675 5086
                </address>
                <address>
                    <strong>Email: </strong><a href="mailto:#">office@stwss.org.uk</a>
                </address>
            </div>

            <div class="col-md-3">
                <h4>Quicklinks</h4>
                <ul class="list-unstyled">
                    <li><a href="/about-us">About</a></li>
                    <li><a href="/giving">Giving</a></li>
                    <li><a href="/work-for-us">Job opportunities</a></li>
                    <li><a href="/safeguarding">Safeguarding</a></li>
                    <li><a href="/baptism">Baptisms and confirmations</a></li>
                </ul>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</footer>
