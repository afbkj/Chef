<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChefSys</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="/#">
                <img src="image/Logo1.png" alt="" class="logo">
            </a>
        </div>
        <div class="menu">

            <ul>
                <li class="menu_items">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="menu_items">
                    <a href="/#menu">
                        Menu
                    </a>
                </li>
                <li class="menu_items">
                    <a href="/#abus">
                        About
                    </a>
                </li>
                <li class="menu_items">
                    <a href="/#reserv">
                        Reservation
                    </a>
                </li>
                <li class="menu_items">
                    <a href="/register">
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

    <div">
        <table style="width:100%; " align="center" bgcolor="gray" color="green">
            <tr style="height:160px; width: 100%">
                <th style="padding: 30px;">Food</th>
                <th style="padding: 30px;">Price</th>
                <th style="padding: 30px;">Quantity</th>
                <th style="padding: 30px;">Action</th>
            </tr>

            <form action="{{url('orderconfirm')}}" method="POST">

            @csrf
                @foreach($data as $data)

                <tr align="center">
                    <td>
                        <input type="text" name="foodname[]" value="{{$data->title}}" hidden="" id="">
                        {{$data->title}}
                    </td>
                    <td>
                    <input type="text" name="price[]" value="{{$data->price}}" hidden="" id="">
                        {{$data->price}}
                    </td>
                    <td>
                    <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="" id="">
                        {{$data->quantity}}
                    </td>

                </tr>

                @endforeach


                @foreach($data2 as $data2)

                <tr>
                    <td>

                    <td style="background-color: white; position: relative; top: -30px; right: -55%;"><a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a></td>

                    </td>
                </tr>
                @endforeach
        </table>

        <div align="center" style="padding: 10px;">
            <button style=" background-color: rgba(0, 0, 255, 0.694); font-size:20px; border-radius: 8px; color:white;" type="button" id="order">Order Now</button>
        </div>

        <div id="appear" align="center" style="padding: 10px; display:none;">

            <div style="padding: 10px;">
                <label for="">Name</label>
                <input style=" margin-left:20px;" type="text" name="name" placeholder="Name" id="">
            </div>

            <div style="padding: 10px;">
                <label for="">Phone</label>
                <input style=" margin-left:20px;" type="number" name="phone" placeholder="Phone Number" id="">
            </div>

            <div style="padding: 10px;">
                <label for="">Address</label>
                <input type="text" name="address" placeholder="Address" id="">
            </div>

            <div style="padding: 10px;">
                <input style=" font-size: 15px; background-color: rgb(10, 173, 10); font-size:20px; border-radius: 8px; color:white;" type="submit" value="Order Confirm" id="">
                <button style="background-color: red; font-size:20px; border-radius:8px; color:white;" id="close" type="button">Close</button>
            </div>

        </div>
        </form>















        </div>



        <script type="text/javascript">
            $("#order").click(
                function() {
                    $("#appear").show();

                }
            );

            $("#close").click(
                function() {
                    $("#appear").hide();

                }
            );
        </script>





        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="script.js"></script>
</body>

</html>