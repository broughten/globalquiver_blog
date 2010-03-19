<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
  <title><?php
        if ( is_single() ) { single_post_title(); }       
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="/stylesheets/main.css?1263860641" rel="stylesheet" type="text/css" media="screen" />
    <link href="/stylesheets/authentication.css?1263965460" rel="stylesheet" type="text/css" media="screen" />
    <!--[if IE]>
      <link href="/stylesheets/ie.css?1263453130" media="screen" rel="stylesheet" type="text/css" />      
    <![endif]-->
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'rails-generated' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'rails-generated' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />     
  </head>
  <body class="<?php body_class(); ?>">
    <div id="outer-container">
      <div id="header">
        <div class="left">
          <a href="/"><h1 id="logo"><span>GlobalQuiver</span></h1></a>
        </div>
        <div class="right">
          <div id="login-signup">
            <div id="centering-div">
              <ul>
                <li id="login_link">
                  <a href="/session/new">Login</a>
                </li>
                <li id="signup_link">
                  <a href="/users/new">Join Global Quiver</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="tabs">
        <ul>
            <li><a href="/pages/Home">Home</a></li>
            <li><a href="/pages/About">About</a></li>
            <li><a href="/pages/FAQ">Faq</a></li>
            <li class="active"><a href="/blog">Blog</a></li>
        </ul>
      </div>
      <div class="clear"></div>
        <div id="left-nav">
          <div class="left-nav-button">
            <img alt="arrow" src="/images/bluearrow.png?1262744906" />
            <div class="left-link">

              <a href="/shop_searches/new" id="new_search">Find a shop</a>
            </div>
          </div>
          <div class="left-nav-button">
            <img alt="arrow" src="/images/bluearrow.png?1262744906" />
            <div class="left-link">
              <a href="/surfer_searches/new" id="new_search">Find a surfer</a>
            </div>

          </div>
          <div id="lower-left-nav">
            <div class="left-nav-button">
              <img alt="arrow" src="/images/bluearrow.png?1262744906" />
              <div class="left-link">
                <a href="/boards/new" id="new_board">Add a board</a>
              </div>
            </div>

            <div class="left-nav-button">
              <img alt="arrow" src="/images/bluearrow.png?1262744906" />
              <div class="left-link">
                <a href="/board_searches/new" id="new_search">Find a board</a>
              </div>
            </div>
          </div>
        </div>
      <div id="container">
        <div id="mainContent">
