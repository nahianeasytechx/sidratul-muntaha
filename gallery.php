<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Gallery'; // Set the page title
?>
<?php require './components/header.php'; ?>

<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->

<!-- Home -->
<div class="home">
    <!-- Background image artist https://unsplash.com/@thepootphotographer -->
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Gallery</div>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Photos Section -->
<div class="photos">
    <div class="container py-5">
        <h1 class="text-center py-2">Photos</h1>
        <div class="row pt-3">
            <?php
            // Array of photos
            $photos = [
                "images/photos1.webp",
                "images/photos2.webp",
                "images/photos3.webp",
                "images/photos4.webp",
                "images/photos5.webp",
                "images/photos6.webp"
            ];

            foreach ($photos as $photo) {
                echo '<div class="col-sm-12 col-md-6 col-lg-4 image-alignment">';
                echo '<a href="'.$photo.'" data-lightbox="news-gallery">';
                echo '<img src="'.$photo.'" alt="" class="img-fluid">';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>

    </div>
</div>

<!-- Lightbox2 CSS and JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->

<?php require './components/footer.php'; ?>
