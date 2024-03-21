@extends('layouts.app')
@section('content')
@include('layouts.admin')
<div class="p-4 mx-52 items-center">
        <h2 class="text-4xl dark:text-white pb-2  border-b-4 border-blue-500">Update Department</h2>
        <form action="{{route('department.update',$department->id)}}"  method="POST" class="mt-5">
        @csrf
        
       
    
        <input type="text" class="w-full rounded-lg mt-2 "  value="{{$department->name}}"  name="name"  placeholder="Enter Department Name">
        @error('name')
        <span  class="text-red-600 -mt-4"> *{{$message}}</span>
        @enderror

        
            <div class="mt-5 flex ">
                <input type="submit"  value="Updates "  class="bg-blue-500 text-white px-3  py-2 mx-2 rounded-lg p-2">
                <a href="" class="bg-red-500 text-white px-6 rounded-lg cursor-pointer mx-2 py-3">Exit</a>
            </div>
        </form>
    </div>

@endsection