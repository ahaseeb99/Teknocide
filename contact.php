<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Brand</title>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
       <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDZVZQZ2"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
      <?php include("includes/pre-loader.php"); ?>
      <?php include("includes/header.php"); ?>

      <section class="mainBanner innerBanner">
         <div class="shape3">
            <img src="assets/images/bannerlogo.png" alt="">
         </div>
         <div class="container">
            <h1 class="gs_reveal gs_reveal_fromDown">contact us</h1>
            <!-- <p class="gs_reveal gs_reveal_fromDown">home // contact us</p> -->
            <div class="main-menu gs_reveal gs_reveal_fromDown">
               <?php include("includes/navigation.php"); ?>
            </div>
         </div>
      </section>

<section class="formsec">
         <div class="formlogo">
            <img src="assets/images/formlogo.png" alt="">
         </div>
         <div class="container">
               <form method="POST" action="thank-you">
               <input type="hidden" name="package">
                <input type="hidden" name="price">
               <div class="row">
                  <div class="col-md-6">
                     <div class="field gs_reveal gs_reveal_fromDown">
                        <input type="text" placeholder="First Name" name="user_name">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="field gs_reveal gs_reveal_fromDown">
                        <input type="text" placeholder="Company Name" name="service">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="field gs_reveal gs_reveal_fromDown">
                        <input type="email" placeholder="Email Address" name="email">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="field gs_reveal gs_reveal_fromDown">
                        <input type="tel" placeholder="Phone Number" name="phone">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="field fieldtextarea gs_reveal gs_reveal_fromDown">
                        <textarea placeholder="Message" name="message"></textarea>
                     </div>
                     <button class="gs_reveal gs_reveal_fromDown" type="submit" name="submit">Submit Now</button>
                  </div>
               </div>
            </form>
         </div>
      </section>

      <section class="awardsec awardsec1">
         <div class="container">
            <h4 class="gs_reveal gs_reveal_fromDown">Some Number of Achievements</h4>
            <p class="gs_reveal gs_reveal_fromDown">Some good number of achievements from through out our journey.</p>
            <div class="row">
               <div class="col-md-3">
                  <div class="countbox gs_reveal gs_reveal_fromDown">
                     <span class="count">7</span>
                     <h6>Year Of Experience</h6>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="countbox gs_reveal gs_reveal_fromDown">
                     <span class="count">570</span>
                     <h6>Project Complete</h6>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="countbox gs_reveal gs_reveal_fromDown">
                     <span class="count">145</span>
                     <h6>Happy Clients</h6>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="countbox gs_reveal gs_reveal_fromDown">
                     <span class="count">145</span>
                     <h6>Awards Winner</h6>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
      <script>
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