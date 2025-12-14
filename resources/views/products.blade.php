@extends('layout')

@section('content')

<div class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Cửa Hàng Sản Phẩm</h1>
            <p class="mt-4 text-xl text-gray-500">Các sản phẩm số và giải pháp công nghệ.</p>
        </div>

        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-4 xl:gap-x-8">
            @foreach($products as $product)
            <div class="group relative bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="w-full min-h-60 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-60 lg:aspect-none flex items-center justify-center">
                   <i class="fa-solid fa-box-open text-6xl text-gray-300"></i>
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $product->name }}
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Còn lại: {{ $product->stock }}</p>
                    </div>
                    <p class="text-lg font-medium text-indigo-600">{{ $product->formattedPrice }}</p>
                </div>
                <button class="mt-4 w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition">
                    Thêm vào giỏ
                </button>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection