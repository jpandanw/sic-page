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
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Mission & Vision</h1>
        <p class="text-lg opacity-90">Guiding Our Path to Excellence</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li><a href="/about" class="link link-hover">About</a></li>
            <li class="text-primary font-semibold">Mission & Vision</li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-4 py-16">

    <!-- Mission Section -->
    <section class="mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mb-12">
            <div>
                <h2 class="text-4xl font-bold text-primary mb-6">Our Mission</h2>
                <div class="h-1 bg-gradient-to-r from-primary to-secondary w-20 mb-6"></div>
                <div class="card bg-base-100 shadow-lg">
                    <div class="card-body text-lg leading-relaxed text-base-content/80">
                        <p class="text-center font-semibold text-primary italic">
                            "An enlightened and empowered Catholic learning institution in the service of God, for others, and the rest of creation."
                        </p>
                    </div>
                </div>
                <p class="mt-6 text-base-content/70 leading-relaxed">
                    San Isidro College commits itself to providing quality education rooted in Catholic values while serving the community with integrity and compassion. We strive to develop competent, virtuous, and socially responsible individuals who contribute positively to society.
                </p>
            </div>
            <div class="flex justify-center">
                <div class="card bg-gradient-to-br from-primary to-secondary shadow-xl text-primary-content p-8">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <p class="font-bold text-lg">Purpose Driven</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="mb-20">
        <h2 class="text-4xl font-bold text-secondary mb-6 text-center">Our Vision</h2>
        <div class="h-1 bg-gradient-to-r from-secondary to-accent w-20 mx-auto mb-12"></div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="card bg-base-100 shadow-md border-t-4 border-primary">
                <div class="card-body items-center text-center">
                    <div class="text-3xl mb-3">📚</div>
                    <h3 class="card-title text-sm text-primary">Dynamic Curriculum</h3>
                    <p class="text-xs text-base-content/70">Develop dynamic curricula with excellent instruction and efficient facilities for competency development</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-md border-t-4 border-secondary">
                <div class="card-body items-center text-center">
                    <div class="text-3xl mb-3">✝️</div>
                    <h3 class="card-title text-sm text-secondary">Gospel Values</h3>
                    <p class="text-xs text-base-content/70">Witness to Gospel Values and demonstrate preferential option for the poor</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-md border-t-4 border-accent">
                <div class="card-body items-center text-center">
                    <div class="text-3xl mb-3">⚖️</div>
                    <h3 class="card-title text-sm text-accent">Social Justice</h3>
                    <p class="text-xs text-base-content/70">Promote social justice, human rights and integrity of creation</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-md border-t-4 border-info">
                <div class="card-body items-center text-center">
                    <div class="text-3xl mb-3">🇵🇭</div>
                    <h3 class="card-title text-sm text-info">Filipino Heritage</h3>
                    <p class="text-xs text-base-content/70">Instill national pride and appreciation of Filipino culture and heritage</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-md border-t-4 border-success">
                <div class="card-body items-center text-center">
                    <div class="text-3xl mb-3">🔬</div>
                    <h3 class="card-title text-sm text-success">Research & Inquiry</h3>
                    <p class="text-xs text-base-content/70">Conduct relevant research and innovation for community development</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="bg-base-100 rounded-xl shadow-lg p-8">
        <h2 class="text-4xl font-bold text-base-content mb-12 text-center">Our Core Values</h2>
        <p class="text-center text-base-content/70 mb-12 max-w-2xl mx-auto">
            These values form the foundation of everything we do at San Isidro College, guiding our decisions, actions, and interactions with our community.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Discipline -->
            <div class="card bg-gradient-to-br from-blue-50 to-blue-100 border-l-4 border-primary">
                <div class="card-body">
                    <h3 class="card-title text-primary text-lg flex items-center gap-2 mb-3">
                        <span class="text-2xl">🎯</span>
                        Discipline & Character
                    </h3>
                    <p class="text-base-content/80 text-sm leading-relaxed">
                        Practice of orderly conduct, good behavior, and positive attitude towards self and others. Development of personality with good mental and moral qualities, fostering responsibility and self-control.
                    </p>
                </div>
            </div>

            <!-- Excellence -->
            <div class="card bg-gradient-to-br from-yellow-50 to-yellow-100 border-l-4 border-warning">
                <div class="card-body">
                    <h3 class="card-title text-warning text-lg flex items-center gap-2 mb-3">
                        <span class="text-2xl">⭐</span>
                        Excellence
                    </h3>
                    <p class="text-base-content/80 text-sm leading-relaxed">
                        Adoption and exercise of quality standards in all endeavors. Commitment to professionalism, truth, goodness, beauty, and harmony. Pursuit of distinction and promptness in service delivery.
                    </p>
                </div>
            </div>

            <!-- Faith -->
            <div class="card bg-gradient-to-br from-purple-50 to-purple-100 border-l-4 border-accent">
                <div class="card-body">
                    <h3 class="card-title text-accent text-lg flex items-center gap-2 mb-3">
                        <span class="text-2xl">⛪</span>
                        Faith
                    </h3>
                    <p class="text-base-content/80 text-sm leading-relaxed">
                        Adherence to strong belief and trust in God, church's dogmas and doctrines. Emphasis on prayer, spiritual nurturing, and obedience. Integration of faith in all aspects of learning and community life.
                    </p>
                </div>
            </div>

            <!-- Industry & Work -->
            <div class="card bg-gradient-to-br from-orange-50 to-orange-100 border-l-4 border-secondary">
                <div class="card-body">
                    <h3 class="card-title text-secondary text-lg flex items-center gap-2 mb-3">
                        <span class="text-2xl">💼</span>
                        Industry & Work
                    </h3>
                    <p class="text-base-content/80 text-sm leading-relaxed">
                        Demonstration of diligence, patience, and perseverance through steady effort. Focus on study, learning, duty, and service. Commitment to meaningful work and vocational excellence.
                    </p>
                </div>
            </div>

            <!-- Nationalism -->
            <div class="card bg-gradient-to-br from-red-50 to-red-100 border-l-4 border-error">
                <div class="card-body">
                    <h3 class="card-title text-error text-lg flex items-center gap-2 mb-3">
                        <span class="text-2xl">🇵🇭</span>
                        Nationalism & Cultural Integration
                    </h3>
                    <p class="text-base-content/80 text-sm leading-relaxed">
                        Promotion of national consciousness and loyalty to the country. Preservation of Filipino cultural heritage and appreciation of international cultures. Respect for diverse traditions and customs.
                    </p>
                </div>
            </div>

            <!-- Social Responsibility -->
            <div class="card bg-gradient-to-br from-green-50 to-green-100 border-l-4 border-success">
                <div class="card-body">
                    <h3 class="card-title text-success text-lg flex items-center gap-2 mb-3">
                        <span class="text-2xl">🤝</span>
                        Social Responsibility
                    </h3>
                    <p class="text-base-content/80 text-sm leading-relaxed">
                        Concern for and response to the welfare of humans in society. Promotion of accountability, justice, fairness, and equity. Active participation in community development and social causes.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Educational Goals -->
    <section class="mt-20">
        <h2 class="text-4xl font-bold text-base-content mb-12 text-center">Our Educational Goals</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="card bg-base-100 shadow-md">
                <div class="card-body">
                    <h3 class="card-title text-primary mb-4 flex items-center gap-2">
                        <span class="text-2xl">🧠</span>
                        Academic Excellence
                    </h3>
                    <ul class="space-y-2 text-base-content/80 text-sm">
                        <li class="flex gap-2">
                            <span class="text-primary">✓</span>
                            <span>Develop critical thinking and analytical skills</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-primary">✓</span>
                            <span>Master core competencies in chosen fields</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-primary">✓</span>
                            <span>Prepare students for higher education and careers</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card bg-base-100 shadow-md">
                <div class="card-body">
                    <h3 class="card-title text-secondary mb-4 flex items-center gap-2">
                        <span class="text-2xl">💪</span>
                        Character Development
                    </h3>
                    <ul class="space-y-2 text-base-content/80 text-sm">
                        <li class="flex gap-2">
                            <span class="text-secondary">✓</span>
                            <span>Build strong moral and ethical foundation</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-secondary">✓</span>
                            <span>Foster leadership and collaborative skills</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-secondary">✓</span>
                            <span>Cultivate resilience and self-discipline</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card bg-base-100 shadow-md">
                <div class="card-body">
                    <h3 class="card-title text-accent mb-4 flex items-center gap-2">
                        <span class="text-2xl">🌍</span>
                        Social Responsibility
                    </h3>
                    <ul class="space-y-2 text-base-content/80 text-sm">
                        <li class="flex gap-2">
                            <span class="text-accent">✓</span>
                            <span>Develop awareness of social issues</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-accent">✓</span>
                            <span>Engage in community service programs</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-accent">✓</span>
                            <span>Inspire positive change in society</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card bg-base-100 shadow-md">
                <div class="card-body">
                    <h3 class="card-title text-info mb-4 flex items-center gap-2">
                        <span class="text-2xl">🎓</span>
                        Lifelong Learning
                    </h3>
                    <ul class="space-y-2 text-base-content/80 text-sm">
                        <li class="flex gap-2">
                            <span class="text-info">✓</span>
                            <span>Cultivate love of learning and inquiry</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-info">✓</span>
                            <span>Adapt to continuous change and innovation</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-info">✓</span>
                            <span>Pursue professional and personal growth</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
