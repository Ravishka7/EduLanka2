
<!DOCTYPE html>
<html lang="en">
<head>
    @include('student.head')
    <style>
        .div_center{
            text-align: center;
            padding-top: 10px;
            padding-bottom: 40px;
        }
        .h2_font{
            font-size: 40px;
            font-weight: bold;
            padding-bottom: 50px;
        }
        
    </style>
</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    @include('student.topnav')

    <!-- Text Header -->
    

    <!-- Topic Nav -->
    @include('student.nav')
    <div class="div_center">
            <h2 class="h2_font">News Feed</h2>
        </div>
    <div class="container mx-auto flex flex-wrap py-6">
        
    

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        

       @foreach($instance as $instance)

            <article class="flex flex-col shadow my-4" >
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="event_image/{{$instance->image}}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Events</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$instance->title}}</a>   
                    <a href="#" class="pb-6">{{$instance->description}}</a>
                    
                </div>
            </article>
            @endforeach

</div>


    

    @include('student.footer')

    @include('student.script')

</body>
</html>