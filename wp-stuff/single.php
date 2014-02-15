<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article>
  <div class="info group">
    <div class="published-on"><?php the_date(); ?></div>
    <p class="tags">Posted in <?php the_tags(); ?></p> 
  </div><!-- info --> 

  <header>

    <h1><?php the_title(); ?></h1>
  </header>

  <div class="article-wrap">
    <?php the_content(); ?>



    <section id="comments">


      <p class="comments">
	<?php comments_popup_link(__('No responses yet'), __('One response so far'), __('% responses so far')); ?>
      </p>
      <?php comments_template(); // Get wp-comments.php template ?>

  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
  </section><!-- Comments -->
</div> <!-- Article Wrap -->
</article>

<?php get_footer();?>
