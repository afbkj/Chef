<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Coupon Management</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file here -->
    <style>
        /* Additional CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            overflow-y: auto;
        }
        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #fff;
        }
        .sidebar .nav-link {
            display: block;
            color: #fff;
            text-decoration: none;
            margin-bottom: 10px;
        }
        .sidebar .nav-link img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .container {
            margin-left: 250px;
            max-width: calc(100% - 250px);
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .heading {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .btn-create {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-create:hover {
            background-color: #0056b3;
        }
        .coupon-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .coupon-table th, 
        .coupon-table td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        .coupon-table th {
            background-color: #f0f0f0;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 14px;
            color: #333;
        }
        .coupon-table td {
            background-color: #fff;
            font-size: 16px;
            color: #555;
        }
        .coupon-table a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-right: 10px;
            transition: color 0.3s;
        }
        .coupon-table a:hover {
            color: #0056b3;
        }
        /* Additional form styles */
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="#" class="nav-link">
            <img src="coupon_icon.png" alt="Coupon Icon"> Coupons
        </a>
    </div>

    <!-- Main content -->
    <div class="container">
        <h2 class="heading">Coupon Management</h2>
        <form action="{{url('coupon/'.$coupon->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="code">Купоны код</label>
                <input type="text" name="code" class="form-control" value="{{$coupon->code}}" required>
            </div>

            <div class="form-group">
                <label for="value">Хямдралын үнэ</label>
                <input type="number" name="value" class="form-control" value="{{$coupon->value}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Хадгалах</button>
        </form>
    </div>
</body>
</html>
