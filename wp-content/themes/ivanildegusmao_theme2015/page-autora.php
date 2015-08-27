<?php
/**
 * Template Name: A Autora
 */
?>
<?php get_header(); ?>

<section class="block_wpr block_02">
	<section class="block_cntt">
		
		<!-- About text -->
		<div class="about_wpr">
			<h2 class="page_title"><?php the_title(); ?></h2>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<div class="photo">
					<?php postContent($pg_apho); ?>
				</div>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					

					<?php the_content(); ?>

					<div class="separator"></div>
					<span class="clear"></span>

				</article>

			<?php endwhile; ?>

			<?php else: ?>
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					
				</article>
			<?php endif; ?>
		</div>

		<!-- Publications -->
		<div class="publicat_wpr">
			<h3 class="col_title"><?php postTitle($pg_apub); ?></h3>

			<div class="publicat_list about_list">
				<?php postContent($pg_apub); ?>
			</div>
		</div>


		<!-- Participations -->
		<div class="particip_wpr">
			<h3 class="col_title"><?php postTitle($pg_apar); ?></h3>

			<div class="particip_list about_list">
				<?php postContent($pg_apar); ?>
			</div>
		</div>
		<span class="clear"></span>


	</section>
</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
