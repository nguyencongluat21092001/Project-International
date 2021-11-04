<div class="header">
    <div class="container">
       <div class="header-text">
         <h1>Fitness Daily Club</h1>
         <h2>Best Choice For your site</h2>
         <p>Our goal is to make health and fitness attainable, affordable and approachable.</p>
         <div class="banner_btn">
             <a style="text-decoration: none !important;" href="{{route('about')}}">Read More</a>
         </div>
       </div>
       <div class="header-arrow">
          <a href="#menu" class="class scroll"><span> </span> </a>
       </div>
     </div>
   </div>
 <!-- end header_top -->
 <!-- start header_bottom -->
   <div class="header-bottom">
      <div class="container">
         <div class="header-bottom_left">
             <i class="phone"> </i><span>Phone: 1-200-346-2986</span>
         </div>
         <div class="social">
            <ul>
               <li class="facebook"><a href="#"><span> </span></a></li>
               <li class="twitter"><a href="#"><span> </span></a></li>
               <li class="pinterest"><a href="#"><span> </span></a></li>
               <li class="google"><a href="#"><span> </span></a></li>
               <li class="tumblr"><a href="#"><span> </span></a></li>
               <li class="instagram"><a href="#"><span> </span></a></li>
               <li class="rss"><a href="#"><span> </span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
     </div>
   </div>
 <!-- end header_bottom -->
 <!-- start menu -->
 @if (Auth::check() == false)
 <div class="menu" id="menu">
  <div class="container">
     <div class="logo">
        <a href="{{ route('home') }}"><img  height="70px" width="180px" src="{{ asset('images/logooo.png') }}" alt=""/></a>
     </div>
     <div class="h_menu4"><!-- start h_menu4 -->
       <a class="toggleMenu" href="#" >Menu</a>
         <ul class="nav" >
           <li  class="active"><a style="text-decoration: none !important;" href="index.html" >Home</a></li>
           <li><a href="{{ route('about') }}">About</a></li>
           <li><a href="{{ route('myPage') }}">Join us</a></li>
           <li><a href="{{ route('login') }}">Login</a></li>
           <li><a href="{{ route('register') }}">Register</a></li>
         </ul>
          <script type="text/javascript" src="{{ asset('js.client.nav.js') }}"></script>
      </div><!-- end h_menu4 -->
     <div class="clear"></div>
  </div>
</div>
@else
<div class="menu" id="menu">
  <div class="container">
     <div class="logo">
        <a href="{{ route('home') }}"><img height="70px" width="180px"  src="{{ asset('images/logooo.png') }}" alt=""/></a>
     </div>
     <div class="h_menu4"><!-- start h_menu4 -->
       <a class="toggleMenu" href="#">Menu</a>
         <ul class="nav">
           <li class="active"><a href="{{ route('home') }}">Home</a></li>
           <li><a href="{{ route('about') }}">About</a></li>
           <li><a href="{{ route('myPage') }}">Join us</a></li>
           <li>
            <div class="dropdown">
              <a href=""> Welcome! {{ Auth::user()->name }}</a>
              <div class="dropdown-content">
              <a class="linkDrop" href="{{ route('editInformation', Auth::user()->id) }}"><i class="far fa-user"> Info</i></a>
              <a class="linkDrop" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Log Out </a>
              </div>
            </div>
          </li>
         </ul>
      </div><!-- end h_menu4 -->
     <div class="clear"></div>
  </div>
</div>
 @endif
 <style>
  .dropdown {
    position: relative;
    display: inline-block;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    background: linear-gradient(to bottom, #72d0f4 25%, #3399ff 79%);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
  }
  .dropdown-content .linkDrop {
    color: white;
    text-decoration: none;
    background-color: #72D0F4;
  }
  .dropdown:hover .dropdown-content {
    display: block;
  }
  .fixed
  {
      position: fixed;
      top:0;
      left:0;
      width: 100%;
  }
  </style>
<script>
    var stickyOffset = $('.menu').offset().top;

    $(window).scroll(function(){
        var sticky = $('.menu'),
            scroll = $(window).scrollTop();

        if (scroll >= stickyOffset) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
</script>
