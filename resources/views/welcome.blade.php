@extends('templates.facade-template')

@php
use Carbon\Carbon;
@endphp

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

<!-- Hero Carousel Section -->
<div class="splide splide--hero max-h-170 hero relative mx-auto overflow-hidden" role="group" aria-label="College Carousel">
    <div class="splide__track">
        <ul class="splide__list">
            @forelse ($carousel as $item)
            <li class="splide__slide relative">
                <img src="/storage/{{ $item->image_url }}" alt="{{ $item->title }}" class="w-full h-screen object-cover" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-b from-black/30 via-transparent to-black/50"></div>
            </li>
            @empty
            <li class="splide__slide relative">
                <div class="w-full h-screen bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                    <div class="text-center text-white">
                        <h2 class="text-4xl font-bold mb-4">Welcome to San Isidro College</h2>
                        <p class="text-xl">No carousel images available</p>
                    </div>
                </div>
            </li>
            @endforelse
        </ul>
    </div>
    <!-- Carousel Controls -->
    @if ($carousel->count() > 1)
    <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex gap-2 z-10">
        <button class="splide__arrow splide__arrow--prev btn btn-circle btn-outline btn-sm text-white border-white hover:bg-white/20" aria-label="Previous slide"></button>
        <button class="splide__arrow splide__arrow--next btn btn-circle btn-outline btn-sm text-white border-white hover:bg-white/20" aria-label="Next slide"></button>
    </div>
    @endif
</div>

<!-- Presidents Message Section -->
<section class="py-16 md:py-24 bg-base-100">
    <div class="max-w-5xl mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <div class="badge badge-primary badge-lg mb-4">Welcome</div>
            <h2 class="text-4xl md:text-5xl font-bold mb-4 text-base-900">Message from the School President</h2>
            <div class="h-1 bg-gradient-to-r from-primary via-primary to-secondary w-24 mx-auto rounded-full"></div>
        </div>

        <!-- President Card -->
        <div class="card bg-gradient-to-br from-base-100 to-base-200 shadow-2xl overflow-hidden border border-primary/10">
            <div class="card-body p-0 grid grid-cols-1 md:grid-cols-[280px_1fr] gap-0">
                <!-- President Image -->
                <div class="relative overflow-hidden bg-gradient-to-br from-primary/20 to-secondary/20 flex items-center justify-center p-8 md:p-6">
                    <img src="/sic.png" class="w-48 h-48 md:w-56 md:h-56 object-cover rounded-xl shadow-lg border-4 border-base-100"/>
                </div>
                
                <!-- President Message -->
                <div class="p-8 md:p-10 flex flex-col justify-center">
                    <div class="space-y-3 mb-6">
                        <h3 class="text-sm font-semibold text-primary uppercase tracking-widest">Leadership</h3>
                        <h2 class="text-3xl font-bold text-base-900">FR. VIRGILIO H. DELFIN</h2>
                        <p class="text-lg font-semibold text-primary">School President</p>
                    </div>

                    <div class="space-y-5 text-base-700 leading-relaxed">
                        <p class="text-justify">
                            "Welcome to our educational community! At San Isidro College, we are committed to providing excellence in education and fostering an environment where every student can thrive. Our comprehensive management system ensures that students, parents, and educators have access to the tools they need for academic success."
                        </p>
                        <p class="text-justify">
                            "We believe in the power of technology to enhance learning and streamline educational processes. Together, we are building a brighter future for our students."
                        </p>
                    </div>
                    
                    <a href="/about" class="btn btn-primary btn-lg mt-8 w-fit">
                        Learn More About Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<section class="py-16 md:py-24 bg-base-200">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="badge badge-secondary badge-lg mb-4">Events</div>
            <h2 class="text-4xl md:text-5xl font-bold mb-3 text-base-900">Upcoming Events</h2>
            <p class="text-xl text-base-700 mb-4">Stay updated with our latest campus activities and celebrations</p>
            <div class="h-1 bg-gradient-to-r from-secondary via-primary to-accent w-24 mx-auto rounded-full"></div>
        </div>

        <!-- Events Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($events as $i)
                <a href="/events/{{ $i['id'] }}" class="group card bg-base-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-base-300 hover:border-secondary/50">
                    <!-- Event Image Container -->
                    <div class="relative overflow-hidden bg-gray-200 h-48">
                        <img src="/storage/{{$i['image_url']}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
                        <!-- Date Badge -->
                        <div class="absolute top-4 left-4 badge badge-primary gap-2 text-lg font-bold">
                            <span class="text-2xl">{{ $i['start_date']->day }}</span>
                            <span>{{ $i['start_date']->format('M') }}</span>
                        </div>
                    </div>

                    <!-- Event Content -->
                    <div class="card-body pt-6">
                        <h3 class="card-title text-primary line-clamp-2 group-hover:text-secondary transition-colors">{{$i['title']}}</h3>
                        <p class="text-sm text-base-600 line-clamp-3">{!! $i['description'] !!}</p>
                        <div class="card-actions justify-end mt-4">
                            <span class="badge badge-outline badge-secondary">Read More</span>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-base-600">No events scheduled at this time.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Announcements Section -->
<section class="py-16 md:py-24 bg-base-100">
    <div class="max-w-7xl mx-auto px-4 md:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="badge badge-accent badge-lg mb-4">News</div>
            <h2 class="text-4xl md:text-5xl font-bold mb-3 text-base-900">Latest Announcements</h2>
            <p class="text-xl text-base-700 mb-4">Important updates and news from the college</p>
            <div class="h-1 bg-gradient-to-r from-accent via-secondary to-primary w-24 mx-auto rounded-full"></div>
        </div>

        <!-- Announcements Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($events as $i)
                <a href="/announcements/{{ $i['id'] }}" class="group card card-compact bg-base-100 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-base-300 hover:border-accent/50">
                    <!-- Announcement Image -->
                    <div class="relative overflow-hidden bg-gray-200 h-40">
                        <img src="/storage/{{$i['image_url']}}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" alt="announcement">
                        <!-- Time Badge -->
                        <div class="absolute top-3 right-3">
                            <span class="badge badge-accent text-xs">{{ $i['created_at']->diffForHumans() }}</span>
                        </div>
                    </div>

                    <!-- Announcement Content -->
                    <div class="card-body pt-4">
                        <h3 class="card-title text-sm text-primary line-clamp-2 group-hover:text-accent transition-colors">{{$i['title']}}</h3>
                        <p class="text-xs text-base-600 line-clamp-3">{!! $i['description'] !!}</p>
                        <div class="card-actions justify-between items-center mt-3">
                            <span class="text-xs text-base-500">{{ $i['created_at']->format('M d, Y') }}</span>
                            <span class="badge badge-outline badge-accent text-xs">Read More →</span>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-base-600">No announcements at this time.</p>
                </div>
            @endforelse
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="/announcements" class="btn btn-outline btn-accent btn-lg">
                View All Announcements
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-gradient-to-r from-primary to-secondary text-base-100">
    <div class="max-w-4xl mx-auto px-4 md:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Join Us?</h2>
        <p class="text-xl mb-8 opacity-90">Start your journey towards excellence at San Isidro College</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/admission" class="btn btn-lg btn-outline border-base-100 text-base-100 hover:bg-base-100 hover:text-primary">
                Apply Now
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
            </a>
            <a href="/programs" class="btn btn-lg btn-ghost text-base-100 hover:bg-base-100/20">
                Explore Programs
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Splide carousel
        const splideElement = document.querySelector('.splide--hero');
        if (splideElement) {
            try {
                const splide = new Splide('.splide--hero', {
                    type: 'loop',
                    autoplay: true,
                    interval: 5000,
                    speed: 1000,
                    arrows: true,
                    pagination: false,
                    perPage: 1,
                    gap: 0,
                });

                // Mount the carousel
                splide.mount();

                // Connect custom arrow buttons after mount
                const prevBtn = document.querySelector('.splide__arrow--prev');
                const nextBtn = document.querySelector('.splide__arrow--next');

                if (prevBtn) {
                    prevBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        splide.go('<');
                    });
                }
                if (nextBtn) {
                    nextBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        splide.go('>');
                    });
                }
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
