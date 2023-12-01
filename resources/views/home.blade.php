<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChefSys</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
  integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        Menu
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
            </ul>
        </div>
    </div>
    <div class="body">
        <div id="first_video">
            <a href="login.html">
                <video src="vid/sign1.mp4" class="log" autoplay loop muted>
                   
                </video>
                
            </a>
            
            <video src="vid/Intro.mp4" class="lag" autoplay loop muted ></video>
        </div>
    </div>

    <!-- Menu Slide heseg ehelj bnaaa-->
    <section id="tranding">
      <div class="container">
        <div class="menu" id="menu">
          Menu
        </div>
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="image/menu1.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Хуушуур
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="image/menu2.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Далайн хоол
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="image/menu3.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Desert
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="image/menu4.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Pizza
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="image/menu5.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Ногоон шөл
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="image/menu6.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Салат
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <div class="tranding-slide-img">
                <img src="image/menu7.jpg" alt="Tranding">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Зууш
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->
          </div>

          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>
    <!-- Slide duuslaa -->

    <h1 id="abus">About us</h1>
    <div class="about">
      <div class="grid-container">
        <div class="grid-item">
          <img src="image/t1.png"
           id="img1" alt="">
           Ахлах тогооч
        </div>
        <div class="grid-item">
          <img src="image/t2.png" 
          id="img2" alt="">
          1-р хоолны тогооч
        </div>

        <div class="grid-item">
          <img src="image/t3.png" id="img3" alt="">
          2-р хоолны тогооч
        </div>  
        <div class="grid-item">
          <img src="image/t4.png" alt="" id="img4">
          desert chef
        </div>
        <div class="grid-item">
          <img src="image/t5.png" alt="" id="img5">
          Bartender
        </div>
      </div>
    </div>
    <div class="contact">
      <div class="filter">

      </div>
      <div class="conus">
        <h3>
          Contact us
        </h3>
        <h2>
          Here You Can Make A Reservation Or Just walkin to our cafe
        </h2>
        <h4>
          Энэ хэсэгт урьдчлан ширээ захиалах боломжтой ба дараах зүйлсийг бөглөн ширээгээ захиална уу.
          Захиалсан цагаас 30 минут хүлээх ба хоцрох тохиолдолд захиалга цуцлагдах болохыг анхаарна уу!
          <div class="phone">
            <div class="phnicn">
              <i class="fa-solid fa-phone"></i>
            </div>
            <h3 style="color: black;">
              Phone Number
            </h3>
            <h3 style="color: black;">
              99887766
            </h3>
          </div>
          <div class="mail">
            <div class="mailicn">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <h3 style="color: black;">
              Email
            </h3>
            <h3>
              hello@company.com
            </h3>
          </div>
        </h4>
      </div>
      
      <div class="reserv" id="reserv">
        <section class = "banner">
          <div class = "card-container">

              <div class = "card-content">
                  <h3>Reservation</h3>
                  <form>
                      <div class = "form-row">
                          <select name = "days">
                              <option value = "day-select">Select Day</option>
                              <option value = "sunday">Sunday</option>
                              <option value = "monday">Monday</option>
                              <option value = "tuesday">Tuesday</option>
                              <option value = "wednesday">Wednesday</option>
                              <option value = "thursday">Thursday</option>
                              <option value = "friday">Friday</option>
                              <option value = "saturday">Saturday</option>
                          </select>

                          <select name = "hours">
                              <option value = "hour-select">Select Hour</option>
                              <option value = "10">10: 00</option>
                              <option value = "10">12: 00</option>
                              <option value = "10">14: 00</option>
                              <option value = "10">16: 00</option>
                              <option value = "10">18: 00</option>
                              <option value = "10">20: 00</option>
                              <option value = "10">22: 00</option>
                          </select>
                      </div>

                      <div class = "form-row">
                          <input type = "text" placeholder="Full Name">
                          <input type = "text" placeholder="Phone Number">
                      </div>

                      <div class = "form-row">
                          <input type = "number" placeholder="How Many Persons?" min = "1">
                          <input type = "submit" value = "Reserve now">
                      </div>
                  </form>
              </div>
          </div>
      </section>
      </div>
      <img src="image/bg.jpg" alt="" class="bg">
    </div>

    
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