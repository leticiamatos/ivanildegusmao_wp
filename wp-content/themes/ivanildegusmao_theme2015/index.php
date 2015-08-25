<?php get_header(); ?>

<!-- Gallery -->
<section class="block_wpr block_01">
	<section class="block_cntt">
		<?php createGallery($pg_gall); ?>
	</section>
</section>

<!-- Posts -->
<section class="block_wpr block_02">
	<section class="block_cntt">
		<div class="separator">
			<span class="ico"></span>
		</div>
		<div class="posts_list">
			<?php get_template_part('loop'); ?>
			<span class="clear"></span>

			<?php //get_template_part('pagination'); ?>

		</div>
		<div class="post_list top_posts">
			<h3 class="col_title">As mais acessadas</h3>

			<?php 
			$args = array(
				'limit' => '3',
				'stats_category' => '1',
				'stats_date' => '1',
				'stats_date_format' => 'd/m/Y',
				'stats_views' => '0'
				);
			?>
			<?php wpp_get_mostpopular($args); ?>
			<span class="clear"></span>

		</div>
	</section>
</section>


<?php //get_sidebar(); ?>

<?php get_footer(); ?>
