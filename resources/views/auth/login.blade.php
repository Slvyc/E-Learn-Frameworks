<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Learn</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#141414]/80">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-md">
            <div>
                <div class="flex justify-center mt-6">
                    <a href="{{ url('/') }}">
                        <div class="h-20 w-20 rounded-full overflow-hidden flex items-center justify-center bg-black mx-auto mb-2">
                            <img src="{{ asset('images/Logo Framework.png') }}" alt="E-Learn Logo" class="h-16 w-16 object-cover">
                        </div>
                    </a>
                </div>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Please sign in to your account
                </p>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="rounded-md shadow-sm -space-y-px">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email" name="email" type="email" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 
                            placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-green-500 
                            focus:border-green-500 focus:z-10 sm:text-sm mt-1">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required class="appearance-none relative block w-full px-3 py-2 border border-gray-300 
                            placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-green-500 
                            focus:border-green-500 focus:z-10 sm:text-sm mt-1">
                    </div>
                </div>
                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent 
                        text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 
                        transition duration-150 ease-in-out">
                        Sign in
                    </button>
                    <a href="{{ route('google.login') }}"
                        class="w-full flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-black bg-white hover:bg-gray-100 transition duration-150 ease-in-out mb-2 mt-2">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" class="w-5 h-5 mr-2 inline"
                            style="display:inline"> Login with Google
                    </a>
                </div>
                <div class="flex justify-end mb-2">
                    <div class="text-sm">
                        <a href="" class="font-medium text-green-600 hover:text-green-500">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </form>
            <p class="text-center text-sm text-gray-600">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-medium text-green-600 hover:text-green-500">
                    Register here
                </a>
            </p>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
