<?php
/**
 * Template Name: Page
 */
?>
<?php get_header(); ?>

<section class="block_wpr block_02">
	<section class="block_cntt">
		
		<div class="sinle_wpr">
			<div class="separator"></div>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<div class="post_item <?php echo 'postorder_'. $n; ?> <?php foreach( get_the_category($post->ID) as $cat ) { echo 'cat_'.$cat->slug; }; ?>">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<span class="date">Postado em <?php the_time('d/m/Y'); ?></span>
						<span class="category"><?php the_category(); ?></span>
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="text">
							<?php the_content(); ?>
						</div>
					</article>
				</div>
			<?php endwhile; ?>

			<?php else: ?>
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					
				</article>
			<?php endif; ?>
		</div>
		<div class="comments_wpr">
			<div class="separator"></div>
			<span class="title">Deixe seu comentário</span>

			<div class="share_bar">
				<span class="bar_title">Compartilhe:</span>
				<div class="button_wpr">
					<!-- Facebook -->
					<div class="face share_button">
						<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button"></div>
					</div>

					<!-- Twitter -->
					<div class="twit share_button">
						<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-count="none">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>

					<!-- Pint -->
					<div class="lkin share_button">
						<a href="<?php the_permalink(); ?>" data-pin-do="buttonBookmark"  data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a>
						<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
					</div>

					<!-- Google+ -->
					<div class="plus share_button">
						<div class="g-plus" data-action="share" data-annotation="none" data-href="<?php the_permalink(); ?>"></div>
					</div>

				</div>

			</div>
			<div class="comments">
				<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"  data-width="960"></div>
			</div>

		</div>

	</section>
</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
