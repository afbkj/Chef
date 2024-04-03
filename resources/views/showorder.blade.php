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
</head>

<body>
<x-app-layout>
    

<div>
    <table class="cart">
        <tr class="tr1">
            <th style="padding: 30px;">Хоолны нэр</th>
            <th style="padding: 30px;">Үнэ</th>
            <th style="padding: 30px;">Тоо ширхэг</th>
            <th style="padding: 30px;">Захиалсан Өдөр</th>
        </tr>

        @foreach($orders as  $item)
            <tr style="position: relative; padding-top: 20px; margin-left: 40px;">
                <td>{{$item->foodname}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{ \Carbon\Carbon::parse($item->created_at)->setTimezone('Asia/Ulaanbaatar')->format('Y-m-d H:i:s') }}</td>
            </tr>
        @endforeach
    </table>
</div>


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
            console.log('Blaim be ahah')

            Swal.fire({
                title: "Message",
                text: "{{ Session::get('message') }}",
                icon: 'success',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
</x-app-layout>
</body>
</html>
