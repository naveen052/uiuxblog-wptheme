<?php get_header(); if (have_posts()): ?>
<div class="col-md-8">
  <ol class="posts-loop"><?php while (have_posts()) : the_post(); ?>
    <li class="post-wrapper col-md-6" id="post-<?php the_ID(); ?>">
        <article class="single-loop-post">
        <div class="border">
         <div class="loop">
          <h2 class="post-title">
              <a href="<?php the_permalink() ?>" rel="bookmark">
                  <?php the_title(); ?>
              </a>
          </h2>
        <div class="row">
            <div class="col-md-4">
                 <div class="featured-image">
                  <a href="<?php the_permalink() ?>">
                    <?php  if(has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('');?>
                      <?php } ?> </a></div>
            </div>
        <div class="col-md-8">
        <small><?php the_date(); ?> by <?php the_author();?></small>
    <div class="post-excerpt">
    <?php the_excerpt(custom_excerpt_length, new_excerpt_more); ?>
    </div>
        </div>
        </div>
            </div></div>
    </article>
    </li>

    <?php comments_template();?>

    <?php endwhile; ?>

  </ol>
<?php else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
  <?php if (will_paginate()): ?>
  
    <div class="row">
        <div class="paginate-div clearfix">
          <div class="col-md-12 centered">
            <?php next_posts_link( 'Older posts' ); ?>
            <?php previous_posts_link( 'Newer posts' ); ?>
          </div>
        </div>
      </div>
</div>
  <?php endif; ?>


  <?php
  get_footer();
?>
