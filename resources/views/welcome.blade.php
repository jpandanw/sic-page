@extends('templates.facade-template')


@php
use Carbon\Carbon;
@endphp


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

@endsection


@section('body')



<div class="splide  mx-auto" role="group" aria-label="Splide Basic HTML Example">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($carousel ?? [] as $i)
            <li class="splide__slide">
                <img src="/storage/{{$i['image_url']}}" class="w-full h-full object-cover  max-h-180 ">
            </li>
            @endforeach
        </ul>
    </div>
</div>


<section class="container w-full mx-auto mt-10">

    <div class="text-center my-5">
        <h2 class="font-bold  my-5 text-3xl">Message from the School President</h2>
        <div class="h-2 bg-primary w-25 mx-auto"></div>
    </div>

    <div class="card bg-base-100">
        <div class="card-body grid grid-cols-[128px_auto]">

            <div>
                <img src="/sic.png" class="w-full h-full max-w-32 max-h-32 object-cover"/>
            </div>
            <div>
                <h2 class="text-2xl font-bold">FR. VIRGILIO H. DELFIN</h2>

                <h3 class="card-title mb-2 text-primary"> School President</h2>

                    <div class="space-y-10 text-sm ">
                        <div class="text-justify leading-8">
                            "Welcome to our educational community! At San Isidro College,
                            we are commited to providing
                            excelence in education and fostering an environment can strive
                            . Our comprehensive management system ensures that students,
                            parents, and educators have access to the tools they need for
                            academic succeess."
                        </div>
                        <div class="justify leading-8">
                            "We believe in the power of technology to enhance learning
                            and streamline educational processes. Together, we are building
                            a brighter future for our students."
                        </div>
                    </div>
                    <a href="/about" class="btn btn-primary mt-5"> Learn More About Us</a>
            </div>
        </div>
    </div>
</section>




<section class="container w-full mx-auto mt-10">

    <div class="text-center my-5">
        <h2 class="font-bold  my-5 text-3xl"> Upcoming Events </h2>
        <span>Stay updated with our upcoming events</span>
        <div class="h-2 bg-primary w-25 mx-auto"></div>
    </div>

    <div class="flex justify-center gap-5">
        @foreach ($events as $i)
            <a class="card p-0 bg-base-100 w-80 h-70" href="/events/{{ $i['id'] }}">
                <div class="card-body relative p-0">
                    <div class="absolute top-0 bg-primary w-12 h-16 flex-col text-white justify-center text-center items-center">
                        <div class="font-bold text-xl"> {{ $i['start_date' ]->day }} </div>
                        <div class=" text-xs"> {{ $i['start_date' ]->format('M') }} </div>
                    </div>
                    <img src="/storage/{{$i['image_url']}}" class="aspect-video">
                    <div class="px-5">
                        <h2 class="card-title mb-2 text-primary">{{$i['title']}}</h2>
                        <p class="font-light text-xs leading-2 line-clamp-2">{!! $i['description'] !!}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>

<section class="container w-full mx-auto mt-10">

    <div class="text-center my-5">
        <h2 class="font-bold  my-5 text-3xl"> Announcments</h2>
        <span></span>
        <div class="h-2 bg-primary w-25 mx-auto"></div>
    </div>

    <div class="flex justify-center gap-5">
        @foreach ($events as $i)
            <a class="card p-0 bg-base-100 shadow-lg max-w-70 h-80 " href="/announcments/{{ $i['id'] }}">
                <div class="card-body relative p-0">
                    <img src="/storage/{{$i['image_url']}}" class="aspect-video rounded-t-md">
                    <div class="flex justify-between items-center px-5">
                        <span class="text-xs text-gray-500">{{ $i['created_at']->diffForHumans() }}</span>
                        <span class="absolute bottom-0 right-0 bg-primary text-white px-2 py-1 rounde-dtr-lg rounded-bl-lg">Read More</span>
                    </div>
                    <div class="px-5 h-full">
                        <h2 class="card-title mb-2 text-primary">{{$i['title']}}</h2>
                        <p class="font-light text-xs leading-2 line-clamp-10 ">{!! $i['description'] !!}</p>
                    </div>
                    <div class="flex justify-between items-center px-5">
                        <span class="absolute bottom-0 right-0 bg-primary text-white px-2 py-1 rounded-tr-lg rounded-bl-lg">Read More</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</section>



<script>
    document.addEventListener( 'DOMContentLoaded', function() {
        var splide = new Splide( '.splide', {
            type    : 'loop',
            autoplay: true });
        splide.mount();
    } );
</script>
@endsection
