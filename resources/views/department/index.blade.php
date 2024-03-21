@extends('layouts.app')
@section('content')
@include('layouts.admin')
<div class="my-5 text-right">
    <a href="{{route('department.create')}}" class="bg-blue-600 text-white px-3 py-2 rounded-lg">Add department</a>
</div>
<div class="mb-8  p-3 rounded" >
    <h1 class="mb-4 dark:text-white">Search Department</h1>
    <form action="{{route('department')}}" method="GET" class="">
        @csrf
        <div class="inline dark:text-white">
            <label for="" class=""> Department Name: </label>
            <input type="search" name="search" class="dark:text-black" value="{{Request::get('name')}}" placeholder="department">
        </div>
        <button type="submit" class=" text-white px-3  py-2 hover:bg-blue-700 rounded-lg cursor-pointer bg-blue-500">Search</button>
        
        <a href="{{route('department')}} " class=" text-white px-3  py-2 rounded-lg cursor-pointer hover:bg-red-700 bg-red-500">Reset</a>
    </form>
</div>

<div class="relative overflow-x-auto">
    <h1 class="text-2xl dark:text-white mb-4">Department</h1>  
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                S.N
            </th>
               
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   Name
                </th>
               
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Action
                </th>
            </tr>
        </thead>
        <tbody class="">
         @foreach($departments as $department)
            <tr class="bg-white border-b dark:bg-gray-800   dark:border-gray-700">
            <td class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$department->id}}
                </td>
               
                <td class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
               
                {{$department->name}}
                </td>
                <td class=" font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{date('d-m-Y ',strtotime($department->created_at))}}
                </td>
                <td class=" font-medium text-gray-900 whitespace-nowrap dark:text-white m-3 flex  ">
                    <a href="{{route('department.edit',$department->id)}}" class="font-medium text-blue-600 mx-2 p-1 dark:bg-green-800 dark:text-white  dark:rounded ">Edit</a>
                    <a onclick="showDelete('{{$department->id}}')" class="font-medium text-blue-600   dark:bg-red-800 dark:rounded p-1 dark:text-white ">Delete</a>
                   
                    
                </td>
            </tr>
           @endforeach
            
        </tbody>
    </table>
</div>
<div id="deletebox" class="bg-slate-500 hidden fixed inset-0 bg-opacity-50  backdrop-blur-sm">
            <div class="w-full h-full  flex items-center justify-center">
                <div class="bg-white w-4/12 h-1/5 rounded-lg p-4 text-center">
                    <p class="font-bold text-3xl">Are you sure to Delete?</p>
                    <form action="{{route('department.delete')}}" method="POST">
                        @csrf
                        <input type="hidden" id="dataid" name="dataid" value="">
                        <div class="flex justify-center mt-6">
                            <input type="submit"  value="Delete" class="bg-blue-500 text-white px-6 mx-2 py-2 rounded-lg cursor-pointer">
                            <a onclick="hideDelete()" class="bg-red-600 text-white px-8 mx-2 py-2 rounded-lg cursor-pointer ">No</a>
                        </div>
                    </form>
                </div>          
            </div>
        </div>
         <script>
        function showDelete(id){
            $('#deletebox').removeClass('hidden');
            $('#dataid').val(id);
        }
        function hideDelete(){
            $('#deletebox').addClass('hidden');
        }
    </script>


@endsection