<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class=" bg-gradient-to-r  hover:bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <div class="grid grid-cols-4  mt-20 ">
        <div class="col-span-2 mx-28 ">
        <h1 class="text-3xl text-center font-bold ">Employee Register</h1>
        <p class="text-lg  mt-6 mb-3 text-center m-5 ">Create your own information by registering as an employee.
        You will be able to add department and city and manage the system</p>
        <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full rounded h-10" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full rounded h-10" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full rounded h-10"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full rounded h-10"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- <x-primary-button class=" mt-5 h-10 text-center w-full bg-purple-700 hover:bg-purple-800 ">
                {{ ('Register') }}
            </x-primary-button> -->
           <div class="mt-5">
           <button  class="bg-purple-800  hover:bg-purple-900 text-white  font-bold py-2 px-4 w-full border-blue-700 hover:border-blue-500 rounded  " >REGISTER</button>
           </div>
        <div class=" items-center  mt-4">
      
            <a class="underline text-sm   text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 " href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

           
        </div>
    </form>
        </div>
        <div class="mt-3 col-span-2">
            <img src="{{asset('images/register.png')}}" class="mx-3  mt-10 w-9/12" alt="">
        </div>
    </div>
</body>
</html>