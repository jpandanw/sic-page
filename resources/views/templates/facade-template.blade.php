
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title') San Isidro College
        </title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <!--<link rel="icon" href="/favicon.svg" type="image/svg+xml">-->
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">


        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('scripts')

    </head>
    <body class="relative bg-base-200 min-h-100vh">
        <div class="navbar shadow-sm  bg-base-100 border-b border-base-300">
            <div class="max-w-5xl mx-auto flex justify-between w-full h-full">
                <a class="flex gap-5"
                    href="/"
                >
                    <img alt="" src="/sic.png" class="h-15.75" />
                    <div class="flex flex-col text-start justify-start">
                        <span class="font-bold text-xl">San Isidro College</span>
                        <span>ORA ET LABORA</span>
                    </div>
                </a>

                <div class="flex h-full items-center">
                    Follow us on:
                    <a class="text-primary" href="https://www.facebook.com/sanisidrocollegeofficial">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                </div>
            </div>

        </div>

        <div class="navbar hidden lg:flex p-0 m-0 sticky top-0 left-0 z-50  bg-primary ">
            <ul class="menu menu-horizontal  max-w-5xl m-auto w-full  text-[12pt]">
                <li class=""><a class="font-bold w-full text-white" href="/"> Home</a></li>
                <li class="bg-primary text-white">
                    <details>
                        <summary>About</summary>
                        <ul class="p-2 bg-base-100 w-100 z-1 text-primary">
                            <li><a href="/about/history"> History </a></li>
                            <li><a href="/about/mission-vision"> Mission and Vison </a></li>
                            <li><a href="/about/faculty-and-staff">  Organization </a></li>
                            <li><a href="/about/mission-vision"> F.A.Q.s. </a></li>
                        </ul>
                    </details>
                </li>

                <li class="bg-primary text-white">
                    <details>
                        <summary> Academic Programs </summary>
                        <ul class="p-2 bg-base-100 w-100 z-1 text-primary">
                            <li><a href="/programs"> Programs </a></li>
                            <li><a href="/programs#pre-school"> Pre-school </a></li>
                            <li><a href="/programs#elementary"> Elementary </a></li>
                            <li><a href="/programs#junior-high"> Junior High </a></li>
                            <li><a href="/programs#senior-high"> Senior High </a></li>
                            <li><a href="/programs#college"> College </a></li>
                        </ul>
                    </details>
                </li>

                <li><a href="/admission">Admission</a></li>

                <li class="bg-primary text-white">
                    <details>
                        <summary> Articles </summary>
                        <ul class="p-2 bg-base-100 w-100 z-1 text-primary">
                            <li><a href="/announcements">📢 Announcements </a></li>
                            <li><a href="/events"> 📅 Events </a></li>
                            <li><a href="/articles"> 📰 Articles </a></li>
                        </ul>
                    </details>
                </li>

                <li class="bg-primary text-white">
                    <details>
                        <summary> Services </summary>
                        <ul class="p-2 bg-base-100 w-100 z-1 text-primary">
                            <li><a href="/alumni"> Alumni </a></li>
                            <li><a href="https://siccollegeregistrar.com/"> Registrar </a></li>
                            <li><a href="/library"> Library </a></li>
                        </ul>
                    </details>
                </li>
                <li><a>Contact</a></li>
            </ul>
        </div>

        <main class="min-h-[90vh]">
            @yield('body')
        </main>

        <footer class="mt-16 bg-primary text-white   grid grid-rows-[12_1fr]">

            <div class="grid grid-cols-1 md:grid-cols-3 max-w-5xl w-full mx-auto p-5">

                <div class=" text-white">
                    <h6 class="font-bold text-3xl mb-5"> Important Links </h6>
                    <ul class="text-white space-y-3">
                        <li> <a href="" class="text-white"> Downloads </a> </li>
                        <li> <a href="" class="text-white "> Academics </a> </li>
                    </ul>

                </div>

                <div></div>

                <div>

                </div>

            </div>

            <div class="text-center"> Copyright. All rights reserved. ©2026 San Isidro College</div>
        </footer>

    </body>
</html>
