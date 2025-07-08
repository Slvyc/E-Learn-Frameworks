@extends('layouts.app')

@section('content')
    <!-- Section Hero -->
    <section class="w-full h-[450px] relative overflow-hidden">
        <!-- background hero fixed -->
        <div class="fixed top-0 left-0 w-full h-[450px] z-0">
            <img src="{{ asset('images/bg-tools.jpeg') }}" class="w-full h-full object-cover opacity-30" />
            <div class="absolute inset-0 bg-gradient-to-r from-black to-white/20"></div>
        </div>
        <div class="relative z-10 flex flex-col items-start justify-center h-full px-10 text-left">
            <h1 class="text-white text-4xl md:text-5xl font-bold max-w-xl">Your Gateway to Smarter Learning</h1>
        </div>
    </section>

    <!-- Main Container -->
    <main class="relative z-20 bg-[#141414] pb-10">
        <section class="max-w-7xl mx-auto px-6 md:px-8 grid md:grid-cols-2 gap-8">
            <!-- More Than Courses Card -->
            <div
                class="group bg-white/95 backdrop-blur-sm text-black p-8 -mt-32 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:transform hover:scale-105 border border-gray-100/50">
                <div class="flex items-center mb-6">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mr-4 group-hover:rotate-6 transition-transform duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">More Than Courses</h2>
                </div>
                <p class="text-gray-600 leading-relaxed text-base">
                    Learning is more than ticking boxes. We help you explore the right content, at the right time, from the
                    right source — because your growth deserves more than just a course.
                </p>
                <div
                    class="mt-6 flex items-center text-blue-600 font-medium group-hover:text-blue-700 transition-colors duration-300">
                    <span class="mr-2">Explore more</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </div>
            </div>

            <!-- Vision & Mission Card -->
            <div
                class="group bg-white/95 backdrop-blur-sm text-black p-8 -mt-32 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:transform hover:scale-105 border border-gray-100/50">
                <div class="space-y-8">
                    <!-- Vision -->
                    <div class="relative">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center mr-4 group-hover:rotate-6 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Vision</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-base ml-16">
                            To simplify and empower online learning discovery for everyone.
                        </p>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-200"></div>

                    <!-- Mission -->
                    <div class="relative">
                        <div class="flex items-center mb-4">
                            <div
                                class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mr-4 group-hover:rotate-6 transition-transform duration-300">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Mission</h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-base ml-16">
                            Centralize e-learning resources in one easy-to-use platform. Help users find the right courses
                            through smart comparisons.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Activities Card - Full Width -->
            <div class="md:col-span-2 ">
                <div
                    class="group bg-[#b9ff66] text-black p-10 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 hover:transform hover:scale-102 relative overflow-hidden">
                    <!-- Background Effects -->
                    <div class="absolute inset-0 bg-gradient-to-br from-black/5 to-transparent"></div>
                    <div class="absolute top-0 right-0 w-32 h-32 bg-black/10 rounded-full -mr-16 -mt-16 animate-pulse">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 w-24 h-24 bg-black/10 rounded-full -ml-12 -mb-12 animate-pulse delay-1000">
                    </div>

                    <div class="relative z-10">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
                            <div class="flex items-center mb-6 md:mb-0">
                                <div
                                    class="w-14 h-14 bg-black/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mr-6 group-hover:rotate-6 transition-transform duration-300">
                                    <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <h2 class="text-3xl md:text-4xl font-bold text-black">Our Activities</h2>
                            </div>
                            <div class="flex items-center text-black/70">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm font-medium">Open Source • GPL Licensed</span>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-8 items-start">
                            <div>
                                <p class="text-black/80 leading-relaxed text-lg">
                                    As an open-source eLearning Framework licensed under the GNU General Public License
                                    (GPL), our community is empowered to contribute in many ways. Whether it's small tweaks
                                    or major improvements to the framework's code, your contributions help bring new
                                    features, fix bugs quickly, and enhance the overall user experience.
                                </p>
                            </div>

                            <div class="space-y-4">
                                <!-- Contribution Stats -->
                                <div class="flex items-center justify-between p-4 bg-black/10 rounded-xl backdrop-blur-sm">
                                    <span class="text-black/80">Contributors</span>
                                    <span class="text-black font-bold text-xl">500+</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-black/10 rounded-xl backdrop-blur-sm">
                                    <span class="text-black/80">Commits</span>
                                    <span class="text-black font-bold text-xl">2.5k+</span>
                                </div>
                                <div class="flex items-center justify-between p-4 bg-black/10 rounded-xl backdrop-blur-sm">
                                    <span class="text-black/80">Active Projects</span>
                                    <span class="text-black font-bold text-xl">15+</span>
                                </div>
                            </div>
                        </div>

                        <!-- CTA Buttons -->
                        <div class="mt-8 flex flex-col sm:flex-row gap-4">
                            <button
                                class="bg-black text-[#b9ff66] px-8 py-3 rounded-full font-semibold hover:bg-gray-800 transition-colors duration-300 shadow-lg hover:shadow-xl">
                                Join Our Community
                            </button>
                            <button
                                class="border-2 border-black/30 text-black px-8 py-3 rounded-full font-semibold hover:bg-black/10 transition-colors duration-300">
                                View on GitHub
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <style>
        .hover\:scale-102:hover {
            transform: scale(1.02);
        }

        .shadow-3xl {
            box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
        }

        .backdrop-blur-sm {
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        /* Smooth animations */
        .group:hover .group-hover\:rotate-6 {
            transform: rotate(6deg);
        }

        .group:hover .group-hover\:translate-x-1 {
            transform: translateX(0.25rem);
        }

        /* Pulse animation delays */
        .delay-1000 {
            animation-delay: 1s;
        }

        /* Custom gradient hover effects */
        .group:hover {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
        }
    </style>
@endsection