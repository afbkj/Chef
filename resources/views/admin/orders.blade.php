<x-app-layout>

    <x-slot name="header">
        @include("admin.admincss")
    </x-slot>

    <div class="container-scroller">
        @include("admin.navbar")

        <div class="container">
            <h1 class="page-title">Customer Orders</h1>

            <form action="{{ url('/search') }}" method="get" class="search-form">
                @csrf
                <input type="text" name="search" class="search-input" placeholder="Search by name" required>
                <button type="submit" class="search-button">Search</button>
            </form>

            <table class="orders-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <!-- <th>Address</th> -->
                        <th>Food Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <!-- <th>Delete</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $order)
                    <tr>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->phone }}</td>
                        <!-- <td>{{ $order->address }}</td> -->
                        <td>{{ $order->foodname }}</td>
                        <td>{{ $order->price }}K</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->price * $order->quantity }}K</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
            color: #212529;
        }


        .container {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .page-title {
            color: #007bff;
            margin-bottom: 15px;
        }

        .search-form {
            margin-bottom: 20px;
        }

        .search-input {
            padding: 8px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .search-button {
            background-color: #28a745;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .orders-table {
            width: 98%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
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
        .search-button:hover{
            opacity: 70%;
        }
    </style>

</x-app-layout>
