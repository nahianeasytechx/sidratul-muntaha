<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Contact'; // Set the page title
?>
<?php require './components/header.php'; ?>
<style>

.card_container{
    margin: 50px 0;
    width: 100%;
    border: 1px dotted blanchedalmond;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 2px 8px;
    padding: 2rem;
    display: flex;
    justify-content: space-between;
    border-radius: 25px;
    flex-wrap: wrap;
    cursor: pointer;

}
.card_container .date{
    display: flex;
    flex-direction: column;
    column-gap: 10px;
    justify-content: center;
    align-items: center;
}
.card_container .notice_text{
    display: flex;
    flex-direction: column;
    column-gap: 10px;
}
.card_container .btn{
    display: flex;
    flex-direction: column;
justify-content: center;
}
.card_container .btn button{
background: rgb(45,133,16);
opacity: 0.8;
color: white;
font-weight: 600;
padding:10px 25px;
border: 0;
border-radius: 15px;
}

</style>
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
							<div class="home_title">Notices</div>
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

<div class="container">
<a href="">
        <div class="card_container">
<div class="date">
    <p>SAT</p>
    <h3>23</h3>
</div>
<div class="notice_text">
    <p>August 23,2025</p>
    <h3>Teacher Training Program</h3>
    <p>4-month residential/non-residential teacher training at As-Sunnah Skill Development Institute – Registration is ongoing.</p>
</div>
<div class="btn">
    <button>Course</button>
</div>
    </div>
</a>
</div>
	</div>

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->

<?php require './components/footer.php'; ?>