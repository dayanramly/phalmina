<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme and one
* of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query,
* e.g., it puts together the home page when no home.php file exists.
*/

get_header(); ?>

<!-- <div class="container-fluid phalmina-home-body-container"> -->
<div class="divider-full"></div>
<div class="container phalmina-home-popular">
	<div class="col-md-2 col-xs-4">
		<h3>Popular Tags</h3>
	</div>
	<div class="col-md-10 col-xs-8">
		<ul>
			<?php
			$posttags = get_the_tags($post->ID);
			if ($posttags) {
				foreach($posttags as $tag) {
					echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
				}
			}
			?>
		</ul>
	</div>
</div>
<div class="divider-full"></div>

<div class="container phalmina-home-slider">
	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div id="home-slider">

				<?php dynamic_sidebar('sidebar-1'); ?>

			</div> <!-- end of home-slider -->
		</div>
		<div class="col-md-3 col-xs-6 phalmina-urgent">
			<ul>
				<li>
					<p>Peta Angkot</p>
					<span>Upcoming</span>
					<!-- <a href=" http://localhost/ngapangapak/peta-angkot/">Peta Angkot</a> -->
				</li>
				<li>
					<p>Nomor Telepon Penting</p>
					<span>Upcoming</span>
					<!-- <a href="http://localhost/ngapangapak/nomor-telepon-penting/">Nomor Telepon Penting</a> -->
				</li>
				<li>
					<p>Kamus Ngapak</p>
					<span>Upcoming</span>
					<!-- <a href="http://localhost/ngapangapak/kamus-ngapak/">Kamus Ngapak</a> -->
				</li>
			</ul>
		</div>
		<div class="col-md-3 col-xs-6 phalmina-socmed">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-page" data-href="https://www.facebook.com/pages/Ngapangapak/1641449856098305" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Ngapangapak/1641449856098305"><a href="https://www.facebook.com/pages/Ngapangapak/1641449856098305">Ngapangapak</a></blockquote></div></div>
			<ul>
				<!-- 				<li>Facebook</li> -->
				<li class="twitter">Twitter <img src="wp-content/themes/phalmina/img/twitter.png"></li>
				<li class="gplus">Google + <img src="wp-content/themes/phalmina/img/gplus.png"></li>
			</ul>
		</div>
	</div>
</div>

<div class="container phalmina-home-body">
	<div class="divider-full"></div>
	<div class="row">
		<div class="col-md-8 col-xs-12"> <!-- berita terbaru -->
			<div class="phalmina-popular-post">
				<h2>Popular Today</h2>
				<div class="phalmina-box">
					<?php query_posts( 'posts_per_page=6' );?>
					<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<a href="<?php the_permalink() ?>">
						<div class="home-blog-post">
							<div class="col-md-2 col-xs-3">
								<div class="home-post-thumb">
									<img class="img-responsive" src="<?php echo $image[0]; ?>">
								</div>
							</div>
							<div class="col-md-10 col-xs-9">							
								<div class="home-post-title">
									<h3><?php the_title(); ?> </h3>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</a>

				<?php endwhile;?>
			</div>
		<?php else : ?>
		<div class="col-xs-12">
			<div class="home-blog-post">
				<h4>Belum ada postingan</h4>
			</div>
		</div>
	<?php endif; ?>

</div>

<div class="clearfix"></div>             
</div> <!-- end of berita terbaru -->

<!-- <div class="col-xs-2 center-box">
	<div class="phalmina-box">
		center-side
	</div>
</div> -->
<div class="col-md-4 col-xs-12">
	<div class="phalmina-popular-post">
		<h2>Popular Post</h2>
		<div class="phalmina-box right-box">

			<?php query_posts( 'posts_per_page=6' );?>
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			<a href="<?php the_permalink() ?>">
				<div class="home-blog-post popular-blog-post">
					<div class="col-xs-3">
						<div class="home-post-thumb">
							<img class="img-responsive" src="<?php echo $image[0]; ?>">
						</div>
					</div>
					<div class="col-xs-9">							
						<div class="home-post-title">
							<h3><?php the_title(); ?> </h3>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</a>

		<?php endwhile;?>
	</div>
<?php else : ?>
	<div class="col-xs-12">
		<div class="home-blog-post">
			<h4>Belum ada postingan</h4>
		</div>
	</div>
<?php endif; ?>

</div>
</div>

</div>

</div>

<!-- </div> -->

<?php get_footer();?>