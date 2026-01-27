@extends('layouts.app')

@section('title', 'Inventory - TESLA')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="wrap">
            <div class="max-w-3xl">
                <h1 class="text-[48px] md:text-[64px] font-[900] tracking-[-.04em] text-[#0f1115] mb-4">
                    Available Inventory <span class="text-[#E31937]">•</span>
                </h1>
                <p class="text-[15px] md:text-[16px] text-black/60">
                    Explore our curated selection of <span class="text-[#E31937] font-[600]">premium Tesla vehicles</span> ready for delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- Inventory Grid -->
    <section class="bg-white pb-20">
        <div class="wrap">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Model S -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(227,25,55,0.2)] hover:border-[#E31937]/50 transition border-l-4 border-l-[#E31937]/40">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="{{ asset('images/tesla2.jpg') }}" alt="Tesla Model S" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla <span class="text-[#E31937]">Model S</span></div>
                        <div class="grid grid-cols-3 gap-3 mb-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">348mi</div>
                                <div class="text-[11px] text-black/45">Range</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">3.8s</div>
                                <div class="text-[11px] text-black/45">0-60 mph</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">149mph</div>
                                <div class="text-[11px] text-black/45">Top Speed</div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at <span class="text-[#E31937]">$79,990.00*</span></div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 hover:border-[#E31937]/50 transition">
                                Learn
                            </button>
                            @auth
                                <a href="{{ route('dashboard.orders') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Model Y -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(0,0,0,0.12)] transition">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="{{ asset('images/tesla1.jpg') }}" alt="Tesla Model Y" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla <span class="text-[#E31937]">Model Y</span></div>
                        <div class="grid grid-cols-3 gap-3 mb-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">358mi</div>
                                <div class="text-[11px] text-black/45">Range</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">4.2s</div>
                                <div class="text-[11px] text-black/45">0-60 mph</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">145mph</div>
                                <div class="text-[11px] text-black/45">Top Speed</div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at <span class="text-[#E31937]">$47,740.00*</span></div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 hover:border-[#E31937]/50 transition">
                                Learn
                            </button>
                            @auth
                                <a href="{{ route('dashboard.orders') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Model X Plaid -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(0,0,0,0.12)] transition">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?w=800&h=600&fit=crop&q=80&auto=format" alt="Tesla Model X Plaid" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla <span class="text-[#E31937]">Model X Plaid</span></div>
                        <div class="grid grid-cols-3 gap-3 mb-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">410mi</div>
                                <div class="text-[11px] text-black/45">Range</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">3.1s</div>
                                <div class="text-[11px] text-black/45">0-60 mph</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">130mph</div>
                                <div class="text-[11px] text-black/45">Top Speed</div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at <span class="text-[#E31937]">$94,990.00*</span></div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 hover:border-[#E31937]/50 transition">
                                Learn
                            </button>
                            @auth
                                <a href="{{ route('dashboard.orders') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>

                <!-- Model 3 -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(0,0,0,0.12)] transition">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?w=800&h=600&fit=crop&q=80&auto=format" alt="Tesla Model 3" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla <span class="text-[#E31937]">Model 3</span></div>
                        <div class="grid grid-cols-3 gap-3 mb-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">396mi</div>
                                <div class="text-[11px] text-black/45">Range</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">3.1s</div>
                                <div class="text-[11px] text-black/45">0-60 mph</div>
                            </div>
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">155mph</div>
                                <div class="text-[11px] text-black/45">Top Speed</div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at <span class="text-[#E31937]">$74,990.00*</span></div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 hover:border-[#E31937]/50 transition">
                                Learn
                            </button>
                            @auth
                                <a href="{{ route('dashboard.orders') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="flex-1 h-[34px] px-4 rounded-md text-white text-[12px] font-[800] hover:opacity-90 transition inline-flex items-center justify-center" style="background: #E31937;">
                                    Order
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
