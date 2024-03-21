@extends('layouts.app')
@section('content')
@include('layouts.admin')
<div class="p-4 mx-52 items-center">
        <h2 class="text-4xl dark:text-white pb-2  border-b-4 border-blue-500">Update City</h2>
        <form action="{{route('city.update',$city->id)}}"  method="POST" class="mt-5">
        @csrf
        <div>
        <select id="small"  name="state_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a state</option>
                    @foreach($states as $state)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
                @error('state_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
        </select>
        </div>
       
    
        <input type="text" class="w-full rounded-lg mt-2 "  value="{{$city->name}}"  name="name"  placeholder="Enter City Name">
        @error('name')
        <span  class="text-red-600 -mt-4"> *{{$message}}</span>
        @enderror

        
            <div class="mt-5 flex ">
                <input type="submit"  value="Updates City"  class="bg-blue-500 text-white px-3  py-2 mx-2 rounded-lg p-2">
                <a href="" class="bg-red-500 text-white px-6 rounded-lg cursor-pointer mx-2 py-3">Exit</a>
            </div>
        </form>
    </div>

@endsection