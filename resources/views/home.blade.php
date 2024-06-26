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
            Нүүр
          </a>
        </li>
        <li class="menu_items">
          <a href="#menu">
             Хоолны цэс
          </a>
        </li>
        <li class="menu_items">
          <a href="{{url('/foodchef')}}">
            Бидний тухай
          </a>
        </li>
        <li class="menu_items">
          <a href="#reserv">
            Захиалга өгөх
          </a>
        </li>

          <li class="menu_items">
          <a href="login">
            @auth
            <a href="{{url('/showcart', Auth::user()->id)}}">

              Сагс - {{$count}}
            </a>

            @endauth

            @guest

            Сагс - 0

            @endguest
          </a>
        </li>

          @if(Auth::user())
              <li class="menu_items">
                      <a href="{{url('/show-orders')}}">
                          Захиалгууд
                      </a>
              </li>
          @endif


        <li class="menu_items" style="margin-left: -15%;">

          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

            @auth
        <li>
          <!-- end x-app-layout bsn -->
        </li>
        @else
        <li>
          <a href="{{route('login')}}"></a>
        </li>

        <li>
          <a href="{{route('login')}}"></a>
        </li>
        @endauth

    </div>

    @endif
    </li>
  </div>
  </ul>
  </div>
  </div>
  <div class="body">
    <div id="first_video">
      <a href="login">
        <video src="vid/sign1.mp4" class="log" autoplay loop muted>

        </video>

      </a>

      <video src="vid/Intro.mp4" class="lag" autoplay loop muted></video>
    </div>
  </div>

  <!-- Menu Slide heseg ehelj bnaaa-->
  @include("food")
  <!-- Slide duuslaa -->

  <!-- include("foodchef") -->
  <!-- reserv start -->

  @include("reservation")

  <!-- reserv end -->


  <div class="footer">
    <span class="icn">
      <a target="_blank" href="https://fb.com/">
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a target="_blank" href="https://twitter.com/">
        <i class="fa-brands fa-twitter"></i>
      </a>
      <a target="_blank" href="https://www.instagram.com/ ">
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
