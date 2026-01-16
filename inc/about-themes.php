<?php
//about theme info
add_action( 'admin_menu', 'skt_ui_ux_abouttheme' );
function skt_ui_ux_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-ui-ux'), esc_html__('About Theme', 'skt-ui-ux'), 'edit_theme_options', 'skt_ui_ux_guide', 'skt_ui_ux_mostrar_guide');   
} 
//guidline for about theme
function skt_ui_ux_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-ui-ux'); ?>
		   </div>
          <p><?php esc_html_e('SKT UI UX is a design agency type of template with support for interior design, graphich design, website design, fashion design, web developers, SEO and digital marketing companies, branding and logo design, application design and product design. Minimal and minimalistic design and material and flat design. User interface and user interaction for easy navigation. Fully customizable, simple, flexible and easy to use with Elementor page builder. Freelancer, portfolio and creative people also can use. WooCommerce, contact form 7, SEO plugins compatible.','skt-ui-ux'); ?></p>
          <a href="<?php echo esc_url(SKT_UI_UX_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_UI_UX_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-ui-ux'); ?></a> | 
				<a href="<?php echo esc_url(SKT_UI_UX_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-ui-ux'); ?></a> | 
				<a href="<?php echo esc_url(SKT_UI_UX_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-ui-ux'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_UI_UX_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>