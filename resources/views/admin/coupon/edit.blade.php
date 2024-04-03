<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Coupon Management</title>
    <!-- Include your CSS file here -->
    <link rel="stylesheet" href="style.css">
    <style>
        /* Additional CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 400px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .heading {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: calc(100% - 22px);
        }
        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: calc(50% - 5px);
            text-align: center;
            transition: background-color 0.3s;
            margin: 5px;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

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

            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Хадгалах</button>
                <a href="/coupon" class="btn btn-primary">Буцах</a>
            </div>
        </form>
    </div>
</body>
</html>
