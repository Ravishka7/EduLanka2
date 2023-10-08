<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Login Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>
<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
            
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                EduLanka- Log in
            </a>
                
                <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg" value="{{ __('Email') }}">Email</label>
                        <input type="email" id="email" placeholder="your@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline"
                        name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg" value="{{ __('Password') }}">Password</label>
                        <input type="password" id="password" placeholder="Password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required autocomplete="current-password">
                    </div>
    
                    

                    <x-button class="bg-blue-500 text-white font-bold text-lg hover:bg-blue-700 p-2 mt-8 text-center">
                        {{ __('Log in') }}
                    </x-button>



                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="underline font-semibold">Register here.</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="https://images.unsplash.com/photo-1476234251651-f353703a034d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80">
        </div>
    </div>

</body>
</html>
