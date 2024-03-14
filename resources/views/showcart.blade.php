<x-app-layout>

</x-app-layout>

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
    <!-- <div class="header">
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

                </li>
                @endauth
                @endif
        </div>
        </ul>
    </div> -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        table.cart {
            width: 80%;
            margin: auto;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        .tr1 {
            background-color: #007bff;
            color: #fff;
        }

        .tr1 th {
            padding: 20px;
            font-size: 18px;
        }

        table.cart td {
            padding: 15px;
            font-size: 16px;
            border-bottom: 1px solid #ddd;
        }

        .td1 a {
            color: #fff;
            background-color: #dc3545;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        #order {
            background-color: rgba(0, 0, 255, 0.694);
            font-size: 20px;
            border-radius: 8px;
            color: white;
            border: none;
            cursor: pointer;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        #appear {
            padding: 20px;
            display: none;
            text-align: center;
        }

        #appear label {
            margin-bottom: 15px;
            display: block;
            font-size: 18px;
            color: #333;
        }

        #appear input {
            margin-bottom: 15px;
            padding: 10px;
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        #appear button,
        #close {
            font-size: 18px;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }
    </style>

    <div>
        <table class="cart">
            <tr class="tr1">
                <th style="padding: 30px;">Action</th>
                <th style="padding: 30px;">Food</th>
                <th style="padding: 30px;">Price</th>
                <th style="padding: 30px;">Quantity</th>
            </tr>

            <form action="{{url('orderconfirm')}}" method="POST">

            @csrf
            <div style="display: flex;">
            @foreach($data2 as $index => $item)
<tr style="position: relative; padding-top: 20px; margin-left: 40px;">
    <td>
        <a href="{{url('/remove',$item->id)}}" class="btn btn-warning">Remove</a>
    </td>
    @if(isset($data[$index]))
        <td>
            <input type="text" name="foodname[]" value="{{$data[$index]->title}}" hidden="">
            {{$data[$index]->title}}
        </td>
        <td>
            <input type="text" name="price[]" value="{{$data[$index]->price}}" hidden="">
            {{$data[$index]->price}}.000
        </td>
        <td>
            <input type="text" name="quantity[]" value="{{$data[$index]->quantity}}" hidden="">
            {{$data[$index]->quantity}}
        </td>
    @endif
</tr>
@endforeach

            </div>

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

            <!-- <div style="padding: 10px;">
                <label for="">Address</label>
                <input type="text" name="address" placeholder="Address" id="">
            </div> -->

            <div style="padding: 10px;">
                <input style=" font-size: 15px; background-color: rgb(10, 173, 10); font-size:20px; border-radius: 8px; color:white;" type="submit" value="Order Confirm" id="">
                <button style="background-color: red; font-size:20px; border-radius:8px; color:white;" id="close" type="button">Close</button>
            </div>


            

            <!-- <a href="#" class="have-code">Have a code?</a>

            <div class="have-code-container">
                <form action="{{route('coupon.store')}}" method="POST">
                    <input type="text" name="coupon_code" id="coupon_code">
                    <button type="submit" class="cpn-btn">Apply</button>
                </form>
            </div> -->

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
