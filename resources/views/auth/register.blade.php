<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Learn</title>
    @vite('resources/css/app.css')
</head>

<section class="fixed top-20 left-0 w-full h-full -z-10">
    <div class="fixed top-0 left-0 w-full h-[700px] z-0">
        <img src="{{ asset('images/bg-tools.jpeg') }}" class="w-full h-full object-cover opacity-50" />
        <div class="absolute inset-0 bg-black/90"></div>
    </div>
</section>

<body>
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div
            class="max-w-md w-full p-8 bg-white/9 text-white backdrop-blur-sm border-t border-white/40 rounded-[30px] z-0">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-extrabold text-[#b9ff66]">Create Account</h2>
                <p class="mt-2 text-sm text-white">Start your journey with us</p>
            </div>
            <form method="POST" action="{{ url('/register') }}" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-white/90">Nama</label>
                    <input type="text" name="name"
                        class="mt-1 block w-full px-3 py-1.5 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#b9ff66] focus:border-[#b9ff66] text-black"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-white/90">Email</label>
                    <input type="email" name="email"
                        class="mt-1 block w-full px-3 py-1.5 border border-[#b9ff66] rounded-md shadow-sm focus:outline-none focus:ring-[#b9ff66] focus:border-[#b9ff66] text-black"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-white/90">Password</label>
                    <input type="password" name="password"
                        class="mt-1 block w-full px-3 py-1.5 border border-[#b9ff66] rounded-md shadow-sm focus:outline-none focus:ring-[#b9ff66] focus:border-[#b9ff66] text-black"
                        required>
                </div>
                <div>
                    <label class="block text-sm font-medium text-white/90">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation"
                        class="mt-1 block w-full px-3 py-1.5 border border-[#b9ff66] rounded-md shadow-sm focus:outline-none focus:ring-[#b9ff66] focus:border-[#b9ff66] text-black"
                        required>
                </div>
                <button type="submit"
                    class="w-full flex justify-center py-1.5 px-4 border border-transparent rounded-2xl shadow-sm text-sm font-medium text-black bg-[#b9ff66] hover:bg-[#b9ff66]/80 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#b9ff66] transition duration-150 ease-in-out">
                    Register
                </button>
            </form>
            <p class="mt-6 text-center text-sm text-white/70">
                Sudah punya akun?
                <a href="{{ route('login') }}"
                    class="font-medium text-[#b9ff66] hover:text-[#b9ff66]/80 transition duration-150 ease-in-out">
                    Login disini
                </a>
            </p>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>