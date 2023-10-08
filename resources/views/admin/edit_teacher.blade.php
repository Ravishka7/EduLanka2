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
                <h2 class="h2_font">Add Teacher</h2>
        </div>


        <form action="{{url('/edit_teacher_confirm',$data->id)}}" method="POST"> 
                @csrf

            <div class="mb-6">
                <label>Teacher Name :</label>
                <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  
                required value="{{$data->teacher_name}}">
            </div>

            <div class="mb-6">
                <label>Email :</label>
                <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  
                required value="{{$data->email}}">
            </div>

            <div class="mb-6">
                <label>Section :</label>
                
                <select name="section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                required>
                    
                    
                    <option value="{{$data->section}}">{{$data->section}}</option>
                    
                    @foreach($section as $section)
                    <option value="{{$section->section_name}}">{{$section->section_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label>Subject :</label>
                
                <select name="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                required>
                    
                    
                    <option value="{{$data->subject}}">{{$data->subject}}</option>
                    
                    @foreach($subject as $subject)
                    <option value="{{$subject->subject_name}}">{{$subject->subject_name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6">
                <label>Phone :</label>
                <input type="text" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  
                required value="{{$data->phone}}">
            </div>

            <div class="mb-6">
                <label>Address :</label>
                <input type="text" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  
                required value="{{$data->address}}">
            </div>

            

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>

            </form>

        </div>

</div>





@include('admin.script')

</body>

</html>
