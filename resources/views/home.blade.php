@extends('layouts.app')

@section('content')
    <!-- SECTION HERO -->
    <section class="w-full h-[400px] relative overflow-hidden">
        <!-- Background fixed ga gerak -->
        <div class="fixed top-0 left-0 w-full h-[400px] z-0">
            <img src="{{ asset('images/bg-tools.jpeg') }}"
            class="w-full h-full object-cover opacity-30" />
            <div class="absolute inset-0 bg-gradient-to-r from-black to-white/20"></div>
        </div>

        <!-- hero teks -->
        <div class="relative z-10 flex flex-col items-start justify-center h-full px-10 text-left">
            <h1 class="text-white text-4xl md:text-5xl font-bold max-w-xl">
                Find the Right Tools to <br class="hidden md:block" />
                Learn Coding...
            </h1>
        </div>
    </section>

    <!-- SECTION BAWAH -->
    <section class="relative z-20 bg-[#141414] py-16">
        <div class="max-w-xl mx-auto px-6 text-center text-white">
            <p class="text-base md:text-lg text-gray-300">
                Kami kumpulkan berbagai framework e-learning khusus untuk belajar coding, lengkap dengan fitur interaktif
                yang bikin proses belajar jadi lebih mudah dan menyenangkan.
            </p>

            <div class="mt-10">
                <a href="#"
                   class="bg-[#b9ff66] hover:bg-[#b9ff66] text-gray-900 font-semibold px-5 py-2.5 rounded-md shadow transition duration-300">
                    View How to use
                </a>
            </div>
        </div>
    </section>
@endsection
