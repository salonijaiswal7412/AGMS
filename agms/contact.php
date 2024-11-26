<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Centurion Art Gallery | Contact Us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/shop.css" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Sunflower:500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
</head>
<body>
    <?php include_once('includes/header.php'); ?>

    <!-- Contact Page Banner -->
    <div class="inner_page-banner one-img bg-cover bg-center" style="background-image: url('images/contact-banner.jpg');">
        <div class="container text-center text-white py-20">
            <h1 class="text-4xl font-bold">Contact Centurion Art Gallery</h1>
            <p class="text-xl mt-2">Get in touch with us for inquiries and support.</p>
        </div>
    </div>

    <!-- Breadcrumb Navigation -->
    <div class="using-border bg-blue-800 py-3">
        <div class="inner_breadcrumb ml-4">
            <ul class="text-2xl font-semibold flex items-center justify-center">
                <li><a href="index.php" class="text-white font-bold underline">Home</a> <span>/ /</span></li>
                <li class="text-3xl text-blue-200">Contact</li>
            </ul>
        </div>
    </div>

    <!-- Contact Us Section -->
    <section class="subscribe py-12 bg-gray-50">
        <div class="container">
            <?php
            $ret = mysqli_query($con, "SELECT * FROM tblpage WHERE PageType='contactus'");
            while ($row = mysqli_fetch_array($ret)) {
            ?>
                <div class="text-center">
                    <h4 class="text-3xl font-semibold text-blue-800 mb-4"><?php echo $row['PageTitle']; ?></h4>
                    <div class="address-gried mb-6">
                        <span class="far fa-map fa-2x text-blue-900 mb-2"></span>
                        <p class="text-[1rem] font-semibold text-gray-700 "><?php echo $row['PageDescription']; ?></p>
                    </div>
                    <div class="address-gried mt-3 mb-6">
                        <span class="fas fa-phone-volume fa-2x text-blue-900 mb-2"></span>
                        <p class="text-[1rem] font-semibold  text-gray-700"><?php echo $row['MobileNumber']; ?><br>Time: <?php echo $row['Timing']; ?></p>
                    </div>
                    <div class="address-gried mt-3 mb-6">
                        <span class="far fa-envelope fa-2x text-blue-900 mb-2"></span>
                        <p class="text-[1rem] font-semibold text-gray-700"><?php echo $row['Email']; ?></p>
                    </div>
                    <div class="address-gried mt-3">
                        <span class="fas fa-globe fa-2x text-blue-900 mb-2"></span>
                        <p class="text-[1rem] font-semibold  text-gray-700">Follow us on social media: 
                            <a href="https://www.facebook.com/CenturionArtGallery" class="text-blue-700 underline">Facebook</a>, 
                            <a href="https://twitter.com/CenturionArt" class="text-blue-700 underline">Twitter</a>, 
                            <a href="https://www.instagram.com/CenturionArtGallery" class="text-blue-700 underline">Instagram</a>
                        </p>
                    </div>
                </div>
            <?php } ?>

            <!-- Additional Contact Information Section -->
            <div class="mt-16 bg-blue-900 p-10 rounded-lg">
                <h2 class="text-5xl font-semibold text-center text-white mb-6"></h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-12 text-center">
                    <div class="info-box p-6 bg-white rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold text-blue-900 mb-4">Our Location</h4>
                        <p class="text-lg text-gray-600">Centurion Art Gallery,<br>
                        50 Thakurbari Road,<br>
                        Jamshedpur, 831012</p>
                    </div>
                    <div class="info-box p-6 bg-white rounded-lg shadow-md">
                        <h4 class="text-xl font-semibold text-blue-900 mb-4">Business Hours</h4>
                        <p class="text-lg text-gray-600">Monday - Friday: 10:00 AM - 6:00 PM<br>
                        Saturday: 11:00 AM - 4:00 PM<br>
                        Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('includes/footer.php'); ?>

    <!-- JS Scripts -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        $(document).ready(function () {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 900);
            });
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
</body>
</html>
