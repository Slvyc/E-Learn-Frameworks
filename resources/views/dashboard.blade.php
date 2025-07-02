@extends('layouts.app')

@section('content')

<!-- sidebar -->
<aside
    class="fixed top-20 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-[#141414]/80 border-r-4 border-[#b9ff66] rounded sm:translate-x-0 dark:bg-[#141414]/80 dark:border-[#b9ff66]"
    aria-label="Sidebar">
    <div
        class="h-full pt-5 pb-4 py-4 m-4 overflow-y-auto bg-[#141414]/80 text-white rounded-2xl shadow-2xl ring-1 ring-white/5 backdrop-blur-2xl border border-white/10 ">
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

<!-- Main -->
<main
    class="relative z-20 top-25 bg-[#141414] text-white rounded-2xl shadow-xl ring-1 ring-white/5 backdrop-blur-lg border border-white/10 m-6 ml-70 mb-40">
    <div class="max-w-screen-xl mx-auto px-15 py-10 text-white space-y-8">
        <header class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-center">
            <div>
                <h2 class="text-4xl font-extrabold leading-tight">Welcome back, Karina 👋</h2>
                <p class="text-gray-400 mt-1">Here’s your learning summary for today.</p>
            </div>
            <div class="mt-6 md:mt-0 flex gap-4">
                <button
                    class="bg-[#b9ff66] text-black font-semibold px-4 py-2 rounded-xl hover:bg-[#b9ff66]/80 transition">+
                    New Tutorials</button>
                <button
                    class="bg-white/10 text-white px-4 py-2 rounded-xl hover:bg-white/20 transition">Settings</button>
            </div>
        </header>

        <!-- Progress Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:scale-[1.02] transition">
                <p class="text-sm text-gray-300">Tutorial Yang Diikuti</p>
                <p class="text-2xl font-bold">12</p>
            </div>
            <div class="bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:scale-[1.02] transition">
                <p class="text-sm text-gray-300">Completed</p>
                <p class="text-2xl font-bold">67%</p>
            </div>
        </div>

        <!-- Learning Feed -->
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2 space-y-6">
                <!-- Continue Learningnya -->
                <div
                    class="bg-white/10 backdrop-blur-lg rounded-2xl p-6 border border-white/10 shadow-xl hover:shadow-2xl transition">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm text-gray-400 mb-3">Continue Learning</p>
                            <h3 class="text-2xl font-bold">Laravel Tutorial</h3>
                            <div class="mt-4">
                                <div class="w-[370px] bg-[#414141] h-2 rounded-full">
                                    <div class="bg-[#b9ff66] h-2 rounded-full" style="width: 60%"></div>
                                </div>
                                <p class="text-sm text-gray-400 mt-3">60% completed</p>
                            </div>
                            <button
                                class="mt-4 bg-[#b9ff66] text-black font-semibold px-5 py-2 rounded-lg hover:bg-[#b9ff66]/80 transition">Continue
                                Learn</button>
                        </div>
                        <img src="https://cdn.iconscout.com/icon/free/png-512/laravel-226015.png"
                            class="w-16 h-16 object-contain" alt="Laravel">
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="space-y-4">
                <div
                    class="bg-white/10 backdrop-blur-lg border border-white/10 rounded-xl p-6 shadow-xl hover:shadow-2xl transition">
                    <h3 class="text-sm font-semibold text-gray-400 mb-4">Recent activities</h3>
                    <a href="/course/html"
                        class="flex justify-between items-center hover:bg-white/10 p-3 rounded-lg transition">
                        <div class="flex items-center gap-3">
                            <div class="bg-white/5 p-2 pl-4 rounded-md">
                                <svg class="w-5 h-5 text-[#b9ff66]" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M4 2a2 2 0 0 0-2 2v11.5a.5.5 0 0 0 .79.407L7 13.057l4.21 2.85A.5.5 0 0 0 12 15.5V4a2 2 0 0 0-2-2H4z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold hover:underline text-white">Home</p>
                                <p class="text-xs text-gray-400">Lesson • HTML</p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Recommended Tutorialsnya -->
        <div class="mt-10">
            <h4 class="text-2xl font-bold text-white mb-6">Recommended Tutorials</h4>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-2 gap-6">
                <a href="#"
                    class="flex justify-between items-center bg-white/10 border border-white/10 rounded-xl p-4 shadow-lg backdrop-blur-xl hover:bg-white/20 transition-all">
                    <div>
                        <h5 class="text-lg font-bold text-white">HTML</h5>
                        <p class="text-sm text-gray-400">gatau</p>
                        <span class="mt-2 inline-block text-[#b9ff66] text-sm font-medium hover:underline">Start
                            →</span>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919827.png"
                        class="w-12 h-12 object-contain bg-black/20 rounded-full p-2" alt="HTML">
                </a>
                <a href="#"
                    class="flex justify-between items-center bg-white/10 border border-white/10 rounded-xl p-4 shadow-lg backdrop-blur-xl hover:bg-white/20 transition-all">
                    <div>
                        <h5 class="text-lg font-bold text-white">CSS Flexbox</h5>
                        <p class="text-sm text-gray-400">gatau</p>
                        <span class="mt-2 inline-block text-[#b9ff66] text-sm font-medium hover:underline">Start
                            →</span>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919826.png"
                        class="w-12 h-12 object-contain bg-black/20 rounded-full p-2" alt="CSS">
                </a>
                <a href="#"
                    class="flex justify-between items-center bg-white/10 border border-white/10 rounded-xl p-4 shadow-lg backdrop-blur-xl hover:bg-white/20 transition-all">
                    <div>
                        <h5 class="text-lg font-bold text-white">JavaScript</h5>
                        <p class="text-sm text-gray-400">gatau</p>
                        <span class="mt-2 inline-block text-[#b9ff66] text-sm font-medium hover:underline">Start
                            →</span>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/512/919/919828.png"
                        class="w-12 h-12 object-contain bg-black/20 rounded-full p-2" alt="JS">
                </a>
                <a href="#"
                    class="flex justify-between items-center bg-white/10 border border-white/10 rounded-xl p-4 shadow-lg backdrop-blur-xl hover:bg-white/20 transition-all">
                    <div>
                        <h5 class="text-lg font-bold text-white">Tailwind CSS Tips</h5>
                        <p class="text-sm text-gray-400">gatau</p>
                        <span class="mt-2 inline-block text-[#b9ff66] text-sm font-medium hover:underline">Start
                            →</span>
                    </div>
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968705.png"
                        class="w-12 h-12 object-contain bg-black/20 rounded-full p-2" alt="Tailwind">
                </a>
            </div>
        </div>
    </div>
</main>
@endsection