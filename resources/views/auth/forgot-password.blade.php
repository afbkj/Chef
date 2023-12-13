<x-guest-layout>
    <link rel="stylesheet" href="style.css">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        

        
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" style="font-size: 18px;">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>

            
            <x-primary-button class="ms-4" style="width: 80px">
                <div class="go"><a href="/" style="text-decoration: none; color:white; width:50px; margin-left:10px;">Home</a></i></div>
            </x-primary-button>
        </div>
        
    </form>
</x-guest-layout>
