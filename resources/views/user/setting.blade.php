@extends('layouts.app')

@section('content')

    <!-- sidebar -->

    <main
        class="relative z-20 top-25 bg-[#141414]/60 text-white rounded-2xl shadow-xl ring-1 ring-white/5 backdrop-blur-xl border border-white/10 m-6 mb-40">
        <div class="max-w-screen-xl mx-auto px-6 py-10">
            <div class="max-w-md mx-auto mt-10 bg-white/10 p-8 rounded-xl text-white">
                <h2 class="text-2xl font-bold mb-6">Pengaturan Akun</h2>
                @if(session('success'))
                    <div class="mb-4 text-green-400">{{ session('success') }}</div>
                @endif
                <form method="POST" action="{{ route('user.setting.update') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-1">Nama</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}"
                            class="w-full px-3 py-2 rounded bg-white/20 text-white focus:outline-none" required>
                        @error('name') <div class="text-red-400 text-sm">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-1">Password Baru</label>
                        <input type="password" name="password"
                            class="w-full px-3 py-2 rounded bg-white/20 text-white focus:outline-none">
                        @error('password') <div class="text-red-400 text-sm">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-1">Konfirmasi Password Baru</label>
                        <input type="password" name="password_confirmation"
                            class="w-full px-3 py-2 rounded bg-white/20 text-white focus:outline-none">
                    </div>
                    <button type="submit"
                        class="bg-[#b9ff66] text-black font-semibold px-4 py-2 rounded hover:bg-[#b9ff66]/80 transition">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </main>
@endsection