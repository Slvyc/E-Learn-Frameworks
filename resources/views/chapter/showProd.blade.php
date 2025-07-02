@extends('layouts.app')

@section('title', $chapter->title . ' - ' . $framework->name)

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{-- Sidebar Navigation --}}
            <div class="col-md-3 col-lg-2 sidebar">
                <div class="sidebar-header">
                    <h5>{{ $framework->name }}</h5>
                    <small class="text-muted">Learning Path</small>
                </div>

                <div class="chapter-list">
                    @foreach($allChapters as $chap)
                        <div class="chapter-item {{ $chap->id == $chapter->id ? 'active' : '' }}">
                            <a href="{{ route('chapter.show', [$framework->slug, $chap->slug]) }}" class="chapter-link">
                                <span class="chapter-number">{{ $chap->order }}</span>
                                <span class="chapter-title">{{ $chap->title }}</span>
                            </a>

                            {{-- Progress indicator --}}
                            <div class="progress-indicator">
                                <div class="progress-bar" style="width: 0%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Main Content --}}
            <div class="col-md-9 col-lg-10 main-content">
                {{-- Header --}}
                <div class="content-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('framework.show', $framework->slug) }}">
                                    {{ $framework->name }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active">{{ $chapter->title }}</li>
                        </ol>
                    </nav>

                    <h1>{{ $chapter->title }}</h1>
                </div>

                {{-- Chapter Content --}}
                <div class="chapter-content">
                    @if($chapter->sections->count() > 0)
                        @foreach($chapter->sections->sortBy('order') as $section)
                            <div class="section" id="section-{{ $section->id }}">
                                <h3>{{ $section->title }}</h3>

                                {{-- Section Content --}}
                                <div class="section-content">
                                    {!! nl2br(e($section->content)) !!}
                                </div>

                                {{-- Code Sample if exists --}}
                                @if($section->code_sample)
                                    <div class="code-sample">
                                        <div class="code-header">
                                            <span>Code Example</span>
                                            <button class="btn btn-sm btn-outline-secondary copy-btn"
                                                data-clipboard-text="{{ $section->code_sample }}">
                                                Copy
                                            </button>
                                        </div>
                                        <pre><code class="language-{{ strtolower($framework->language) }}">{{ $section->code_sample }}</code></pre>
                                    </div>
                                @endif

                                <hr class="section-divider">
                            </div>
                        @endforeach
                    @else
                        <div class="empty-chapter">
                            <p>Chapter ini belum memiliki konten. Silakan kembali lagi nanti!</p>
                        </div>
                    @endif
                </div>

                {{-- Navigation Footer --}}
                <div class="chapter-navigation">
                    @php
                        $currentIndex = $allChapters->search(function ($chap) use ($chapter) {
                            return $chap->id == $chapter->id;
                        });
                        $prevChapter = $currentIndex > 0 ? $allChapters[$currentIndex - 1] : null;
                        $nextChapter = $currentIndex < $allChapters->count() - 1 ? $allChapters[$currentIndex + 1] : null;
                    @endphp

                    <div class="nav-buttons">
                        @if($prevChapter)
                            <a href="{{ route('chapter.show', [$framework->slug, $prevChapter->slug]) }}"
                                class="btn btn-outline-primary prev-btn">
                                <i class="fas fa-chevron-left"></i> Previous
                                <small>{{ $prevChapter->title }}</small>
                            </a>
                        @endif

                        @if($nextChapter)
                            <a href="{{ route('chapter.show', [$framework->slug, $nextChapter->slug]) }}"
                                class="btn btn-primary next-btn">
                                Next <i class="fas fa-chevron-right"></i>
                                <small>{{ $nextChapter->title }}</small>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .sidebar {
            background: #f8f9fa;
            min-height: calc(100vh - 76px);
            padding: 20px 0;
            border-right: 1px solid #e9ecef;
        }

        .sidebar-header {
            padding: 0 20px 20px;
            border-bottom: 1px solid #e9ecef;
            margin-bottom: 20px;
        }

        .chapter-item {
            margin-bottom: 5px;
        }

        .chapter-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            text-decoration: none;
            color: #495057;
            transition: all 0.3s ease;
        }

        .chapter-link:hover {
            background: #e9ecef;
            text-decoration: none;
            color: #495057;
        }

        .chapter-item.active .chapter-link {
            background: #007bff;
            color: white;
        }

        .chapter-number {
            background: #6c757d;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-right: 10px;
            flex-shrink: 0;
        }

        .chapter-item.active .chapter-number {
            background: white;
            color: #007bff;
        }

        .chapter-title {
            font-size: 14px;
            line-height: 1.4;
        }

        .progress-indicator {
            height: 2px;
            background: #e9ecef;
            margin: 5px 20px 0;
        }

        .progress-bar {
            height: 100%;
            background: #28a745;
            transition: width 0.3s ease;
        }

        .main-content {
            padding: 20px;
        }

        .content-header {
            margin-bottom: 30px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h3 {
            color: #2c3e50;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e9ecef;
        }

        .section-content {
            line-height: 1.8;
            color: #555;
            margin-bottom: 20px;
        }

        .code-sample {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            overflow: hidden;
            margin: 20px 0;
        }

        .code-header {
            background: #e9ecef;
            padding: 10px 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            font-weight: 500;
        }

        .code-sample pre {
            margin: 0;
            padding: 20px;
            background: #2d3748;
            color: #e2e8f0;
            overflow-x: auto;
        }

        .section-divider {
            border: none;
            height: 1px;
            background: #e9ecef;
            margin: 30px 0;
        }

        .chapter-navigation {
            border-top: 1px solid #e9ecef;
            padding-top: 30px;
            margin-top: 50px;
        }

        .nav-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-buttons .btn {
            display: flex;
            flex-direction: column;
            text-align: center;
            padding: 15px 25px;
            border-radius: 8px;
        }

        .nav-buttons .btn small {
            font-size: 12px;
            opacity: 0.8;
            margin-top: 5px;
        }

        .next-btn {
            margin-left: auto;
        }

        .empty-chapter {
            text-align: center;
            padding: 50px 0;
            color: #6c757d;
        }
    </style>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
    <script>
        // Initialize clipboard for copy buttons
        new ClipboardJS('.copy-btn');

        // Handle copy button click
        document.querySelectorAll('.copy-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const originalText = this.textContent;
                this.textContent = 'Copied!';
                setTimeout(() => {
                    this.textContent = originalText;
                }, 2000);
            });
        });

        // Auto-scroll to section if hash exists
        if (window.location.hash) {
            setTimeout(() => {
                document.querySelector(window.location.hash)?.scrollIntoView({
                    behavior: 'smooth'
                });
            }, 100);
        }
    </script>
@endpush

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-tomorrow.min.css" rel="stylesheet">
@endpush