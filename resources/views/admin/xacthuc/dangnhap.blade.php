<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập Admin</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet"> 
    <style> 
        .bg-random { 
            background-image: url('../img/dangnhap.jpg');
            background-size: cover;
            background-position: center;
        }
    </style> 
</head>
<body>   
    <div class="flex flex-col h-screen bg-gray-50 bg-random "> 
        <div class="grid place-items-center mx-2 my-20 sm:my-auto"> 
            <div class="w-3/12 px-6 py-10 sm:px-10 sm:py-6 bg-white rounded-lg shadow-md lg:shadow-lg">
    
                <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                    Đăng nhập hệ thống
                </h2>

                <form class="mt-10" method="POST" action="{{ route('admin.xacthuc') }}"> 
                    @csrf
                    <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">Email</label>
                    <input id="email" type="email" name="email" placeholder="Địa chỉ email"  
                        class="block w-full py-3 px-1 mt-2 
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        required /> 
                    <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Mật khẩu</label>
                    <input id="password" type="password" name="password" placeholder="Nhập mật khẩu" autocomplete="current-password"
                        class="block w-full py-3 px-1 mt-2 mb-4
                        text-gray-800 appearance-none 
                        border-b-2 border-gray-100
                        focus:text-gray-500 focus:outline-none focus:border-gray-200"
                        required /> 
                    <button type="submit"
                        class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                        font-medium text-white uppercase
                        focus:outline-none hover:bg-gray-700 hover:shadow-none">
                        Đăng nhập
                    </button>  
                </form>
            </div>
        </div>
    </div>  
</body>
</html>