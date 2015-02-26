<?php
global $base_url, $language;
$path_to_theme = $base_url."/sites/all/themes/race/";
$path_to_file = $base_url."/sites/default/files/";
$arg0 = arg(0);
$arg1 = arg(1);
if ($arg0 == 'node') {
    $nid = arg(1);
    $node = node_load($nid);
    $breadcrumb = $node->title;
} else {
    if ($arg0 == 'schedule') $section = 'race-schedule';
    else $section = $arg0;
    $breadcrumb = '<li class="active">'.$arg0.'</li>';
    if (isset($arg1)) $breadcrumb = '<li>'.$arg0.'</li><li class="active">'.$arg1.'</li>';
}
?>
<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Ali Adrian 12 - Official Site</title>

    <link rel="shortcut icon" href="<?php print $path_to_theme ?>images/favicon.png" />

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="description" content="Miracle | Responsive Multi-Purpose HTML5 Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?php print $path_to_theme ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php print $path_to_theme ?>css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php print $path_to_theme ?>css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.carousel.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.transitions.css" media="screen" />
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="<?php print $path_to_theme ?>components/magnific-popup/magnific-popup.css">

    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?php print $path_to_theme ?>css/styles.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php print $path_to_theme ?>css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?php print $path_to_theme ?>css/updates.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?php print $path_to_theme ?>css/responsive.css">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
<div id="page-wrapper">
      <header id="header" class="header-color-white">
      <div class="container">
         <div class="header-inner">
            <nav id="nav">
               <ul class="header-top-nav visible-mobile">
                  <li class="language">
                     <?php
                     $cur_url = curPageURL(); 
                     if ($language->prefix == 'id') $inclass = 'active';
                     else $enclass = 'active';
                     ?>
                     <span class="en"><a href="<?php print $base_url ?>/change_language/en?url=<?php print $cur_url ?>" class="<?php print $enclass ?>">English</a></span>
                     <span class="id"><a href="<?php print $base_url ?>/change_language/id?url=<?php print $cur_url ?>" class="<?php print $inclass ?>">Indonesia</a></span>
                  </li>
                  <li>
                     <a href="#mobile-nav-wrapper" data-toggle="collapse"><i class="fa fa-bars has-circle"></i></a>
                  </li>
               </ul>
               <ul id="main-nav" class="hidden-mobile">
                  <li class="menu-item-has-children">
                     <a href="<?php print $base_url ?>">Home</a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="#">Profile</a>
                     <ul class="sub-nav">
                        <li class="menu-item-has-children">
                           <a href="<?php print $base_url ?>/profile/biography">Biography</a>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="<?php print $base_url ?>/profile/achievement">Achievement</a>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="<?php print $base_url ?>/profile/bike">The Bike</a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="<?php print $base_url ?>/circuit">Circuit</a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="#">Gallery</a>
                     <ul class="sub-nav">
                        <li class="menu-item-has-children">
                           <a href="<?php print $base_url ?>/gallery/photo">Photos</a>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="<?php print $base_url ?>/gallery/video">Videos</a>
                        </li>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="<?php print $base_url ?>/news">News</a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="<?php print $base_url ?>/schedule">Race Schedule</a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="<?php print $base_url ?>/sponsor">Sponsors</a>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="#">Merch</a>
                     <ul class="sub-nav">
                        <?php
                        $node_merchandise_category = _get_node_list('merchandise_category');
                        foreach($node_merchandise_category as $merchandise_category) {
                        ?>
                        <li class="menu-item-has-children">
                           <a href="<?php print $base_url ?>/merchandise/<?php print $merchandise_category->nid ?>"><?php print $merchandise_category->title ?></a>
                        </li>
                        <?php } ?>
                     </ul>
                  </li>
                  <li class="menu-item-has-children">
                     <a href="<?php print $base_url ?>/contact">Contact</a>
                  </li>
                  <li class="menu-item language">
                     <?php
                     $cur_url = curPageURL(); 
                     if ($language->prefix == 'id') $inclass = 'active';
                     else $enclass = 'active';
                     ?>
                     <span class="en"><a href="<?php print $base_url ?>/change_language/en?url=<?php print $cur_url ?>" class="<?php print $enclass ?>">English</a></span>
                     <span class="id"><a href="<?php print $base_url ?>/change_language/id?url=<?php print $cur_url ?>" class="<?php print $inclass ?>">Indonesia</a></span>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="mobile-nav-wrapper collapse visible-mobile" id="mobile-nav-wrapper">
         <ul class="mobile-nav">
            <li class="menu-item">
               <span class="open-subnav"></span>
               <a href="<?php print $base_url ?>">Home</a>
            </li>
            <li class="menu-item-has-children">
               <span class="open-subnav"></span>
               <a href="#">Profile</a>
               <ul class="sub-nav">
                  <li class="menu-item">
                     <span class="open-subnav"></span>
                     <a href="<?php print $base_url ?>/profile/biography">Biography</a>
                  </li>
                  <li class="menu-item">
                     <span class="open-subnav"></span>
                     <a href="<?php print $base_url ?>/achievement">Achievement</a>
                  </li>
                  <li class="menu-item">
                     <span class="open-subnav"></span>
                     <a href="<?php print $base_url ?>/bike">The Bike</a>
                  </li>
               </ul>
            </li>
            <li class="menu-item">
               <span class="open-subnav"></span>
               <a href="<?php print $base_url ?>/circuit">Circuit</a>
            </li>
            <li class="menu-item-has-children">
               <span class="open-subnav"></span>
               <a href="#">Gallery</a>
               <ul class="sub-nav">
                  <li class="menu-item">
                     <span class="open-subnav"></span>
                     <a href="<?php print $base_url ?>/gallery/photo">Photos</a>
                  </li>
                  <li class="menu-item">
                     <span class="open-subnav"></span>
                     <a href="<?php print $base_url ?>/gallery/video">Videos</a>
                  </li>
               </ul>
            </li>
            <li class="menu-item">
               <span class="open-subnav"></span>
               <a href="<?php print $base_url ?>/news">News</a>
            </li>
            <li class="menu-item">
               <span class="open-subnav"></span>
               <a href="<?php print $base_url ?>/schedule">Race Schedule</a>
            </li>
            <li class="menu-item">
               <span class="open-subnav"></span>
               <a href="<?php print $base_url ?>/sponsor">Sponsors</a>
            </li>
            <li class="menu-item">
               <span class="open-subnav"></span>
               <a href="#">Merch</a>
            </li>
            <li class="menu-item">
               <span class="open-subnav"></span>
               <a href="<?php print $base_url ?>/contact">Contact</a>
            </li>
         </ul>
      </div>
   </header>
        <?php 
            $node_banner = _get_node_list('banner', '1', 'DESC', 'inner');
            foreach($node_banner as $banner) { 
                $banner_uri = $banner->field_banner_image[LANGUAGE_NONE][0]['uri'];
                $banner_image = str_replace("public://", "", $banner_uri);
            }
        ?>
      <div class="page-title-container parallax style3" data-stellar-background-ratio="0.5" style="background-image: url('<?php print $path_to_file . $banner_image ?>')">
         <div class="page-title">
            <div class="entry-title">
               <h1 class="logo">
                  <a href="<?php print $base_url ?>">Ali Adrian 12</a>
               </h1>
            </div>
         </div>
         <ul class="breadcrumbs">
             <li><a href="<?php print $base_url ?>">Home</a></li>
             <?php print $breadcrumb ?>
         </ul>
      </div>

      <section id="content">
         <div class="container">
            <div class="section <?php print $section ?>">
               <?php if ($messages): ?>
                    <div id="console" class="clearfix">
                    <?php print $messages; ?>
                    </div>
               <?php endif; ?>
               <?php if ($tabs): ?>
                    <div class="tabs">
                      <?php print render($tabs); ?>
                    </div>
               <?php endif; ?>
               <?php print render($page['content']); ?>
               
            </div>
         </div>
      </section>
   </div>

   <footer id="footer">
      <div class="footer-wrapper">
         <div class="container">
            <div class="row add-clearfix same-height">
              <div class="col-sm-6 col-md-4">
                  <img src="<?php print $path_to_theme ?>images/footerx.jpg">
              </div>
              <div class="col-sm-6 col-md-3">
                  <p> &copy;2015 <br />
                    Batara Digital - <a href="<?php print $base_url ?>/privacy-policy">Privacy Policy</a></p>
                    <div class="social-icons">
                       <?php 
                       $twitter = variable_get('twitter');
                       $facebook = variable_get('facebook');
                       $youtube = variable_get('youtube');
                       ?>
                       <a href="<?php print $twitter ?>" target="_blank" class="social-icon"><i class="fa fa-twitter has-circle" data-toggle="tooltip" data-placement="top" title="Twitter"></i></a>
                       <a href="<?php print $facebook ?>" target="_blank" class="social-icon"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title="Facebook"></i></a>
                       <a href="<?php print $youtube ?>" target="_blank" class="social-icon"><i class="fa fa-youtube has-circle" data-toggle="tooltip" data-placement="top" title="Youtube"></i></a>
                    </div>
              </div>
              <div class="col-sm-12 col-md-5">
                <div class="twitter-feed">
                  <h3>Twitter Feed</h3>
                  <p>"Nulla mattis rsitmet dolor sollicitudi aliquamquae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Lorem ipsum dolor sit amet gravida sagittis lacus. Morbi sit amet mauris mi."</p>
                </div>
              </div>
            </div>
         </div>
      </div>
   </footer>

    <!-- Javascript -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/modernizr.2.8.3.min.js"></script>
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery-ui.1.11.2.min.js"></script>

    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/bootstrap.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>components/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- parallax -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.stellar.min.js"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/waypoints.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>components/owl-carousel/owl.carousel.min.js"></script>

    <!-- plugins -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.plugins.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="<?php print $path_to_theme ?>js/main.js"></script>
</body>
</html>