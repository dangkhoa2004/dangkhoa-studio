@extends('layout')

@section('content')

<div class="bg-white">
    <div class="max-w-7xl mx-auto px-4 py-20 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 text-center md:text-left">
            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                <span class="block">Xin chào, tôi là</span>
                <span class="block text-indigo-600">{{ $author }}</span>
            </h1>
            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                {{ $title }}. Tôi xây dựng các giải pháp web hiệu suất cao và giao diện người dùng đẹp mắt.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center md:justify-start">
                <div class="rounded-md shadow">
                    <a href="/products" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg">
                        Xem Sản Phẩm
                    </a>
                </div>
            </div>
        </div>
        <div class="md:w-1/2 mt-10 md:mt-0">
            <img class="w-full h-auto rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1507238691140-d4822733833c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Avatar">
        </div>
    </div>
</div>

<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">Kỹ Năng Chuyên Môn</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($skills as $skill)
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-700">{{ $skill->name }}</span>
                    <span class="text-sm text-gray-500">{{ $skill->proficiency }}%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2.5">
                    <div class="bg-indigo-600 h-2.5 rounded-full" style="width: {{ $skill->proficiency }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12">Dự Án Đã Làm</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="border rounded-lg overflow-hidden hover:shadow-lg transition duration-300">
                <div class="h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                    <i class="fa-regular fa-image text-4xl"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $project->title }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>
                    
                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->technologies as $tech)
                            <span class="px-2 py-1 bg-indigo-50 text-indigo-700 text-xs rounded-full font-semibold">{{ $tech }}</span>
                        @endforeach
                    </div>

                    @if($project->link)
                        <a href="{{ $project->link }}" target="_blank" class="text-indigo-600 hover:text-indigo-800 font-medium">Xem Demo &rarr;</a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection