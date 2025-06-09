@extends('layouts.app')

@section('content')
    <!-- Section Hero -->
    <section class="w-full h-[450px] relative overflow-hidden">
        <!-- background hero fixed -->
        <div class="fixed top-0 left-0 w-full h-[450px] z-0">
            <img src="{{ asset('images/bg-tools.jpeg') }}" class="w-full h-full object-cover opacity-30" />
            <div class="absolute inset-0 bg-gradient-to-r from-black to-white/20"></div>
        </div>
        <div class="relative z-10 flex flex-col items-start justify-center h-full px-10 text-left">
            <h1 class="text-white text-4xl md:text-5xl font-bold max-w-xl">Your Gateway to Smarter Learning</h1>
        </div>
    </section>

    <!-- Main Container -->
    <main class="relative z-20 bg-[#141414] pb-10">
        <section class="max-w-screen-xl mx-auto px-50 grid md:grid-cols-2 gap-6">

            <!-- grid cols 2 -->
            <!-- more than courses -->
            <div class="bg-white text-black p-10 -mt-25 rounded-[30px] shadow-md">
                <h2 class="text-2xl font-bold mb-3">More Than Courses</h2>
                <p class="text-sm text-gray-700">Learning is more than ticking boxes. We help you explore the right content,
                    at the right time, from the right source — because your growth deserves more than just a course.</p>
            </div>

            <!-- vision mission -->
            <div class="bg-white text-black p-10 -mt-25 rounded-[30px] shadow-md">
                <h2 class="text-2xl font-bold mb-3">Vision</h2>
                <p class="text-sm text-gray-700 mb-10">To simplify and empower online learning discovery for everyone.</p>
                <h2 class="text-2xl font-bold mb-3">Mission</h2>
                <p class="text-sm text-gray-700">Centralize e-learning resources in one easy-to-use platform. Help users
                    find the right courses through smart comparisons.</p>
            </div>

            <!-- activities -->
            <div class="bg-white text-black p-10 rounded-[30px] shadow-md md:col-span-2">
                <h2 class="text-2xl font-bold mb-3">Activities</h2>
                <p class="text-sm text-gray-700">As an open-source eLearning Framework licensed under the GNU General Public
                    License (GPL), our community is empowered to contribute in many ways. Whether it's small tweaks or major
                    improvements to the framework's code, your contributions help bring new features, fix bugs quickly, and
                    enhance the overall user experience.</p>
            </div>
        </section>
    </main>

@endsection