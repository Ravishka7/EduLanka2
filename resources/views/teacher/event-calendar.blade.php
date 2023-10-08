
<!DOCTYPE html>
<html lang="en">
<head>
    @include('teacher.head')
</head>
<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
    @include('teacher.topnav')

    <!-- Text Header -->
    

    <!-- Topic Nav -->
    @include('teacher.nav')
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
        @livewire('event-calendar')

        </div>
    </div>


    

    @include('teacher.footer')

    

</body>
</html>