@extends('layouts.app')

@section('content')
    <!-- Section hero -->
    <section class="w-full h-[350px] relative overflow-hidden">
        <!-- background hero fixed -->
        <div class="fixed top-0 left-0 w-full h-[350px] z-0">
            <img src="{{ asset('images/bg-tools.jpeg') }}" class="w-full h-full object-cover opacity-30" />
            <div class="absolute inset-0 bg-gradient-to-r from-black to-white/20"></div>
        </div>
        <div class="relative z-10 flex flex-col items-start justify-center h-full px-10 text-left">
            <h1 class="text-white text-4xl md:text-5xl font-bold max-w-xl">Contact</h1>
        </div>
    </section>

    <!-- Main Container -->
    <main class="relative z-20 bg-[#141414] pb-10">
        <section class="max-w-screen-xl mx-auto px-50 py-5">
            <!-- card Contact -->
            <div class="bg-white -mt-30 shadow-md rounded-[30px] overflow-hidden grid md:grid-cols-5">
                <div class="p-8 flex flex-col gap-6 items-center text-center text-black md:col-span-2">
                    <div class="flex items-center gap-6">
                        <svg class="w-10 h-10 text-black mt-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg -mt-2">Address</h3>
                    <p class="-mt-2  text-sm">lorem,ywegirb,hadkajdajkda</p>
                    <div class="flex items-center gap-6">
                        <svg class="w-10 h-10 text-black mt-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg -mt-2">Phone</h3>
                    <p class="-mt-2 text-sm">0836482759382</p>
                    <div class="flex items-center gap-6">
                        <svg class="w-13 h-13 text-black mt-4" fill="black" stroke="white" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg -mt-2">Email</h3>
                    <p class="-mt-2 text-sm">terserah@gmail.com</p>
                </div>

                <div class="p-8 border-l bg-black border-gray-300 text-black md:col-span-3">
                    <div class="max-w-lg mx-auto px-4">
                        <h2 class="text-3xl font-bold text-[#b9ff66] mb-2">
                            Send Us Message
                        </h2>
                        <p class="text-gray-400 mb-8">
                            If you have any...
                        </p>
                        <form>
                            <div class="mb-4">
                                <label class="block text-white font-bold mb-2" for="name">Name</label>
                                <input
                                    class="bg-[#141414] appearance-none focus:ring-1 focus:ring-[#b9ff66] focus:border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight"
                                    id="name" type="text" placeholder="Enter your name">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white font-bold mb-2" for="email">Email</label>
                                <input
                                    class="bg-[#141414] appearance-none focus:ring-1 focus:ring-[#b9ff66] focus:border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight"
                                    id="email" type="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-4">
                                <label class="block text-white font-bold mb-2" for="message">Message</label>
                                <textarea
                                    class="bg-[#141414] appearance-none focus:ring-1 focus:ring-[#b9ff66] focus:border-green-500 rounded w-full py-2 px-3 text-gray-700 leading-tight"
                                    id="message" rows="6" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    class="bg-[#b9ff66] hover:bg-[#b9ff66]/50 text-black text-sm/6 font-medium px-3 py-1 rounded-[40px]"
                                    type="button">
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@endsection