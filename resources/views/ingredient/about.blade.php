<!-- Giới thiệu -->
<div class="relative bg-white p-6 md:p-12 pb-16 overflow-visible">

    <div class="absolute top-4 right-4 w-32 h-32 opacity-20"
        style="background-image: radial-gradient(#2f3542 2px, transparent 2px); background-size: 12px 12px;">
    </div>

    <div class="absolute top-0 left-4 w-12 h-12 rounded-full border-4 border-black bg-[#2ed573] z-0"></div>
    <i class="fa-solid fa-star text-5xl text-[#3742fa] absolute top-8 right-10 rotate-12 z-0 animate-pulse"></i>

    <div class="relative z-10 bg-[#FF4757] text-white p-8 md:p-12 rounded-[2rem] border-4 border-black transform -rotate-1"
        style="box-shadow: 12px 12px 0 0 #3742fa;"> <i
            class="fa-solid fa-code absolute top-4 right-6 text-white opacity-20 text-8xl rotate-12"></i>

        <h1 class="font-pop leading-[0.9]">
            <span class="block text-6xl uppercase" style="text-shadow: 4px 4px 0 #000;">
                {{ $name ?? 'CAO ĐĂNG KHOA' }}
            </span>
        </h1>
    </div>

    <div class="absolute -bottom-4 left-8 md:left-20 z-20">
        <div
            class="bg-[#FDCB6E] text-[#2f3542] px-6 py-4 rounded-full border-4 border-black shadow-[6px_6px_0_0_#2f3542] flex items-center gap-3 transform rotate-2 hover:rotate-0 transition-transform cursor-default">

            <div
                class="bg-[#2f3542] text-white w-10 h-10 rounded-full flex items-center justify-center border-2 border-white">
                <i class="fa-solid fa-terminal text-sm"></i>
            </div>

            <div class="flex flex-col leading-none">
                <span class="text-[10px] font-bold uppercase tracking-widest text-gray-700">Role / Vị
                    trí</span>
                <span class="font-pop text-xl md:text-3xl tracking-wide text-[#2f3542]">
                    {{ $title ?? 'LẬP TRÌNH VIÊN' }}
                </span>
            </div>
        </div>
    </div>
</div>

<div class="mx-6 md:mx-12 mt-16 mb-8 relative">

    <div class="absolute -top-8 -left-4 text-[#FDCB6E] text-7xl z-50 transform -rotate-12 drop-shadow-[2px_2px_0_#000]">
        <i class="fa-solid fa-quote-left"></i>
    </div>

    <div
        class="bg-[#3742fa] p-8 rounded-3xl border-2 border-black shadow-[10px_10px_0_0_#FDCB6E] relative z-10 text-center hover:-translate-y-1 transition-transform duration-300">

        <div
            class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-[#FF4757] text-white px-8 py-2 rounded-full border-2 border-black font-pop text-xl tracking-widest shadow-[4px_4px_0_0_#000] rotate-1">
            GIỚI THIỆU
        </div>

        <div class="mt-4">
            <p class="text-white text-lg md:text-xl font-medium leading-relaxed italic">
                <span class="text-[#FDCB6E] font-black text-2xl">"</span>
                Sinh viên ngành lập trình với đam mê xây dựng sản phẩm số. Tin rằng "Một lập trình viên giỏi
                không
                chỉ viết code chạy được, mà còn viết code đẹp và có giá trị".
                <span class="text-[#FDCB6E] font-black text-2xl">"</span>
            </p>
        </div>

        <a href="/products"
            class="mt-8 inline-flex items-center gap-2 bg-[#FDCB6E] text-[#2f3542] px-8 py-3 rounded-full font-black border-2 border-black shadow-[4px_4px_0_0_#2f3542] hover:shadow-none hover:translate-x-[4px] hover:translate-y-[4px] transition-all uppercase text-sm">
            <i class="fa-solid fa-box-open"></i> Xem Sản Phẩm
        </a>
    </div>

    <div
        class="absolute -bottom-4 -right-4 w-24 h-24 bg-[radial-gradient(#2f3542_2px,transparent_2px)] [background-size:16px_16px] opacity-30 z-0">
    </div>
</div>