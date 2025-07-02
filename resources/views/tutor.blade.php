@extends('layouts.app')

@section('content')

<!-- sidebar -->
<aside
    class="fixed top-30 left-0 z-40 w-64 h-screen transition-transform -translate-x-full  border-r-4 border-[#b9ff66] rounded sm:translate-x-0 dark:border-[#b9ff66]"
    aria-label="Sidebar">
    <div
        class="h-full pb-4 -mt-0 py-4 m-5 overflow-y-auto bg-[#141414]/80 text-white rounded-2xl shadow-2xl ring-1 ring-white/5 backdrop-blur-2xl border border-white/10 ">
        <ul class="space-y-2 font-medium m-4">
            <p class="text-sm text-gray-400 uppercase tracking-wide mb-2">Overview
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#b9ff66]/20 dark:hover:bg-[#b9ff66] hover:text-black group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 flex-shrink-0">
                            <path
                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path
                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
            </p>
            <p class="text-sm text-gray-400 uppercase tracking-wide mb-2">Learn
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-[#b9ff66]/20 dark:hover:bg-[#b9ff66] hover:text-black group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M2.25 13.5a8.25 8.25 0 0 1 8.25-8.25.75.75 0 0 1 .75.75v6.75H18a.75.75 0 0 1 .75.75 8.25 8.25 0 0 1-16.5 0Z"
                                clip-rule="evenodd" />
                            <path fill-rule="evenodd"
                                d="M12.75 3a.75.75 0 0 1 .75-.75 8.25 8.25 0 0 1 8.25 8.25.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75V3Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Tutorial</span>
                    </a>
                </li>
            </p>
        </ul>
    </div>
</aside>

<main
    class="relative z-20 top-25 bg-[#141414]/60 text-white rounded-2xl shadow-xl ring-1 ring-white/5 backdrop-blur-xl border border-white/10 m-6 ml-70 mb-40">
    <div class="max-w-screen-xl mx-auto px-6 py-10">

        <!-- Filter & Tabs Section -->
        <div class="flex justify-between items-center mb-6">
            <div class="flex gap-4 mb-3">
                <button
                    class="bg-white/10 px-4 py-2 rounded-xl text-sm text-white font-medium backdrop-blur-md hover:bg-[#b9ff66]/20 transition">All</button>
                <button
                    class="hover:bg-white/10 px-4 py-2 rounded-xl text-sm text-white font-medium transition">FrontEnd
                    Web</button>
                <button class="hover:bg-white/10 px-4 py-2 rounded-xl text-sm text-white font-medium transition">Back
                    End Web</button>
                <button class="hover:bg-white/10 px-4 py-2 rounded-xl text-sm text-white font-medium transition">Mobile
                    Development</button>
            </div>
            <div class="flex gap-2">
                <select class="bg-white/10 text-white text-sm px-3 py-2 rounded-xl backdrop-blur-md">
                    <option>All</option>
                </select>
                <input type="text" placeholder="Filter by name..."
                    class="bg-white/10 text-white text-sm px-3 py-2 rounded-xl backdrop-blur-md placeholder:text-gray-400 focus:outline-none focus:ring-1 focus:ring-[#b0ff66] focus:border-[#b0ff66]">
            </div>
        </div>

        <!-- Tutorial Cards -->
        <div class="space-y-6">
            <div
                class="bg-white/5 p-5 rounded-2xl shadow-lg flex items-center justify-between hover:bg-white/10 transition-all relative">
                <div class="flex items-center gap-4">
                    <div class="relative w-20 h-20">
                        <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 36 36">
                            <circle class="text-gray-500/20" cx="18" cy="18" r="16" fill="none" stroke="currentColor"
                                stroke-width="3.5" />
                            <circle class="text-[#b9ff66]" cx="18" cy="18" r="16" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-dasharray="100" stroke-dashoffset="30" stroke-linecap="round"
                                transform="rotate(-90 18 18)" />
                        </svg>
                        <img src="#"
                            class="w-14 h-14 bg-white/5 p-2 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10"
                            alt="CSS">
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Tutorial</p>
                        <h4 class="text-xl font-bold">CSS</h4>
                        <p class="text-sm text-gray-300">1/135 Chapter</p>
                    </div>
                </div>
                <button
                    class="text-xs font-semibold bg-[#b9ff66] text-black px-3 py-1.5 rounded-md hover:bg-[#b9ff66]/80 transition">
                    Continue Learn
                </button>
            </div>

            <div
                class="bg-white/5 p-5 rounded-2xl shadow-lg flex items-center justify-between hover:bg-white/10 transition-all relative">
                <div class="flex items-center gap-4">
                    <div class="relative w-20 h-20">
                        <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 36 36">
                            <circle class="text-gray-500/20" cx="18" cy="18" r="16" fill="none" stroke="currentColor"
                                stroke-width="3.5" />
                            <circle class="text-[#b9ff66]" cx="18" cy="18" r="16" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-dasharray="100" stroke-dashoffset="30" stroke-linecap="round"
                                transform="rotate(-90 18 18)" />
                        </svg>
                        <img src="#"
                            class="w-14 h-14 bg-white/5 p-2 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10"
                            alt="CSS">
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Tutorial</p>
                        <h4 class="text-xl font-bold">CSS</h4>
                        <p class="text-sm text-gray-300">1/135 Chapter</p>
                    </div>
                </div>
                <button
                    class="text-xs font-semibold bg-[#b9ff66] text-black px-3 py-1.5 rounded-md hover:bg-[#b9ff66]/80 transition">
                    Continue Learn
                </button>
            </div>
            <div
                class="bg-white/5 p-5 rounded-2xl shadow-lg flex items-center justify-between hover:bg-white/10 transition-all relative">
                <div class="flex items-center gap-4">
                    <div class="relative w-20 h-20">
                        <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 36 36">
                            <circle class="text-gray-500/20" cx="18" cy="18" r="16" fill="none" stroke="currentColor"
                                stroke-width="3.5" />
                            <circle class="text-[#b9ff66]" cx="18" cy="18" r="16" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-dasharray="100" stroke-dashoffset="30" stroke-linecap="round"
                                transform="rotate(-90 18 18)" />
                        </svg>
                        <img src="#"
                            class="w-14 h-14 bg-white/5 p-2 rounded-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-10"
                            alt="CSS">
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Tutorial</p>
                        <h4 class="text-xl font-bold">CSS</h4>
                        <p class="text-sm text-gray-300">1/135 Chapter</p>
                    </div>
                </div>
                <button
                    class="text-xs font-semibold bg-[#b9ff66] text-black px-3 py-1.5 rounded-md hover:bg-[#b9ff66]/80 transition">
                    Continue Learn
                </button>
            </div>

        </div>

    </div>
</main>
@endsection