<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChefSys</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="header">
    <div class="logo">
      <a href="#">
        <img src="image/Logo1.png" alt="" class="logo">
      </a>
    </div>
    <div class="menu">

      <ul>
        <li class="menu_items">
          <a href="#">
            Home
          </a>
        </li>
        <li class="menu_items">
          <a href="#menu">
            Menuu
          </a>
        </li>
        <li class="menu_items">
          <a href="#abus">
            About
          </a>
        </li>
        <li class="menu_items">
          <a href="#reserv">
            Reservation
          </a>
        </li>
        <li class="menu_items">
          <a href="register">
            @auth
            <a href="{{url('/showcart', Auth::user()->id)}}">

              Cart[{{$count}}]
            </a>

            @endauth

            @guest

            Cart[0]

            @endguest
          </a>
        </li>

        @if (Route::has('login'))

        @auth

        <li class="menu_items">
          <x-app-layout>

          </x-app-layout>
        </li>
        @endauth
        @endif
    </div>
    </ul>
  </div>
  </div>
  <div class="body">
    <div id="first_video">
      <a href="register">
        <video src="vid/sign1.mp4" class="log" autoplay loop muted>

        </video>

      </a>

      <video src="vid/Intro.mp4" class="lag" autoplay loop muted></video>
    </div>
  </div>

  <!-- Menu Slide heseg ehelj bnaaa-->
  @include("food")
  <!-- Slide duuslaa -->

  @include("foodchef")
  <!-- reserv start -->

  @include("reservation")

  <!-- reserv end -->


  <div class="footer">
    <span class="icn">
      <a href="">
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a href="">
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a href="">
        <i class="fa-brands fa-instagram"></i>
      </a>
    </span>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>