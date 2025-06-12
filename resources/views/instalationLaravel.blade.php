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
            <ul class="text-sm space-y-2 mt-7">
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
            <h1 class="text-3xl font-semibold">Laravel Instalation</h1>
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
                <h2 class="text-2xl text-white font-semibold"><span class="text-[#b9ff66]">#</span>&nbsp;Laravel installer
                </h2>
                <div class="relative ml-0 mt-7">
                    <div class="bg-black/20 p-3 text-white rounded-md">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-400 flex gap-1">
                                <div class="w-2 h-2 rounded-full bg-[#990000]"></div>
                                <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                <div class="w-2 h-2 rounded-full bg-[#077019]"></div>
                            </span><button data-clipboard-target="#code">
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
                                class="text-gray-300 bg-[#1f1f1f] code p-4 rounded-md whitespace-pre overflow-x-auto"><code>composer global require laravel/installer</code></pre>
                        </div>
                    </div>
            </section>

            <section id="laravel" class="space-y-6 text-gray-300 leading-relaxed mb-15">
                <h2 class="text-2xl text-white font-semibold"><span class="text-[#b9ff66]">#</span>&nbsp;Creating an
                    Application</h2>
                <p>
                    After you have installed PHP, Composer, and the Laravel installer, you're ready to create a new Laravel
                    application. The Laravel installer will prompt you to select your preferred testing framework, database,
                    and starter kit:
                </p>
                <div class="relative ml-0 mt-7">
                    <div class="bg-black/20 p-3 text-white rounded-md">
                        <div class="flex justify-between items-center mb-2">
                            <span class="text-gray-400 flex gap-1">
                                <div class="w-2 h-2 rounded-full bg-[#990000]"></div>
                                <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                <div class="w-2 h-2 rounded-full bg-[#077019]"></div>
                            </span><button data-clipboard-target="#code">
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
                                class="text-gray-300 bg-[#1f1f1f] code p-4 rounded-md whitespace-pre overflow-x-auto"><code>laravel new example-app</code></pre>
                        </div>
                    </div>
                    <p class="mt-5">Once the application has been created, you can start Laravel's local development server,
                        queue
                        worker, and Vite development server using the dev Composer script:</p>
                    <div class="relative ml-0 mt-7">
                        <div class="bg-black/20 p-3 text-white rounded-md">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-400 flex gap-1">
                                    <div class="w-2 h-2 rounded-full bg-[#990000]"></div>
                                    <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                                    <div class="w-2 h-2 rounded-full bg-[#077019]"></div>
                                </span><button data-clipboard-target="#code">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#414141"
                                        class="size-6">
                                        <path
                                            d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z" />
                                        <path
                                            d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="overflow-x-auto">
                                <pre id="code"
                                    class="text-left text-gray-300 bg-[#1f1f1f] font-mono code p-4 rounded-md whitespace-pre overflow-x-auto">
<code>cd example-app
npm install && npm run build
composer run dev</code></pre>
                            </div>
                        </div>
            </section>

            <section id="laravel" class="space-y-6 text-gray-300 leading-relaxed mb-15">
                <h2 class="text-2xl text-white font-semibold"><span class="text-[#b9ff66]">#</span>&nbsp;Initial
                    Configuration</h2>
                <p>
                    All of the configuration files for the Laravel framework are stored in the config directory. Each option
                    is documented, so feel free to look through the files and get familiar with the options available to
                    you.

                    Laravel needs almost no additional configuration out of the box. You are free to get started developing!
                    However, you may wish to review the config/app.php file and its documentation. It contains several
                    options such as url and locale that you may wish to change according to your application.
                </p>
            </section>

            <section id="laravel" class="space-y-6 text-gray-300 leading-relaxed mb-15">
                <h2 class="text-2xl text-white font-semibold"><span class="text-[#b9ff66]">#</span>&nbsp;Environment Based
                    Configuration</h2>
                <p>
                    Since many of Laravel's configuration option values may vary depending on whether your application is
                    running on your local machine or on a production web server, many important configuration values are
                    defined using the <a href="#" class="underline text-[#b9ff66] hover:[#b9ff66]">.env</a> file that
                    exists at the root of your application.

                    Your <a href="#" class="underline text-[#b9ff66] hover:text-[#b9ff66]">.env</a> file should not be
                    committed to your application's source control, since each developer /
                    server using your application could require a different environment configuration. Furthermore, this
                    would be a security risk in the event an intruder gains access to your source control repository, since
                    any sensitive credentials would be exposed.
                </p>
            </section>

            <section id="laravel" class="space-y-6 text-gray-300 leading-relaxed mb-15">
                <h2 class="text-2xl text-white font-semibold"><span class="text-[#b9ff66]">#</span>&nbsp;Databases and
                    Migrations</h2>
                <p>Now that you have created your Laravel application, you probably want to store some data in a database.
                    By default, your application's .env configuration file specifies that Laravel will be interacting with
                    an SQLite database.
                </p>
                <p>During the creation of the application, Laravel created a database/database.sqlite file for you, and ran
                    the necessary migrations to create the application's database tables.
                </p>
                <p>If you prefer to use another database driver such as MySQL or PostgreSQL, you can update your .env
                    configuration file to use the appropriate database. For example, if you wish to use MySQL, update your
                    .env configuration file's DB_* variables like so:</p>
                <div class="bg-black/20 p-3 text-white rounded-md">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-400 flex gap-1">
                            <div class="w-2 h-2 rounded-full bg-[#990000]"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                            <div class="w-2 h-2 rounded-full bg-[#077019]"></div>
                        </span><button data-clipboard-target="#code">
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
                            class="text-left text-gray-300 bg-[#1f1f1f] font-mono code p-4 rounded-md whitespace-pre overflow-x-auto">
<code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=</code></pre>
                    </div>
                </div>
                <p>If you choose to use a database other than SQLite, you will need to create the database and run your
                    application's database migrations:</p>
                <div class="bg-black/20 p-3 text-white rounded-md">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-gray-400 flex gap-1">
                            <div class="w-2 h-2 rounded-full bg-[#990000]"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                            <div class="w-2 h-2 rounded-full bg-[#077019]"></div>
                        </span><button data-clipboard-target="#code">
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
                            class="text-left text-gray-300 bg-[#1f1f1f] font-mono code p-4 rounded-md whitespace-pre overflow-x-auto">
<code>php artisan migrate</code></pre>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection