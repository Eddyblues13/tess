@extends('layouts.app')

@section('title', 'Inventory - TESLA')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="wrap">
            <div class="max-w-3xl">
                <h1 class="text-[48px] md:text-[64px] font-[900] tracking-[-.04em] text-[#0f1115] mb-4">
                    Available Inventory
                </h1>
                <p class="text-[15px] md:text-[16px] text-black/60">
                    Explore our curated selection of premium Tesla vehicles ready for delivery.
                </p>
            </div>
        </div>
    </section>

    <!-- Inventory Grid -->
    <section class="bg-white pb-20">
        <div class="wrap">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Model X -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(0,0,0,0.12)] transition">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="{{ asset('images/tesla-model-x.jpg') }}" alt="Tesla Model X" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla Model X</div>
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
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at $79,990.00*</div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition">
                                Learn
                            </button>
                            <button class="flex-1 h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition">
                                Order
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Model 3 -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(0,0,0,0.12)] transition">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="{{ asset('images/tesla-model-3.jpg') }}" alt="Tesla Model 3" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla Model 3</div>
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
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at $47,740.00*</div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition">
                                Learn
                            </button>
                            <button class="flex-1 h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition">
                                Order
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Model S -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(0,0,0,0.12)] transition">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="{{ asset('images/tesla-model-x.jpg') }}" alt="Tesla Model S" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla Model S</div>
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
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at $74,990.00*</div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition">
                                Learn
                            </button>
                            <button class="flex-1 h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition">
                                Order
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Model X Plaid -->
                <div class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:shadow-[0_15px_40px_rgba(0,0,0,0.12)] transition">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="{{ asset('images/tesla-model-3.jpg') }}" alt="Tesla Model X Plaid" class="w-full h-full object-cover" loading="lazy" />
                    </div>
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115] mb-3">Tesla Model X Plaid</div>
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
                            <div class="text-[14px] font-[900] text-[#0f1115]">Starting at $94,990.00*</div>
                            <div class="text-[12px] text-black/45">After Est. Gas Savings</div>
                        </div>
                        <div class="flex gap-3">
                            <button class="flex-1 h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition">
                                Learn
                            </button>
                            <button class="flex-1 h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition">
                                Order
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
