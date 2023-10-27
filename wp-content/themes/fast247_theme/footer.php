        <footer id="colophon" class="site-footer" role="contentinfo">
			<?php
				if (is_active_sidebar('logistica_sidebar_5'))
				{
					?>
						<div class="footer-subscribe">
							<div class="layout-medium">
								<?php
									dynamic_sidebar('logistica_sidebar_5');
								?>
							</div> <!-- .layout-medium -->
						</div> <!-- .footer-subscribe -->
					<?php
				}
				
				if (is_active_sidebar('logistica_sidebar_6'))
				{
					?>
						<div class="footer-insta">
							<?php
								dynamic_sidebar('logistica_sidebar_6');
							?>
						</div> <!-- .footer-insta -->
					<?php
				}
				
				if (is_active_sidebar('logistica_sidebar_9') || 
					is_active_sidebar('logistica_sidebar_10') || 
					is_active_sidebar('logistica_sidebar_11') || 
					is_active_sidebar('logistica_sidebar_12'))
				{
					?>
						<div class="footer-widgets widget-area">
							<div class="layout-medium">
								<div class="row">
									<?php
										function logistica_footer_columns_3()
										{
											?>
												<div class="col-md-4">
													<?php
														dynamic_sidebar('logistica_sidebar_9');
													?>
												</div> <!-- .col-md-4 -->
												<div class="col-md-4">
													<?php
														dynamic_sidebar('logistica_sidebar_10');
													?>
												</div> <!-- .col-md-4 -->
												<div class="col-md-4">
													<?php
														dynamic_sidebar('logistica_sidebar_11');
													?>
												</div> <!-- .col-md-4 -->
											<?php
										}
										
										function logistica_footer_columns_4()
										{
											?>
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('logistica_sidebar_9');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('logistica_sidebar_10');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('logistica_sidebar_11');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
												<div class="col-sm-6 col-lg-3">
													<?php
														dynamic_sidebar('logistica_sidebar_12');
													?>
												</div> <!-- .col-sm-6 .col-lg-3 -->
											<?php
										}
										
										$logistica_footer_columns = get_theme_mod('logistica_setting_footer_columns', '4');
										
										if ($logistica_footer_columns == '3')
										{
											logistica_footer_columns_3();
										}
										else
										{
											logistica_footer_columns_4();
										}
									?>
								</div> <!-- .row -->
							</div> <!-- .layout-medium -->
						</div> <!-- .footer-widgets .widget-area -->
					<?php
				}
				
				if (is_active_sidebar('logistica_sidebar_7'))
				{
					?>
						<div class="site-info">
							<?php
								dynamic_sidebar('logistica_sidebar_7');
							?>
						</div> <!-- .site-info -->
					<?php
				}
			?>
		</footer> <!-- #colophon .site-footer -->
	</div>
    
	<?php
		wp_footer();
	?>
</body>
</html>