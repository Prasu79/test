@if(Session::has("message"))
<div class="fixed top-10 right-10">
    <p id="message" class="bg-slate-700 text-white px-8 py-3 text-xl font-bold rounded-lg ">{{session('message')}}</p>
    <script>
        $(function(){
            setTimeout(function(){
                $("#message").fadeOut(1000);
            }, 1500);
        });
    </script>
</div>
@endif

@if(Session::has("error"))
<div class="fixed top-10 right-10">
    <p id="message" class="bg-red-500 text-white px-8 py-3 text-xl font-bold rounded-lg ">{{session('error')}}</p>
    <script>
        $(function(){
            setTimeout(function(){
                $("#message").fadeOut(1000);
            }, 1500);
        });
    </script>
</div>
@endif