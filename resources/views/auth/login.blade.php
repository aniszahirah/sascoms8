<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SASCOMS</title>

    <!-- FAVICON -->
    <link href="images/dsc-logo.jpg" rel="shortcut icon" />

    <link rel="stylesheet" href="/css/app.css">
    <!-- <link rel="stylesheet" href="/css/login.css"> -->
</head>
<body class="bg-cover bg-center bg-no-repeat bg-fixed flex flex-col items-center justify-center" style="background-image: url('images/sasmec-iium.jpg')">
    
    <div class="relative grid gap-10 w-max flex flex-col flex-wrap items-center content-center justify-center min-h-screen bg-gray-200 bg-opacity-75 px-5 filter drop-shadow-2xl">
        <div class="flex justify-center">
            <img src="images/dsc-logo.jpg" alt="" height="130px" width="140px">
            <img src="images/sasmec-iium-logo.png" alt="" height="150px" width="270px">
        </div>
        <form  class="pt-0" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="flex items-center justify-center w-full px-4 py-2 rounded-md">
                <input type="email" name="email" id="email" class="form-input w-full px-4 py-3 rounded-full placeholder-gray-500 placeholder-opacity-100" placeholder="Email" required>
            </div>

            <!-- Password -->
            <div class="flex items-center justify-center w-full px-4 py-2 rounded-md">
                <input type="password" name="password" id="password" class="form-input w-full px-4 py-3 rounded-full placeholder-gray-500 placeholder-opacity-100" placeholder="Password" required>
            </div>

            <div class="flex items-center justify-end mt-4 mr-4">
                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> 
        <div class="flex justify-center absolute bottom-5 place-self-center">
            &copy; <span id="copy-year"></span>
            &nbsp; <a href="https://sasmec.iium.edu.my/" class="text-blue-600 visited:text-purple-600">SASMEC @ IIUM</a>. All Rights Reserved.

            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
        </div>    
    </div>

    


</body>
</html>