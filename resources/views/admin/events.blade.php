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

    <style type="text/css">
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
            
        <div class="flex flex-row flex-wrap flex-grow mt-2">

<div class="w-full md:w-1/2 p-3">
    <!--Graph Card-->
    <form action="{{url('add_event')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-6">
        <label>Title :</label>
        <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
    </div>

    <div class="mb-6">
        <label>Description :</label>
        <input type="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  required>
    </div>

    <div class="mb-6">

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Image</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" name="image">

    </div>

    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
</form>
    <!--/Graph Card-->
</div>

<div class="w-full md:w-1/2 p-3">
    <!--Graph Card-->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
        
        <th scope="col" class="px-6 py-3">
            Title
        </th>
        <th scope="col" class="px-6 py-3">
            Description
        </th>
        
        <th scope="col" class="px-6 py-3">
            Image
        </th>
        
        <th scope="col" class="px-6 py-3">
            Action
        </th>
    </tr>
</thead>
<tbody>
    @foreach($instance as $instance)

    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
        
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
            {{$instance->title}}
            
        </th>
        <td class="px-6 py-4">
            {{$instance->description}}
            
        </td>
        
        <td class="px-6 py-4">
            <img src="/event_image/{{$instance->image}}" width="100px" height="100px">

            

        </td>
        
        <td class="flex items-center px-6 py-4 space-x-3">
            
            <a href="{{url('delete_event',$instance->id)}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
        </td>
    </tr>
    @endforeach
    
    
    
    
    
</tbody>
</table>
</div>

            
            



        </div>

</div>





@include('admin.script')

</body>

</html>
