<?php
global $base_url, $language;
$path_to_theme = $base_url."/sites/all/themes/race/";
$path_to_file = $base_url."/sites/default/files/";
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
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Dosis:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="<?php print $path_to_theme ?>css/animate.min.css">
   <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.carousel.css" media="screen" />
   <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/owl-carousel/owl.transitions.css" media="screen" />
   <!-- Magnific Popup core CSS file -->
   <link rel="stylesheet" href="<?php print $path_to_theme ?>components/magnific-popup/magnific-popup.css">
   <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/revolution_slider/css/settings.css" media="screen" />
   <link rel="stylesheet" type="text/css" href="<?php print $path_to_theme ?>components/revolution_slider/css/style.css" media="screen" />

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
   <div class="branding">
      <h1 class="logo">
          <a href="<?php print $base_url ?>">Ali Adrian 12</a>
      </h1>
   </div>
   <div id="slideshow">
      <div class="revolution-slider">
         <ul>
            <!-- SLIDE  -->
            <?php 
            $node_banner = _get_node_list('banner', '10', 'DESC', 'home');
            foreach($node_banner as $banner) { 
                $banner_uri = $banner->field_banner_image[LANGUAGE_NONE][0]['uri'];
                $banner_image = str_replace("public://", "", $banner_uri);
            ?>
            <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1500">
               <img src="<?php print $path_to_file . $banner_image ?>" alt="<?php print $banner->title ?>" data-bgposition="center top">
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>

   <div class="newsletter">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-5 title">
               <h2>Subscribe to Adrian’s Events & Updates</h2>
            </div>
            <div class="col-md-6 col-sm-7 form-field">
               <div class="form-group no-margin">
                   <form method="post" action="<?php print $base_url ?>/subscribe">
                   <input type="text" name="email" class="input-text full-width" placeholder="Enter E-mail Address">
                   <button type="submit" class="btn pull-right">Submit</button>
                   </form>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </div>
    
   <section id="content">
      <div class="container">
         <div class="section">
            <div class="row">
               <div class="col-sm-4">
               <?php
               $node_biography = _get_node_list('rider', '1');
               foreach($node_biography as $biography) {
                   $biography_path = drupal_get_path_alias("node/".$biography->nid);
                   $biography_uri = $biography->field_rider_photo[LANGUAGE_NONE][0]['uri'];
                   $biography_image = str_replace("public://", "", $biography_uri);
                   if ($language->prefix == 'id') $biography_desc = $biography->body[LANGUAGE_NONE][0]['value'];
                   else $biography_desc = $biography_desc = $biography->field_rider_description_english[LANGUAGE_NONE][0]['value'];
                   //print "<pre>".print_r($biography, true)."</pre>";
                   if (strlen($biography_desc) > 270) $biography_desc = substr($biography_desc, 0, 270) . '...';
               ?>
                  <h2>ABOUT <span><?php print $biography->title ?></span></h2>
                  <p><?php print $biography_desc ?></p>
                  <p></p>
                  <div class="team-member style-default">
                     <div class="image-container">
                        <img src="<?php print $path_to_file . $biography_image ?>" alt="<?php print $biography->title ?>">
                        <a class="btn btn-sm post-read-more" href="<?php print $base_url ."/". $biography_path ?>">Read More</a>
                     </div>
                  </div>
               <?php } ?>
               </div>
               <div class="col-sm-1">&nbsp;</div>
               
               <div class="col-sm-7 blog-posts">
                  <h2>LATEST NEWS</h2>
                  <?php
                    $node_news = _get_node_list('news', '2', 'DESC');
                    foreach($node_news as $news) {
                        $news_path = drupal_get_path_alias("node/".$news->nid);
                        $news_location = $news->field_news_location[LANGUAGE_NONE][0]['value'];
                        $news_uri = $news->field_news_image[LANGUAGE_NONE][0]['uri'];
                        $news_image = str_replace("public://", "", $news_uri);
                        if ($language->prefix == 'id') $news_desc = $news->body[LANGUAGE_NONE][0]['value'];
                        else $news_desc = $news_desc = $news->field_news_body_english[LANGUAGE_NONE][0]['value'];
                        if (strlen($news_desc) > 300) $news_desc = substr($news_desc, 0, 300) . '...';
                  ?>
                  <article class="post post-masonry">
                     <div class="post-content">
                         <h3 class="entry-title" style="margin-bottom:6px"><a href="<?php print $base_url ."/". $news_path ?>"><?php print $news->title ?></a></h3>
                        <div class="post-meta">
                           <span class="entry-author fn"><?php print $news_location ?>,</span>
                           <span class="entry-time"><span class="published"><?php print $news->created ?></span></span>
                        </div>
                         <p><?php print $news_desc ?></p>
                     </div>
                     <div class="post-action">
                        <a class="btn btn-sm post-read-more" href="<?php print $base_url ."/". $news_path ?>">Read More</a>
                     </div>
                  </article>
                  <hr class="thick" />
                  <?php } ?>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="section">
            <div class="row next-race add-clearfix same-height">
               <div class="col-sm-7 next-race-info">
                  <h2>Next Race - <span>Algarve</span></h2>
                  <h3>26 April 2015</h3>
               </div>
               <div class="col-sm-5 coming-soon-page">
                  <div class="clock-title">
                     <ul>
                        <li>Days</li>
                        <li>Hour</li>
                        <li>Min</li>
                        <li>Sec</li>
                     </ul>
                  </div>
                  <div class="clock-wrapper">
                     <ul class="clock">
                        <li class="days">00</li>
                        <li class="sep">:</li>
                        <li class="hours">00</li>
                        <li class="sep">:</li>
                        <li class="minutes">00</li>
                        <li class="sep">:</li>
                        <li class="seconds">00</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
          
         <div class="post-wrapper latest-gallery">
            <h2>Latest Gallery <a href="<?php print $base_url ?>/gallery" href="VIEW ALL GALLERY">VIEW ALL GALLERY ></a></h2>
            <div class="owl-carousel post-slider style6" data-items="4" data-itemsPerDisplayWidth="[[0, 1], [480, 1], [768, 2], [992, 3], [1200, 4]]">
                <?php 
                $node_gallery = _get_node_list('gallery', '10', 'DESC');
                foreach($node_gallery as $gallery) { 
                    $gallery_uri = $gallery->field_gallery_image[LANGUAGE_NONE][0]['uri'];
                    $gallery_image = str_replace("public://", "", $gallery_uri);
                ?>
                <article class="post">
                  <figure><img alt="" src="<?php print $path_to_file . $gallery_image ?>"></figure>
                  <div class="portfolio-hover-holder">
                     <div class="portfolio-text">
                        <div class="portfolio-text-inner">
                           <h5 class="portfolio-title">aliadrian.com</h5>
                        </div>
                     </div>
                     <span class="portfolio-action">
                        <a href="<?php print $path_to_file . $gallery_image ?>" class="soap-mfp-popup"><i class="fa fa-chain has-circle"></i></a>
                        <a href="#"><i class="fa fa-eye has-circle"></i></a>
                     </span>
                  </div>
               </article>
                <?php } ?>
            </div>
            <div class="clearfix"></div>
         </div>
      </div>
   </section>

   <div class="post-wrapper sponsors">
      <div class="container">
         <h2>Sponsors</h2>
         <ul class="post-slider style6 owl-carousel box" data-transitionstyle="fade" data-items="5" data-itemsPerDisplayWidth="[[0, 1], [480, 2], [768, 3], [992, 4], [1200, 5]]">
            <?php
            $node_sponsor = _get_node_list('sponsor', '10', 'DESC');
                foreach($node_sponsor as $sponsor) { 
                    $sponsor_uri = $sponsor->field_sponsor_image[LANGUAGE_NONE][0]['uri'];
                    $sponsor_image = str_replace("public://", "", $sponsor_uri);
                    $sponsor_link = $sponsor->field_sponsor_url[LANGUAGE_NONE][0]['value'];
            ?>
            <li>
               <a href="<?php print $sponsor_link ?>">
                  <img src="<?php print $path_to_file . $sponsor_image ?>" alt="<?php print $sponsor->title ?>"></a>
            </li>
            <?php } ?>
         </ul>
      </div>
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
</div>
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
<!-- load revolution slider scripts -->
<script type="text/javascript" src="<?php print $path_to_theme ?>components/revolution_slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
<!-- plugins -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/jquery.plugins.js"></script>
<!-- load page Javascript -->
<script type="text/javascript" src="<?php print $path_to_theme ?>js/main.js"></script>
<script type="text/javascript" src="<?php print $path_to_theme ?>js/revolution-slider.js"></script>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/aliadrianID.json?callback=twitterCallback2&count=1"></script>
<script type="text/javascript">
   function cacluateLaunchTime() {
      var launchDateStr = "2015/04/26 00:00:00"; // timezone must be UTC + 0
      var launchDate = new Date(launchDateStr);
      launchDate.setTime( launchDate.getTime() - launchDate.getTimezoneOffset()*60*1000 );

      var currentDate = new Date();
      var diff = new Date(launchDate.getTime() - currentDate.getTime());

      if (diff > 0) {
          var milliseconds, seconds, minutes, hours, days;
          diff = Math.abs(diff);
          diff = (diff - (milliseconds = diff % 1000)) / 1000;
          diff = (diff - (seconds = diff % 60)) / 60;
          diff = (diff - (minutes = diff % 60)) / 60;
          days = (diff - (hours = diff % 24)) / 24;
          sjq(".clock .days").html((days + "").lpad("0", 2));
          sjq(".clock .hours").html((hours + "").lpad("0", 2));
          sjq(".clock .minutes").html((minutes + "").lpad("0", 2));
          sjq(".clock .seconds").html((seconds + "").lpad("0", 2));
      }
   }
   cacluateLaunchTime();
   var calcLaunchTimeInterval = setInterval(cacluateLaunchTime, 1000);
</script>
</body>
</html>