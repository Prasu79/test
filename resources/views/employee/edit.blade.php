@extends('layouts.app')
@section('content')
@include('layouts.admin')
<div class="p-4 mx-52 items-center">
        <h2 class="text-4xl dark:text-white pb-2  border-b-4 border-blue-500">Update Employee</h2>
        <form action="{{route('employee.update',$employee->id)}}"  method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="inline">
        <label for="" class="dark:text-white  ">First Name:</label>
            <input type="text" class="rounded-lg mt-2 w-full mb-2"  value="{{$employee->first_name}}"  name="first_name"  placeholder="Enter First Name">
            @error('first_name')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror

            <!-- lastname -->
            <label for="" class="dark:text-white">Last Name:</label>
            <input type="text" class="rounded-lg mt-2 w-full mb-2 "  value="{{$employee->last_name}}"  name="last_name"  placeholder="Enter last Name">
            @error('last_name')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror
        </div>

        <!-- photo -->
        <label for=""  class="dark:text-white">Photo:</label>
        <input type="hidden" name="oldpath" value="{{$employee->photopath}}">
        <div class="w-20 mt-2">
                <img src="{{asset('/images/employee/'.$employee->photopath)}}" alt="">
            </div>
        <input type="file" class="mt-5" value="" name="photopath" >
            @error('photopath')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror

        <!-- address -->

       <div class="mt-3">
       <label for="" class="dark:text-white ">Local Address:</label>
        <input type="text" value="{{$employee->address}}" class="mt-3 w-full" name="address">
            @error('address')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror
       </div>

       <div class="mt-3">
       <label for="" class="dark:text-white ">Salary:</label>
        <input type="text" value="{{$employee->salary}}" class="mt-3 w-full" name="salary">
            @error('salary')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror
       </div>

       <div class="mt-3">
       <label for="" class="dark:text-white ">Phone:</label>
        <input type="text" value="{{$employee->phone}}" class="mt-3 w-full" name="phone">
            @error('phone')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror
       </div>

        <label for="" class="dark:text-white block">Zip Code:</label>
        <input type="text" class="rounded-lg mt-2 w-full mb-2 "  value="{{$employee->zip_code}}"  name="zip_code"  placeholder=" Zipcode">
            @error('zip_code')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror

            <label for="" class="dark:text-white block">Date Of Birth:</label>
            <input type="date" class="w-full rounded-lg mt-2 mb-2 "  value="{{$employee->birth_date}}"  name="birth_date"  placeholder="Enter Date Of Birth">
            @error('birth_date')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror

            
            <label for="" class="dark:text-white block">Date Hired:</label>
            <input type="date" class="w-full rounded-lg mt-2 mb-2"  value="{{$employee->date_hired}}"  name="date_hired"  placeholder="Enter Date Hired">
            @error('date_hired')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror
        
        
        <div class="mb-3 mt-3">

        <select name="country_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:text-black dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" id="">
                <option disabled selected>Choose a country</option>
                @foreach($countries as $country)
                    <option value="{{$country->id}}" @if($country->id==$employee->country_id) selected @endif>{{$country->name}}</option>
                @endforeach
                @error('country_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
            </select>

        
            <select name="state_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:text-black dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" id="">
                <option disabled selected>Choose a state</option>
                @foreach($states as $state)
                    <option value="{{$state->id}}" @if($state->id==$employee->state_id) selected @endif>{{$state->name}}</option>
                @endforeach
                @error('state_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
            </select>

            <select name="department_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:text-black dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" id="">
                <option disabled selected>Choose a department</option>
                @foreach($departments as $department)
                    <option value="{{$department->id}}" @if($department->id==$employee->department_id) selected @endif>{{$department->name}}</option>
                @endforeach
                @error('department_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
            </select>


            <select name="city_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:text-black dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" id="">
                <option disabled selected>Choose a city</option>
                @foreach($cities as $city)
                    <option value="{{$city->id}}" @if($city->id==$employee->city_id) selected @endif>{{$city->name}}</option>
                @endforeach
                @error('city_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
            </select>
        
        
        </div>
        

            <div class="mt-5 flex ">
                <input type="submit"  value=" Update Employee"  class="bg-blue-500 text-white px-3  py-2 mx-2 rounded-lg p-2">
                <a href="{{route('employee')}}" class="bg-red-500 text-white px-6 rounded-lg cursor-pointer mx-2 py-3">Exit</a>
            </div>
        </form>
    </div>

@endsection