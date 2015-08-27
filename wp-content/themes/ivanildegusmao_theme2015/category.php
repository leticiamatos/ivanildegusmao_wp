<?php
/**
 * Template Name: Categoria
 */
?>

<?php get_header(); ?>

<section class="block_wpr block_02">
	<section class="block_cntt">
		
		<!-- About text -->
		<div class="category_wpr">
			<div class="separator"></div>
			<h2 class="page_title"><?php instant_breadcrumb(); ?></h2>
			<div class="separator"></div>

			<div class="posts_list">

				<?php get_template_part('loop'); ?>

 			</div>

			<?php $pagination_args = array(
				'prev_text'          => __('<'),
				'next_text'          => __('>')
			); ?>

			<div class="pagination">
				<?php echo paginate_links( $pagination_args ); ?>
			</div>
		
		</div>

	</section>
</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>