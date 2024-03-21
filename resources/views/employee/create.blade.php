@extends('layouts.app')
@section('content')
@include('layouts.admin')
<div class="p-4 mx-52 items-center">
        <h2 class="text-4xl dark:text-white pb-2  border-b-4 border-blue-500">Create Employee</h2>
        <form action="{{route('employee.store')}}"  method="POST" class="mt-5">
        @csrf
        
        <div class="inline">
        <label for="" class="dark:text-white  ">First Name:</label>
            <input type="text" class="rounded-lg mt-2 w-full mb-2"  value=""  name="first_name"  placeholder="Enter First Name">
            @error('first_name')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror



            <!-- lastname -->
            <label for="" class="dark:text-white">Last Name:</label>
            <input type="text" class="rounded-lg mt-2 w-full mb-2 "  value=""  name="last_name"  placeholder="Enter last Name">
            @error('last_name')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror
        </div>

        <label for="" class="dark:text-white">Photo:</label>
        <input type="file" class="mt-5" name="photopath">
            @error('photopath')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror

        <label for="" class="dark:text-white  mt-2 block">Local Address:</label>
        <input type="text" class="rounded-lg mt-2 w-full mb-2" name="address">
            @error('address')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror

        <label for="" class="dark:text-white block">Salary:</label>
        <input type="text " class="rounded-lg mt-2 w-full mb-2 h-10" name="salary">
            @error('salary')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror

            <label for="" class="dark:text-white block">Phone:</label>
        <input type="text" class="rounded-lg mt-2 w-full mb-2" name="phone">
            @error('phone')
                <span class="text-red-600 -mt-4">* {{$message}}</span>
            @enderror

        <label for="" class="dark:text-white block">Zip Code:</label>
        <input type="text" class="rounded-lg mt-2 w-full mb-2 "  value=""  name="zip_code"  placeholder=" Zipcode">
            @error('zip_code')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror

            <label for="" class="dark:text-white block">Date Of Birth:</label>
            <input type="date" class="w-full rounded-lg mt-2 mb-2 "  value=""  name="birth_date"  placeholder="Enter Date Of Birth">
            @error('birth_date')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror

            
            <label for="" class="dark:text-white block">Date Hired:</label>
            <input type="date" class="w-full rounded-lg mt-2 mb-2"  value=""  name="date_hired"  placeholder="Enter Date Hired">
            @error('date_hired')
            <span  class="text-red-600 -mt-4"> *{{$message}}</span>
            @enderror
        
        
        <div class="mb-3 mt-3">
        
        <select id="small"  name="country_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a country</option>
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
                @error('country_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
        </select>
        </div>
        <div>
        <select id="small"  name="department_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a department</option>
                    @foreach($departments as $department)
                        <option value="{{$department->id}}">{{$department->name}}</option>
                    @endforeach
                </select>
                @error('department_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
        </select>
        </div>

        <div>
        <select id="small"  name="state_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a District</option>
                    @foreach($states as $state)
                        <option value="{{$state->id}}">{{$state->name}}</option>
                    @endforeach
                </select>
                @error('state_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
        </select>
        </div>
        <div>
            <select id="small"  name="city_id" class="block w-full p-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a city</option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
                @error('city_id')
                    <span  class="text-red-600 -mt-4"> *{{$message}}</span>
                @enderror
        </select>
        </div>
        

            <div class="mt-5 flex ">
                <input type="submit"  value=" Add Employee"  class="bg-blue-500 text-white px-3  py-2 mx-2 rounded-lg p-2">
                <a href="{{route('employee')}}" class="bg-red-500 text-white px-6 rounded-lg cursor-pointer mx-2 py-3">Exit</a>
            </div>
        </form>
    </div>

@endsection