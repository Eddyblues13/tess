@extends('layouts.app')

@section('title', 'Admin Login - TESLA')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="wrap">
            <div class="max-w-md mx-auto">
                <h1 class="text-[48px] md:text-[64px] font-[900] tracking-[-.04em] text-[#0f1115] mb-4 text-center">
                    Admin Sign In
                </h1>
                <p class="text-[15px] md:text-[16px] text-black/60 text-center mb-8">
                    Access the admin dashboard to manage the platform.
                </p>

                <!-- Login Form -->
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

                    <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-[13px] font-[700] text-black/60 mb-2">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@email.com" class="w-full h-12 px-4 rounded-lg border border-black/10 bg-white text-[#0f1115] text-[14px] focus:outline-none focus:ring-2 focus:ring-black/20" required autofocus />
                        </div>

                        <div>
                            <label class="block text-[13px] font-[700] text-black/60 mb-2">Password</label>
                            <input type="password" name="password" placeholder="Enter your password" class="w-full h-12 px-4 rounded-lg border border-black/10 bg-white text-[#0f1115] text-[14px] focus:outline-none focus:ring-2 focus:ring-black/20" required />
                        </div>

                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="checkbox" name="remember" class="w-4 h-4 rounded border-black/20 text-black focus:ring-2 focus:ring-black/20" />
                                <span class="text-[13px] text-black/60">Remember me</span>
                            </label>
                            <a href="#" class="text-[13px] font-[700] text-black/60 hover:text-black transition">Forgot password?</a>
                        </div>

                        <button type="submit" class="w-full h-[44px] rounded-md bg-black text-white text-[13px] font-[900] hover:opacity-90 transition">
                            Sign In
                        </button>
                    </form>

                    <!-- Back to Home -->
                    <div class="mt-6 text-center">
                        <a href="{{ route('home') }}" class="text-[13px] text-black/60 hover:text-black transition">
                            ← Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
