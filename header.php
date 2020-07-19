<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8" />
	
	<!--<meta name="description" content="<?php echo get_bloginfo('description'); ?>">-->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />
	<meta name="theme-color" content="#252525" />

	<?php wp_head(); ?>
</head>
<body>

<div id="loader"></div>
<div id="page-wrapper">

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top <?php if (is_front_page()) echo 'home-navigation'; else echo 'sub-navigation';?>" role="navigation" id="navigation">
	<div class="container">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<img src="<?php echo get_template_directory_uri().'/images/logo.png';?>" id="logo">
			<?php if (!is_front_page()) : ?>
				
			<?php endif; ?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bootstrap_navbar" aria-controls="bootstrap_navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => 'div',
				'container_class'   => 'collapse navbar-collapse justify-content-end',
				'container_id'      => 'bootstrap_navbar',
				'menu_class'        => 'nav navbar-nav',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			));
		?>
	</div>
</nav>

<?php if (is_front_page()) : ?>
	<!-- Header -->
	<div class="container-fluid" id="header" style="background-image: url(<?php echo get_template_directory_uri().'/images/banner-dark.jpg'; ?>)">
		<div class="row">
			<div class="col-md-12" id="header-content">
				<div class="col-md-12">
					<strong class="leading-text">Backridge Butcher</strong>
				</div>
				<div class="col-md-12 sub-text">
					<strong>
						<a href="/butchery">Game Butcher</a>
						<a target="_blank" href="https://youtube.com/backridgebutcher">YouTuber</a>
						<a href="/boneyard">Bone Yard</a>
					</strong>
				</div>
			</div>
			<div class="col-md-12" id="header-sub">
				<a id="header-button" href="#">
					<strong>LEARN MORE</strong>
				</a>
			</div>
		</div>
	</div>
<?php endif; ?>
