<?php 
/*
Template Name: Articles by Tag
*/
get_header(); ?>
<div id="content">

	<?php while(have_posts()) : the_post(); ?>
 <h1><?php single_tag_title(); ?></h1>
	<ul class='article_list'>
	 
<li><?php the_time('M d, Y') ?> <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
<div class="tags">Posted in <?php the_tags(); ?></div></li>
<?php endforeach; ?>
</ul>
<?php endwhile; ?>
</div><!-- content -->
<?php get_footer(); ?>
