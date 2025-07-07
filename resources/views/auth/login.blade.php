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
    <div class=" min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div
            class="max-w-md w-full space-y-8 p-8 bg-white/9 text-white backdrop-blur-sm border-t border-white/40 rounded-[30px] z-0">
            <div>
                <div class="flex justify-center mt-6">
                    <a href="{{ url('/') }}">
                        <div
                            class="h-20 w-20 rounded-full overflow-hidden flex items-center justify-center bg-black mx-auto mb-2">
                            <img src="{{ asset('images/Logo Framework.png') }}" alt="E-Learn Logo"
                                class="h-16 w-16 object-cover">
                        </div>
                    </a>
                </div>
                <p class="mt-2 text-center text-sm text-white">
                    Please sign in to your account
                </p>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-white/90">Email Address</label>
                        <input id="email" name="email" type="email" required class="appearance-none relative block w-full px-3 py-2 border border-[#b9ff66]
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-[#b9ff66] 
                            focus:border-[#b9ff66] focus:z-10 sm:text-sm mt-1">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-white/90">Password</label>
                        <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 
                            placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-[#b9ff66]
                            focus:border-[#b9ff66] focus:z-10 sm:text-sm mt-1">
                    </div>
                </div>
                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent 
                        text-sm font-medium rounded-2xl text-black bg-[#b9ff66] hover:bg-[#b9ff66]/80
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#b9ff66]
                        transition duration-150 ease-in-out">
                        Sign in
                    </button>
                    <a href="{{ route('google.login') }}"
                        class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-2xl shadow-sm text-sm font-medium text-black bg-white hover:bg-gray-100 transition duration-150 ease-in-out mb-2 mt-2">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2 inline"
                            style="display:inline"> Login with Google
                    </a>
                </div>
                <div class="flex justify-end mb-2">
                    <div class="text-sm">
                        <a href="" class="font-medium text-[#b9ff66] hover:text-[#b9ff66]/80">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </form>
            <p class="text-center text-sm text-white">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-medium text-[#b9ff66] hover:text-[#b9ff66]/80">
                    Register here
                </a>
            </p>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>