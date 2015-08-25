<?php $n = 1 ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- article -->
	<!-- Add cat slug and post order to div class -->
	<div class="post_item <?php echo 'postorder_'. $n; ?> <?php foreach( get_the_category($post->ID) as $cat ) { echo 'cat_'.$cat->slug; }; ?>">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<span class="category"><?php the_category(); ?></span>
			<span class="date">Postado em <?php the_time('d/m/Y'); ?></span>
			<h2 class="title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<div class="text">
				<?php the_excerpt(); ?>
			</div>
		</article>
	</div>
	<!-- /article -->
	<?php $n += 1 ?>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
