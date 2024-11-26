<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) {
  $adminuser=$_POST['username'];
  $password=md5($_POST['password']);
  $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password'");
  $ret=mysqli_fetch_array($query);
  if($ret>0){
    $_SESSION['agmsaid']=$ret['ID'];
    echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
  } else {
    echo "<script>alert('Invalid Details');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | Art Gallery Management System</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <!-- Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <style>
      .bg-image {
          background-image: url('https://i.pinimg.com/736x/c9/ed/af/c9edaf9a6b8b69c29631e02a8ba799f6.jpg');
          background-size: cover;
          background-position: center;
      }
  </style>
</head>
<body class="bg-image">

  <div class="container mx-auto my-10">
    <form class="login-form bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto" action="" method="post">
      <div class="login-wrap text-center">
        <p class="login-img text-6xl text-blue-500 mb-8"><i class="icon_lock_alt"></i></p>
        <div class="input-group mb-4">
          <span class="input-group-addon bg-gray-200 p-3 rounded-l"><i class="icon_profile text-gray-600"></i></span>
          <input type="text" class="form-control p-3 rounded-r" name="username" placeholder="Username" autofocus required="true">
        </div>
        <div class="input-group mb-4">
          <span class="input-group-addon bg-gray-200 p-3 rounded-l"><i class="icon_key_alt text-gray-600"></i></span>
          <input type="password" class="form-control p-3 rounded-r" name="password" placeholder="Password" required="true">
        </div>
        <label class="block text-right mb-4">
          <span class="text-blue-600"><a href="forgot-password.php">Forgot Password?</a></span>
        </label>
        <button class="btn btn-primary btn-lg w-full bg-blue-500 text-white p-3 rounded" type="submit" name="login">Login</button>
        <p class="mt-4 font-bold text-center"><a href="../index.php" class="text-blue-600">Back to Home page</a></p>
      </div>
    </form>
  </div>

</body>
</html>
