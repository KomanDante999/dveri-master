	<!-- Футер -->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
				<?php 
					wp_nav_menu( [
						'theme_location' => 'bottom',
						'container' => '',
						'items_wrap' => '%3$s'
					] );
				?>
					<span class="accent-color">&copy; </span>
					<?php
						$settings = get_posts( [
								'numberposts' => 1,
								'category_name' => 'settings',
								'post_type' => 'post',
						] );

						foreach($settings as $post) {
								setup_postdata($post);
								// Get the catalog_bg custom field value
								$copyright = CFS()->get('copyright-sign');
								$date = date('Y');
								if ($copyright) {
									echo  '<span>' . esc_html($copyright) . ' - ' . esc_html($date) . '</span>';
								}
						}
						wp_reset_postdata();
          ?>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer(  ); ?>
	</body>
	</html>