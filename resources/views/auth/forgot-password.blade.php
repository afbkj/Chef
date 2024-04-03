<x-guest-layout>
    <style>
        /* Custom CSS styles */
        body {
          background-color: black;
          margin-top: -900px;
          
      }
        .background {
          width: 430px;
          height: 520px;
          position: absolute;
          transform: translate(-50%, -50%);
          left: 50%;
          top: 50%;
      }

      .background .shape {
          height: 200px;
          width: 200px;
          position: absolute;
          border-radius: 50%;
      }

      .shape:first-child {
          background: linear-gradient(#1845ad,
                  #23a2f6);
          left: 90px;
          top: -80px;
      }

      .shape:last-child {
          background: linear-gradient(to right,
                  #ff512f,
                  #f09819);
          right: 20px;
          bottom: -110px;
      }

        .container {
          height: 630px;
          width: 450px;
          background-color: rgba(255, 255, 255, 0.206);
          position: absolute;
          transform: translate(-50%, -50%);
          top: 50%;
          left: 50%;
          border-radius: 10px;
          backdrop-filter: blur(10px);
          border: 2px solid rgba(255, 255, 255, 0.1);
          box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
          padding: 50px 35px;
        }
        .container * {
          font-family: 'Poppins', sans-serif;
          color: black;
          letter-spacing: 0.5px;
          outline: none;
          border: none;
      }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: white;
        }

        .subtitle {
            font-size: 0.875rem;
            color: white;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .home-link {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin-top: 20px;
            display: inline-block;
            transition: color 0.3s;
        }

        .home-link:hover {
            color: #0056b3;
        }
    </style>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="container">
        <div class="title">Forgot Your Password?</div>
        <div class="subtitle">
            Don't worry. Just provide us with your email address and we'll send you a link to reset your password.
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus placeholder="Your Email">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <button type="submit" class="btn">Email Password Reset Link</button>
        </form>

        <a href="/" class="home-link">Back to Home</a>
    </div>
</x-guest-layout>
