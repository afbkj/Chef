<x-guest-layout>
    <link rel="stylesheet" href="style.css">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label style="color: white;" for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label style="color: white;" for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label style="color: white;" for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label style="color: white;" for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div style="position: absolute;" class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-white-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" style="color: white; margin-top: 20%; width:100%; margin-left: 2%;" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button style="margin-top: -5%; margin-left: -43%;" class="ms-4">
                {{ __('Register') }}
            </x-primary-button>

            <x-primary-button style="margin-left:30px; margin-top:-5%">
                <div class="go"><a href="/" style="text-decoration: none; color:white; margin-left:30px">Home</a></i></div>
            </x-primary-button>
            <!-- <div class="social">
                <div class="go"><a href="home" style="text-decoration: none; color:white;">Home</a></i></div>
            </div> -->
        </div>
    </form>
</x-guest-layout>
