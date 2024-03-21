@extends('layouts.app')
@section('content')
@include('layouts.admin')
<div class="p-4 mx-52 items-center">
        <h2 class="text-4xl dark:text-white pb-2  border-b-4 border-blue-500">Create Department</h2>
        <form action="{{route('department.store')}}"  method="POST" class="mt-5">
        @csrf
       

        <input type="text" class="w-full rounded-lg mt-2 "  value=""  name="name"  placeholder="Enter Department Name">
        @error('name')
        <span  class="text-red-600 -mt-4"> *{{$message}}</span>
        @enderror
        
            <div class="mt-5 flex ">
                <input type="submit"  value=" Add Department"  class="bg-blue-500 text-white px-3  py-2 mx-2 rounded-lg p-2">
                <a href="{{route('department')}}" class="bg-red-500 text-white px-6 rounded-lg cursor-pointer mx-2 py-3">Exit</a>
            </div>
        </form>
    </div>

@endsection