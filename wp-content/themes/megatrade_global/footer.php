<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package megatrade_global
 */

?>

	<footer id="colophon" class="footer bg-black small text-center text-white-50">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'megatrade_global' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'megatrade_global' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'megatrade_global' ), 'megatrade_global', '<a href="http://renjirock.github.io/">mauricio ballesteros</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	
</body>

	<script type="text/javascript">  
		$(function () {
			$('#WAButton').floatingWhatsApp({
				phone: '573008951086', //WhatsApp Business phone number
				headerTitle: '¡Chatea con nosotros por WhatsApp!', //Popup Title
				popupMessage: 'Hola, ¿en que puedo ayudarte?', //Popup Message
				showPopup: true, //Enables popup display
				buttonImage: '<img src="https://www.flaticon.com/svg/static/icons/svg/124/124034.svg" />', //Button Image
				//headerColor: 'crimson', //Custom header color
				//backgroundColor: 'crimson', //Custom background button color
				position: "right" //Position: left | right
			});
		});
	</script> 
</html>
