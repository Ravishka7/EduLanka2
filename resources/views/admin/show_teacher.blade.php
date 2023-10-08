<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Day Admin Template: Tailwind Toolbox</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        /* Style the dropdown menu */
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.active {
            display: block;
        }
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .h2_font{
            font-size: 40px;
            font-weight: bold;
            padding-bottom: 50px;
        }
        .dropdown-menu {
            display: none;
        }

        .dropdown-menu.active {
            display: block;
        }
    </style>
    



</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

@include('admin.header')

<div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            
            <div class="div_center">
                <h2 class="h2_font">Teachers</h2>


            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Teacher name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Section
                </th>
                <th scope="col" class="px-6 py-3">
                    Subject
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Address
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $teacher)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$teacher->teacher_name}}
                </th>
                <td class="px-6 py-4">
                    {{$teacher->email}}
                </td>
                <td class="px-6 py-4">
                    {{$teacher->section}}
                </td>
                <td class="px-6 py-4">
                    {{$teacher->subject}}
                </td>
                <td class="px-6 py-4">
                    {{$teacher->phone}}
                </td>
                <td class="px-6 py-4">
                    {{$teacher->address}}
                </td>
                
                <td class="flex items-center px-6 py-4 space-x-3">
                    <a href="{{url('edit_teacher',$teacher->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <a href="{{url('delete_teacher',$teacher->id)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                </td>
            </tr>
            @endforeach

            
            



        </div>

</div>





@include('admin.script')

</body>

</html>
