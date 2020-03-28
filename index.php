<?php get_header(); ?>

<!-- Page content -->
<div id="content">
	<div class="container">
		<?php if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
		endif; ?>
	</div>
</div>

<?php get_footer(); ?>