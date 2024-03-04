<x-app-layout>

    <x-slot name="header">
        @include("admin.admincss")
    </x-slot>

    <div class="container-scroller">
        @include("admin.navbar")

        <div class="content-wrapper">
            <form action="{{ url('/uploadchef') }}" method="post" enctype="multipart/form-data" class="chef-form">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input style="background-color: azure;" type="text" name="name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="form-group">
                    <label for="speciality">Speciality</label>
                    <input style="background-color: azure;" type="text" name="speciality" class="form-control" placeholder="Enter speciality" required>
                </div>

                <div class="form-group file-input">
                    <label for="image">Image</label>
                    <input style="color: black; background-color: azure;"  type="file" name="image" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

            <div class="table-container">
                <table class="chef-table">
                    <thead>
                        <tr>
                            <th>Chef Name</th>
                            <th>Speciality</th>
                            <th>Image</th>
                            <th>Action</th>
                            <th>Action2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $chef)
                            <tr align="center">
                                <td>{{ $chef->name }}</td>
                                <td>{{ $chef->speciality }}</td>
                                <td ><img src="/chefimage/{{ $chef->image }}" alt=""></td>
                                <td><a href="{{ url('/updatechef', $chef->id) }}" class="btn btn-info">Update</a></td>
                                <td><a href="{{ url('/deletechef', $chef->id) }}" class="btn btn-danger">Delete</a></td>
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
        .content-wrapper {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        /*shineer chef nemeh heseg*/
        .chef-form {
            max-width: 400px;
            margin: auto;
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            color: #333;
            font-weight: bold;
        }

        .form-control {
            color: black;
            align-items: center;
            border-radius: 10px;
            padding-top: 20px;
            padding-bottom: 30px;
            padding-left:25px;
        }

        /* .file-input {
            padding-top: 20px;
            padding-bottom: 30px;
        } */

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

        .chef-table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
            color: #333;
            width: 100px;
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
