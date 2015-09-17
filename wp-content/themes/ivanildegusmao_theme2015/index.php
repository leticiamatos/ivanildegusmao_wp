<?php get_header(); ?>

<!-- Gallery -->
<section class="block_wpr block_01">
	<section class="block_cntt">
		<?php
			//createBannerGallery($args_gallery);

			//$attachments = get_posts($args);
			 $attachments = get_attached_media( 'image', 108 );
	        echo '<h2>108</h2>';

	        // Loop through each image in each gallery
	        if ( $attachments ){
	            echo "Olar";
	            $image_list = '<ul class="bxslider">';
	            
	            foreach ( $attachments as $attachment ):
	                // Get attachment caption as URL

					$attach_meta = wp_get_attachment_metadata( $attachment->ID);
					$attach_image_meta =  $attach_meta->image_meta;
					$attach_image_meta_cap = $attach_image_meta->caption;
					$attach_image_meta_title = $attach_image_meta->title;
					echo '<h3>' . $attach_image_meta_cap . '</h3>';
					echo '<h3>' . $attach_image_meta_title . '</h3>';

	                // $attach_caption = $attachment->post_excerpt;
	                // $attach_img = wp_get_attachment_image($attachment->ID, 'full');

	                // if ( $attach_caption ):
	                //     $image_list .= '<li><a href="' .$attach_caption . '">'.$attach_img.'</a></li>';
	                // else :
	                //     $image_list .= '<li>'.$attach_img.'</li>';
	                // endif;


	            endforeach;

	            $image_list .= '</ul>';
	            echo $image_list;
	        }

		?>

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
		<span class="clear"></span>
		<div class="post_list top_posts">
			<h3 class="col_title">As mais acessadas</h3>
			<span class="clear"></span>

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
