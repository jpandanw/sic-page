@extends('templates.facade-template')

@section('body')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-base-100 to-base-200 px-4">
    <div class="w-full max-w-md">
        <!-- Logo/Branding -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-primary font-outfit">Create Account</h1>
            <p class="text-base-600 mt-2">Join San Isidro College Community</p>
        </div>

        <!-- Registration Card -->
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <!-- Fortify Registration Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name Field -->
                    <div class="form-control w-full mb-4">
                        <label class="label">
                            <span class="label-text font-semibold">Full Name</span>
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            autofocus
                            class="input input-bordered w-full @error('name') input-error @enderror"
                            placeholder="Enter your full name"
                        />
                        @error('name')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="form-control w-full mb-4">
                        <label class="label">
                            <span class="label-text font-semibold">Email Address</span>
                        </label>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            class="input input-bordered w-full @error('email') input-error @enderror"
                            placeholder="Enter your email"
                        />
                        @error('email')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-control w-full mb-4">
                        <label class="label">
                            <span class="label-text font-semibold">Password</span>
                        </label>
                        <input
                            type="password"
                            name="password"
                            required
                            autocomplete="new-password"
                            class="input input-bordered w-full @error('password') input-error @enderror"
                            placeholder="Create a strong password"
                        />
                        @error('password')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div class="form-control w-full mb-6">
                        <label class="label">
                            <span class="label-text font-semibold">Confirm Password</span>
                        </label>
                        <input
                            type="password"
                            name="password_confirmation"
                            required
                            autocomplete="new-password"
                            class="input input-bordered w-full @error('password_confirmation') input-error @enderror"
                            placeholder="Confirm your password"
                        />
                        @error('password_confirmation')
                            <label class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </label>
                        @enderror
                    </div>

                    <!-- Terms Checkbox -->
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()))
                        <div class="form-control mb-6">
                            <label class="label cursor-pointer gap-3">
                                <input
                                    type="checkbox"
                                    name="terms"
                                    class="checkbox checkbox-primary @error('terms') checkbox-error @enderror"
                                    required
                                />
                                <span class="label-text">I agree to the terms and conditions</span>
                            </label>
                            @error('terms')
                                <label class="label">
                                    <span class="label-text-alt text-error">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                    @endif

                    <!-- Register Button -->
                    <button
                        type="submit"
                        class="btn btn-primary w-full font-semibold mb-4"
                    >
                        Create Account
                    </button>

                    <!-- Login Link -->
                    <div class="text-center">
                        <p class="text-sm text-base-600">
                            Already have an account?
                            <a href="{{ route('login') }}" class="link link-primary font-semibold">
                                Sign in here
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="mt-8 text-center text-sm text-base-600">
            <p>Need help? <a href="/admission" class="link link-primary">Visit our admission page</a></p>
        </div>
    </div>
</div>
@endsection
