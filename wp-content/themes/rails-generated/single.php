<?php get_header(); ?>    
<div id="blog-container">    
  <div id="content">

  <?php the_post(); ?>

    <div id="nav-above" class="navigation">
      <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
      <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
    </div><!-- #nav-above -->

    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 class="entry-title"><?php the_title(); ?></h1>

      <div class="entry-meta">
        <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
        <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
        <span class="meta-sep"> | </span>
        <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
        <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
        <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
      </div><!-- .entry-meta -->

      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
      </div><!-- .entry-content -->
      
      <h3>Actions</h3>
      <ul class="actions">

        <li class="with_icon">
          <img alt="rss" src="http://s1.wordpress.com/wp-content/themes/pub/freshy/images/icons/feed-icon-16x16.gif" class="icon">&nbsp;
          <a href="<?php comments_rss() ?>">Comments RSS</a>
        </li>
        <?php if ('open' == $post->ping_status) : // Comments or trackbacks open ?>  
        <li class="with_icon">
          <img alt="trackback" src="http://s1.wordpress.com/wp-content/themes/pub/freshy/images/icons/trackback-icon-16x16.gif" class="icon">&nbsp;
          <a title="make a trackback" rel="trackback" href="<?php get_trackback_url() ?>">Trackback</a>
        </li>
        <?php endif; ?>
        <li class="with_icon">
          <img alt="edit" src="http://s1.wordpress.com/wp-content/themes/pub/freshy/images/icons/edit-icon-16x16.gif" class="icon">&nbsp;
          <a title="make a trackback" rel="trackback" href="<?php get_permalink() ?>">Bookmark</a>
        </li>
        <li>
          <?php edit_post_link( __( 'Edit', 'your-theme' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
        </li>
      </ul>
      <h3>Information</h3>
      <ul class="information">
        <li>
          <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>">Date: <?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
        </li>
        <li>
          Tags: <?php get_the_tag_list( __( ' and tagged ', 'rails-generated' ), ', ', '' ) ?>
        </li>
        <li>
          Categories : get_the_category_list(', ') ?>
        </li>
      </ul>
    </div><!-- #post-<?php the_ID(); ?> -->
                                
    <div id="nav-below" class="navigation">
      <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
      <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
    </div><!-- #nav-below -->

    <?php comments_template('', true); ?>
                        
  </div><!-- #content -->
</div><!-- #container -->
                
<?php get_sidebar(); ?> 
<?php get_footer(); ?>

