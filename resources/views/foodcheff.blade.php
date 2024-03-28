<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chefs</title>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .parallax {
            background-image: url('/public/admin/user-image/1.jpg');
            min-height: 100vh; /* Change height to min-height */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }


        /* Chef section styling */
        .chef-section {
            text-align: center;
            color: #fff;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            max-height: 70vh; /* Adjust the maximum height */
            overflow: auto; 
        }

        .section-title {
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .chef-grid-container {
            display: flex;
            flex-wrap: wrap; /* Allow items to wrap to the next line */
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .chef-card {
            flex: 0 1 calc(50% - 20px); /* Set width for two columns */
            max-width: 400px; /* Limit the maximum width of each card */
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }


        .chef-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
        }

        .chef-image img {
            width: 100%;
            height: 300px; /* Set height of the image */
            object-fit: contain;
            object-position: top;
            border-radius: 10px 10px 0 0;
        }

        .chef-details {
            padding: 10px;
        }

        .chef-name {
            margin-bottom: 10px;
            font-size: 1.5rem;
            color: #333;
        }

        .chef-description {
            color: #666;
            line-height: 1.6;
        }

        .social-link {
            color: #333;
            margin-right: 10px;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .social-link:hover {
            color: #007bff;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .chef-card {
                flex-basis: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 576px) {
            .chef-card {
                flex-basis: calc(100% - 20px);
            }
        }
    </style>
</head>

<body>

    <div class="parallax">
        <div class="container">
            <section class="chef-section">
                <h2 class="section-title">Meet Our Chefs</h2>
                <div class="chef-grid-container">
                    
                    @foreach($data2 as $chef)
                        <div class="chef-card">
                            <div class="chef-image">
                                <img src="/chefimage/{{$chef->image}}" alt="{{$chef->name}}" alt="Chef 1">
                            </div>
                            <div class="chef-details">
                                <h3 class="chef-name">Chef {{$chef->name}} </h3>
                                <p class="chef-description">{{$chef->speciality}} hariutssan togooch</p>
                                <div class="chef-social-links">
                                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        // Example JavaScript code
        document.addEventListener('DOMContentLoaded', function () {
            // Add your JavaScript logic here
            console.log('Page loaded');
        });
    </script>
</body>

</html>
