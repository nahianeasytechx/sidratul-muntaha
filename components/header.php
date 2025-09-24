<?php
require 'database/dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>Sidratul Muntaha</title>
	<base href="<?= $site_url ?>" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sidratul Muntaha - is a donation platform">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
	 <!-- Lightbox2 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />
	

	<!-- Page Wise CSS File linking -->
	<?php
	if ($current_page == 'index.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/lightbox.min.css">
	<?php
	} else if ($current_page == 'about.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/about.css">
		<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/elements.css">
	<?php
	} else if ($current_page == 'contact.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/contact.css">
				<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<?php
	} else if ($current_page == 'activities.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/activities.css">
				<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">

	<?php
	}
	else if ($current_page == 'blogs.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/blogs.css">
				<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
	<?php
	} 
	else if ($current_page == 'gallery.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/gallery.css">
				<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/gallery_responsive.css">
	<?php
	}
	else if ($current_page == 'notice.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/notice.css">
			<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/notice_responsive.css">
	<?php
	}
	else if ($current_page == 'activities-details.php') {
	?>
		<link rel="stylesheet" type="text/css" href="styles/notice.css">
			<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/notice_responsive.css">
	<?php
	}
	?>

	<!-- Custom CSS -->
	<?php include 'header-style.php' ?>

</head>

<body>

	<div class="super_container">

		<!-- Header -->
		<header class="header">

			<?php require 'top-bar.php'; ?>

			<?php require 'nav-bar.php'; ?>

			<?php require 'header-search-panel.php'; ?>
		</header>

		<!-- Mobile Menu -->
		<?php require 'mobile-menu-bar.php'; ?>