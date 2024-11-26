<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Centurion Art Gallery | Home Page</title>
      <script>
         addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
            window.scrollTo(0, 1);
         }
      </script>
      <!-- Tailwind CSS CDN -->
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body class="bg-gray-100">
      <!-- Header -->
      <div class="header-bar">
         <!-- Contact Information -->
         <div class="bg-gray-800 text-white py-2">
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <?php
                        $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
                        while ($row = mysqli_fetch_array($ret)) {
                    ?>
                    <div class="flex items-center space-x-2">
                        <span class="fas fa-phone-volume"></span>
                        <p><?php echo $row['MobileNumber']; ?></p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="fas fa-envelope"></span>
                        <p><?php echo $row['Email']; ?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
         </div>
         

         <!-- Header -->
         <div class="navbar-collapse justify-between px-5 flex " id="navbarSupportedContent">
         <div class="text-xl mt-2 uppercase font-bold text-[#1F2937]">Centurion</div>
   <ul class="flex space-x-6 h-10 text-xl pt-2">
      
      <li class="nav-item active">
         <a class="nav-link text-gray-800 hover:text-blue-500" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
         <a href="about.php" class="nav-link text-gray-800 hover:text-blue-500">About</a>
      </li>

      <!-- Art Type Dropdown -->
      <li class="nav-item relative group">
         <a class="nav-link text-gray-800 hover:text-blue-500 cursor-pointer" href="#">Art Type</a>
         <!-- Dropdown Menu -->
         <div class="absolute left-0 hidden mt-2 bg-white shadow-lg rounded-md z-10 group-hover:block">
            <ul class="py-2">
               <?php
                  $ret = mysqli_query($con, "select * from tblarttype");
                  while ($row = mysqli_fetch_array($ret)) {
               ?>
               <li>
                  <a class="block px-4 py-2 text-gray-800 hover:bg-gray-100" href="product.php?cid=<?php echo $row['ID']; ?>&&artname=<?php echo $row['ArtType']; ?>"><?php echo $row['ArtType']; ?></a>
               </li>
               <?php } ?>
            </ul>
         </div>
      </li>

      <li class="nav-item">
         <a href="contact.php" class="nav-link text-gray-800 hover:text-blue-500">Contact</a>
      </li>
      <li class="nav-item">
         <a href="admin/login.php" class="nav-link text-gray-800 hover:text-blue-500">Admin</a>
      </li>
   </ul>
</div>

      </div>

      <!-- Hero Section -->
      <div class="relative bg-cover bg-center h-screen flex items-center justify-center text-center bg-gray-900 text-white"
         style="background-image: url('https://i.pinimg.com/736x/90/a8/04/90a804561cbe5807cdffaba520d2e1ed.jpg');">
         <div class="bg-black bg-opacity-50 p-8 w-[70%] rounded-lg">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to<br> <span class="text-7xl uppercase">Centurion <span class="text-[#6CE9FC] ">Art</span> Gallery</span></h1>
            <p class="text-lg md:text-xl">"Explore a curated collection of stunning artworks designed to elevate your space. Whether you're seeking timeless classics or modern masterpieces, connect with us today for personalized art selections and exclusive deals that match your style and vision."</p>
            <a href="about.php"
               class="mt-6 inline-block  text-black font-semibold px-6 py-3 rounded-lg bg-[#6CE9FC] transition uppercase">
               Learn More
            </a>
         </div>
      </div>

      <!-- About Section -->
      <section class="py-16 bg-white">
         <div class="container mx-auto px-6 md:px-12">
            <h2 class="text-6xl uppercase font-bold text-center mb-8 text-[#143558]">Our Collections</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
               <div class="text-center">
                  <img src="https://i.pinimg.com/474x/11/2f/71/112f7144e0ce279b9000a130e92bb5ff.jpg" alt="Sculptures" class="rounded-lg shadow-lg mb-4 w-[25vw] h-[20vw]">
                  <h3 class="text-xl font-semibold">Sculptures</h3>
                  <p class="mt-2 text-gray-600">Timeless pieces for your home and office.</p>
               </div>
               <div class="text-center">
                  <img src="https://i.pinimg.com/474x/4f/11/d2/4f11d282b82c790848f2d9c638c84047.jpg" alt="Serigraphs" class="rounded-lg shadow-lg mb-4 w-[25vw] h-[20vw]">
                  <h3 class="text-xl font-semibold">Serigraphs</h3>
                  <p class="mt-2 text-gray-600">Art that captures detail and texture.</p>
               </div>
               <div class="text-center">
                  <img src="https://i.pinimg.com/474x/7e/b7/a2/7eb7a246c87a2ac40d9a3e7f61e7747b.jpg" alt="Prints" class="rounded-lg shadow-lg mb-4 w-[25vw] h-[20vw]">
                  <h3 class="text-xl font-semibold">Prints</h3>
                  <p class="mt-2 text-gray-600">Beautiful, affordable options for everyone.</p>
               </div>
               <div class="text-center">
                  <img src="https://i.pinimg.com/474x/cc/f3/be/ccf3be2f01f1289fe074c54a431ced4c.jpg" alt="Paintings" class="rounded-lg shadow-lg mb-4 w-[25vw] h-[20vw]">
                  <h3 class="text-xl font-semibold">Paintings</h3>
                  <p class="mt-2 text-gray-600">Classic art for all occasions.</p>
               </div>
               <div class="text-center">
                  <img src="https://i.pinimg.com/474x/14/ef/ef/14efef8984badf3d36b7154160d23b91.jpg" alt="Street Art" class="rounded-lg shadow-lg mb-4 w-[25vw] h-[20vw]">
                  <h3 class="text-xl font-semibold">Street Art</h3>
                  <p class="mt-2 text-gray-600">A modern take on traditional creativity.</p>
               </div>
               <div class="text-center">
                  <img src="https://i.pinimg.com/736x/4b/df/6c/4bdf6c8a27626fe1de78edbcad3e9181.jpg" alt="Visual Arts" class="rounded-lg shadow-lg mb-4 w-[25vw] h-[20vw]">
                  <h3 class="text-xl font-semibold">Visual Arts</h3>
                  <p class="mt-2 text-gray-600">Experience beauty in motion.</p>
               </div>
            </div>
         </div>
      </section>

     <!-- New Arrivals Section -->
<section class="py-16 bg-[#1F2937]">
   <div class="container mx-auto text-center">
      <h3 class="text-4xl font-semibold mb-8 text-white uppercase tracking-widest">New Arrivals</h3>
      <div class="flex flex-wrap justify-center gap-8">
         <?php
            $ret = mysqli_query($con, "SELECT tblarttype.ID as atid, tblarttype.ArtType as typename, tblartproduct.ID as apid, tblartproduct.Title, tblartproduct.Image, tblartproduct.ArtType FROM tblartproduct JOIN tblarttype ON tblarttype.ID = tblartproduct.ArtType");
            while ($row = mysqli_fetch_array($ret)) {
         ?>
         <div class="w-full sm:w-64 text-center bg-white rounded-lg shadow-md p-4">
            <img src="admin/images/<?php echo $row['Image'];?>" alt="Art" class="w-full h-64 object-cover rounded-lg">
            <h4 class="pt-3 text-xl font-semibold"><?php echo $row['Title']; ?></h4>
            <p class="text-gray-600"><?php echo $row['typename']; ?></p>
            <a href="art-enquiry.php?eid=<?php echo $row['apid'];?>" class="mt-4 inline-block text-blue-700 rounded-full border-2 border-blue-500 px-4 py-2 font-semibold">Enquiry</a>
         </div>
         <?php } ?>
      </div>
   </div>
</section>


      <!-- Call to Action -->
      <section class="py-12 bg-[#6ce9fc] text-white text-center">
         <h2 class="text-2xl md:text-4xl text-[#1F2937] font-bold">Up to 70% Off on Selected Art</h2>
         <p class="mt-4 text-black">Don’t miss the chance to own stunning artwork at discounted prices.</p>
         <a href="product.php" class="mt-6 inline-block  text-blue-500 px-6 py-3 rounded-lg bg-[#1F2937] text-white uppercase transition">
            Shop Now
         </a>
      </section>

      <!-- Footer -->
      <?php include_once('includes/footer.php'); ?>
   </body>
</html>
