@extends('layouts.app')

@section('title', 'Register - TESLA')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="wrap">
            <div class="max-w-md mx-auto">
                <h1 class="text-[48px] md:text-[64px] font-[900] tracking-[-.04em] text-[#0f1115] mb-4 text-center">
                    Create Account
                </h1>
                <p class="text-[15px] md:text-[16px] text-black/60 text-center mb-8">
                    Start your journey with automated investments, stock trading, and premium vehicles.
                </p>

                <!-- Register Form -->
                <div class="bg-white rounded-[18px] border border-black/10 p-8 shadow-[0_10px_30px_rgba(0,0,0,0.08)]">
                    @if ($errors->any())
                        <div class="mb-4 p-4 rounded-lg bg-red-50 border border-red-200">
                            <ul class="text-sm text-red-600 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register.post') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-[13px] font-[700] text-black/60 mb-2">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" class="w-full h-12 px-4 rounded-lg border border-black/10 bg-white text-[#0f1115] text-[14px] focus:outline-none focus:ring-2 focus:ring-black/20" required autofocus />
                        </div>

                        <div>
                            <label class="block text-[13px] font-[700] text-black/60 mb-2">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="your@email.com" class="w-full h-12 px-4 rounded-lg border border-black/10 bg-white text-[#0f1115] text-[14px] focus:outline-none focus:ring-2 focus:ring-black/20" required />
                        </div>

                        <div>
                            <label class="block text-[13px] font-[700] text-black/60 mb-2">Password</label>
                            <input type="password" name="password" placeholder="Create a strong password" class="w-full h-12 px-4 rounded-lg border border-black/10 bg-white text-[#0f1115] text-[14px] focus:outline-none focus:ring-2 focus:ring-black/20" required />
                        </div>

                        <div>
                            <label class="block text-[13px] font-[700] text-black/60 mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm your password" class="w-full h-12 px-4 rounded-lg border border-black/10 bg-white text-[#0f1115] text-[14px] focus:outline-none focus:ring-2 focus:ring-black/20" required />
                        </div>

                        <label class="flex items-start gap-2 cursor-pointer">
                            <input type="checkbox" class="mt-1 w-4 h-4 rounded border-black/20 text-black focus:ring-2 focus:ring-black/20" required />
                            <span class="text-[13px] text-black/60">I agree to the <a href="{{ route('terms') }}" class="font-[700] text-black hover:opacity-80 transition">Terms of Service</a> and <a href="{{ route('privacy') }}" class="font-[700] text-black hover:opacity-80 transition">Privacy Policy</a></span>
                        </label>

                        <button type="submit" class="w-full h-[44px] rounded-md bg-black text-white text-[13px] font-[900] hover:opacity-90 transition">
                            Create Account
                        </button>
                    </form>

                    <!-- Divider -->
                    <div class="relative my-8">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-black/10"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-black/40 text-[13px]">Or continue with</span>
                        </div>
                    </div>

                    <!-- Google Login -->
                    <button type="button" class="w-full h-[44px] rounded-md border border-black/15 bg-white text-[#0f1115] text-[13px] font-[900] hover:bg-black/5 transition flex items-center justify-center gap-3">
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Continue with Google
                    </button>

                    <!-- Sign In Link -->
                    <p class="mt-6 text-center text-[13px] text-black/60">
                        Already have an account? <a href="{{ route('login') }}" class="font-[700] text-black hover:opacity-80 transition">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
