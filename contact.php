<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Contact'; // Set the page title
?>
<?php require './components/header.php'; ?>

<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->

    <!-- Home -->
	<div class="home">
		<!-- Background image artist https://unsplash.com/@thepootphotographer -->
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->
	<div class="contact">
		<div class="container-fluid">
				<h1 class="text-center mt-5 contact-heading">Contact</h1>
			<div class="row row-xl-eq-height">
			
				<!-- Contact Content -->
				<div class="col-xl-6">
					
					<div class="contact_content">

						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div>
									<div class="row">
										<div class="col-lg-6 contact_name_col">
											<input type="text" class="contact_input" placeholder="Name" required="required">
										</div>
										<div class="col-lg-6">
											<input type="email" class="contact_input" placeholder="E-mail" required="required">
										</div>
									</div>
								</div>
								<div><input type="text" class="contact_input" placeholder="Subject" required="required"></div>
								<div><textarea class="contact_input contact_textarea" placeholder="Message"></textarea></div>
								<button class="contact_button"><span>send message</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Map -->
				<div class="col-xl-6 map_col">
					<div class="contact_map">

						<!-- Google Map -->
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.276584881218!2d90.36418827526673!3d23.773163287902307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf6de2c3b19b%3A0xeeef7eec6d1d012a!2sEasy%20Tech%20Solutions!5e0!3m2!1sen!2sbd!4v1758705171964!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
<div class="container py-5">
	<h1>FAQS</h1>
					<div class="v-tab">
  
<ul class="v-tab_tab-head">
  <li class="active" rel="vtab1">Molestie lobortis</li>
  <li rel="vtab2">Venenatis</li>
  <li rel="vtab3">Ipsum</li>
  <li rel="vtab4">Rhoncus dolor nunc</li>
</ul>
  
<div class="v-tab_container">

  <div id="vtab1" class="v-tab_content">
    
    <h3>heading here</h3>
    <p>Lorem ipsum non pellentesque lacinia ullamcorper faucibus eu quisque, ut odio nisi aptent proin dictumst lorem tincidunt, accumsan nec habitasse arcu nisl lacus gravida odio elementum quis consectetur vehicula egestas.</p>
  </div>
  <!-- #tab1 -->

  <div id="vtab2" class="v-tab_content">
    <p>Dui sociosqu vitae varius nulla habitasse inceptos pharetra feugiat curabitur, nibh molestie est semper mattis malesuada viverra auctor, duis pulvinar quam diam scelerisque ut nullam condimentum ut per conubia feugiat ultricies tristique dictum.

</p>
  </div>
  <!-- #tab2 -->

  <div id="vtab3" class="v-tab_content">
    <p>Morbi cursus dapibus ut donec commodo consequat arcu turpis hendrerit luctus nulla aliquam tempor diam massa faucibus vitae vehicula, ultricies volutpat nullam phasellus dui auctor senectus morbi tellus potenti iaculis bibendum ipsum sodales non.

</p>
  </div>
  <!-- #tab3 -->

  <div id="vtab4" class="v-tab_content">
    <p>Per ligula mollis vulputate tortor urna platea non maecenas fames, maecenas ante senectus suspendisse ultrices aptent torquent laoreet scelerisque ut integer arcu magna ultricies mollis.

</p>
  </div>
  <!-- #tab4 --> 
</div>
</div>
</div>
</div>
		</div>
	</div>

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->

<?php require './components/footer.php'; ?>