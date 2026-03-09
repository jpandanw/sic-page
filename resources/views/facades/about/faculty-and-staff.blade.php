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
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Faculty & Organization</h1>
        <p class="text-lg opacity-90">Meet Our Dedicated Team</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li><a href="/about" class="link link-hover">About</a></li>
            <li class="text-primary font-semibold">Faculty & Organization</li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-4 py-16">

    <!-- Tabs -->
    <div role="tablist" class="tabs tabs-bordered mb-12">
        <input type="radio" name="org_tabs" role="tab" class="tab" aria-label="Overview" checked />
        <div role="tabpanel" class="tab-content p-0 md:p-6">
            <div class="space-y-8">
                <!-- Leadership Introduction -->
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h2 class="card-title text-2xl text-primary mb-4">Our Leadership</h2>
                        <p class="text-base-content/80 leading-relaxed">
                            San Isidro College is led by a dedicated team of educators and administrators committed to advancing academic excellence and character formation. Our leadership brings together decades of experience in education and institutional management, guided by our Catholic mission and values.
                        </p>
                    </div>
                </div>

                <!-- President Section -->
                <div class="card bg-gradient-to-br from-primary/5 to-secondary/5 shadow-md border-l-4 border-primary">
                    <div class="card-body">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 items-center">
                            <div class="flex justify-center">
                                <img src="/sic.png" alt="President" class="w-32 h-32 rounded-lg shadow-md object-cover">
                            </div>
                            <div class="md:col-span-3">
                                <h3 class="text-2xl font-bold text-primary mb-1">Fr. Virgilio H. Delfin, CPA, DBM</h3>
                                <p class="text-lg text-secondary font-semibold mb-4">President</p>
                                <p class="text-base-content/80 leading-relaxed">
                                    Fr. Virgilio H. Delfin serves as the incumbent President of San Isidro College. With extensive experience in educational administration and financial management, he leads the college with a vision of academic excellence grounded in Catholic principles. His commitment to student welfare and community engagement continues to shape the college's strategic direction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Staff Roles Section -->
                <div>
                    <h3 class="text-2xl font-bold text-base-content mb-6">Administrative Structure</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div class="card bg-base-100 shadow-md">
                            <div class="card-body">
                                <h4 class="card-title text-primary flex items-center gap-2">
                                    <span>👨‍💼</span> Academic Affairs
                                </h4>
                                <p class="text-sm text-base-content/80">
                                    Oversees curriculum development, academic standards, faculty development, and quality assurance of educational programs.
                                </p>
                            </div>
                        </div>

                        <div class="card bg-base-100 shadow-md">
                            <div class="card-body">
                                <h4 class="card-title text-secondary flex items-center gap-2">
                                    <span>📚</span> Student Services
                                </h4>
                                <p class="text-sm text-base-content/80">
                                    Manages student welfare, counseling, discipline, and co-curricular activities to support holistic student development.
                                </p>
                            </div>
                        </div>

                        <div class="card bg-base-100 shadow-md">
                            <div class="card-body">
                                <h4 class="card-title text-accent flex items-center gap-2">
                                    <span>💰</span> Finance & Administration
                                </h4>
                                <p class="text-sm text-base-content/80">
                                    Manages college finances, administrative operations, facilities, and human resources management.
                                </p>
                            </div>
                        </div>

                        <div class="card bg-base-100 shadow-md">
                            <div class="card-body">
                                <h4 class="card-title text-info flex items-center gap-2">
                                    <span>🤝</span> Community Outreach
                                </h4>
                                <p class="text-sm text-base-content/80">
                                    Coordinates extension programs, community partnerships, and social responsibility initiatives aligned with our mission.
                                </p>
                            </div>
                        </div>

                        <div class="card bg-base-100 shadow-md">
                            <div class="card-body">
                                <h4 class="card-title text-success flex items-center gap-2">
                                    <span>🔬</span> Research & Innovation
                                </h4>
                                <p class="text-sm text-base-content/80">
                                    Promotes research activities, encourages faculty scholarship, and facilitates innovation in teaching and learning.
                                </p>
                            </div>
                        </div>

                        <div class="card bg-base-100 shadow-md">
                            <div class="card-body">
                                <h4 class="card-title text-warning flex items-center gap-2">
                                    <span>📋</span> Admissions & Registrar
                                </h4>
                                <p class="text-sm text-base-content/80">
                                    Handles admissions processing, student records, registration, and official transcripts management.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="radio" name="org_tabs" role="tab" class="tab" aria-label="Faculty Qualifications" />
        <div role="tabpanel" class="tab-content p-0 md:p-6">
            <div class="space-y-8">
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h2 class="card-title text-2xl text-primary mb-4">Faculty Excellence</h2>
                        <p class="text-base-content/80 leading-relaxed mb-6">
                            San Isidro College employs highly qualified faculty members committed to academic excellence and student success. Our faculty are selected based on rigorous standards ensuring expertise, experience, and dedication to education.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="card bg-gradient-to-br from-blue-50 to-blue-100">
                                <div class="card-body">
                                    <h4 class="card-title text-primary text-lg mb-3">Academic Credentials</h4>
                                    <ul class="space-y-2 text-sm text-base-content/80">
                                        <li class="flex gap-2">
                                            <span class="text-primary">✓</span>
                                            <span>Master's degree in their respective disciplines</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-primary">✓</span>
                                            <span>Doctoral degrees for senior positions</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-primary">✓</span>
                                            <span>Continuing professional development</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-primary">✓</span>
                                            <span>Subject matter expertise and specialization</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card bg-gradient-to-br from-purple-50 to-purple-100">
                                <div class="card-body">
                                    <h4 class="card-title text-accent text-lg mb-3">Professional Experience</h4>
                                    <ul class="space-y-2 text-sm text-base-content/80">
                                        <li class="flex gap-2">
                                            <span class="text-accent">✓</span>
                                            <span>Industry and academic experience</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-accent">✓</span>
                                            <span>Research and publication record</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-accent">✓</span>
                                            <span>Teaching methodology expertise</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-accent">✓</span>
                                            <span>Mentoring and student guidance capability</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card bg-gradient-to-br from-green-50 to-green-100 md:col-span-2">
                                <div class="card-body">
                                    <h4 class="card-title text-success text-lg mb-3">Professional Development</h4>
                                    <ul class="space-y-2 text-sm text-base-content/80">
                                        <li class="flex gap-2">
                                            <span class="text-success">✓</span>
                                            <span>Annual training in pedagogy and instructional technology</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-success">✓</span>
                                            <span>Participation in workshops, seminars, and conferences</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-success">✓</span>
                                            <span>Support for graduate studies and research projects</span>
                                        </li>
                                        <li class="flex gap-2">
                                            <span class="text-success">✓</span>
                                            <span>Collaborative learning communities and peer mentoring</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="radio" name="org_tabs" role="tab" class="tab" aria-label="Organizational Chart" />
        <div role="tabpanel" class="tab-content p-0 md:p-6">
            <div class="card bg-base-100 shadow-md">
                <div class="card-body">
                    <h2 class="card-title text-2xl text-primary mb-6">Organizational Chart</h2>
                    <p class="text-base-content/70 mb-6">
                        Below is a visual representation of San Isidro College's administrative structure and reporting hierarchy.
                    </p>
                    
                    <!-- Embedded Canva Chart -->
                    <div class="bg-base-200 rounded-lg overflow-hidden" style="aspect-ratio: 16/9;">
                        <iframe 
                            loading="lazy" 
                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0; margin: 0;"
                            src="https://www.canva.com/design/DAHBtt1hw2U/SC7sEKxKCZAHyX2He2mI9w/view?embed" 
                            allowfullscreen="allowfullscreen" 
                            allow="fullscreen">
                        </iframe>
                    </div>

                    <p class="text-sm text-base-content/60 mt-6">
                        For a detailed view of the organizational chart, please visit our main office or contact the Human Resources department.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Faculty Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-12">
        <div class="stat place-items-center bg-base-100 rounded-lg shadow-md">
            <div class="stat-value text-primary">150+</div>
            <div class="stat-title">Faculty Members</div>
            <div class="stat-desc">Dedicated educators</div>
        </div>
        <div class="stat place-items-center bg-base-100 rounded-lg shadow-md">
            <div class="stat-value text-secondary">95%</div>
            <div class="stat-title">Master's Degree Holders</div>
            <div class="stat-desc">Highly qualified</div>
        </div>
        <div class="stat place-items-center bg-base-100 rounded-lg shadow-md">
            <div class="stat-value text-accent">20+</div>
            <div class="stat-title">PhD Holders</div>
            <div class="stat-desc">Research active</div>
        </div>
        <div class="stat place-items-center bg-base-100 rounded-lg shadow-md">
            <div class="stat-value text-info">25:1</div>
            <div class="stat-title">Student-Faculty Ratio</div>
            <div class="stat-desc">Personalized attention</div>
        </div>
    </div>

    <!-- Recruitment & Career Opportunities -->
    <div class="card bg-gradient-to-r from-primary/10 to-secondary/10 shadow-md mt-12">
        <div class="card-body">
            <h3 class="card-title text-2xl text-primary mb-4">Join Our Faculty</h3>
            <p class="text-base-content/80 mb-6">
                San Isidro College is always looking for passionate and qualified educators and administrators to join our community. We offer competitive compensation, professional development opportunities, and a supportive work environment.
            </p>
            <div class="card-actions">
                <a href="/careers" class="btn btn-primary">View Current Openings</a>
                <a href="/contact" class="btn btn-outline btn-primary">Contact HR Department</a>
            </div>
        </div>
    </div>

</div>

@endsection
