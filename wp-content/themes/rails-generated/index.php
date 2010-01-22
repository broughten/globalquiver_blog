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
            <ul>
              <li id="signup_link"><a href="/users/new">Join Global Quiver</a></li><li id="login_link"><a href="/session/new">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tabs">
        <ul>
            <li><a href="/pages/Home">Home</a></li>
            <li><a href="/pages/About">About</a></li>
            <li><a href="/pages/FAQ">Faq</a></li>
            <li><a href="/blog">Blog</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      <div id="left-nav">
        <div class="left-nav-button">
          <img src="/images/bluearrow.png?1262744906" alt="arrow" />
          <div class="left-link">
            <a href="/boards/new" id="new_board">Add a board</a>
          </div>
        </div>
        <div class="left-nav-button">
          <img src="/images/bluearrow.png?1262744906" alt="arrow" />
          <div class="left-link">
            <a href="/board_searches/new" id="new_search">Find a board</a>
          </div>
        </div>
      </div>
      <div id="container">
        <div id="mainContent">
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                                <div id="nav-above" class="navigation">
                                        <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                                        <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                                </div><!-- #nav-above -->
<?php } ?>                      

<?php /* The Loop — with comments! */ ?>                        
<?php while ( have_posts() ) : the_post() ?>

<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>          
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                               
<?php /* an h2 title */ ?>                                                      
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                        
<?php /* Microformatted, translatable post meta */ ?>                                                                           
                                        <div class="entry-meta">
                                                <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
                                                <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                                                <span class="meta-sep"> | </span>
                                                <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
                                                <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                                                <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
                                        </div><!-- .entry-meta -->

<?php /* The entry content */ ?>                                        
                                        <div class="entry-content">     
<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
                                        </div><!-- .entry-content -->

<?php /* Microformatted category and tag links along with a comments link */ ?>                                 
                                        <div class="entry-utility">
                                                <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
                                                <span class="meta-sep"> | </span>
                                                <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
                                                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
                                                <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
                                        </div><!-- #entry-utility -->   
                                </div><!-- #post-<?php the_ID(); ?> -->

<?php /* Close up the post div */ ?>                    
        
<?php endwhile; ?>              

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                                <div id="nav-below" class="navigation">
                                        <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                                        <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                                </div><!-- #nav-below -->
<?php } ?> 
          <div id="footer">
            <p>Copyright &copy; 2010  Global Quiver, Inc.</p>
            <ul>
              <li class="last"><a href="mailto:info@kelsusconsulting.com">Found a Bug?</a></li>
            </ul>
            <div id="surfer-pic-bottom">
              <img src="/images/tajburrowpic.jpg" id="taj-burrow-pic" alt="tajburrowpic" />
            </div>
          </div>
        </div><!--Main Content-->
      </div><!--Container from header-->
    </div><!--Outter container--> 
    <script type="text/javascript">
      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
      try {
        var pageTracker = _gat._getTracker("");
        pageTracker._trackPageview();
      } catch(err) {}
    </script>
  </body>
</html>
