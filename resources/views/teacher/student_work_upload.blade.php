
<!DOCTYPE html>
<html lang="en">
<head>
    @include('teacher.head')
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
    @include('teacher.topnav')

    <!-- Text Header -->
    

    <!-- Topic Nav -->
    @include('teacher.nav')

    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

        

        <div class="div_center">
            <h2 class="h2_font">Student Uploads</h2>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    Student Number
                </th>
                
                
                <th scope="col" class="px-6 py-3">
                    File
                </th>
                
                
            </tr>
        </thead>
        <tbody>
            @foreach($uploads as $upload)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$upload->title}}
                </th>
                
                
                <td class="px-6 py-4">

                <a href="{{ route('download', urlencode($upload->file)) }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Download</a>


                </td>
                
                
            </tr>
            @endforeach
            
        </tbody>
    </table>

        

        </div>
    </div>    
    

    
    
    


    @include('teacher.footer')

    

</body>
</html>