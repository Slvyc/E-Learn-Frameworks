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
            <aside class="w-80 relative py-8 px-6 sticky top-[80px] self-start h-[calc(100vh-80px)] mt-10">
                <div class="space-y-3">
                    <!-- Tombol All Frameworks -->
                    <div
                        class="flex items-center justify-between p-4 rounded-lg border border-gray-200/10 hover:bg-gray-800/50 transition-all duration-300 group">
                        <a href="{{ route('framework') }}"
                            class="flex items-center space-x-3 hover:text-white transition-colors duration-200 {{ !request('tech_stack') ? 'font-semibold text-white' : 'text-gray-300' }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 7v10a2 2 0 002 2h14l-2-2H5V7H3zM14 3a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h9m0-1H5a3 3 0 00-3 3v6a3 3 0 003 3h9a3 3 0 003-3V5a3 3 0 00-3-3z" />
                            </svg>
                            <span class="text-sm font-medium">All Frameworks</span>
                        </a>
                        <span
                            class="px-3 py-1 text-xs font-bold bg-gradient-to-r from-blue-600/20 to-purple-600/20 text-white rounded-full border border-gray-400/30 min-w-[28px] text-center">
                            {{ $frontendCount + $backendCount + $mobileCount }}
                        </span>
                    </div>

                    <!-- Divider -->
                    <div class="my-4 border-t border-gray-600/30"></div>

                    <div
                        class="flex items-center justify-between p-4 rounded-lg border border-gray-200/10 hover:bg-gray-800/50 transition-all duration-300 group">
                        <a href="{{ route('framework', ['tech_stack' => 'frontend']) }}"
                            class="flex items-center space-x-3 hover:text-white transition-colors duration-200 {{ request('tech_stack') == 'frontend' ? 'font-semibold text-white' : 'text-gray-300' }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                            </svg>
                            <span class="text-sm font-medium">Front End</span>
                        </a>
                        <span
                            class="px-3 py-1 text-xs font-bold bg-blue-600/20 text-blue-300 rounded-full border border-blue-500/30 min-w-[28px] text-center">
                            {{ $frontendCount }}
                        </span>
                    </div>

                    <div
                        class="flex items-center justify-between p-4 rounded-lg border border-gray-200/10 hover:bg-gray-800/50 transition-all duration-300 group">
                        <a href="{{ route('framework', ['tech_stack' => 'backend']) }}"
                            class="flex items-center space-x-3 hover:text-white transition-colors duration-200 {{ request('tech_stack') == 'backend' ? 'font-semibold text-white' : 'text-gray-300' }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5z" />
                            </svg>
                            <span class="text-sm font-medium">Back End</span>
                        </a>
                        <span
                            class="px-3 py-1 text-xs font-bold bg-green-600/20 text-green-300 rounded-full border border-green-500/30 min-w-[28px] text-center">
                            {{ $backendCount }}
                        </span>
                    </div>

                    <div
                        class="flex items-center justify-between p-4 rounded-lg border border-gray-200/10 hover:bg-gray-800/50 transition-all duration-300 group">
                        <a href="{{ route('framework', ['tech_stack' => 'mobiledev']) }}"
                            class="flex items-center space-x-3 hover:text-white transition-colors duration-200 {{ request('tech_stack') == 'mobiledev' ? 'font-semibold text-white' : 'text-gray-300' }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 011 1v8a1 1 0 01-1 1H5a1 1 0 01-1-1V7zM9 11a1 1 0 100 2h2a1 1 0 100-2H9z" />
                            </svg>
                            <span class="text-sm font-medium">Mobile Development</span>
                        </a>
                        <span
                            class="px-3 py-1 text-xs font-bold bg-purple-600/20 text-purple-300 rounded-full border border-purple-500/30 min-w-[28px] text-center">
                            {{ $mobileCount }}
                        </span>
                    </div>
                </div>
                <div class="h-full absolute top-0 right-[-12px] w-[8px] min-h-[500px] bg-[#b9ff66] rounded z-0"></div>
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
                    <form action="{{ route('framework') }}" method="GET" class="flex-1 -ml-20 z-10">
                        <input type="text" name="search" placeholder="search frameworks..." value="{{ request('search') }}"
                            class="w-full px-4 py-1 rounded-full bg-white text-black border-3 border-[#b9ff66] placeholder-[#000000]/50 focus:outline-none focus:ring-2 focus:ring-[#b9ff66]"
                            id="frameworkSearchInput" placeholder="Cari" />
                    </form>
                </div>

                <!-- Framework cols 1 -->
                <div id="frontend" class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                    <!-- Card -->
                    @include('partials.frameworkPart')
                </div>

            </section>
        </div>
    </main>

    <!-- script pencarian -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#frameworkSearchInput').on('keyup', function () {
                let search = $(this).val();
                $.ajax({
                    url: "{{ route('framework') }}",
                    type: "GET",
                    data: { search: search },
                    success: function (response) {
                        $('.framework-search').html(response);
                    }
                });
            });
        });
    </script>

@endsection