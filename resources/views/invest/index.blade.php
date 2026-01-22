@extends('layouts.app')

@section('title', 'Invest - TESLA')

@section('content')
    <!-- Hero Section -->
    <section class="bg-[#07090c] py-16">
        <div class="wrap">
            <div class="max-w-3xl">
                <h1 class="text-[48px] md:text-[64px] font-[900] tracking-[-.04em] text-white mb-4">
                    Automated Investments
                </h1>
                <p class="text-[15px] md:text-[16px] text-white/60">
                    Flexible plans, recurring contributions, and smart portfolio management.
                </p>
            </div>
        </div>
    </section>

    <!-- Investment Plans -->
    <section class="bg-[#07090c] pb-20">
        <div class="wrap">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Plan 1 -->
                <div class="glass bigCard">
                    <div class="label">Conservative</div>
                    <div class="big">Low Risk</div>
                    <div class="desc">Steady growth with minimal volatility. Perfect for long-term wealth building.</div>
                    <div class="mt-4">
                        <div class="text-[14px] font-[900] text-white/90">Expected Return: 5-7%</div>
                        <div class="text-[12px] text-white/45 mt-1">Annual basis</div>
                    </div>
                    <button class="btn outline mt-6 w-full">Start Plan</button>
                </div>

                <!-- Plan 2 -->
                <div class="glass bigCard">
                    <div class="label">Balanced</div>
                    <div class="big">Moderate Risk</div>
                    <div class="desc">A mix of stocks and bonds for steady growth with manageable risk.</div>
                    <div class="mt-4">
                        <div class="text-[14px] font-[900] text-white/90">Expected Return: 7-10%</div>
                        <div class="text-[12px] text-white/45 mt-1">Annual basis</div>
                    </div>
                    <button class="btn outline mt-6 w-full">Start Plan</button>
                </div>

                <!-- Plan 3 -->
                <div class="glass bigCard">
                    <div class="label">Aggressive</div>
                    <div class="big">High Growth</div>
                    <div class="desc">High-risk, high-reward strategy focused on maximum returns.</div>
                    <div class="mt-4">
                        <div class="text-[14px] font-[900] text-white/90">Expected Return: 10-15%</div>
                        <div class="text-[12px] text-white/45 mt-1">Annual basis</div>
                    </div>
                    <button class="btn primary mt-6 w-full">Start Plan</button>
                </div>
            </div>

            <!-- Features -->
            <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-xl border border-white/10 bg-black/20 grid place-items-center text-white/70">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 17l6-6 4 4 8-8" />
                            <path d="M21 7v6h-6" />
                        </svg>
                    </div>
                    <div class="text-[16px] font-[900] text-white mb-2">Automated</div>
                    <div class="text-[13px] text-white/60">Set it and forget it. Automatic rebalancing and contributions.</div>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-xl border border-white/10 bg-black/20 grid place-items-center text-white/70">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 12V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2" />
                            <path d="M21 12h-7a2 2 0 0 0 0 4h7" />
                        </svg>
                    </div>
                    <div class="text-[16px] font-[900] text-white mb-2">Flexible</div>
                    <div class="text-[13px] text-white/60">Adjust contributions, pause, or withdraw anytime.</div>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-xl border border-white/10 bg-black/20 grid place-items-center text-white/70">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21.2 15.9A9 9 0 1 1 12 3v9l9.2 3.9Z" />
                        </svg>
                    </div>
                    <div class="text-[16px] font-[900] text-white mb-2">Diversified</div>
                    <div class="text-[13px] text-white/60">Portfolio spread across multiple asset classes and sectors.</div>
                </div>
            </div>
        </div>
    </section>
@endsection
