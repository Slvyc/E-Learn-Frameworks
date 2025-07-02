@foreach ($frameworks as $framework)
    <div
        class="relative z-0 bg-white/5 text-white backdrop-blur-5xl border-t border-white/40 rounded-[30px] overflow-hidden">
        <div class="relative">
            <img src="{{ asset('storage/' . $framework->logo) }}" class="w-50 h-50 object-contain mx-auto my-6">
            <a href="{{ route('learning.start', $framework->slug) }}" target="_blank"
                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                Start Learning
            </a>
        </div>
        <div class="flex justify-between bg-black items-center px-4 pb-4 pt-4">
            <h3 class="text-white font-semibold mx-auto">{{ $framework->name }}</h3>
            <button class="text-white text-xl">
            </button>
        </div>
    </div>
@endforeach