@extends('templates.facade-template')

@php
use Carbon\Carbon;
@endphp

@section('scripts')
@endsection

@section('body')

<!-- Hero Section -->
<div class="bg-gradient-to-r from-primary to-secondary text-primary-content min-h-96 flex items-center justify-center">
    <div class="text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our History</h1>
        <p class="text-lg opacity-90">Excellence in Education since 1949</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li><a href="/about" class="link link-hover">About</a></li>
            <li class="text-primary font-semibold">History</li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-4 py-12">

    <!-- Timeline Section -->
    <div class="mb-16">
        <h2 class="text-4xl font-bold text-base-content mb-12 text-center">Our Journey Through the Years</h2>
        
        <div class="space-y-8">
            <!-- 1949 -->
            <div class="card bg-base-100 shadow-md border-l-4 border-primary">
                <div class="card-body">
                    <div class="flex items-start gap-4">
                        <div class="badge badge-lg badge-primary text-base-100 font-bold">1949</div>
                        <div>
                            <h3 class="card-title text-primary mb-2">Foundation Year</h3>
                            <p class="text-base-content/80">
                                San Isidro High School was founded by the late Fr. Joseph Reith, S.J. in July 1949 with 90 first-year and 30 second-year students under 5 teaching staff. Named after the town's patron saint, San Isidro Labrador, the school's motto "Ora et Labora" (Prayer and Work) reflects its mission to educate the youth of Bukidnon.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1952 -->
            <div class="card bg-base-100 shadow-md border-l-4 border-secondary">
                <div class="card-body">
                    <div class="flex items-start gap-4">
                        <div class="badge badge-lg badge-secondary text-base-100 font-bold">1952</div>
                        <div>
                            <h3 class="card-title text-secondary mb-2">First Graduation</h3>
                            <p class="text-base-content/80">
                                The school produced its first batch of 23 graduates, marking a significant milestone in San Isidro's commitment to quality education.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1953-1955 -->
            <div class="card bg-base-100 shadow-md border-l-4 border-accent">
                <div class="card-body">
                    <div class="flex items-start gap-4">
                        <div class="badge badge-lg badge-accent text-base-100 font-bold">1953</div>
                        <div>
                            <h3 class="card-title text-accent mb-2">Sisters of Saint Joseph Era</h3>
                            <p class="text-base-content/80 mb-3">
                                The administration was turned over to the American Sisters of the Congregation of Saint Joseph of Newark. Sister Mary Redempta McConnel, CSJ began her remarkable 18 years of administration.
                            </p>
                            <p class="text-base-content/80">
                                <strong>1955:</strong> A twelve-room school building was constructed across the Sawaga River in Impalambong, which still stands with pride today as San Isidro expanded its facilities to better serve its students.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1962-1969 -->
            <div class="card bg-base-100 shadow-md border-l-4 border-info">
                <div class="card-body">
                    <div class="flex items-start gap-4">
                        <div class="badge badge-lg badge-info text-base-100 font-bold">1962</div>
                        <div>
                            <h3 class="card-title text-info mb-2">College Programs Expansion</h3>
                            <p class="text-base-content/80 mb-3">
                                A one-year Collegiate Secretarial Course was offered with 50 initial students. This ushered in the opening of three more college courses:
                            </p>
                            <ul class="list-disc list-inside text-base-content/80 space-y-1 ml-4">
                                <li>Bachelor of Science in Commerce (1964)</li>
                                <li>Bachelor of Science in Liberal Arts (1965)</li>
                                <li>Bachelor of Science in Education (1965)</li>
                            </ul>
                            <p class="text-base-content/80 mt-3">
                                <strong>1969:</strong> The school attained full college status and was officially known as San Isidro College.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1971-1985 -->
            <div class="card bg-base-100 shadow-md border-l-4 border-success">
                <div class="card-body">
                    <div class="flex items-start gap-4">
                        <div class="badge badge-lg badge-success text-base-100 font-bold">1971</div>
                        <div>
                            <h3 class="card-title text-success mb-2">Marist Brothers Era</h3>
                            <p class="text-base-content/80 mb-3">
                                Following the Sisters' return to America, the Marist Brothers managed the college for 14 years (1971-1985). They made significant improvements including:
                            </p>
                            <ul class="list-disc list-inside text-base-content/80 space-y-1 ml-4">
                                <li>Construction of covered walks and college buildings</li>
                                <li>Gymnasium renovation</li>
                                <li>Extensive library expansion</li>
                                <li>Scholarship programs for faculty and students</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1985-1996 -->
            <div class="card bg-base-100 shadow-md border-l-4 border-warning">
                <div class="card-body">
                    <div class="flex items-start gap-4">
                        <div class="badge badge-lg badge-warning text-base-100 font-bold">1985</div>
                        <div>
                            <h3 class="card-title text-warning mb-2">Missionary Benedictine Sisters</h3>
                            <p class="text-base-content/80 mb-3">
                                The Missionary Benedictine Sisters took over administration and brought major changes during their 11-year tenure. Notable constructions include:
                            </p>
                            <ul class="list-disc list-inside text-base-content/80 space-y-1 ml-4">
                                <li>Grade School St. Benedict Building</li>
                                <li>Guest House and College Home Economics Building</li>
                                <li>Dormitory near Sawaga Bridge</li>
                            </ul>
                            <p class="text-base-content/80 mt-3">
                                <strong>1993:</strong> Grade School program was established with state-of-the-art instructional materials and equipment.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1997-Present -->
            <div class="card bg-base-100 shadow-md border-l-4 border-error">
                <div class="card-body">
                    <div class="flex items-start gap-4">
                        <div class="badge badge-lg badge-error text-base-100 font-bold">1997</div>
                        <div>
                            <h3 class="card-title text-error mb-2">Modern Era & Current Leadership</h3>
                            <p class="text-base-content/80 mb-2">
                                Fr. Felimon Ares, Jr., a diocesan priest, became President in 1997. The college continued to evolve with various leadership transitions.
                            </p>
                            <p class="text-base-content/80">
                                <strong>Present Day:</strong> Fr. Virgilio H. Delfin, CPA, DBM serves as the incumbent President, leading San Isidro College as the only Catholic higher educational institution in Malaybalay, continuing its legacy of excellence in service to the community.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Legacy Section -->
    <div class="bg-base-100 rounded-lg shadow-md p-8 border-t-4 border-primary">
        <h3 class="text-3xl font-bold text-base-content mb-6">Our Legacy</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center">
                <div class="text-4xl font-bold text-primary mb-2">75+</div>
                <p class="text-base-content/70">Years of Service</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-secondary mb-2">10,000+</div>
                <p class="text-base-content/70">Graduates</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-accent mb-2">1</div>
                <p class="text-base-content/70">Catholic Institution in Malaybalay</p>
            </div>
        </div>
    </div>

</div>

@endsection
