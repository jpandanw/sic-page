@extends('templates.facade-template')

@php
@endphp

@section('scripts')
@endsection

@section('body')

<!-- Hero Section -->
<div class="bg-gradient-to-r from-primary to-secondary text-primary-content min-h-96 flex items-center justify-center">
    <div class="text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Admissions</h1>
        <p class="text-lg opacity-90">Join Our San Isidro College Community</p>
        <div class="divider divider-primary opacity-50 my-4 max-w-xs mx-auto"></div>
    </div>
</div>

<!-- Breadcrumbs -->
<div class="max-w-6xl mx-auto px-4 py-4">
    <div class="breadcrumbs text-sm">
        <ul>
            <li><a href="/" class="link link-hover">Home</a></li>
            <li class="text-primary font-semibold">Admissions</li>
        </ul>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-6xl mx-auto px-4 py-16">

    <!-- Introduction Card -->
    <div class="card bg-base-100 shadow-md mb-12">
        <div class="card-body">
            <h2 class="card-title text-2xl text-primary mb-4">Welcome to San Isidro College</h2>
            <p class="text-base-content/80 leading-relaxed">
                We're excited that you're considering San Isidro College for your education! Our admissions process is designed to be transparent, fair, and supportive. Whether you're applying for Pre-School, Elementary, High School, or College programs, we're here to guide you through every step.
            </p>
        </div>
    </div>


    <!-- Programs Admission Requirements -->
    <h2 class="text-3xl font-bold text-base-content mb-8">Admission Requirements by Level</h2>

    <!-- Pre-School Admission -->
    <div class="card bg-blue-50 border-t-4 border-blue-500 shadow-md mb-8">
        <div class="card-body">
            <h3 class="card-title text-2xl text-blue-700 flex items-center gap-2 mb-6">
                <span>👶</span> Pre-School Admission
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Requirements -->
                <div>
                    <h4 class="font-bold text-blue-700 mb-4">Required Documents:</h4>
                    <ul class="space-y-2 text-base-content/80">
                        <li class="flex gap-2">
                            <span class="text-blue-600 font-bold">•</span>
                            <span>Birth Certificate (original + 2 copies)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-blue-600 font-bold">•</span>
                            <span>Valid Health Certificate from physician</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-blue-600 font-bold">•</span>
                            <span>Parent's/Guardian's ID (photocopy)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-blue-600 font-bold">•</span>
                            <span>2x2 colored ID photo (4 pieces)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-blue-600 font-bold">•</span>
                            <span>Immunization records</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-blue-600 font-bold">•</span>
                            <span>School readiness evaluation (if available)</span>
                        </li>
                    </ul>
                </div>

                <!-- Information -->
                <div class="card bg-white shadow-sm">
                    <div class="card-body">
                        <h4 class="font-bold text-blue-700 mb-4">Key Information:</h4>
                        <div class="space-y-3 text-sm text-base-content/80">
                            <div>
                                <p class="font-semibold text-blue-700">Age Requirement:</p>
                                <p>Must be 3-5 years old by June 1</p>
                            </div>
                            <div>
                                <p class="font-semibold text-blue-700">Application Fee:</p>
                                <p>₱500.00 (non-refundable)</p>
                            </div>
                            <div>
                                <p class="font-semibold text-blue-700">Interview:</p>
                                <p>Parents and student interview</p>
                            </div>
                            <div>
                                <p class="font-semibold text-blue-700">Processing Time:</p>
                                <p>5-7 business days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Elementary Admission -->
    <div class="card bg-green-50 border-t-4 border-green-500 shadow-md mb-8">
        <div class="card-body">
            <h3 class="card-title text-2xl text-green-700 flex items-center gap-2 mb-6">
                <span>📚</span> Elementary School Admission
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Requirements -->
                <div>
                    <h4 class="font-bold text-green-700 mb-4">Required Documents:</h4>
                    <ul class="space-y-2 text-base-content/80">
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">•</span>
                            <span>Birth Certificate (original + 2 copies)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">•</span>
                            <span>School Records/Report Card (previous school)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">•</span>
                            <span>Medical/Health Certificate</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">•</span>
                            <span>Parent's/Guardian's ID (photocopy)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">•</span>
                            <span>2x2 colored ID photo (4 pieces)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">•</span>
                            <span>Certificate of Good Moral Character</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-green-600 font-bold">•</span>
                            <span>Immunization records</span>
                        </li>
                    </ul>
                </div>

                <!-- Information -->
                <div class="card bg-white shadow-sm">
                    <div class="card-body">
                        <h4 class="font-bold text-green-700 mb-4">Key Information:</h4>
                        <div class="space-y-3 text-sm text-base-content/80">
                            <div>
                                <p class="font-semibold text-green-700">Grade Levels:</p>
                                <p>Grade 1-6</p>
                            </div>
                            <div>
                                <p class="font-semibold text-green-700">Application Fee:</p>
                                <p>₱750.00 (non-refundable)</p>
                            </div>
                            <div>
                                <p class="font-semibold text-green-700">Assessment:</p>
                                <p>Grade-level entrance exam</p>
                            </div>
                            <div>
                                <p class="font-semibold text-green-700">Processing Time:</p>
                                <p>7-10 business days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Junior High Admission -->
    <div class="card bg-yellow-50 border-t-4 border-yellow-500 shadow-md mb-8">
        <div class="card-body">
            <h3 class="card-title text-2xl text-yellow-700 flex items-center gap-2 mb-6">
                <span>📖</span> Junior High School Admission
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Requirements -->
                <div>
                    <h4 class="font-bold text-yellow-700 mb-4">Required Documents:</h4>
                    <ul class="space-y-2 text-base-content/80">
                        <li class="flex gap-2">
                            <span class="text-yellow-600 font-bold">•</span>
                            <span>Birth Certificate (original + 2 copies)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-yellow-600 font-bold">•</span>
                            <span>School Permanent Records (Form 138)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-yellow-600 font-bold">•</span>
                            <span>Medical/Health Certificate (current year)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-yellow-600 font-bold">•</span>
                            <span>Parent's/Guardian's ID (photocopy)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-yellow-600 font-bold">•</span>
                            <span>2x2 colored ID photo (4 pieces)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-yellow-600 font-bold">•</span>
                            <span>Certificate of Good Moral Character</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-yellow-600 font-bold">•</span>
                            <span>Entrance Exam Score or Documentation</span>
                        </li>
                    </ul>
                </div>

                <!-- Information -->
                <div class="card bg-white shadow-sm">
                    <div class="card-body">
                        <h4 class="font-bold text-yellow-700 mb-4">Key Information:</h4>
                        <div class="space-y-3 text-sm text-base-content/80">
                            <div>
                                <p class="font-semibold text-yellow-700">Grade Levels:</p>
                                <p>Grades 7-10</p>
                            </div>
                            <div>
                                <p class="font-semibold text-yellow-700">Application Fee:</p>
                                <p>₱1,000.00 (non-refundable)</p>
                            </div>
                            <div>
                                <p class="font-semibold text-yellow-700">Assessment:</p>
                                <p>SICAT Entrance Exam</p>
                            </div>
                            <div>
                                <p class="font-semibold text-yellow-700">Processing Time:</p>
                                <p>10-14 business days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Senior High Admission -->
    <div class="card bg-purple-50 border-t-4 border-purple-500 shadow-md mb-8">
        <div class="card-body">
            <h3 class="card-title text-2xl text-purple-700 flex items-center gap-2 mb-6">
                <span>🎓</span> Senior High School Admission
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Requirements -->
                <div>
                    <h4 class="font-bold text-purple-700 mb-4">Required Documents:</h4>
                    <ul class="space-y-2 text-base-content/80">
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">•</span>
                            <span>Birth Certificate (original + 2 copies)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">•</span>
                            <span>Official Grade 10 Report Card</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">•</span>
                            <span>Medical/Health Certificate</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">•</span>
                            <span>Parent's/Guardian's ID (photocopy)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">•</span>
                            <span>2x2 colored ID photo (4 pieces)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">•</span>
                            <span>Certificate of Good Moral Character</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-purple-600 font-bold">•</span>
                            <span>DepEd Form 137 (Permanent Record)</span>
                        </li>
                    </ul>
                </div>

                <!-- Information -->
                <div class="card bg-white shadow-sm">
                    <div class="card-body">
                        <h4 class="font-bold text-purple-700 mb-4">Key Information:</h4>
                        <div class="space-y-3 text-sm text-base-content/80">
                            <div>
                                <p class="font-semibold text-purple-700">Grade Levels:</p>
                                <p>Grades 11-12</p>
                            </div>
                            <div>
                                <p class="font-semibold text-purple-700">Application Fee:</p>
                                <p>₱1,200.00 (non-refundable)</p>
                            </div>
                            <div>
                                <p class="font-semibold text-purple-700">Assessment:</p>
                                <p>SICAT Entrance Exam & Interview</p>
                            </div>
                            <div>
                                <p class="font-semibold text-purple-700">Track Selection:</p>
                                <p>STEM, HUMSS, or TVL</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- College Admission -->
    <div class="card bg-orange-50 border-t-4 border-orange-500 shadow-md mb-12">
        <div class="card-body">
            <h3 class="card-title text-2xl text-orange-700 flex items-center gap-2 mb-6">
                <span>🏛️</span> College Admission
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Requirements -->
                <div>
                    <h4 class="font-bold text-orange-700 mb-4">Required Documents:</h4>
                    <ul class="space-y-2 text-base-content/80">
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>Birth Certificate (original + 2 copies)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>Senior High School Diploma or Form 137</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>Medical/Physical Exam Certificate</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>Parent's/Guardian's ID (photocopy)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>2x2 colored ID photo (6 pieces)</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>Certificate of Good Moral Character</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>NCAE/PAT Score or Equivalent</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-orange-600 font-bold">•</span>
                            <span>Program-specific documents (if required)</span>
                        </li>
                    </ul>
                </div>

                <!-- Information -->
                <div class="card bg-white shadow-sm">
                    <div class="card-body">
                        <h4 class="font-bold text-orange-700 mb-4">Key Information:</h4>
                        <div class="space-y-3 text-sm text-base-content/80">
                            <div>
                                <p class="font-semibold text-orange-700">Program Options:</p>
                                <p>6+ Bachelor's Degree Programs</p>
                            </div>
                            <div>
                                <p class="font-semibold text-orange-700">Application Fee:</p>
                                <p>₱2,000.00 (non-refundable)</p>
                            </div>
                            <div>
                                <p class="font-semibold text-orange-700">Assessment:</p>
                                <p>Entrance Exam & Personal Interview</p>
                            </div>
                            <div>
                                <p class="font-semibold text-orange-700">Processing Time:</p>
                                <p>14-21 business days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- How to Apply Section -->
    <div class="card bg-base-100 shadow-md mb-12">
        <div class="card-body">
            <h2 class="card-title text-2xl text-primary mb-6">How to Apply</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="step" style="--step-bg: hsl(var(--primary));">
                    <div class="step-content">
                        <p class="font-bold text-primary">Step 1</p>
                        <p class="text-sm text-base-content/70">Complete Application Form</p>
                    </div>
                </div>
                <div class="step" style="--step-bg: hsl(var(--primary));">
                    <div class="step-content">
                        <p class="font-bold text-primary">Step 2</p>
                        <p class="text-sm text-base-content/70">Submit Required Documents</p>
                    </div>
                </div>
                <div class="step" style="--step-bg: hsl(var(--primary));">
                    <div class="step-content">
                        <p class="font-bold text-primary">Step 3</p>
                        <p class="text-sm text-base-content/70">Take Entrance Examination</p>
                    </div>
                </div>
                <div class="step" style="--step-bg: hsl(var(--primary));">
                    <div class="step-content">
                        <p class="font-bold text-primary">Step 4</p>
                        <p class="text-sm text-base-content/70">Receive Admission Decision</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scholarships Section -->
    <div class="card bg-gradient-to-r from-success/10 to-info/10 border border-success shadow-md mb-12">
        <div class="card-body">
            <h2 class="card-title text-2xl text-success mb-6">Scholarship Opportunities</h2>
            <p class="text-base-content/80 mb-6">
                San Isidro College offers various scholarship programs for qualified and deserving students. We believe in making quality education accessible to all.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="card bg-white">
                    <div class="card-body">
                        <h3 class="card-title text-success text-lg">Academic Excellence</h3>
                        <p class="text-sm text-base-content/70">Full or partial scholarships based on academic performance</p>
                    </div>
                </div>
                <div class="card bg-white">
                    <div class="card-body">
                        <h3 class="card-title text-success text-lg">Tuition Discount</h3>
                        <p class="text-sm text-base-content/70">Need-based financial assistance for deserving families</p>
                    </div>
                </div>
                <div class="card bg-white">
                    <div class="card-body">
                        <h3 class="card-title text-success text-lg">Merit & Sports</h3>
                        <p class="text-sm text-base-content/70">Awards for athletic and extracurricular excellence</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Information -->
    <div class="card bg-base-100 shadow-md">
        <div class="card-body">
            <h2 class="card-title text-2xl text-primary mb-6">Contact the Admissions Office</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl mb-2">📞</div>
                    <p class="font-semibold text-base-content mb-1">Phone</p>
                    <p class="text-sm text-base-content/70">(555) 123-4567</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl mb-2">📧</div>
                    <p class="font-semibold text-base-content mb-1">Email</p>
                    <p class="text-sm text-base-content/70">admissions@sic.edu.ph</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl mb-2">📍</div>
                    <p class="font-semibold text-base-content mb-1">Address</p>
                    <p class="text-sm text-base-content/70">San Isidro, Malaybalay</p>
                </div>
                <div class="text-center">
                    <div class="text-3xl mb-2">🕐</div>
                    <p class="font-semibold text-base-content mb-1">Hours</p>
                    <p class="text-sm text-base-content/70">Mon-Fri 8AM-5PM</p>
                </div>
            </div>

            <div class="divider my-6"></div>

            <div class="text-center">
                <a href="/contact" class="btn btn-primary btn-lg">Get More Information</a>
            </div>
        </div>
    </div>

</div>

@endsection
