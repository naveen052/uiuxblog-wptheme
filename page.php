<?php

  /**
  *@desc A page. See single.php is for a blog post layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>
<div class="row">
    <div class="col-md-12">
    <div class="single-post-inner">
    <article class="single-post-content">
         <header class="single-post-header">
          <h1 class="single-post-title">
              <?php the_title(); ?>
          </h1>
          <small class="small">
                  <?php the_date(); ?> by <?php the_author_posts_link(); ?>   </small> <br>
      </header>
      <div class="post"><?php the_content(__('(more...)')); ?></div>
  <?php
  comments_template();

  endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>

<?php endif; ?>
</article>
        </div> </div>
<?php get_footer(); ?>
