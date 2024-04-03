<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
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

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        .done-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .done-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container-scroller">

    <form action="{{route('admin.coupon-insert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="code">Купоны код</label>
            <input type="text" name="code" id="code" placeholder="Coupon ын кодыг энд бич" required>
        </div>

        <div>
            <label for="value">Хямдралын үнэ</label>
            <input type="number" name="value" id="value" placeholder="Coupon ын үнэ энд бич" required>
        </div>

        <button type="submit">Save</button>
        <a href="/coupon" class="done-link">Done</a>
    </form>
</div>
@include("admin.adminscript")
</body>
</html>
