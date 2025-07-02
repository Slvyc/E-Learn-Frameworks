@extends('layouts.app')

@section('content')
    <!-- fixed hero ga gerak -->
    <div class="fixed top-20 left-0 w-full h-full -z-10">
        <div class="w-full h-full bg-gradient-to-r from-black to-white/50">
            <div class="max-w-6xl mx-auto px-6 py-16 flex flex-col md:flex-row items-center justify-between gap-10">
                <!-- Hero Text -->
                <div class="-mt-10 text-white space-y-5 md:max-w-xl">
                    <h4 class="text-2xl md:text-5xl font-bold leading-tight">
                        Belajar Lebih <span class="text-[#b9ff66]">Efisien</span><br />Dengan Framework Terbaik
                    </h4>
                    <p class="text-base text-gray-300">
                        Jelajahi tools interaktif, latihan langsung, dan tampilan modern yang membantu proses belajar coding
                        jadi
                        optimal.
                    </p>
                </div>

                <!-- Hero Image -->
                <div class="hidden md:flex justify-center w-full max-w-md">
                    <div class="rounded-3xl p-5 ">
                        <div
                            class="relative w-[450px] h-[250px] bg-black rounded-t-2xl overflow-hidden shadow-lg border-4 border-gray-700">
                            <div
                                class="absolute top-1 left-1/2 transform -translate-x-1/2 w-3 h-3 bg-black rounded-full z-10">
                            </div>
                            <img src="images/bg-tools.jpeg" alt="Tools" class="w-full h-full object-contain" />
                        </div>
                        <div
                            class="relative -top-1 -ml-8 w-[510px] h-8 bg-black rounded-b-[1.5rem] mx-auto shadow-inner border-t border-gray-600">
                            <div
                                class="absolute bottom-1 left-1/2 transform -translate-x-1/2 w-16 h-2 bg-gray-600 rounded-full">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section deskripsi -->
    <section class="relative z-0 bg-white/0.5 py-16 mt-120 px-6 text-white backdrop-blur-xl border-t border-white/10">
        <div class="max-w-5xl mx-auto text-center space-y-6">
            <h2 class="text-2xl font-bold">Kenapa Memilih Platform Kami?</h2>
            <p class="text-gray-300 max-w-3xl mx-auto">
                Kamikumpulkan berbagai framework e-learning khusus untuk belajar coding, lengkap dengan fitur interaktif
                yang bikin proses belajar jadi lebih mudah dan menyenangkan.
            </p>
            <div class="mt-10 mb-5">
                <a href="#how-to-use"
                    class="bg-[#b9ff66] hover:bg-[#b9ff66]/20 text-black text-sm/6 font-semibold px-5 py-2 rounded-[10px] shadow transition duration-300">
                    View How to use
                </a>
            </div>
        </div>
    </section>

    <!-- popular card -->
    <section class="bg-[#141414] py-10 px-6 text-white">
        <div class="max-w-screen-xl mx-auto">
            <h2 class="text-3xl font-bold mb-15">Popular Framework</h2>
            <div class="grid grid-cols-3 md:grid-cols-3 items-center">
                <!-- Card 1 -->
                <a href="{{ route('framework') }}" class="flex flex-col items-center text-center">
                    <div class="bg-white rounded-xl w-70 h-70 flex items-center justify-center">
                        <img src="{{ asset('images/Laravel.svg.png') }}" alt="Laravel" class="h-60 ">
                    </div>
                    <h3 class="text-lg font-semibold mt-4">Laravel</h3>
                    <p class="text-sm text-gray-400 max-w-xs mt-2">
                        Body text for whatever you'd like to add more to the subheading.
                    </p>
                </a>

                <!-- Card 2 -->
                <a href="{{ route('framework') }}" class="flex flex-col items-center text-center">
                    <div class="bg-white rounded-xl w-70 h-70 flex items-center justify-center">
                        <img src="{{ asset('images/bg-tools1.png') }}" alt="Node.js" class="h-60 ">
                    </div>
                    <h3 class="text-lg font-semibold mt-4">Node.js</h3>
                    <p class="text-sm text-gray-400 max-w-xs mt-2">
                        Body text for whatever you'd like to expand on the main point.
                    </p>
                </a>

                <!-- Card 3 -->
                <a href="{{ route('framework') }}" class="flex flex-col items-center text-center">
                    <div class="bg-white rounded-xl w-70 h-70 flex items-center justify-center">
                        <img src="{{ asset('images/tailwind logo.png') }}" alt="Tailwind CSS" class="h-60 ">
                    </div>
                    <h3 class="text-lg font-semibold mt-4">Tailwind css</h3>
                    <p class="text-sm text-gray-400 max-w-xs mt-2">
                        Body text for whatever you'd like to share more.
                    </p>
                </a>
            </div>
        </div>
    </section>
    </section>


    <!-- how to use 2 -->
    <section id="how-to-use"
        class="relative z-0 bg-white/0.5 py-16 px-6 text-white backdrop-blur-xl border-t border-white/10"">
        <div class=" max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

        <!-- kiri -->
        <div class="flex text-center flex-col justify-center h-full">
            <h2 class="text-3xl font-bold mb-7">How to Use This Website to Learn?</h2>
            <p class="felx text-center md:text-md text-gray-300 md:px-30">
                Panduan langkah demi langkah untuk membantu kamu memilih dan mempelajari framework coding dari
                katalog kami.
            </p>
        </div>

        <!-- kanan -->
        <div class="flex flex-col justify-center space-y-10">

            <!-- Langkah 1 -->
            <div class="bg-[#b9ff66] text-black p-8 rounded-xl flex space-x-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z" />
                </svg>
                <div class="w-[4px] bg-black opacity-90"></div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Jelajahi Framework</h3>
                    <p class="text-sm">Cari framework belajar coding yang sesuai dari katalog kami, seperti Laravel,
                        Node.js, atau Replit Teams.</p>
                </div>
            </div>

            <!-- Langkah 2 -->
            <div class="bg-[#b9ff66] text-black p-8 rounded-xl flex space-x-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 8h10M7 12h10M7 16h10M5 4h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6a2 2 0 012-2z" />
                </svg>
                <div class="w-[4px] bg-black opacity-90"></div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Baca Detail & Fitur</h3>
                    <p class="text-sm">Setiap framework punya halaman khusus berisi fitur, keunggulan, dan demo
                        penggunaannya.</p>
                </div>
            </div>

            <!-- Langkah 3 -->
            <div class="bg-[#b9ff66] text-black p-8 rounded-xl flex space-x-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
                <div class="w-[4px] bg-black opacity-90"></div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Bandingkan & Pilih</h3>
                    <p class="text-sm">Gunakan fitur pencarian dan filter untuk membandingkan framework secara
                        cepat.</p>
                </div>
            </div>

            <!-- button get Started -->
            <div class="text-center mt-4">
                <a href="{{ route('framework') }}"
                    class="bg-[#b9ff66] hover:bg-[#b9ff66]/20 text-black text-sm/6 font-semibold px-5 py-2 rounded-[10px] shadow transition duration-300">
                    Get Started
                </a>
            </div>
        </div>
        </div>
    </section>
@endsection