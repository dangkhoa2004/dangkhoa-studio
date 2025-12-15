<!-- Kinh nghiệm -->
<div class="flex-grow p-4 md:p-8 pt-0">
    <div class="bg-[#2f3542] rounded-3xl p-6 md:p-8 relative shadow-[10px_10px_0_0_#000] border-4 border-black">

        <div
            class="absolute -top-5 right-6 md:right-10 bg-[#FF4757] text-white px-6 py-2 rounded-full font-pop text-xl shadow-[4px_4px_0_0_#000] border-2 border-black transform rotate-2 z-20">
            KINH NGHIỆM
        </div>

        <div class="mt-8 space-y-8">
            @foreach($projects as $index => $project)
            @php
            // Bộ màu Pop Art rực rỡ
            $colors = ['#FF4757', '#FDCB6E', '#2ed573', '#3742fa', '#ff9ff3'];
            // Chọn màu theo thứ tự
            $c = $colors[$index % count($colors)];
            @endphp

            <div class="relative pl-2 md:pl-4">
                <div class="bg-white p-5 rounded-xl border-2 border-black relative transition-transform duration-200 hover:-translate-y-1 hover:-translate-x-1 group"
                    style="box-shadow: 8px 8px 0 0 {{ $c }};">
                    <div class="absolute -left-3 -top-3 w-8 h-8 rounded-full border-2 border-black flex items-center justify-center font-black text-xs text-white shadow-sm z-10"
                        style="background-color: {{ $c }};">
                        {{ $index + 1 }}
                    </div>

                    <h3 class="font-pop text-xl md:text-2xl leading-tight mb-3 uppercase"
                        style="color: {{ $c }}; text-shadow: 1px 1px 0 #000;">
                        {{ $project->title }}
                    </h3>

                    <div class="flex flex-wrap gap-2 mb-4">
                        @foreach($project->technologies as $tech)
                        <span
                            class="text-[10px] font-black uppercase px-2 py-1 rounded border border-black bg-gray-100 text-[#2f3542] group-hover:bg-black group-hover:text-white transition">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>

                    <p
                        class="text-gray-700 text-sm leading-relaxed font-medium mb-4 border-b-2 border-dashed border-gray-300 pb-3">
                        {{ $project->description }}
                    </p>

                    @if($project->link)
                    <a href="{{ $project->link }}" target="_blank"
                        class="inline-flex items-center text-xs font-black uppercase tracking-wide hover:underline decoration-2 underline-offset-2"
                        style="color: {{ $c }}">
                        <i class="fa-solid fa-link mr-2 bg-black text-white p-1 rounded-full text-[8px]"></i>
                        Xem Demo
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>