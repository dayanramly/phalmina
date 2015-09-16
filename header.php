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
					<div class="col-md-3 col-xs-6">
						<div class="logo">          
							<a href="<?php bloginfo('url')?>">
								<img class="media-object" src="<?php echo get_option_tree('change_logo') ?>" >
							</a>
						</div>
					</div>
					<div class="col-md-4 col xs-6 col-md-offset-5 phalmina-search-bar">
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
							<label>
								<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Cari Disini …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
							</label>
							<input type="submit" class="search-submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>" />
						</form>
						<?php //dynamic_sidebar('search-bar'); ?>
					</div>
				</div>
			</div>
		</div>
	</header>