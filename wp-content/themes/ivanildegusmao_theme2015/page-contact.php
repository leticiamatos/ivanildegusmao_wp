<?php
/**
 * Template Name: Contato
 */
?>
<?php get_header(); ?>

<section class="block_wpr block_02">
	<section class="block_cntt">
		
		<!-- About text -->
		<div class="contact_wpr">
			<h2 class="page_title">Entre em contato</h2>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<div class="text">
						<?php the_content(); ?>

						<!--form>
							<div class="col_1">
								<label for="txt_nome">Nome</label>
								<div class="form_div form_name">
									<input type="texto" class="txt" id="txt_nome" />
								</div>
								<label for="txt_email">E-mail</label>
								<div class="form_div form_email">
									<input type="texto" class="txt" id="txt_email" />
								</div>
								<label for="txt_subj">Assunto</label>
								<div class="form_div form_subj">
									<input type="texto" class="txt" id="txt_subj" />
								</div>
							</div>
							<div class="col_2">
								<label for="txt_messa">Mensagem</label>
								<div class="form_div form_messa">
									<textarea class="txt" id="txt_messa"></textarea>
								</div>
							</div>
							<div class="buttons">
								<input type="submit" class="btn" value="Enviar Mensagem" />
							</div>
						</form-->
					</div>

				</article>

			<?php endwhile; ?>

			<?php else: ?>
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					
				</article>
			<?php endif; ?>
		</div>

	</section>
</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
