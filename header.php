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
				<ul id="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                </ul>
                <div class="row">
                    <div class="col-xs-12">
                        Ini Header
                    </div>
                </div>
            </div>
        </div>
    </header>