@extends('layouts.app')
@section('content')
<div class="grid grid-cols-3 mx-6 gap-6 my-5 py-5">
    <div class="bg-green-600 hover:bg-green-700 text-white  flex justify-between px-3 py-6 rounded-lg items-end max-sm:bg-blue-400">
                <h2 class="text-3xl font-bold "> Total Employee</h2>
                <h2 class="text-4xl font-bold "> {{$totalemployee}}</h2>
            </div>
            <div class="bg-green-600 hover:bg-green-700 text-white  flex justify-between px-3 py-6 rounded-lg items-end max-sm:bg-blue-400">
                <h2 class="text-3xl font-bold "> Total State</h2>
                <h2 class="text-4xl font-bold "> {{$totalstate}}</h2>
            </div>
            <div class="bg-blue-600 hover:bg-blue-700 text-white flex justify-between px-3 py-6 rounded-lg items-end">
                <h2 class="text-3xl font-bold"> Total Department</h2>
                <h2 class="text-4xl font-bold">{{$totaldepartment}}</h2>
            </div>
            <div class="bg-red-600 hover:bg-red-700 text-white flex justify-between px-3 py-6 rounded-lg items-end">
                <h2 class="text-3xl font-bold"> Total Country</h2>
                <h2 class="text-4xl font-bold">{{$totalcountry}}</h2>
            </div>
            <div class="bg-yellow-400 hover:bg-yellow-500 text-white flex justify-between px-3 py-6 rounded-lg items-end">
                <h2 class="text-3xl font-bold"> Total City</h2>
                <h2 class="text-4xl font-bold">{{$totalcity}}</h2>
            </div>
            <div class="bg-purple-600 hover:bg-purple-700 text-white flex justify-between px-3 py-6 rounded-lg items-end">
                <h2 class="text-3xl font-bold"> Total Attendence</h2>
                <h2 class="text-4xl font-bold">50</h2>
            </div>
           
    </div>

   

    <div class="relative flex flex-col rounded-xl  bg-clip-border text-gray-700 shadow-md">
        <div class="relative mx-4 mt-4 flex flex-col gap-4 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none md:flex-row md:items-center">
   
             <div>
                <h6 class="block font-sans text-white text-base font-semibold leading-relaxed tracking-normal text-blue-gray-900 antialiased">
                    Pie Chart
                </h6>
      
            </div>
        </div>
         <div class="py-6 mt-4 grid place-items-center px-2">
             <div id="pie-chart"></div>
         </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
    const chartConfig = {
        series: [1, 55, 13, 43, 22],
        chart: {
        type: "pie",
        width: 280,
        height: 280,
        toolbar: {
        show: false,
    },
    },
    title: {
    show: "",
     },
     dataLabels: {
    enabled: false,
     },
    colors: ["#020617", "#ff8f00", "#00897b", "#1e88e5", "#d81b60"],
      legend: {
    show: false,
     },
    };
 
    const chart = new ApexCharts(document.querySelector("#pie-chart"), chartConfig);
 
    chart.render();
    </script>
@endsection
