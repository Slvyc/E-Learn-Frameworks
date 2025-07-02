@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <h2 class="text-black text-2xl font-bold mb-6">Progress Belajar Saya</h2>

    @foreach($frameworkProgress as $fp)
        <div class="mb-6">
            <div class="flex justify-between">
                <span class="text-black font-semibold">{{ $fp['framework']->name }}</span>
                <span class="text-black ">{{ $fp['completed_chapters'] }}/{{ $fp['total_chapters'] }} chapter selesai ({{ $fp['percentage'] }}%)</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-3 mt-2">
                <div class="bg-green-500 h-3 rounded-full" style="width: {{ $fp['percentage'] }}%"></div>
            </div>
        </div>
    @endforeach

    <h3 class="text-black text-xl font-bold mt-10 mb-2">Framework yang Sudah Dipelajari:</h3>
    <ul class="text-black list-disc pl-5">
        @forelse($learnedFrameworks as $fw)
            <li>{{ $fw->name }}</li>
        @empty
            <li>Belum ada framework yang dipelajari.</li>
        @endforelse
    </ul>
</div>
@endsection