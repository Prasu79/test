@extends('master')
@section('content')
<div class="grid grid-cols-5 ">
    <div class="col-span-2  pt-10 mr-28 ml-20 mt-4">
        <h1 class="text-3xl text-center">Employee Login</h1>

        <p class="text-xl text-center mt-6 mb-4">Welcome back! Please enter your details</p>
        <form action=""  method="post" class="">
            @csrf
            <label for="">Name:</label>
            <input type="text" class="w-full rounded-md mt-2" name="name">
            <span class="text-red-400">
            @error('name'){{$message}}@enderror
           </span>


           <label for="" class="mt-2">Phone:</label>
            <input type="text" class="w-full rounded-md mt-2" name="phone">
            <span class="text-red-400">
            @error('phone'){{$message}}@enderror
           </span>
            

           <label for="" class="mt-2">Password:</label>
            <input type="text" class="w-full rounded-md mt-2" name="password">
            <span class="text-red-400">
            @error('password'){{$message}}@enderror
           </span>
           
            <div class="mt-2 flex justify-between item-center">
                <span><input type="checkbox"> Remember me</span>
                <a href="{{route('empr')}}" class="text-purple-800">Forget password?</a>
            </div>

            <div class=" text-center block mt-3 "> 
            <button  class="bg-purple-800  hover:bg-purple-900 text-white  font-bold py-2 px-4 w-full border-blue-700 hover:border-blue-500 rounded  " >LOGIN</button>
            </div>

            <div class=" text-center block mt-1 ">
            <button class="bg-transparent hover:bg-blue-50 mt-3 w-full text-purple-900  font-semibold  py-2 px-4 border border-purple-500 hover:border-blue-500 rounded">LOGIN AS GUEST</button>
            
            </div>
        </form>
    </div>
    
    
   
</div>
@endsection