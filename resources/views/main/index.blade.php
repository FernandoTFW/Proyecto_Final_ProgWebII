@extends('templates.main')
@section("script")
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@stop
@section("content")
<section class="showcase">
        <header>
          <h2 class="logo">CAPAG</h2>
          <div class="toggle"></div>
        </header>
        <video src="{{asset('assets/assets_index/background.mp4')}}" muted loop autoplay></video>
        <div class="overlay"></div>
        <div class="text">
          <h2>CAPAG R.L. </h2> 
          <h3>Guayaramerín</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
          <a href="explorer.html">Explorar</a>
        </div>
        <ul class="social">
          <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
          <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
          <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
        </ul>
      </section>
      <div class="menu">
        <ul>
          <li><a href="branchs/listbranchs">Branchs</a></li>
          <li><a href="employees/listemployees">Employees</a></li>
          <li><a href="products/listproducts">Products</a></li>
          <li><a href="clients/listclients">Clients</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      
      <script>
        const menuToggle = document.querySelector('.toggle');
        const showcase = document.querySelector('.showcase');
        
        menuToggle.addEventListener('click', () => {
          menuToggle.classList.toggle('active');
          showcase.classList.toggle('active');
        })
      </script>
@stop
@section("footer")
<footer class="pie">
  <div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
    </svg>
    </div>
</footer>
@stop