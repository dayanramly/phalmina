<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="navigation">      
			<div class="container">
				<div class="row">
					<div class="col-xs-3">
						<div class="logo">          
							<a href="<?php bloginfo('url')?>">
								<img class="media-object" src="<?php echo get_option_tree('change_logo') ?>" >
							</a>
						</div>
					</div>
					<div class="col-xs-9">
<!-- 						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label>
								<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
								<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</label>
							<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
						</form> -->
<!-- 						<ul id="nav">
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
	</header>