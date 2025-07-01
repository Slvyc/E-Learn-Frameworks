@extends('layouts.app')

@section('title', $chapter->title . ' - ' . $framework->name)

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
                {{ $framework->name . " Tutorial" }}
            </h1>
        </div>
    </section>


    <!-- sidebar -->
    <aside class="fixed top-20 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0">
        <div class="h-full py-4 overflow-y-auto bg-[#414141]">
            <a href="#" class="flex items-center ps-5">
                <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white mt-7">{{ $framework->name . " Chapters" }}</span>
            </a>
            <ul class="text-sm space-y-2 mt-7">
                @foreach($allChapters as $chap)
                    <li>
                        {{--
                    <li class="{{ $chap->id == $chapter->id ? 'bg-[#b9ff66] text-black font-bold' : '' }}"> --}}
                        <a href="{{ route('chapter.show', [$framework->slug, $chap->slug]) }}"
                            class="flex items-center pl-7 py-2 text-gray-900 dark:text-white hover:bg-[#b9ff66] group">
                            <span class="ms-3 group-hover:text-black group">
                                <span class="font-bold">{{ "Chapter " . $chap->order . '.' }}</span>&nbsp;{{ $chap->title }}
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>

    <!-- Main -->
    <main class="relative z-20 bg-[#141414] pl-64">
        <div class="max-w-screen-xl mx-auto px-15 py-10 text-white space-y-8">
            {{-- <h1 class="text-3xl font-semibold">Laravel Instalation {{ $framework->name . " Chapters" }}</h1> --}}

            @if($chapter->sections->count() > 0)
                @foreach($chapter->sections->sortBy('order') as $section)
                    <section id="laravel" class="space-y-6 text-gray-300 leading-relaxed mb-15">
                        <h2 class="text-2xl text-white font-semibold"><span
                                class="text-[#b9ff66]">#</span>&nbsp;{{ $section->title }}
                        </h2>
                        <p>
                            {!! nl2br(e($section->content)) !!}
                        </p>
                        <div class="relative ml-0 mt-7">
                            @if($section->code_sample)
                                <div class="bg-black/20 p-3 text-white rounded-md">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-gray-400 flex gap-1">
                                            <div class="w-2 h-2 rounded-full bg-[#990000]"></div>
                                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                            <div class="w-2 h-2 rounded-full bg-[#077019]"></div>
                                        </span>
                                        <button data-clipboard-target="{{ $section->code_sample }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#414141" class="size-6">
                                                <path
                                                    d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z" />
                                                <path
                                                    d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="overflow-x-auto">
                                        <pre id="code"
                                            class="text-gray-300 bg-[#1f1f1f] code p-4 rounded-md whitespace-pre overflow-x-auto {{ strtolower($framework->language) }}"><code>{{ $section->code_sample }}</code>
                                        </pre>
                                    </div>
                                </div>
                            @endif
                    </section>
                @endforeach
            @else
                <div class="empty-chapter">
                    <p>Chapter ini belum memiliki konten. Silakan kembali lagi nanti!</p>
                </div>
            @endif


            <div class="flex justify-between items-center -mt-2">
                @php
                    $currentIndex = $allChapters->search(function($chap) use ($chapter) {
                        return $chap->id == $chapter->id;
                    });
                    $prevChapter = $currentIndex > 0 ? $allChapters[$currentIndex - 1] : null;
                    $nextChapter = $currentIndex < $allChapters->count() - 1 ? $allChapters[$currentIndex + 1] : null;
                @endphp

                @if($prevChapter)
                    <a href="{{ route('chapter.show', [$framework->slug, $prevChapter->slug]) }}"
                        class="text-sm px-4 py-1.5 bg-[#b9ff66] hover:bg-[#b9ff66]/50 text-black rounded-full font-semibold flex items-center gap-1">
                        ← Previous
                        <small class="ml-2 text-xs font-semibold">{{ $prevChapter->title }}</small>
                    </a>
                @endif

                @if($nextChapter)
                    <a href="{{ route('chapter.show', [$framework->slug, $nextChapter->slug]) }}"
                        class="text-sm px-4 py-1.5 bg-[#b9ff66] hover:bg-[#b9ff66]/50 text-black rounded-full font-semibold flex items-center gap-1">
                        Next →
                        <small class="mr-2 text-xs font-semi bold">{{ $nextChapter->title }}</small>
                    </a>
                @endif
            </div>
        </div>
    </main>
@endsection