<?php get_header(); ?>

<!-- Page content -->
<div id="content">
	
	<!-- Posts --> 
	<div class="container">
		<?php if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
		endif; ?>
	</div>

	<!-- Comments -->
	<div class="container">
		<?php if (comments_open()) :
			comments_template();
		endif; ?>
	</div>

</div>

<?php get_footer(); ?>