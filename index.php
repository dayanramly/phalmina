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
	<div class="col-xs-2">
		<h3>Popular Tags</h3>
	</div>
	<div class="col-xs-10">
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

<div class="container phalmina-home-body">
	<div class="row">
		<div class="col-xs-6">
			<div id="home-slider">

				<?php dynamic_sidebar('sidebar-1'); ?>

			</div> <!-- end of home-slider -->
		</div>
		<div class="col-xs-3 phalmina-urgent">
			<ul>
				<li>Peta</li>
				<li>Nomor Telepon Penting</li>
				<li>Kamus Ngapak</li>
			</ul>
		</div>
		<div class="col-xs-3 right-box">
			right gallery
		</div>
	</div>
</div>
<div class="container phalmina-home-body">

	<div class="row">
		<div class="col-xs-9"> <!-- berita terbaru -->
			<div class="phalmina-box">
				<h3>Popular Today</h3>
				<?php query_posts( 'posts_per_page=6' );?>
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<a href="<?php the_permalink() ?>">
					<div class="home-blog-post">
						<div class="col-xs-2">
							<div class="home-post-thumb">
								<img class="img-responsive" src="<?php echo $image[0]; ?>">
							</div>
						</div>
						<div class="col-xs-10">							
							<div class="home-post-title">
								<h3><?php the_title(); ?> </h3>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</a>

			<?php endwhile;?>
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
<div class="col-xs-3 right-box">
	<div class="phalmina-box">
		<h3>Popular Post</h3>
		<?php query_posts( 'posts_per_page=6' );?>
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<a href="<?php the_permalink() ?>">
			<div class="home-blog-post">
				<div class="col-xs-2">
					<div class="home-post-thumb">
						<img class="img-responsive" src="<?php echo $image[0]; ?>">
					</div>
				</div>
				<div class="col-xs-10">							
					<div class="home-post-title">
						<h3><?php the_title(); ?> </h3>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</a>

	<?php endwhile;?>
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