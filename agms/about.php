<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Centurion Art Gallery | About Us</title>
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

    <!-- About Page Banner -->
    <div class="inner_page-banner one-img bg-cover bg-center" style="background-image: url('images/about-banner.jpg');">
        <div class="container text-center text-white py-20">
            <h1 class="text-4xl font-bold">About Centurion Art Gallery</h1>
            <p class="text-xl mt-2">Explore the world of art, culture, and creativity.</p>
        </div>
    </div>

    <!-- Breadcrumb Navigation -->
    <div class="using-border bg-blue-800 py-3">
        <div class="inner_breadcrumb ml-4">
            <ul class="text-2xl font-semibold flex items-center justify-center">
                <li><a href="index.html" class="text-white font-bold underline">Home</a> <span>/ /</span></li>
                <li class="text-3xl text-blue-200">About</li>
            </ul>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="about py-12 bg-gray-50">
        <div class="container">
            <?php
            $ret = mysqli_query($con, "SELECT * FROM tblpage WHERE PageType='aboutus'");
            while ($row = mysqli_fetch_array($ret)) {
            ?>
                <div class="text-center">
                    <h2 class="text-3xl font-semibold text-blue-800 mb-4"><?php echo $row['PageTitle']; ?></h2>
                    <p class="text-lg text-gray-700 mb-8"><?php echo $row['PageDescription']; ?></p>
                </div>

                <!-- Vision and Mission Section -->
                <div class="flex justify-center space-x-12 mb-16">
                    <div class="text-center bg-white p-6 rounded-lg shadow-md w-1/3">
                        <h3 class="text-xl uppercase font-semibold text-blue-900 mb-4">Our Vision</h3>
                        <p class="text-gray-600">To inspire and cultivate an appreciation for art in all its forms, creating a platform where creativity and culture converge.</p>
                    </div>
                    <div class="text-center bg-white p-6 rounded-lg shadow-md w-1/3">
                        <h3 class="text-xl uppercase font-semibold text-blue-900 mb-4">Our Mission</h3>
                        <p class="text-gray-600">To offer a diverse collection of artworks and provide a space where artists and art enthusiasts can connect and grow.</p>
                    </div>
                </div>

                <!-- Services Section -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 text-center">
                    <div class="service-box p-6 bg-blue-900 rounded-lg shadow-md">
                        <span class="fas fa-paint-brush fa-3x text-gray-400 mb-4"></span>
                        <h4 class="font-semibold text-xl text-white mb-2">Art Exhibitions</h4>
                        <p class="text-gray-400">Curated exhibitions showcasing contemporary and classical art that inspire and engage our visitors.</p>
                    </div>
                    <div class="service-box p-6 bg-blue-900 rounded-lg shadow-md">
                        <span class="fas fa-users fa-3x text-gray-400 mb-4"></span>
                        <h4 class="font-semibold text-xl text-white mb-2">Artist Collaborations</h4>
                        <p class="text-gray-400">We collaborate with talented artists to bring new and innovative artworks to the gallery.</p>
                    </div>
                    <div class="service-box p-6 bg-blue-900 rounded-lg shadow-md">
                        <span class="fas fa-shopping-cart fa-3x text-gray-400 mb-4"></span>
                        <h4 class="font-semibold text-xl text-white mb-2">Art Sales</h4>
                        <p class="text-gray-400">A platform for art lovers to purchase unique, original artworks directly from the artists.</p>
                    </div>
                </div>

                <!-- Image Gallery Section -->
                <div class="mt-16 bg-blue-900 p-10">
                    <h2 class="text-5xl font-semibold text-center text-white mb-6">Our Art Collection</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Add your image links below -->
                        <div class="gallery-item">
                            <img src="https://i.pinimg.com/474x/f2/69/c1/f269c104221aff965f04e25f14f8744e.jpg" alt="Art 1" class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="gallery-item">
                            <img src="https://i.pinimg.com/474x/bd/b7/86/bdb786b042b3a0cf99493d92b516a22c.jpg" alt="Art 2" class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="gallery-item">
                            <img src="https://i.pinimg.com/474x/84/b3/47/84b34716b86ceb5877d57881c97a49ef.jpg" alt="Art 3" class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="gallery-item">
                            <img src="https://i.pinimg.com/474x/4f/0f/c4/4f0fc4d751781f67fd88a64a1403e10d.jpg" alt="Art 4" class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="gallery-item">
                            <img src="https://i.pinimg.com/474x/43/07/60/430760bf5ae698f354e31f7eb816044b.jpg" alt="Art 5" class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                        <div class="gallery-item">
                            <img src="https://i.pinimg.com/474x/6a/22/81/6a2281ad55eaff30471f691c4168664a.jpg" alt="Art 6" class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>
                    </div>
                </div>
            <?php } ?>
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
