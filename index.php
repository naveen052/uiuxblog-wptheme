<?php get_header();?>
<div class="col-md-8" id="ajax-container">
 <div class="post-loop-container">
 <div class="single-row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="single-article-in-loop" id="post-<?php the_ID(); ?>" role="article">
<?php  if(has_post_thumbnail()) { ?>
    <div class="featured-image">
          <a class="js-ajax-link"  href="<?php the_permalink() ?>">
            <?php the_post_thumbnail('');?>

          </a>
       </div>
<?php } ?>
<li class="post-wrapper" id="post-<?php the_ID(); ?>">
<h2 class="post-title">
     <a class="js-ajax-link"  href="<?php the_permalink() ?>" rel="bookmark">
          <?php the_title(); ?>
      </a>
</h2>
<div class="row">
    <small><?php the_date(); ?> by <?php the_author();?></small>
        <div class="post-excerpt">
            <?php the_excerpt(custom_excerpt_length, new_excerpt_more); ?>
        </div>
    </div>
</li>
</article>
<?php $counter++; if ($counter % 2 == 0) {
  echo '</div><div class="single-row">';
} endwhile; endif; ?>

</div><!-- /row -->
     </div>
    </div>


  <?php  get_footer(); ?>
