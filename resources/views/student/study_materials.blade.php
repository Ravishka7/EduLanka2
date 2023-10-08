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
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

        <div class="div_center">
            <h2 class="h2_font">Subjects</h2>
        </div>

        <div class="flex flex-wrap justify-between">
        
<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">English</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Learn English easily. It's easier than you think</p>
</a>


<a href="{{url('/student_view_subject')}}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mathematics</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Learn Mathematics effectively.Improve your problem solving skills</p>
</a>


<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Science</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Explore the environment around you.There is a science behind it.</p>
</a>


<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ICT</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">One of the most important subject. Everything in the world is ICT now.</p>
</a>


<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">History</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Know your country's and world's history. Learn about the ancestors.</p>
</a>


<a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Business & Accounting Studies</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">An important area whether you are in whatever a proffession.</p>
</a>

</div>




        </div>
    </div>


    

    @include('student.footer')

  

</body>
</html>