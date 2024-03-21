@extends('master')
@section('content')
<body class="bg-gradient-to-r from-purple-900 to-blue-950">
<div class="grid grid-cols-4 p-10  mt-10">
        <div class="col-span-6 p-5 mx-52">
            <div class="grid grid-cols-2 gap-8  rounded-lg ">
                <div class="shadow-md hover:shadow-lg rounded-lg  bg-white hover:bg-violet-500  hover:text-white hover:scale-105 transition-all cursor-pointer p-4"><a href="{{route('login')}}">
                    <div class="text-2xl text-center mt-2"><i class="fa-sharp fa-solid fa-user-tie"></i></div>
                    <h1 class="text-2xl font-bold pt-5 text-center">Admin</h1>
                    <p class="text-lg text-center p-2">Login as an administrator to access the dashboard to manage app data.</p>
</a>
                </div>

                <div class="shadow-md hover:shadow-lg rounded-lg  bg-white hover:bg-fuchsia-500  hover:text-white hover:scale-105 transition-all cursor-pointer p-4"><a href="{{route('emp')}}">
                    <div class="text-2xl text-center mt-2"><i class="fa-solid fa-user-group"></i></i></div>
                    <h1 class="text-2xl font-bold pt-5 text-center">Employee</h1>
                    <p class="text-lg text-center p-2">Login as a Employee to see detail and manage their information.</p>
</a>
                </div>
                
               
            </div>
           
        </div>
</div>
</body>



@endsection