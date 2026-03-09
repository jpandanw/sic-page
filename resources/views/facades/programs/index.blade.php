@extends('templates.facade-template')

@section('scripts')
@endsection

@section('body')

<!-- Hero Section -->
<div class="bg-gradient-to-r from-primary to-secondary text-primary-content min-h-96 flex items-center justify-center">
    <div class="text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Academic Programs</h1>
        <p class="text-lg opacity-90">Comprehensive Education from Pre-School to College</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li class="text-primary font-semibold">Academic Programs</li>
        </ul>
    </div>
</div>

<!-- Introduction -->
<div class="max-w-6xl mx-auto px-4 py-12">
    <div class="card bg-base-100 shadow-md mb-12">
        <div class="card-body">
            <h2 class="card-title text-2xl text-primary mb-4">About Our Programs</h2>
            <p class="text-base-content/80 leading-relaxed">
                San Isidro College offers comprehensive educational programs designed to develop well-rounded, competent, and values-driven individuals. Our curriculum integrates academic excellence with character formation, preparing students for successful careers and meaningful contributions to society.
            </p>
        </div>
    </div>
</div>

<!-- Program Overview Cards -->
<div class="max-w-6xl mx-auto px-4 mb-16">
    <h2 class="text-3xl font-bold text-base-content mb-8 text-center">Our Levels of Education</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
        <div class="card bg-gradient-to-br from-blue-50 to-blue-100 shadow-md text-center">
            <div class="card-body items-center">
                <div class="text-4xl mb-2">👶</div>
                <h3 class="card-title text-blue-700">Pre-School</h3>
                <p class="text-xs text-base-content/70">Ages 3-5</p>
            </div>
        </div>
        <div class="card bg-gradient-to-br from-green-50 to-green-100 shadow-md text-center">
            <div class="card-body items-center">
                <div class="text-4xl mb-2">📚</div>
                <h3 class="card-title text-green-700">Elementary</h3>
                <p class="text-xs text-base-content/70">Grades 1-6</p>
            </div>
        </div>
        <div class="card bg-gradient-to-br from-yellow-50 to-yellow-100 shadow-md text-center">
            <div class="card-body items-center">
                <div class="text-4xl mb-2">📖</div>
                <h3 class="card-title text-yellow-700">Junior High</h3>
                <p class="text-xs text-base-content/70">Grades 7-10</p>
            </div>
        </div>
        <div class="card bg-gradient-to-br from-purple-50 to-purple-100 shadow-md text-center">
            <div class="card-body items-center">
                <div class="text-4xl mb-2">🎓</div>
                <h3 class="card-title text-purple-700">Senior High</h3>
                <p class="text-xs text-base-content/70">Grades 11-12</p>
            </div>
        </div>
        <div class="card bg-gradient-to-br from-orange-50 to-orange-100 shadow-md text-center">
            <div class="card-body items-center">
                <div class="text-4xl mb-2">🏛️</div>
                <h3 class="card-title text-orange-700">College</h3>
                <p class="text-xs text-base-content/70">Undergraduate</p>
            </div>
        </div>
    </div>
</div>

<!-- Programs Detailed Sections -->
<div class="max-w-6xl mx-auto px-4 space-y-12">

    <!-- Pre-School Section -->
    <section id="pre-school" class="scroll-mt-20">
        <div class="card bg-base-100 shadow-lg border-t-4 border-blue-500">
            <div class="card-body">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2">
                        <h2 class="card-title text-3xl text-blue-600 mb-2">👶 Pre-School Program</h2>
                        <div class="h-1 bg-gradient-to-r from-blue-400 to-blue-600 w-20 mb-6"></div>
                        
                        <p class="text-base-content/80 mb-4 leading-relaxed">
                            Our Pre-School program focuses on the developmental needs of young learners aged 3-5 years. We provide a nurturing, play-based environment that fosters social, emotional, physical, and cognitive development through carefully designed activities and interactions.
                        </p>

                        <h4 class="font-bold text-blue-700 mb-3">Key Features:</h4>
                        <ul class="space-y-2 text-sm text-base-content/80 mb-6">
                            <li class="flex gap-2">
                                <span class="text-blue-600">✓</span>
                                <span>Play-based learning approach</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-blue-600">✓</span>
                                <span>Small class sizes for personalized attention</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-blue-600">✓</span>
                                <span>Language and numeracy readiness</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-blue-600">✓</span>
                                <span>Social skills and emotional development</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-blue-600">✓</span>
                                <span>Arts, music, and physical education</span>
                            </li>
                        </ul>

                        <a href="/admission" class="btn btn-blue btn-outline">Enroll Now</a>
                    </div>
                    <div class="card bg-blue-50">
                        <div class="card-body">
                            <h4 class="font-bold text-blue-700 mb-3">Duration</h4>
                            <p class="text-sm text-base-content/80 mb-6">Ages 3-5 years old</p>
                            
                            <h4 class="font-bold text-blue-700 mb-3">Class Size</h4>
                            <p class="text-sm text-base-content/80 mb-6">15-20 students per class</p>

                            <h4 class="font-bold text-blue-700 mb-3">School Hours</h4>
                            <p class="text-sm text-base-content/80">7:30 AM - 12:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Elementary Section -->
    <section id="elementary" class="scroll-mt-20">
        <div class="card bg-base-100 shadow-lg border-t-4 border-green-500">
            <div class="card-body">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2">
                        <h2 class="card-title text-3xl text-green-600 mb-2">📚 Elementary Program</h2>
                        <div class="h-1 bg-gradient-to-r from-green-400 to-green-600 w-20 mb-6"></div>
                        
                        <p class="text-base-content/80 mb-4 leading-relaxed">
                            Our Elementary program (Grades 1-6) emphasizes foundational skills in literacy, numeracy, and critical thinking. Students develop competency in core subjects while cultivating values such as honesty, respect, and responsibility through integrated learning experiences.
                        </p>

                        <h4 class="font-bold text-green-700 mb-3">Core Curriculum:</h4>
                        <ul class="space-y-2 text-sm text-base-content/80 mb-6">
                            <li class="flex gap-2">
                                <span class="text-green-600">✓</span>
                                <span>English Language Arts and Reading</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green-600">✓</span>
                                <span>Mathematics and Problem Solving</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green-600">✓</span>
                                <span>Science and Technology</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green-600">✓</span>
                                <span>Social Studies and Civics</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green-600">✓</span>
                                <span>Physical Education and Health</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green-600">✓</span>
                                <span>Arts, Music, and Character Education</span>
                            </li>
                        </ul>

                        <a href="/admission" class="btn btn-success btn-outline">Enroll Now</a>
                    </div>
                    <div class="card bg-green-50">
                        <div class="card-body">
                            <h4 class="font-bold text-green-700 mb-3">Grade Levels</h4>
                            <p class="text-sm text-base-content/80 mb-6">Grades 1-6</p>
                            
                            <h4 class="font-bold text-green-700 mb-3">Class Size</h4>
                            <p class="text-sm text-base-content/80 mb-6">25-30 students per class</p>

                            <h4 class="font-bold text-green-700 mb-3">School Hours</h4>
                            <p class="text-sm text-base-content/80">7:30 AM - 3:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Junior High Section -->
    <section id="junior-high" class="scroll-mt-20">
        <div class="card bg-base-100 shadow-lg border-t-4 border-yellow-500">
            <div class="card-body">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2">
                        <h2 class="card-title text-3xl text-yellow-600 mb-2">📖 Junior High School</h2>
                        <div class="h-1 bg-gradient-to-r from-yellow-400 to-yellow-600 w-20 mb-6"></div>
                        
                        <p class="text-base-content/80 mb-4 leading-relaxed">
                            Junior High (Grades 7-10) provides a transitional program that bridges elementary and senior high education. Students explore diverse subjects, develop advanced academic skills, and engage in meaningful co-curricular activities that prepare them for specialization in senior high.
                        </p>

                        <h4 class="font-bold text-yellow-700 mb-3">Academic Tracks:</h4>
                        <ul class="space-y-2 text-sm text-base-content/80 mb-6">
                            <li class="flex gap-2">
                                <span class="text-yellow-600">✓</span>
                                <span>English, Mathematics, Science, and Social Studies</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-yellow-600">✓</span>
                                <span>Languages (Filipino, English, Foreign Languages)</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-yellow-600">✓</span>
                                <span>Technology and Information Science</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-yellow-600">✓</span>
                                <span>Visual and Performing Arts</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-yellow-600">✓</span>
                                <span>Physical Education and Sports</span>
                            </li>
                            <li class="flex gap-2">
                                <span class="text-yellow-600">✓</span>
                                <span>Values Education and Character Formation</span>
                            </li>
                        </ul>

                        <a href="/admission" class="btn btn-warning btn-outline">Enroll Now</a>
                    </div>
                    <div class="card bg-yellow-50">
                        <div class="card-body">
                            <h4 class="font-bold text-yellow-700 mb-3">Grade Levels</h4>
                            <p class="text-sm text-base-content/80 mb-6">Grades 7-10</p>
                            
                            <h4 class="font-bold text-yellow-700 mb-3">Class Size</h4>
                            <p class="text-sm text-base-content/80 mb-6">30-35 students per class</p>

                            <h4 class="font-bold text-yellow-700 mb-3">School Hours</h4>
                            <p class="text-sm text-base-content/80">7:00 AM - 3:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Senior High Section -->
    <section id="senior-high" class="scroll-mt-20">
        <div class="card bg-base-100 shadow-lg border-t-4 border-purple-500">
            <div class="card-body">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
                    <div class="md:col-span-2">
                        <h2 class="card-title text-3xl text-purple-600 mb-2">🎓 Senior High School</h2>
                        <div class="h-1 bg-gradient-to-r from-purple-400 to-purple-600 w-20 mb-6"></div>
                        
                        <p class="text-base-content/80 mb-4 leading-relaxed">
                            Our Senior High program (Grades 11-12) offers specialized tracks aligned with the K-12 curriculum. Students choose between Science, Technology, and Engineering (STEM), Humanities and Social Sciences (HUMSS), or Technical-Vocational Livelihood (TVL) tracks based on their interests and career goals.
                        </p>

                        <h4 class="font-bold text-purple-700 mb-3">Available Tracks:</h4>
                        <div class="space-y-4 mb-6">
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="font-semibold text-purple-700 mb-2">🔬 Science, Technology, Engineering & Mathematics (STEM)</p>
                                <p class="text-sm text-base-content/70">Prepares students for engineering, medicine, and scientific research careers.</p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="font-semibold text-purple-700 mb-2">📚 Humanities and Social Sciences (HUMSS)</p>
                                <p class="text-sm text-base-content/70">Develops critical thinking for law, education, business, and social sciences.</p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <p class="font-semibold text-purple-700 mb-2">🛠️ Technical-Vocational Livelihood (TVL)</p>
                                <p class="text-sm text-base-content/70">Provides practical skills for immediate employment in technical fields.</p>
                            </div>
                        </div>

                        <a href="/admission" class="btn btn-secondary btn-outline">Enroll Now</a>
                    </div>
                    <div class="card bg-purple-50">
                        <div class="card-body">
                            <h4 class="font-bold text-purple-700 mb-3">Grade Levels</h4>
                            <p class="text-sm text-base-content/80 mb-6">Grades 11-12</p>
                            
                            <h4 class="font-bold text-purple-700 mb-3">Class Size</h4>
                            <p class="text-sm text-base-content/80 mb-6">30-35 students per class</p>

                            <h4 class="font-bold text-purple-700 mb-3">School Hours</h4>
                            <p class="text-sm text-base-content/80">7:00 AM - 3:30 PM</p>

                            <h4 class="font-bold text-purple-700 mb-3 mt-6">Certifications</h4>
                            <p class="text-sm text-base-content/80">TESDA, CHED accredited</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- College Section -->
    <section id="college" class="scroll-mt-20">
        <div class="card bg-base-100 shadow-lg border-t-4 border-orange-500">
            <div class="card-body">
                <h2 class="card-title text-3xl text-orange-600 mb-2">🏛️ College Programs</h2>
                <div class="h-1 bg-gradient-to-r from-orange-400 to-orange-600 w-20 mb-6"></div>
                
                <p class="text-base-content/80 mb-8 leading-relaxed">
                    San Isidro College offers a variety of undergraduate degree programs designed to develop professional competence and foster values-based leadership. Our college programs combine rigorous academics with practical experience.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Bachelor of Science in Nursing -->
                    <div class="card bg-orange-50 border border-orange-200">
                        <div class="card-body">
                            <h3 class="card-title text-orange-700 text-lg flex items-center gap-2">
                                <span>⚕️</span> Bachelor of Science in Nursing
                            </h3>
                            <p class="text-sm text-base-content/80 mb-3">
                                Prepares competent, caring, and ethical nurses equipped with clinical and leadership skills for healthcare delivery.
                            </p>
                            <div class="space-y-2 text-sm">
                                <p><strong>Duration:</strong> 4 Years</p>
                                <p><strong>Licensure Exam:</strong> NCLEX-RN Equivalent</p>
                                <p><strong>Career Paths:</strong> Hospitals, clinics, health centers, nursing homes</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bachelor of Science in Information Technology -->
                    <div class="card bg-orange-50 border border-orange-200">
                        <div class="card-body">
                            <h3 class="card-title text-orange-700 text-lg flex items-center gap-2">
                                <span>💻</span> BS Information Technology
                            </h3>
                            <p class="text-sm text-base-content/80 mb-3">
                                Develops skilled IT professionals capable of designing, implementing, and managing information systems.
                            </p>
                            <div class="space-y-2 text-sm">
                                <p><strong>Duration:</strong> 4 Years</p>
                                <p><strong>Specializations:</strong> Web Dev, Cybersecurity, Database Admin</p>
                                <p><strong>Career Paths:</strong> Software companies, tech firms, corporations</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bachelor of Science in Business Administration -->
                    <div class="card bg-orange-50 border border-orange-200">
                        <div class="card-body">
                            <h3 class="card-title text-orange-700 text-lg flex items-center gap-2">
                                <span>💼</span> BS Business Administration
                            </h3>
                            <p class="text-sm text-base-content/80 mb-3">
                                Educates future business leaders with expertise in management, finance, marketing, and entrepreneurship.
                            </p>
                            <div class="space-y-2 text-sm">
                                <p><strong>Duration:</strong> 4 Years</p>
                                <p><strong>Specializations:</strong> Finance, Marketing, Operations</p>
                                <p><strong>Career Paths:</strong> Corporate management, banking, business ownership</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bachelor of Science in Education -->
                    <div class="card bg-orange-50 border border-orange-200">
                        <div class="card-body">
                            <h3 class="card-title text-orange-700 text-lg flex items-center gap-2">
                                <span>👨‍🏫</span> BS Education
                            </h3>
                            <p class="text-sm text-base-content/80 mb-3">
                                Prepares dedicated educators committed to quality teaching and student-centered learning approaches.
                            </p>
                            <div class="space-y-2 text-sm">
                                <p><strong>Duration:</strong> 4 Years</p>
                                <p><strong>Specializations:</strong> Math, Science, English, Social Studies</p>
                                <p><strong>Career Paths:</strong> Teaching, education administration, curriculum development</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bachelor of Science in Liberal Arts -->
                    <div class="card bg-orange-50 border border-orange-200">
                        <div class="card-body">
                            <h3 class="card-title text-orange-700 text-lg flex items-center gap-2">
                                <span>📖</span> BS Liberal Arts
                            </h3>
                            <p class="text-sm text-base-content/80 mb-3">
                                Offers a well-rounded education in humanities, social sciences, and natural sciences.
                            </p>
                            <div class="space-y-2 text-sm">
                                <p><strong>Duration:</strong> 4 Years</p>
                                <p><strong>Focus Areas:</strong> Languages, history, literature, philosophy</p>
                                <p><strong>Career Paths:</strong> Communications, public service, research</p>
                            </div>
                        </div>
                    </div>

                    <!-- Bachelor of Science in Commerce -->
                    <div class="card bg-orange-50 border border-orange-200">
                        <div class="card-body">
                            <h3 class="card-title text-orange-700 text-lg flex items-center gap-2">
                                <span>🏪</span> BS Commerce
                            </h3>
                            <p class="text-sm text-base-content/80 mb-3">
                                Develops competent accountants and business professionals with expertise in commerce and trade.
                            </p>
                            <div class="space-y-2 text-sm">
                                <p><strong>Duration:</strong> 4 Years</p>
                                <p><strong>Focus Areas:</strong> Accounting, auditing, financial management</p>
                                <p><strong>Career Paths:</strong> Accounting firms, auditing companies, finance</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-orange-50 p-6 rounded-lg border border-orange-200">
                    <h4 class="font-bold text-orange-700 mb-3">College Features:</h4>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm text-base-content/80">
                        <li class="flex gap-2">
                            <span class="text-orange-600">✓</span>
                            <span>CHED-accredited programs</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600">✓</span>
                            <span>Modern laboratories and facilities</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600">✓</span>
                            <span>Internship and practicum opportunities</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600">✓</span>
                            <span>Research opportunities</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600">✓</span>
                            <span>Scholarship programs available</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600">✓</span>
                            <span>Professional development workshops</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-8">
                    <a href="/admission" class="btn btn-error btn-outline btn-lg">Apply to College Programs</a>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Call to Action -->
<div class="bg-gradient-to-r from-primary to-secondary text-primary-content py-16 mt-16">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Ready to Choose Your Path?</h2>
        <p class="text-lg opacity-90 mb-8">Start your journey at San Isidro College today!</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/admission" class="btn btn-lg btn-outline border-primary-content text-primary-content hover:bg-primary-content hover:text-primary">
                Proceed to Admission
            </a>
            <a href="/contact" class="btn btn-lg btn-outline border-primary-content text-primary-content hover:bg-primary-content hover:text-primary">
                Contact Us
            </a>
        </div>
    </div>
</div>

@endsection
