			<section class="block_wpr footer">
				<footer class="block_cntt">
					<div class="separator">
						<span class="ico"></span>
					</div>
					<nav class="menu_cntt">
						<?php wp_nav_menu( ); ?> 
					</nav>
					<div class="separator"></div>
					<p class="copyright">
						Copyright &copy; <?php bloginfo('name'); ?>
						<?php echo date('Y'); ?> 
						- Todos os direitos reservados
					</p>
					<div class="by">
						<span>by:</span>
						<a href="#" target="_blank" title="Gustavo Lins"></a>
					</div>
				</footer>
			</section>

		</section>
		<!-- /general -->

		<?php wp_footer(); ?>

		
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		
		<!-- Google+ -->
		<script src="https://apis.google.com/js/platform.js" async defer>
		  {lang: 'pt-BR'}
		</script>

	</body>
</html>
