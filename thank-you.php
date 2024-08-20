<?php 

include_once('include/cl_db.php');

$db = new DB;
$db->open();



if(isset($_REQUEST['submit'])){
    
    
$to = 'info@teknocide.com';
$subject = "New Lead";

$ip = $db->get_client_ip();
$getLocationByIp = $db->getLocationByIp();
$country = $getLocationByIp['countryCode'];

$user_name = $_POST['user_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$service = $_POST['service'];
var_dump($_POST['package']);
die();
$package = $_POST['package'];
$price = $_POST['price'];

$db->insertLead($user_name , $email , $phone, $message, $service, $package, $price,$ip, $country);

$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";

// For single user
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$messages=' <table width="100%" border="1" style="font-size:14px; font-family:arial;" cellspacing="0" cellpadding="3">
<tr>
<td>Name</td>
<td>'.$user_name .'</td>
</tr>
<tr>
<td>Email</td>
<td>'.$email.'</td>
</tr>
<tr>
<td>Country</td>
<td>'.$country.'</td>
</tr>
<tr>
<td>IP</td>
<td>'.$ip.'</td>
</tr>
<tr>
<td>Mobile Number</td>
<td>'.$phone.'</td>
</tr>
<tr>
<td>Message</td>
<td>'.$message.'</td>
</tr>
<tr>
<td>Service</td>
<td>'.$service.'</td>
</tr>
<tr>
<td>Package</td>
<td>'.$package.'</td>
</tr>
<tr>
<td>Price</td>
<td>'.$price.'</td>
</tr>
</table>';

$mail = mail( $to, $subject, $messages, $headers );

if($mail){
}


}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Brand</title>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/pre-loader.php"); ?>
      <?php include("includes/header.php"); ?>


      <section class="mainBanner">
         <div class="shape3">
            <img src="assets/images/bannerlogo.png" alt="">
         </div>
         <div class="container">
            <h1 class="gs_reveal gs_reveal_fromDown"><span>Thank</span> You</h1>
            <a href="./" class="btnn-postion-hover mn-btn gs_reveal gs_reveal_fromDown" data-modal="#login-modal">Back to Home <span></span></a>
            
         </div>
      </section>
      
      
  
      <?php include("includes/scripts.php"); ?>
      <script>
 $('ul.menu li').removeClass("active");
 $('.menu li:nth-child(3)').addClass("active");
         // Pre Loader
         const tl = gsap.timeline();
         tl.to("body", {
           overflow: "hidden"
         })
           .to(".preloader .text-container", {
             duration: 0,
             opacity: 1,
             ease: "Power3.easeOut"
           })
           .from(".preloader .text-container h1", {
             duration: 1.5,
             delay: 1,
             y: 70,
             skewY: 10,
             stagger: 0.4,
             ease: "Power3.easeOut"
           })
           .to(".preloader .text-container h1", {
             duration: 1.2,
             y: 70,
             skewY: -20,
             stagger: 0.2,
             ease: "Power3.easeOut"
           })
           .to(".preloader", {
             duration: 1.5,
             height: "0vh",
             ease: "Power3.easeOut"
           })
           .to(
             "body",
             {
               overflow: "auto"
             },
             "-=2"
           )
           .to(".preloader", {
             display: "none"
           });
      </script>
   </body>
</html>