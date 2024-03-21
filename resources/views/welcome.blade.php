<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gradient-to-r  hover:bg-gradient-to-r from-violet-500 to-fuchsia-500">
    
<div class="h-screen bg-gradient-to-r from-violet-500 to-fuchsia-500">
       
       <div class="text-center text-white">
           <h1 class="text-6xl mt-20  font-semibold pt-10"> Welcome to<br> Employee Management <br>System</h1>
           <p class="mt-7 mr-4 text-center text-2xl ">Facilitates administration to access the detailed record of employees<pre class="font-sans text-2xl"> including their salary, attendance, medical, personal, appraisal details while ensuring the accuracy and <br>safety of complete data.</p>
           <a href="{{route('next')}}"><input type="submit" value="Login" class="bg-purple-700 text-center border-purple-700 hover:bg-purple-800 text-white  font-bold border-b-4 px-2 py-1 hover:border-purple-800 rounded  "></a>
           <input type="submit" value="LOGIN AS GUEST" class="bg-transparent mt-3  hover:bg-purple-800  text-purple-700 font-semibold hover:text-white py-2 px-4 border border-purple-500  hover:border-transparent rounded">
          <p class="text-center">Don't have an account?<a href="{{route('login')}}" class="text-blue-950">Sign up</a></p>
          

       </div>
   </div>
</body>
</html>


