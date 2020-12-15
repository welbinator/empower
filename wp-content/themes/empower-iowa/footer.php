<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Underscores
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('underscores_container_type');
?>



<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr($container); ?>">

		<div class="">

			<div class="">

				<footer class="site-footer" id="colophon">

					<div class="site-info">
Here is some footer text
						

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script type="module" src="<?php echo get_template_directory_uri() ?>/components/service-card.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lax.js"></script>
<script>
	window.onload = function() {
		lax.setup({
			breakpoints: {
				small: 500,
				medium: 680
			}
		}) // init

		const updateLax = () => {
			lax.update(window.scrollY)
			window.requestAnimationFrame(updateLax)
		}

		window.requestAnimationFrame(updateLax)
	}
</script>
<script src="<?php echo get_template_directory_uri() ?>/plugins/loco.js"></script>
<script>
	(function() {
		var scroll = new LocomotiveScroll({
			el: document.querySelector('[data-scroll-container]'),
			smooth: true
		});
	})();
</script>

</body>

</html>