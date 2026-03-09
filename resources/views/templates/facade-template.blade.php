
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title') San Isidro College
        </title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('scripts')

    </head>
    <body class="relative bg-base-200 min-h-screen">
        <!-- Top Header with Contact Info -->
        <div class="bg-base-100 border-b border-base-300 hidden sm:block">
            <div class="max-w-6xl mx-auto px-4 py-2 text-sm flex justify-between items-center">
                <div class="flex gap-4 text-base-content/70">
                    <span>📧 info@sanisidrocollege.edu.ph</span>
                    <span>📞 (555) 123-4567</span>
                </div>
                <div class="flex gap-3">
                    <a class="link link-hover text-primary" href="https://www.facebook.com/sanisidrocollegeofficial" title="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a class="link link-hover text-primary" href="#" title="Twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2s9 5 20 5a9.5 9.5 0 00-9-5.5c4.75-2.35 7-6 7-10.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
                    </a>
                    <a class="link link-hover text-primary" href="#" title="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><circle cx="17.5" cy="6.5" r="1.5"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Navbar -->
        <div class="navbar sticky top-0 z-40 bg-base-100 shadow-md border-b border-base-300">
            <div class="max-w-6xl mx-auto flex justify-between w-full h-full px-4">
                <div class="flex-1">
                    <a class="flex gap-3 items-center" href="/">
                        <img alt="San Isidro College Logo" src="/sic.png" class="h-14 w-auto" />
                        <div class="flex flex-col text-start justify-start hidden sm:flex">
                            <span class="font-bold text-lg leading-tight">San Isidro College</span>
                            <span class="text-xs text-base-content/70">ORA ET LABORA</span>
                        </div>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex-none lg:hidden">
                    <button class="btn btn-ghost btn-circle" onclick="document.getElementById('mobile_menu').showModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex sticky top-18 z-40 bg-primary shadow-md">
            <ul class="menu menu-horizontal max-w-6xl mx-auto w-full px-4 text-base-100 text-[14pt] text-bold">
                <li><a href="/" class="font-semibold">🏠 Home</a></li>
                <li>
                    <details>
                        <summary class="font-semibold">📚 About</summary>
                        <ul class="bg-base-100 text-primary rounded-lg shadow-lg p-2 w-48">
                            <li><a href="/about/history">History & Heritage</a></li>
                            <li><a href="/about/mission-vision">Mission & Vision</a></li>
                            <li><a href="/about/faculty-and-staff">Organization</a></li>
                            <li><a href="/about/accreditation">Accreditation</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary class="font-semibold">🎓 Academic Programs</summary>
                        <ul class="bg-base-100 text-primary rounded-lg shadow-lg p-2 w-48">
                            <li><a href="/programs">All Programs</a></li>
                            <li><a href="/programs#pre-school">Pre-school</a></li>
                            <li><a href="/programs#elementary">Elementary</a></li>
                            <li><a href="/programs#junior-high">Junior High</a></li>
                            <li><a href="/programs#senior-high">Senior High</a></li>
                            <li><a href="/programs#college">College</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="/admission" class="font-semibold">📝 Admission</a></li>
                <li>
                    <details>
                        <summary class="font-semibold">📰 News & Events</summary>
                        <ul class="bg-base-100 text-primary rounded-lg shadow-lg p-2 w-60">
                            <li><a href="/announcements">📢 Announcements</a></li>
                            <li><a href="/events">📅 Events</a></li>
                            <li><a href="/articles">📰 Articles</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details>
                        <summary class="font-semibold">🔗 Services</summary>
                        <ul class="bg-base-100 text-primary rounded-lg shadow-lg p-2 w-48">
                            <li><a href="/alumni">Alumni</a></li>
                            <li><a href="/library">Library</a></li>
                            <li><a href="/student-services">Student Services</a></li>
                            <li><a href="https://siccollegeregistrar.com/" target="_blank">Registrar</a></li>
                        </ul>
                    </details>
                </li>
                <li><a href="/contact" class="font-semibold">✉️ Contact</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Modal -->
        <dialog id="mobile_menu" class="modal modal-end">
            <div class="modal-box w-80 ">
                <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                </form>
                <h3 class="font-bold text-lg mb-4">Navigation</h3>
                <ul class="menu bg-base-100 rounded-lg space-y-2 text-[14pt]">
                    <li><a href="/">🏠 Home</a></li>
                    <li><a href="/about">📚 About</a></li>
                    <li><a href="/programs">🎓 Academic Programs</a></li>
                    <li><a href="/admission">📝 Admission</a></li>
                    <li><a href="/announcements">📰 News & Events</a></li>
                    <li><a href="/services">🔗 Services</a></li>
                    <li><a href="/contact">✉️ Contact</a></li>
                </ul>
            </div>
            <form method="dialog" class="modal-backdrop">
                <button>close</button>
            </form>
        </dialog>

        <main class="min-h-[calc(100vh-200px)]">
            @yield('body')
        </main>

        <!-- Footer -->
        <footer class="mt-20 bg-primary text-base-100">
            <div class="max-w-6xl mx-auto px-4 py-12">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <!-- About Section -->
                    <div>
                        <h3 class="font-bold text-lg mb-4">San Isidro College</h3>
                        <p class="text-sm opacity-90 leading-relaxed">Excellence in education since 1967. Empowering students to achieve their dreams.</p>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/about" class="link link-hover opacity-80 hover:opacity-100">About Us</a></li>
                            <li><a href="/programs" class="link link-hover opacity-80 hover:opacity-100">Programs</a></li>
                            <li><a href="/admission" class="link link-hover opacity-80 hover:opacity-100">Admissions</a></li>
                            <li><a href="/alumni" class="link link-hover opacity-80 hover:opacity-100">Alumni</a></li>
                        </ul>
                    </div>

                    <!-- Resources -->
                    <div>
                        <h4 class="font-bold text-lg mb-4">Resources</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="/library" class="link link-hover opacity-80 hover:opacity-100">Library</a></li>
                            <li><a href="/downloads" class="link link-hover opacity-80 hover:opacity-100">Downloads</a></li>
                            <li><a href="/faq" class="link link-hover opacity-80 hover:opacity-100">FAQs</a></li>
                            <li><a href="/support" class="link link-hover opacity-80 hover:opacity-100">Support</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h4 class="font-bold text-lg mb-4">Contact</h4>
                        <ul class="space-y-2 text-sm opacity-90">
                            <li>📧 info@sanisidrocollege.edu.ph</li>
                            <li>📞 (555) 123-4567</li>
                            <li>📍 San Isidro, Province</li>
                        </ul>
                    </div>
                </div>

                <div class="divider my-6"></div>

                <div class="flex flex-col md:flex-row justify-between items-center text-sm opacity-80">
                    <p>&copy; 2026 San Isidro College. All rights reserved.</p>
                    <div class="flex gap-4 mt-4 md:mt-0">
                        <a href="#" class="link link-hover">Privacy Policy</a>
                        <a href="#" class="link link-hover">Terms of Service</a>
                        <a href="#" class="link link-hover">Sitemap</a>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
