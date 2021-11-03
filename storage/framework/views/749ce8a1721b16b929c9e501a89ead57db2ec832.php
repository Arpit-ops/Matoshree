<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<style type="text/css">

body { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; font-family: 'Roboto', sans-serif; letter-spacing: 0px; font-size: 16px; color: #7d7f82; font-weight: 400; line-height: 32px; }
h1, h2, h3, h4, h5, h6 { color: #26282c; margin: 0px 0px 12px 0px; font-family: 'Glegoo', serif; font-weight: 700; line-height: 1; }
h1 { font-size: 36px; }
h2 { font-size: 26px; line-height: 38px; }
h3 { font-size: 22px; line-height: 32px; }
h4 { font-size: 20px; }
h5 { font-size: 16px; line-height: 27px; }
h6 { font-size: 12px; }
p { margin: 0 0 20px; line-height: 1.7; }
p:last-child { margin: 0px; }
ul, ol { font-family: 'Roboto', sans-serif; }
a { text-decoration: none; color: #7d7f82; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; }
a:focus, a:hover { text-decoration: none; color: #fe5b10; }



.video-testimonial-block { position: relative; width: auto; height: 206px; overflow: hidden; margin-bottom: 30px; }
.video-testimonial-block .video-thumbnail { height: 100%; width: 100%; position: absolute; z-index: 1; background-size: cover; top: 0; left: 0; }
.video-testimonial-block .video { }
.video-testimonial-block .video iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 0px; }
.video-testimonial-block .video-play { position: absolute; z-index: 2; top: 50%; left: 50%; margin-left: -40px; margin-top: -18px; text-decoration: none; }
.video-testimonial-block .video-play::before { content: "\f144"; font: normal normal normal 14px/1; font-family: 'Font Awesome\ 5 Free'; font-weight: 900; font-size: inherit; text-rendering: auto; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; font-size: 50px; color: #b3b5bc; }
.video-testimonial-block .video-play:hover::before { color: #172651; }
.mb10{margin-bottom:10px;}
.section-title { margin-bottom: 40px; }
    section {
  position: relative;
  background-color: black;
  height: 75vh;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

section video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

section .container {
  position: relative;
  z-index: 2;
}

section .overlay-wcs {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */
</style>
    <body>
          <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
  <!-- /Navigation-->
  

        <div id="container" class="effect mainnav-full" >
          
              <?php echo $__env->yieldContent('content'); ?>
                    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/owl.carousel.min.js"></script>
    <!-- Flexslider -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.flexslider-min.js"></script>
    <!-- countTo -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/magnific-popup-options.js"></script>
    <!-- Count Down -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/main.js"></script>
    <script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
    </script>
    </body>
</html><?php /**PATH D:\xampp\htdocs\matoshri_classes\resources\views/layouts/app.blade.php ENDPATH**/ ?>