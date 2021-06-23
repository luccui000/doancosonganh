<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">  
    <style> 
        body {
            font-family: 'Roboto', sans-serif;
        }  
    </style>
    <script src="{{ asset("js/alpine.min.js") }}" ></script> 
    <title>Trang quản trị</title>
    @stack('styles')
    @livewireStyles
</head>
<body>  
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" > 
      <div class="">
        <x-admin.sidebar></x-admin.sidebar>
      </div>
      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100"> 
        <x-admin.header></x-admin.header>
        <div class="p-1">
          @yield('content')
        </div>
      </main>  
    </div>   
    @livewireScripts
    <script src="{{ asset('js/moment.min.js') }}"></script>  
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>