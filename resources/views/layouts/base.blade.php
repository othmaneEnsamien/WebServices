<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complete Responsive Web Service Website Design </title>
 
  <!-- font awesome file link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/lightgallery.min.css') }}">
  

  <!-- custom css file link  -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 
  @livewireStyles
</head>


<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><i class="fas fa-magic"></i>WEB SERVICE.</a>


    <div class="fas fa-bars"></div>


    <nav class="navbar">
      <ul>
        <li><a href="/">home</a></li>
        <li><a href="#about">about</a></li>
        <li><a href="#service">services</a></li>
        <li><a href="#team">team</a></li>     
        <li><a href="#faq">FAQ</a></li>
        <li><a href="{{ route('pagecommerce') }}">Ecommerce website</a></li>
        <li><a href="{{ route('graphicdesigner') }}">Graphic Designer</a></li>
        <li><a href="{{ route('contact') }}">contact</a></li>
      </ul>
    </nav>


  </header>


  <!-- index section ends -->

 


{{ $slot }}


  <!-- footer section starts  -->

  <section class="footer">

    <h1>created by othmane el khaddar</h1>

    <div class="icons">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
    </div>

  </section>

  <!-- footer section ends -->







  
<!-- jquery file link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- custom js file link  -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



@livewireScripts
	
@stack('scripts')
</body>
</html>