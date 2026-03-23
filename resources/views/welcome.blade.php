@extends('templates.facade-template')

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

@endsection

@section('body')

<div class="splide">
    <div class="splide__track">

        <ul class="splide__list">
            @forelse ($carousel as $item)
            <li class="splide__slide relative">
                <img src="/storage/{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full  object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-transparent to-black/50"></div>
            </li>
            @empty
            <li class="splide__slide relative">
                <div class="w-full h-screen bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                    <div class="text-center text-white">
                        <h2 class="text-xl font-bold mb-4">Welcome to San Isidro College</h2>
                        <p class="text-xl">No carousel images available</p>
                    </div>
                </div>
            </li>
            @endforelse
        </ul>
    </div>
</div>


<!-- Hero Carousel Section -->
<div class="splide splide--hero max-h-170 hero relative mx-auto overflow-hidden" role="group" aria-label="College Carousel">
    <div class="splide__track">
    </div>
    <!-- Carousel Controls -->
    @if ($carousel->count() > 1)
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
        <button class="splide__arrow splide__arrow--prev btn btn-circle btn-outline btn-sm text-white border-white hover:bg-white/20" aria-label="Previous slide"></button>
        <button class="splide__arrow splide__arrow--next btn btn-circle btn-outline btn-sm text-white border-white hover:bg-white/20" aria-label="Next slide"></button>
    </div>
    @endif
</div>

<!-- President's Message Section -->
<section class="py-16 md:py-24 bg-gradient-to-b from-base-100 to-base-200 relative overflow-hidden">
    <!-- Decorative background elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-3xl -mr-48 -mt-48"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary/5 rounded-full blur-3xl -ml-48 -mb-48"></div>

    <div class="max-w-5xl mx-auto px-4 md:px-8 relative z-10">
        <!-- Section Header with Animation -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-2xl md:text-3xl font-bold mb-4 text-base-900 font-outfit">Message from the School President</h2>
            <div class="h-1 bg-gradient-to-r from-primary via-primary to-secondary w-32 mx-auto rounded-full"></div>
        </div>

        <!-- President Card with Enhanced Design -->
        <div class="card bg-gradient-to-br from-base-100 via-base-100 to-base-200 shadow-2xl overflow-hidden border-2 border-primary/10 hover:border-primary/30 transition-all duration-500 hover:shadow-3xl">
            <div class="card-body p-0 grid grid-cols-1 md:grid-cols-[320px_1fr] gap-0">
                <!-- President Image with Effects -->
                <div class="relative overflow-hidden bg-gradient-to-br from-primary/30 to-secondary/30 flex items-center justify-center p-8 md:p-6 group">
                    <!-- Background accent -->
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <!-- Image -->
                    <div class="relative">
                        <img src="/sic.png" class="w-48 h-48 md:w-56 md:h-56 object-cover rounded-2xl shadow-xl border-4 border-base-100 group-hover:scale-105 transition-transform duration-500" data-aos="zoom-in" />
                        <!-- Decorative frame -->
                        <div class="absolute -inset-1 bg-gradient-to-br from-primary to-secondary rounded-2xl opacity-0 group-hover:opacity-20 blur transition-opacity duration-500 -z-10"></div>
                    </div>
                </div>

                <!-- President Message -->
                <div class="p-8 md:p-10 flex flex-col justify-center">
                    <div class="space-y-3 mb-6">
                        <div class="inline-block">
                            <h3 class="text-xs font-semibold text-primary uppercase tracking-[0.15em] bg-primary/10 px-3 py-1 rounded-full w-fit">✨ Leadership</h3>
                        </div>
                        <h2 class="text-xl md:text-xl font-bold text-base-900 font-outfit">FR. VIRGILIO H. DELFIN</h2>
                        <p class="text-lg font-semibold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent">School President</p>
                    </div>

                    <div class="space-y-5 text-base-700 leading-relaxed">
                        <p class="text-justify italic text-lg">
                            "Welcome to our educational community! At San Isidro College, we are committed to providing excellence in education and fostering an environment where every student can thrive. Our comprehensive management system ensures that students, parents, and educators have access to the tools they need for academic success."
                        </p>
                        <p class="text-justify text-base">
                            "We believe in the power of technology to enhance learning and streamline educational processes. Together, we are building a brighter future for our students."
                        </p>
                    </div>

                    <a href="/about" class="btn btn-primary btn-lg mt-8 w-fit shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300" data-aos="fade-right" data-aos-delay="200">
                        Learn More About Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Preview Section (NEW) -->
<section class="py-16 md:py-24 bg-base-100 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl -ml-48 -mt-48"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-secondary to-accent text-white rounded-full font-semibold text-sm tracking-widest">
                🎓 YOUR FUTURE
            </div>
            <h2 class="text-xl md:text-xl font-bold mb-4 text-base-900 font-outfit">Explore Our Programs</h2>
            <p class="text-xl text-base-700 mb-4">Choose a pathway that matches your dreams and aspirations</p>
            <div class="h-1 bg-gradient-to-r from-secondary via-accent to-primary w-32 mx-auto rounded-full"></div>
        </div>

        <!-- Program Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <a href="/programs#preschool" class="group card bg-gradient-to-br from-pink-50 to-pink-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-pink-200 hover:border-pink-400 cursor-pointer" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                    <div class="text-5xl mb-3">👶</div>
                    <h3 class="card-title text-2xl text-pink-900 font-outfit">Preschool</h3>
                    <p class="text-pink-700 mb-4">Nurture early development through play-based learning and creative activities.</p>
                    <div class="flex items-center text-pink-600 font-semibold group-hover:text-pink-900 transition-colors">
                        Learn More <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>
                </div>
            </a>

            <a href="/programs#elementary" class="group card bg-gradient-to-br from-blue-50 to-blue-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-blue-200 hover:border-blue-400 cursor-pointer" data-aos="fade-up" data-aos-delay="150">
                <div class="card-body">
                    <div class="text-5xl mb-3">🏫</div>
                    <h3 class="card-title text-2xl text-blue-900 font-outfit">Elementary</h3>
                    <p class="text-blue-700 mb-4">Build strong foundations with our comprehensive curriculum designed for young learners.</p>
                    <div class="flex items-center text-blue-600 font-semibold group-hover:text-blue-900 transition-colors">
                        Learn More <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>
                </div>
            </a>

            <a href="/programs#secondary" class="group card bg-gradient-to-br from-purple-50 to-purple-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-purple-200 hover:border-purple-400 cursor-pointer" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body">
                    <div class="text-5xl mb-3">🎯</div>
                    <h3 class="card-title text-2xl text-purple-900 font-outfit">Junior & Senior High</h3>
                    <p class="text-purple-700 mb-4">Discover your passions and excel with specialized tracks preparing you for higher education.</p>
                    <div class="flex items-center text-purple-600 font-semibold group-hover:text-purple-900 transition-colors">
                        Learn More <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>
                </div>
            </a>

            <a href="/programs#college" class="group card bg-gradient-to-br from-amber-50 to-amber-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-amber-200 hover:border-amber-400 cursor-pointer" data-aos="fade-up" data-aos-delay="250">
                <div class="card-body">
                    <div class="text-5xl mb-3">🎓</div>
                    <h3 class="card-title text-2xl text-amber-900 font-outfit">College</h3>
                    <p class="text-amber-700 mb-4">Advance your career with degree programs and professional development opportunities.</p>
                    <div class="flex items-center text-amber-600 font-semibold group-hover:text-amber-900 transition-colors">
                        Learn More <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>

        <!-- CTA Button -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
            <a href="/programs" class="btn btn-lg bg-gradient-to-r from-secondary to-accent text-white shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 border-0 font-semibold">
                View All Programs
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>
<section class="py-16 md:py-24 bg-gradient-to-b from-base-200 to-base-100 relative overflow-hidden">
    <!-- Decorative elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-secondary/5 rounded-full blur-3xl -mr-48 -mt-48"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-secondary to-primary text-white rounded-full font-semibold text-sm tracking-widest">
                📅 STAY CONNECTED
            </div>
            <h2 class="text-xl md:text-xl font-bold mb-3 text-base-900 font-outfit">Upcoming Events</h2>
            <p class="text-xl text-base-700 mb-4">Join exciting activities and celebrate with the SIC community</p>
            <div class="h-1 bg-gradient-to-r from-secondary via-primary to-accent w-32 mx-auto rounded-full"></div>
        </div>

        <!-- Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($events as $i)
            <a href="/events/{{ $i['id'] }}" class="group card bg-base-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-base-300 hover:border-secondary/50 h-full flex flex-col" data-aos="fade-up">
                <!-- Event Image Container -->
                <div class="relative overflow-hidden bg-gray-300 h-48 flex-shrink-0">
                    <img src="/storage/{{$i['image_url']}}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" />
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    <!-- Date Badge -->
                    <div class="absolute top-4 left-4 badge badge-lg badge-primary gap-2 text-white font-bold shadow-lg">
                        <span class="text-xl">{{ $i['start_date']->day }}</span>
                        <span class="text-sm">{{ $i['start_date']->format('M') }}</span>
                    </div>
                </div>

                <!-- Event Content -->
                <div class="card-body pt-6 flex-grow flex flex-col">
                    <h3 class="card-title text-lg text-primary line-clamp-2 group-hover:text-secondary transition-colors font-outfit">{{$i['title']}}</h3>
                    <p class="text-sm text-base-600 line-clamp-3 flex-grow">{!! $i['description'] !!}</p>
                    <div class="card-actions justify-end mt-4 pt-2 border-t border-base-300">
                        <span class="badge badge-outline badge-secondary font-semibold">Discover Event</span>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center py-16">
                <div class="text-6xl mb-4">🗓️</div>
                <p class="text-xl text-base-600 font-semibold">No events scheduled at this time.</p>
                <p class="text-base-500 mt-2">Check back soon for exciting campus activities!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Announcements Section -->
<section class="py-16 md:py-24 bg-base-100 relative overflow-hidden">
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl -mr-48 -mb-48"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="inline-block mb-4 px-6 py-2 bg-gradient-to-r from-accent to-secondary text-white rounded-full font-semibold text-sm tracking-widest">
                📰 LATEST NEWS
            </div>
            <h2 class="text-xl md:text-xl font-bold mb-3 text-base-900 font-outfit">Latest Announcements</h2>
            <p class="text-xl text-base-700 mb-4">Important updates and exciting news from the college</p>
            <div class="h-1 bg-gradient-to-r from-accent via-secondary to-primary w-32 mx-auto rounded-full"></div>
        </div>

        <!-- Announcements Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            @forelse ($announcements as $announcement)
            <a href="/announcements/{{ $announcement->id }}" class="group card bg-base-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border-2 border-base-300 hover:border-accent/50 h-full flex flex-col" data-aos="fade-up">
                <!-- Announcement Image -->
                <div class="relative overflow-hidden bg-gray-300 h-40 flex-shrink-0">
                    <img src="/storage/{{$announcement->image_url}}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="announcement">
                    <!-- Time Badge -->
                    <div class="absolute top-3 right-3">
                        <span class="badge badge-accent text-xs font-bold shadow-lg">{{ $announcement->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <!-- Announcement Content -->
                <div class="card-body pt-4 flex-grow flex flex-col">
                    <h3 class="card-title text-base text-primary line-clamp-2 group-hover:text-accent transition-colors font-outfit">{{$announcement->title}}</h3>
                    <p class="text-sm text-base-600 line-clamp-3 flex-grow">{!! $announcement->description !!}</p>
                    <div class="card-actions justify-between items-center mt-3 pt-3 border-t border-base-300">
                        <span class="text-xs text-base-500 font-medium">{{ $announcement->created_at->format('M d, Y') }}</span>
                        <span class="badge badge-outline badge-accent text-xs font-semibold">Read More →</span>
                    </div>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center py-16">
                <div class="text-6xl mb-4">📢</div>
                <p class="text-xl text-base-600 font-semibold">No announcements at this time.</p>
                <p class="text-base-500 mt-2">Stay tuned for updates!</p>
            </div>
            @endforelse
        </div>

        <!-- View All Button -->
        <div class="text-center" data-aos="fade-up">
            <a href="/announcements" class="btn btn-lg btn-outline btn-accent shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 font-semibold">
                View All Announcements
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section - Enhanced -->
<section class="py-16 md:py-28 bg-gradient-to-r from-primary via-secondary to-accent text-base-100 relative overflow-hidden">
    <!-- Animated background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-10 right-10 w-72 h-72 bg-white rounded-full blur-3xl animate-pulse animation-delay-2000"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 md:px-8 text-center relative z-10">
        <div data-aos="fade-up">
            <h2 class="text-xl md:text-xl font-bold mb-6 font-outfit drop-shadow-lg">Ready to Join Our Community?</h2>
            <p class="text-xl mb-8 opacity-95 max-w-2xl mx-auto drop-shadow">Start your extraordinary journey at San Isidro College and discover endless possibilities for growth and success</p>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="200">
            <a href="/admission" class="btn btn-lg btn-outline border-2 border-white text-white hover:bg-white hover:text-primary hover:border-white shadow-xl hover:shadow-2xl hover:scale-105 transition-all duration-300 font-semibold">
                🚀 Apply Now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
            <a href="/programs" class="btn btn-lg btn-ghost text-white hover:bg-white/20 border-2 border-white/50 hover:border-white shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300 font-semibold">
                📚 Explore Programs
            </a>
        </div>

        <!-- Trust badges -->
        <div class="mt-12 flex flex-wrap gap-6 justify-center items-center opacity-90 text-sm font-semibold" data-aos="fade-up" data-aos-delay="400">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span>Excellence Certified</span>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                </svg>
                <span>1000+ Students</span>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                </svg>
                <span>Expert Faculty</span>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Splide carousel
        const splideElement = document.querySelector('.splide');
        if (splideElement) {
            try {
                const splide = new Splide('.splide', {
                    type: 'loop',
                    autoplay: true,
                    interval: 5000,
                    speed: 1000,
                    arrows: true,
                    pagination: true,
                    perPage: 1,
                    gap: 0,
                    // prevButton: '.splide__arrow--prev',
                    // nextButton: '.splide__arrow--next',
                });

                // Mount the carousel
                splide.mount();

                // // Connect custom arrow buttons after mount
                // const prevBtn = document.querySelector('.splide__arrow--prev');
                // const nextBtn = document.querySelector('.splide__arrow--next');

                //              if (prevBtn) {
                //     prevBtn.addEventListener('click', function(e) {
                //         e.preventDefault();
                //         splide.go('<');
                //     });
                // }
                // if (nextBtn) {
                //     nextBtn.addEventListener('click', function(e) {
                //         e.preventDefault();
                //         splide.go('>');
                //     });
                // }
            } catch (error) {
                console.error('Splide initialization error:', error);
            }
        }

        // Initialize AOS (Animate on Scroll)
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
            });
        }
    });
</script>
@endsection
