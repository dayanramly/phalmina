<footer>
	<div class="divider-full"></div>
	<div class="container phalmina-home-footer">
		<div class="row">
			<div class="col-xs-4">
				<a href="<?php bloginfo('url')?>">
					<img class="media-object" src="<?php echo get_option_tree('change_footer_logo') ?>" >
				</a>
			</div>
			<div class="col-xs-4">
				<h4><?php echo get_option_tree('footer_middle_title');?></h4>
				<p><?php echo get_option_tree('footer_middle'); ?></p>
			</div>
			<div class="col-xs-4">
				<h4><?php echo get_option_tree('footer_right_title');?></h4>
				<p><?php echo get_option_tree('footer_right'); ?></p>
			</div>
		</div>
	</div>
	<div class="divider-bottom-dashed"></div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 phalmina-copyright">
				<?php echo get_option_tree('copyright_text') ?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>