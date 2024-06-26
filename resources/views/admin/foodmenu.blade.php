<x-app-layout>

    <x-slot name="header">
        @include("admin.admincss")
    </x-slot>

    <div class="container-scroller">
        @include("admin.navbar")

        <div class="content-wrapper">
            <form action="{{ url('/uploadfood') }}" method="post" class="food-form" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Нэр</label>
                    <input style="background-color: azure;" type="text" name="title" class="form-control" placeholder="Хоолны нэр" required>
                </div>

                <div class="form-group">
                    <label for="price">Үнэ</label>
                    <input style="background-color: azure;" type="text" name="price" class="form-control" placeholder="Хоолны үнэ" required>
                </div>

                <div class="form-group">
                    <label for="image">Зураг</label>
                    <input style=" background-color: azure; color:black;" type="file" name="image" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Хадгалах</button>
                </div>
            </form>

            <div class="table-container">
                <table class="food-table">
                    <thead>
                        <tr>
                            <th>Хоолны нэр</th>
                            <th>Үнэ</th>
                            <th>Зураг</th>
                            <th>Үйлдэл</th>
                            <th>Үйлдэл2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr align="center">
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->price }}</td>
                                <td style="width: 200px"><img src="/foodimage/{{ $item->image }}" alt=""></td>
                                <td><a href="{{ url('/deletemenu', $item->id) }}" class="btn btn-danger">Устгах</a></td>
                                <td><a href="{{ url('/updateview', $item->id) }}" class="btn btn-info">Шинэчлэх</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <x-slot name="footer">
        @include("admin.adminscript")
    </x-slot>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-scroller {
            margin-right: -150px;
        }

        .content-wrapper {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /*hool nemeh heseg*/
        .food-form {
            max-width: 400px;
            margin-left: 30%;
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
            color: black;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            color: black;
            align-items: center;
            border-radius: 10px;
            padding-top: 20px;
            padding-bottom: 30px;
            padding-left:25px;
        }
        .file-input {
            padding-left: 25px;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            margin-left: 25%;
            border-radius: 20%;
            width: 50%;
            height: 40px;
        }

        .table-container {
            overflow-x: auto;
            margin-top: 20px;
            width: 95%;
            margin-left: -1%;
        }

        .food-table {
            width: 90%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
            color: black;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn-danger,
        .btn-info {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-info {
            background-color: #17a2b8;
        }
    </style>
</x-app-layout>
