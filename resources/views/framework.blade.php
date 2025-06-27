@extends('layouts.app')

@section('content')
    <!-- SECTION HERO -->
    <section class="w-full h-[350px] relative overflow-hidden">
        <!-- Background fixed ga gerak -->
        <div class="fixed top-0 left-0 w-full h-[350px] z-0">
            <img src="{{ asset('images/bg-tools.jpeg') }}" class="w-full h-full object-cover opacity-30" />
            <div class="absolute inset-0 bg-gradient-to-r from-black to-white/20"></div>
        </div>

        <div class="relative z-10 flex flex-col items-start justify-center h-full px-10 text-left">
            <h1 class="text-white text-4xl md:text-5xl font-bold max-w-xl">
                All Framework
            </h1>
        </div>
    </section>

    <!-- Main Container -->
    <main class="relative z-20 bg-[#141414]">
        <div class="px-6 top-0 flex relative gap-8">
            

            <!-- Sidebar -->
            <aside class="w-1/5 relative py-8 px-4 sticky top-[80px] self-start h-[calc(100vh-80px)] mt-10">
                <div class="flex flex-col space-y-6 text-sm text-gray-400">
                    <div class="flex justify-between">
                        <a href="#frontend" class="hover:text-white">Front End Web</a>
                        <span>0/5</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="#backend" class="hover:text-white">Back End Web</a>
                        <span>0/7</span>
                    </div>
                    <div class="flex justify-between">
                        <a href="#mobile" class="hover:text-white">Mobile Dev</a>
                        <span>0/4</span>
                    </div>
                </div>
                <div class="absolute top-0 right-[-12px] w-[8px] min-h-[500px] bg-[#b9ff66] rounded z-0"></div>
            </aside>

            <!-- Main Content -->
            <section class="flex-1">

                <!-- Search Input -->
                <div class="relative py-5 px-4 z-10 sticky top-[80px] flex items-center bg-[#141414] gap-15 mb-5 mt-5">
                    <input type="checkbox" id="filter-toggle" class="hidden peer" />

                    <!-- Filters Button -->
                    <label for="filter-toggle"
                        class="shrink-0 z-10 inline-flex items-center py-2.5 px-6 text-sm font-semibold text-black bg-[#b9ff66] rounded-full cursor-pointer hover:bg-[#b9ff66]/80 select-none">
                        Filters
                        <svg class="w-3 h-3 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m1 1 4 4 4-4" />
                        </svg>
                    </label>

                    <!-- Dropdown -->
                    <div
                        class="absolute top-17 left-0 w-44 bg-[#1f1f1f] rounded-lg text-white opacity-0 invisible peer-checked:visible peer-checked:opacity-100 transition-opacity duration-300 z-20">
                        <ul class="py-2 text-sm">
                            <li>
                                <button type="button"
                                    class="w-full px-4 py-2 hover:bg-[#b9ff66]/20 text-left rounded">Bahasa</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="w-full px-4 py-2 hover:bg-[#b9ff66]/20 text-left rounded">Kategori</button>
                            </li>
                        </ul>
                    </div>

                    <!-- Input search -->
                    <input type="search" placeholder="search frameworks..."
                        class="flex-1 -ml-20 z-10 px-4 py-1 rounded-full bg-white text-black border-3 border-[#b9ff66] placeholder-[#000000]/50 focus:outline-none focus:ring-2 focus:ring-[#b9ff66]" />

                    <button
                        class="flex items-center gap-2 bg-[#414141] hover:bg-[#414141]/80 text-white px-5 py-2 rounded-full text-sm font-semibold">
                        Most Bookmarked
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="white" viewBox="0 0 24 24"
                            stroke="white">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                        </svg>
                    </button>
                </div>

                <!-- Framework cols 1 -->
                <div id="frontend" class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                    <!-- Card -->
                    {{-- @foreach ( $frameworks as $framework ) --}}
                        <div class="relative bg-black rounded-[30px] overflow-hidden">
                            <div class="relative">
                                <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                                <a href="#" target="_blank"
                                    class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                    Learn more
                                </a>
                            </div>
                            <div class="flex justify-between items-center px-4 pb-4 pt-4">
                                <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                                <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    {{-- @endforeach --}}
                    {{-- <div class="relative bg-black rounded-[30px] overflow-hidden">
                        <div class="relative">
                            <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                            <a href="#" target="_blank"
                                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                Learn more
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 pb-4 pt-4">
                            <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="relative bg-black rounded-[30px] overflow-hidden">
                        <div class="relative">
                            <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                            <a href="#" target="_blank"
                                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                Learn more
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 pb-4 pt-4">
                            <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="relative bg-black rounded-[30px] overflow-hidden">
                        <div class="relative">
                            <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                            <a href="#" target="_blank"
                                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                Learn more
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 pb-4 pt-4">
                            <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                            </button>
                        </div>
                    </div> --}}
                </div>

                <div id="backend" class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                    <!-- Card -->
                    {{-- <div class="relative bg-black rounded-[30px] overflow-hidden">
                        <div class="relative">
                            <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                            <a href="#" target="_blank"
                                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                Learn more
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 pb-4 pt-4">
                            <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="relative bg-black rounded-[30px] overflow-hidden">
                        <div class="relative">
                            <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                            <a href="#" target="_blank"
                                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                Learn more
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 pb-4 pt-4">
                            <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="relative bg-black rounded-[30px] overflow-hidden">
                        <div class="relative">
                            <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                            <a href="#" target="_blank"
                                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                Learn more
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 pb-4 pt-4">
                            <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="relative bg-black rounded-[30px] overflow-hidden">
                        <div class="relative">
                            <img src="images/bg-tools1.png" class="w-full h-full object-contain">
                            <a href="#" target="_blank"
                                class="absolute bottom-2 right-2 text-xs text-white bg-[#FF9010] px-2 py-1 rounded-xl">
                                Learn more
                            </a>
                        </div>
                        <div class="flex justify-between items-center px-4 pb-4 pt-4">
                            <h3 class="text-white font-semibold mx-auto">Tailwind CSS</h3>
                            <button class="text-white text-xl"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 text-[#b9ff66]" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 5v14l7-7 7 7V5a2 2 0 00-2-2H7a2 2 0 00-2 2z" />
                                </svg>
                            </button>
                        </div>
                    </div> --}}
                </div>
            </section>
        </div>
    </main>
@endsection