<?php 
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
* @subpackage Phalmina
* @since Phalmina
*/

get_header(); ?>
<div class="divider-full"></div>
<div class="container phalmina-page-container">

	<div class="row">

		<div class="col-md-8 col-xs-12 phalmina-page">
			<?php 
			while ( have_posts() ) : the_post();
			the_title( '<h2 class="phalmina-page-title">', '</h2>' );

			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

			<img src="<?php echo($image[0]); ?>" alt="" class="img-responsive img-page">

			<?php
			the_content();

			endwhile; 
			?>
		</div>
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

<?php get_footer();?>