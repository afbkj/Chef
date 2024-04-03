<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" style="background-color: #f8f9fa;" id="sidebar">
    
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Цэс</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/users')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Хэрэглэгчид</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/foodmenu')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Хоолны меню</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/viewchef')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-chef-hat"></i>
                </span>
                <span class="menu-title">Тогоочид</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/viewreservation')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-calendar-clock"></i>
                </span>
                <span class="menu-title">Ширээ захиалга</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/orders')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-receipt"></i>
                </span>
                <span class="menu-title">Хоол захиалга</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin.coupon')}}">
              <span class="menu-icon">
                <i style="width: 25px; height:20px"><img src="image/coupon.png" alt=""></i>
              </span>
              <span class="menu-title">Купон</span>
            </a>
          </li>
    </ul>
</nav>
