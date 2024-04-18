<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChefSys</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
</head>

<body>
<x-app-layout>
    @auth
        <a href="{{url('/showcart', Auth::user()->id)}}">
            Cart[{{$count}}]
        </a>
    @endauth

    <div>
        @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{url('orderconfirm')}}" method="POST">
            @csrf
            <table class="cart">
                <tr class="tr1">
                    <th style="padding: 30px;">Хоолны нэр</th>
                    <th style="padding: 30px;">Үнэ</th>
                    <th style="padding: 30px;">Тоо ширхэг</th>
                    <th style="padding: 30px;">Үйлдэл</th>
                </tr>

                <div style="display: flex;">
                    @foreach($data2 as $index => $item)
                        <tr style="position: relative; padding-top: 20px; margin-left: 40px;">
                            @if(isset($data[$index]))
                                <td>
                                    <input type="text" name="foodname[]" value="{{$data[$index]->title}}"
                                           hidden="">
                                    {{$data[$index]->title}}
                                </td>
                                <td>
                                    <input type="text" name="price[]" value="{{$data[$index]->price}}"
                                           hidden="">
                                    {{$data[$index]->price}}₮
                                </td>
                                <td>
                                    <input type="text" name="quantity[]" value="{{$data[$index]->quantity}}"
                                           hidden="">
                                    {{$data[$index]->quantity}}
                                </td>
                                <td>
                                    <a href="{{url('/remove',$item->id)}}" class="btn btn-warning"
                                       style="background-color: red; color:white; border-radius: 5px; padding:2px;">Устгах</a>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </div>
            </table>

            <div align="center" style="padding: 10px;">
                <button style=" background-color: rgba(0, 0, 255, 0.694); font-size:20px; border-radius: 8px; color:white;"
                        type="button" id="order">Захиалах
                </button>
            </div>

            <div id="appear" align="center" style="padding: 10px; display:none;">
                <div style="padding: 10px;">
                    <label for="">Name</label>
                    <input style=" margin-left:20px;" type="text" name="name" placeholder="Name" id="" required>
                </div>

                <div style="padding: 10px;">
                    <label for="">Phone</label>
                    <input style=" margin-left:20px;" type="number" name="phone" placeholder="Phone Number" id="phnnum">
                </div>

                <div style="padding: 10px;">
                    <label for="">Coupon Code</label>
                    <input type="text" name="coupon_code" placeholder="Coupon" id="">
                </div>

                <div style="padding: 10px;">
                    <input style=" font-size: 15px; background-color: rgb(10, 173, 10); font-size:20px; border-radius: 8px; color:white;"
                           type="submit" value="Order Confirm" id="orderconfirm">
                    <button style="background-color: red; font-size:20px; border-radius:8px; color:white;"
                            id="close" type="button">Close
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#order").click(function () {
                $("#appear").show();
            });

            $("#close").click(function () {
                $("#appear").hide();
            });

            // Mongolian phone number validation
            const phoneNumberRegex = /^(?:\+976)?\s?(?!.*(\d{2})\1)[89]\d{7}$/;

            function validateMongolianPhoneNumber(phoneNumber) {
                return phoneNumberRegex.test(phoneNumber);
            }

            $("#orderconfirm").click(function () {
                const phoneNumber = $("#phnnum").val();
                if (!validateMongolianPhoneNumber(phoneNumber)) {
                    alert("Буруу дугаар оруулсан байна.");
                    return false; // Prevent form submission
                }
                // Redirect using JavaScript to the 'showorder' route
                // window.location.href = '/showorder';
            });
        });
        

    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(Session::has('message'))
        <script>
            // console.log('Blaim be ahah')

            Swal.fire({
                title: "Message",
                text: "{{ Session::get('message') }}",
                icon: 'success',

                timer: 3000,
                // showConfirmButton: false
            }).then((result) => {
            // Redirect to another page after the alert is closed
            window.location.href = "{{ route('showorder') }}"; // Change 'showorder' to your actual route name
        });
        </script>
    @endif
</x-app-layout>
</body>
</html>
