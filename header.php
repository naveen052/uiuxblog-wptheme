<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100' rel='stylesheet' type='text/css'>
<title><?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="http://localhost/wordpress/wp-content/themes/uiuxblog/assets/js/jquery.js"></script>
<script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/uiuxblog/assets/js/nprogress.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/uiuxblog/assets/js/jquery.history.js"></script>
  <script type="text/javascript" src="http://localhost/wordpress/wp-content/themes/uiuxblog/assets/js/scripts.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56578956-1', 'auto');
    ga('send', 'pageview');
</script>

<?php wp_head(); ?>
</head>

<body>
  <header class="page-header clearfix">
    <div class="container">
        <div class="row">
          <div class="col-md-2 logo">
            <a href="<?php echo get_option('home'); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2014/11/logo.png" alt="" /></a>
          </div>
          <div class="col-md-6 navigation">
            <nav class="default-nav">
              <ul>
                  <li><a href="#">Something</a> </li>
                  <li><a href="#">Something</a> </li>
                  <li><a href="#">Something</a> </li>
                  <li><a href="#">Something</a> </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-3">
           <div class="clearfix header-search-form">
            <form method="get" action="<?php bloginfo('home'); ?>">
              <input placeholder="To search type and hit enter" type="text" class="header-search-field" name="s" id="s" size="15" />
            </form>
            </div>
          </div>
        </div>
      </div>
 </header>
<div class="container" style="margin-top:40px;">
