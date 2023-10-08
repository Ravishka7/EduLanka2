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

        

        <div class="flex flex-wrap justify-between">
        

        <a href="{{url('/show_study_materials')}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1567168539593-59673ababaae?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Study Materials</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            </div>
        </a>




        <a href="{{url('/student_upload_work')}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1587613863965-74d82b39ef79?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Upload your work</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"></p>
            </div>
        </a>





</div>




        </div>
    </div>


    

    @include('student.footer')

  

</body>
</html>