<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://kit.fontawesome.com/e5c96fca62.js" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased flex flex-col items-center">
    <div class="container mt-20 mx-auto py-6 px-6 max-w-3xl lg:max-w-xl border rounded-lg">
    <div class="mb-6 justify-center">
      <h1 class="text-center text-2xl">Sign In</h1>
    </div>
    <form class="justify-center mt-auto mb-auto px-4 py-6 h-400">
    <div class="mb-6">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900/50 dark:text-white">Email or phone mobile number</label>
      <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
    </div>
    <div class="mb-6">
      <label for="password" class="flex justify-between mb-2 text-sm font-medium text-gray-900/50 dark:text-white">
        Password <button type="button" id="btnshow" onclick="showPassword(), changetext()"><i style="font-size: 16px" class='bx bxs-show'></i></button>
      </label>
      <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    <div class="flex items-start mb-4 justify-center mt-2">
      <p class="text-gray-900 dark:text-gray-300">By continouing, you agree to the <a href="" class="underline underline-offset-4 text-gray-900/50 dark:text-gray-300">Terms of Use</a> and <a href="" class="underline underline-offset-4 text-gray-900/50 dark:text-gray-300">Privacy Policy.</a></p>
    </div>
    <div class="flex justify-between text-gray-900 underline underline-offset-4 mt-10 mr-5 ml-5 dark:text-gray-300">
        <a href="">Other issue with sign in</a> <a href="">Forget your password</a>
    </div>
    <h2 class="text-center my-3 text-xl text-gray-900/50 dark:text-gray-300">or</h2>
    <div class=" text-center">
        <a href="" class="text-xl text-gray-900/50 dark:text-gray-300 underline underline-offset-4">Create new account</a>
    </div>
  </form>
</div>
<script src="{{asset('js/script.js')}}" type="text/javascript"></script>
    </body>
</html>
