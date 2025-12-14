<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DangKhoa Studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-indigo-600">
                        <i class="fa-solid fa-code mr-2"></i>DK Studio
                    </a>
                </div>
                <div class="flex items-center space-x-8">
                    <a href="/" class="text-gray-600 hover:text-indigo-600 font-medium transition">CV / Portfolio</a>
                    <a href="/products" class="text-gray-600 hover:text-indigo-600 font-medium transition">Cửa hàng</a>
                    <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">Liên hệ</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-900 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 DangKhoa Studio. All rights reserved.</p>
            <div class="mt-4 space-x-4">
                <a href="#" class="text-gray-400 hover:text-white"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="text-gray-400 hover:text-white"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>