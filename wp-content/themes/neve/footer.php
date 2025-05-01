<?php
/**
 * The template for displaying the footer
 *
 * @package BD template
 * @since   1.0.0
 */

// Executes actions before main tag is closed.
do_action( 'neve_before_primary_end' );
?>

</main><!--/.neve-main-->

<?php
// Executes actions after main tag is closed.
do_action( 'neve_after_primary' );
?>

<?php if ( apply_filters( 'neve_filter_toggle_content_parts', true, 'footer' ) === true ) : ?>

<footer class="bd-footer-container text-light pt-5 pb-4">
  <div class="container">
    <div class="row">

      <!-- Company Info -->
      <div class="col-md-3 mb-4">
       <img class="footerLogo" src="http://localhost/my-project/my-portfilio/wp-content/uploads/2025/04/cropped-cropped-bd-logo.png" alt="" />

        <p>Experienced UI Developer specializing in ReactJS, Tailwind, Bootstrap, and scalable front-end solutions.</p>
      </div>

      <!-- Dynamic Footer Menu -->
      <div class="footerMenuContainer col-md-3 mb-4">
		  <h5 class="text-light">Quick Links</h5>
		  <?php
			wp_nav_menu( array(
				'theme_location' => 'primary', // ← same as header menu
				'container'      => false,
				'menu_class'     => 'list-unstyled footer-menu',
				'link_before'    => '<span class="text-light text-decoration-none d-block mb-1">',
				'link_after'     => '</span>',
				'fallback_cb'    => false,
			) );
		  ?>
		</div>

      <!-- Social Icons -->
      <div class="footerMenuContainer col-md-3 mb-4">
        <h5 class="">Follow Me</h5>
        <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-lg"></i></a>
        <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
        <a href="#" class="text-light me-3"><i class="fab fa-linkedin fa-lg"></i></a>
        <a href="#" class="text-light"><i class="fab fa-github fa-lg"></i></a>
      </div>
		 <div class="footerMenuContainer col-md-3 mb-4">
        <h5 class="">Follow Me</h5>
        <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-lg"></i></a>
        <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
        <a href="#" class="text-light me-3"><i class="fab fa-linkedin fa-lg"></i></a>
        <a href="#" class="text-light"><i class="fab fa-github fa-lg"></i></a>
      </div>

    </div>
    <hr class="bg-light" />
    <div class="text-center policyContainer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-0 text-start">
					<ul class="m-0 p-0 d-flex justify-content-start align-items-start policySection">
						<li><a href="#"> Terms & Conditions </a></li>
						<li><a href="#"> Our Policy </a></li>
					</ul>
				</div>
				<div class="col-md-6 p-0 text-end">
					<p class="mb-0">Copyright &copy; <?php echo date('Y'); ?> All rights reserved.</p>
				</div>    
			</div>
		</div>		  
    </div>
  </div>
</footer>

<?php endif; ?>

</div><!--/.wrapper-->

<?php
wp_footer();

// Executes actions before the body tag is closed.
do_action( 'neve_body_end_before' );
?>

</body>
</html>
