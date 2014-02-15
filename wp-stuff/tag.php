<?php 
/*
Template Name: Articles by Tag
*/
get_header(); ?>
<div id="content">
 <h1><?php single_tag_title(); ?></h1>

	<?php while(have_posts()) : the_post(); ?>

	<ul class='article_list'>
	 
<li><?php the_time('M d, Y') ?> <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
<div class="tags">Posted in <?php the_tags(); ?></div></li>
</ul>
<?php endwhile; ?>
</div><!-- content -->
<?php get_footer(); ?>
