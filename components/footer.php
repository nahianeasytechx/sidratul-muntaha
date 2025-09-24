	<?php require 'footer-content.php';  ?>
</div>

	<!-- Page Wise JS File linking -->
	<?php
		if ($current_page == 'index.php') {
			?>
			<!-- Home -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="js/lightbox-plus-jquery.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/greensock/TweenMax.min.js"></script>
			<script src="plugins/greensock/TimelineMax.min.js"></script>
			<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
			<script src="plugins/greensock/animation.gsap.min.js"></script>
			<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
			<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/video-js/video.min.js"></script>
			<script src="plugins/video-js/Youtube.min.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
			<script src="js/custom.js"></script>
			<script src="js/lightbox.min.js"></script>
			
			<?php
		} else if ($current_page == 'about.php') {
			?>
			<!-- About -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/greensock/TweenMax.min.js"></script>
			<script src="plugins/greensock/TimelineMax.min.js"></script>
			<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
			<script src="plugins/greensock/animation.gsap.min.js"></script>
			<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
			<script src="js/about.js"></script>
			<script src="js/elements.js"></script>
			<?php
		} else if ($current_page == 'activities.php') {
			?>
			<!-- Activities -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
			<script src="js/contact.js"></script>
			<script src="js/activities.js"></script>
			<?php
		} else if ($current_page == 'blogs.php') {
			?>
			<!-- Courses -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
			<script src="js/contact.js"></script>
			<script src="js/blogs.js"></script>
			<?php
		} else if ($current_page == 'contact.php') {
			?>
			<!-- Contact -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
			<script src="js/verticletabs.js"></script>
			<?php
		}
		 else if ($current_page == 'gallery.php') {
			?>
			<!-- Gallery -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
					<script src="js/lightbox.min.js"></script>
			<?php
		}
		 else if ($current_page == 'notice.php') {
			?>
			<!-- Gallery -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
					<script src="js/lightbox.min.js"></script>
			<?php
		}
		 else if ($current_page == 'activities-details.php') {
			?>
			<!-- Gallery -->
			<script src="js/jquery-3.2.1.min.js"></script>
			<script src="styles/bootstrap4/popper.js"></script>
			<script src="styles/bootstrap4/bootstrap.min.js"></script>
			<script src="plugins/easing/easing.js"></script>
			<script src="plugins/parallax-js-master/parallax.min.js"></script>
					<script src="js/lightbox.min.js"></script>
			<?php
		}
	?>
</body>
</html>