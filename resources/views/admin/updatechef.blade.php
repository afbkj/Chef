<x-app-layout>
    <!-- Include your CSS files here -->
    <a href="/">
        <img src="/image/logo.png" class="logo" alt="">
    </a>

    <div class="container-scroller">

        <div class="content-wrapper">
            <form action="{{ url('/updatefoodchef', $data->id) }}" method="Post" enctype="multipart/form-data" class="chef-form">
                @csrf

                <div class="form-group">
                    <label for="name" class="form-label">Тогоочийн нэр:</label>
                    <input type="text" name="name" value="{{ $data->name }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="speciality" class="form-label">Хоолны төрөл:</label>
                    <input type="text" name="speciality" value="{{ $data->speciality }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Одоогийн зураг:</label><br>
                    <img src="{{ asset('chefimage/' . $data->image) }}" alt="Old Image" class="old-image">
                </div>

                <div class="form-group">
                    <label for="new_image" class="form-label">Шинэ зураг оруулах:</label>
                    <input type="file" name="image" class="form-control-file">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Тогоочийг шинэчлэх</button>
                    <a href="/" class="btn btn-secondary">Буцах</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Include your JavaScript files here -->
    @include("admin.adminscript")

    <style>
        /* CSS styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container-scroller {
            padding: 20px;
        } 
               
        .content-wrapper {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #333; /* Darker text color */
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
            width: 100%;
            transition: border-color 0.3s; /* Smooth border transition */
        }

        .form-control:focus {
            border-color: #4CAF50; /* Green border color on focus */
        }

        .old-image {
            max-width: 200px;
            height: auto;
            margin-top: 10px;
            display: block;
        }
        .logo{
            width: 80px;
            margin-top: -67px;
            margin-left: 9%;
        }

        .btn-primary {
            background-color: #007bff; /* Green */
            border: none;
            color: white;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition: background-color 0.3s; /* Smooth background color transition */
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-secondary {
            background-color: green; /* Gray */
            border: none;
            color: white;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition: background-color 0.3s; /* Smooth background color transition */
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-primary:hover, .btn-secondary:hover {
            opacity: 0.8;
        }
        
    </style>
</x-app-layout>
