<article>
<div class="info group">
      <div class="published-on"><?php the_date(); ?></div>
</div><!-- info --> 

	<header class="article-header">
		<h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	</header>

<div class="article-wrap">
	<?php the_content(); ?>
</div><!-- article-wrap -->

</article>
