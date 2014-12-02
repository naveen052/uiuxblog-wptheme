<?php get_header();?>
<div class="col-md-8">
 <div class="post-loop-container">
 <div class="single-row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="single-article-in-loop" id="post-<?php the_ID(); ?>" role="article">

<li class="post-wrapper" id="post-<?php the_ID(); ?>">
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
              <?php } ?>
          </a>
       </div>
    </div>
    <div class="col-md-8">
        <small><?php the_date(); ?> by <?php the_author();?></small>
        <div class="post-excerpt">
            <?php the_excerpt(custom_excerpt_length, new_excerpt_more); ?>
        </div>
</li>
</article>
<?php $counter++; if ($counter % 2 == 0) {
  echo '</div><div class="ct-row">';
} endwhile; endif; ?>

</div><!-- /row -->
     </div>
    </div>


  <?php
  get_footer();
?>
