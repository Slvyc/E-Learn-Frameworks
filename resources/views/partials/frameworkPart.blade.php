@foreach ($frameworks as $framework)
    <div class="relative bg-black rounded-[30px] overflow-hidden">
        <div class="relative">
            <img src="{{ asset('storage/' . $framework->logo) }}" class="w-50 h-50 object-contain mx-auto my-6">
            <a href="#" target="_blank"
                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                Learn more
            </a>
        </div>
        <div class="flex justify-between items-center px-4 pb-4 pt-4">
            <h3 class="text-white font-semibold mx-auto">{{ $framework->name }}</h3>
            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#b9ff66]"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                </svg>
            </button>
        </div>
    </div>
@endforeach