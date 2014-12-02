<?php   get_header();   if (have_posts()) : while (have_posts()) : the_post();
  ?>
<div class="col-md-8">
    <div class="single-post-inner">
     <article class="single-post-content">
         <header class="single-post-header">
          <h1 class="single-post-title">
              <?php the_title(); ?>
          </h1>
          <small class="small">
                  <?php the_date(); ?> by <?php the_author_posts_link(); ?>   </small> <br>
        <small><b>Posted in : </b> <?php the_category(', '); ?></small>
      </header>
      <div class="post">
          <?php the_content(__('(more...)')); ?>
        <small><b>Tags:</b> <?php the_tags('') ; ?></small>
     </div>

    <div class="author row clearfix">
      <figure class="author-image">
          <?php echo get_avatar('naveensingh.org@gmail.com'); ?>
      </figure>
      <div class="col-md-12">
        <h5>About  <?php the_author_posts_link(); ?> :</h5>
        <p> <?php the_author_description(); ?></p>
        <small>Author's Website : <?php the_author_link(); ?></small>
      </div>
    </div>
    <?php comments_template(); endwhile; else: ?>

    </article>

		<p>Sorry, no posts matched your criteria.</p>
       <?php endif; ?>
    </div>
</div>
<?php  get_footer(); ?>
