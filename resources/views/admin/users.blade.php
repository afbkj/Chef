<x-app-layout>
        

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Include your CSS files here x slot ni drop down bar -->
    <x-slot name="header">
        @include("admin.admincss")
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            padding: 8px 12px;
            border: none;
            text-decoration: none;
            cursor: pointer;
        }

        .text-muted {
            color: #6c757d;
        }
    </style>
</head>

<body>

    <div class="container-scroller">

        <!-- Include the navbar -->
        @include("admin.navbar")

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data3 as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->usertype == "1")
                        <a href="{{ url('/deleteuser', $user->id) }}" class="btn btn-danger">Delete</a>
                        @else
                        <span class="text-muted">Not Allowed</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Include your JavaScript files here -->
    @include("admin.adminscript")
</body>

</html>

</x-app-layout>
