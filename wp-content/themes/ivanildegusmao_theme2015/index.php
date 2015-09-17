<?php get_header(); ?>

<!-- Gallery -->
<section class="block_wpr block_01">
	<section class="block_cntt">

<?php 

	function get_gallery_attachments( $post_id ){

		$post = get_post( $post_id ); 
		$post_content = $post->post_content;
		preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
		$images_id = explode(",", $ids[1]);
		
		return $images_id;
	}

 	$gallery_images_id = get_gallery_attachments($pg_gall);

	$image_list = '<ul class="bxslider">';

	// Loop through each image in each gallery
	foreach( $gallery_images_id as $img_id ) {

		$post_obj = get_post( $img_id );
		$img_caption = $post_obj->post_excerpt;

		$image_list .= '<li>';
		if ($img_caption){
			$image_list .= '<a href="' . $img_caption . '">';
			$image_list .= 	wp_get_attachment_image( $img_id, 'full' );
			$image_list .= '</a>';
		}else{
			$image_list .= 	wp_get_attachment_image( $img_id, 'full' );
		}
		$image_list .= '</li>';

	}

	$image_list .= '</ul>';
	echo $image_list;
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
