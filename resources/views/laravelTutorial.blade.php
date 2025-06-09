@extends('layouts.app')

@section('content')
<!-- SECTION HERO -->
<section class="w-full h-[350px] relative overflow-hidden">
    <!-- Background fixed ga gerak -->
    <div class="fixed top-0 left-0 w-full h-[350px] z-0">
        <img src="{{ asset('images/bg-tools.jpeg') }}" class=" w-full h-full object-cover opacity-30" />
        <div class="absolute inset-0 bg-gradient-to-r from-black to-white/20"></div>
    </div>

    <div class="relative z-10 flex flex-col items-start justify-center h-full pl-78 mt-8 text-left">
        <h1 class="text-white text-4xl md:text-5xl font-bold max-w-xl">
            Laravel Tutorial
        </h1>
    </div>
</section>

<!-- sidebar -->
    <aside class="fixed top-20 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0">
        <div class="h-full py-4 overflow-y-auto bg-[#414141]">
            <a href="#" class="flex items-center ps-5">
                <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">Laravel Chapters</span>
            </a>
            <ul class="space-y-2 mt-7">
                <li>
                    <a href="#" class="flex items-center pl-7 py-2 text-gray-900 dark:text-white hover:bg-[#b9ff66] group">
                        <span class="ms-3 group-hover:text-black group">
                            <span class="font-bold">Chapter 1.</span>&nbsp;Introduction
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center pl-7 py-2 text-gray-900 dark:text-white hover:bg-[#b9ff66] group">
                        <span class="ms-3 group-hover:text-black group">
                            <span class="font-bold">Chapter 2.</span>&nbsp;MVC</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center pl-7 py-2 text-gray-900 dark:text-white hover:bg-[#b9ff66] group">
                        <span class="ms-3 group-hover:text-black group">
                            <span class="font-bold">Chapter 3.</span>&nbsp;Instalation</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center pl-7 py-2 text-gray-900 dark:text-white hover:bg-[#b9ff66] group">
                        <span class="ms-3 group-hover:text-black group">
                            <span class="font-bold">Chapter 4.</span>&nbsp;Examples</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

<!-- Main -->
<main class="relative z-20 bg-[#141414] pl-64">
    <div class="max-w-screen-xl mx-auto px-15 py-10 text-white space-y-8">
        <h1 class="text-3xl font-semibold">Laravel Introduction</h1>
        <div class="flex justify-between items-center -mt-2">
            <a href="#"
                class="text-sm px-4 py-1.5 bg-[#b9ff66] hover:bg-[#b9ff66]/50 text-black rounded-full font-semibold flex items-center gap-1">
                ← Previous
            </a>
            <a href="#"
                class="text-sm px-4 py-1.5 bg-[#b9ff66] hover:bg-[#b9ff66]/50 text-black rounded-full font-semibold flex items-center gap-1">
                Next →
            </a>
        </div>

        <section id="laravel" class="space-y-6 text-gray-300 leading-relaxed mb-15">
            <h2 class="text-2xl text-white font-semibold"><span class="text-[#b9ff66]">#</span>&nbsp;Laravel</h2>
            <p>
                Laravel is a web application framework with expressive, elegant syntax.
                A web framework provides a structure and starting point for creating your application,
                allowing you to focus on creating something amazing while we sweat the details.
            </p>
            <p>
                Laravel strives to provide an amazing developer experience while providing powerful features
                such as thorough dependency injection, an expressive database abstraction layer,
                queues and scheduled jobs, unit and integration testing, and more.
            </p>
            <p>
                Whether you are new to PHP web frameworks or have years of experience,
                Laravel is a framework that can grow with you.
                We'll help you take your first steps as a web developer or give you a boost
                as you take your expertise to the next level.
            </p>
        </section>

        <section id="why-laravel" class="space-y-6 text-gray-300 leading-relaxed mb-15">
            <h2 class="text-2xl text-white font-semibold"><span class="text-[#b9ff66]">#</span>&nbsp;Why Laravel</h2>
            <p>
                There are a variety of tools and frameworks available to you when building a web application.
                However, we believe Laravel is the best choice for building modern, full-stack web applications.
            </p>
            <p>
                <strong>A Progressive Framework</strong><br>
                We like to call Laravel a "progressive" framework. By that, we mean that Laravel grows with you.
                If you're just taking your first steps into web development, Laravel’s vast library of documentation,
                guides, and <a href="#" class="underline text-[#b9ff66] hover:text-[#b9ff66]">video tutorials</a> will
                help you learn the ropes without becoming overwhelmed.
            </p>
            <p>
                If you're a senior developer, Laravel gives you robust tools for
                <a href="#" class="underline text-[#b9ff66] hover:text-[#b9ff66]">dependency injection</a>,
                <a href="#" class="underline text-[#b9ff66] hover:text-[#b9ff66]">unit testing</a>,
                <a href="#" class="underline text-[#b9ff66] hover:text-[#b9ff66]">queues</a>,
                <a href="#" class="underline text-[#b9ff66] hover:text-[#b9ff66]">real-time events</a>, and more.
            </p>
        </section>
    </div>
</main>
@endsection