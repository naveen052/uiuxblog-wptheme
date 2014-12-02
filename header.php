<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather:400,700,700italic,300italic|Open+Sans:300,600" />
<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/uiuxblog/assets/css/style.css">
<title><?php if(is_home()) { echo bloginfo("name"); echo " | "; echo bloginfo("description"); } else { echo wp_title(" | ", false, right); echo bloginfo("name"); } ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body>
  <header class="page-header clearfix">
    <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="pull-right">
            <a class="logo" href="<?php echo get_option('home'); ?>"><img src="http://localhost/wordpress/wp-content/uploads/2014/11/logo.png" alt="" /></a></div>
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
