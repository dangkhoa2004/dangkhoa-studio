<!-- Kỹ Năng -->
<div
    class="bg-white text-[#2f3542] p-6 rounded-xl shadow-[8px_8px_0_0_#3742fa] border-2 border-[#2f3542] transform -rotate-1 mt-6">

    <div class="flex items-center justify-between mb-6 border-b-2 border-[#2f3542] pb-2">
        <h2 class="font-pop text-3xl text-[#FFC312] text-pop-shadow uppercase tracking-wide">
            Kỹ Năng
        </h2>
        <i class="fa-solid fa-bolt text-[#FF4757] text-2xl animate-pulse"></i>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-6">
        @foreach($skills as $index => $skill)
        @php
        $colors = ['#FF4757', '#3742fa', '#2ed573', '#ffa502', '#1e90ff', '#ff6b81'];
        $currentColor = $colors[$index % count($colors)];
        @endphp

        <div class="group">
            <div class="flex justify-between items-end mb-2">
                <span class="font-bold text-sm uppercase tracking-wider transition-colors duration-300"
                    style="color: {{ $currentColor }}; text-shadow: 0.5px 0.5px 0 #2f3542;">
                    {{ $skill->name }}
                </span>
                <span class="text-xs font-black bg-[#2f3542] text-white px-2 py-0.5 rounded shadow-sm">
                    {{ $skill->proficiency }}%
                </span>
            </div>

            <div
                class="w-full bg-gray-100 h-4 rounded-full border-2 border-[#2f3542] relative overflow-hidden shadow-sm">
                <div class="h-full border-r-2 border-[#2f3542]"
                    style="width: {{ $skill->proficiency }}%; background-color: {{ $currentColor }}; transition: width 1s ease-in-out;">
                    <div class="w-full h-full opacity-20"
                        style="background-image: repeating-linear-gradient(45deg, transparent, transparent 5px, rgba(0,0,0,0.3) 5px, rgba(0,0,0,0.3) 10px);">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>