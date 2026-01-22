@extends('layouts.app')

@section('title', 'TESLA - Invest. Trade. Drive.')

@section('content')

    <!-- HERO (THIS PART IS THE "FIRST TOP" YOU POINTED AT) -->
    <section class="hero">
        <div class="wrap heroInner">
            <div class="grid grid-cols-12 gap-6 items-start">
                <!-- LEFT -->
                <div class="col-span-12 lg:col-span-7">
                    <h1 class="h1">Invest. Trade. Drive.</h1>
                    <p class="lead">
                        All-in-one platform for crypto wallet funding, automated investments, live stocks, and premium
                        EV inventory.
                    </p>

                    <div class="btnRow">
                        <button class="btn primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 17l6-6 4 4 8-8" />
                                <path d="M21 7v6h-6" />
                            </svg>
                            Start Investing
                        </button>

                        <button class="btn outline">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 19V5" />
                                <path d="M4 19h16" />
                                <path d="M8 15l3-3 3 3 6-6" />
                            </svg>
                            Explore Stocks
                        </button>

                        <button class="btn outline">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 12h18" />
                                <path d="M6 12l3-7h6l3 7" />
                                <path d="M7 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                                <path d="M17 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                            </svg>
                            View Inventory
                        </button>
                    </div>

                    <!-- small 3 cards row -->
                    <div class="miniGrid">
                        <div class="glass soft miniCard">
                            <div class="miniIcon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M4 19V5" />
                                    <path d="M4 19h16" />
                                    <path d="M7 14l3-3 3 3 6-6" />
                                </svg>
                            </div>
                            <div class="miniTitle">Live Stocks</div>
                            <div class="miniWord">Realtime</div>
                        </div>

                        <div class="glass soft miniCard">
                            <div class="miniIcon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M20 7H4" />
                                    <path d="M20 12H4" />
                                    <path d="M20 17H4" />
                                </svg>
                            </div>
                            <div class="miniTitle">Wallet</div>
                            <div class="miniWord">Crypto</div>
                        </div>

                        <div class="glass soft miniCard">
                            <div class="miniIcon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M3 13l2-2 4 4L19 5l2 2-12 12-6-6Z" />
                                </svg>
                            </div>
                            <div class="miniTitle">EV Inventory</div>
                            <div class="miniWord">Premium</div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-span-12 lg:col-span-5">
                    <div class="rightGrid">
                        <div class="glass bigCard">
                            <div class="label">Investments</div>
                            <div class="big">Automated</div>
                            <div class="desc">Flexible plans, recurring contributions.</div>
                        </div>

                        <div class="glass bigCard">
                            <div class="label">Stocks</div>
                            <div class="big">Realtime</div>
                            <div class="desc">Quotes, news, and watchlists.</div>
                        </div>

                        <div class="glass bigCardTall">
                            <div class="label">Wallet</div>
                            <div class="big">Crypto</div>
                            <div class="desc">Deposit and withdraw easily.</div>
                        </div>

                        <div class="glass bigCardTall">
                            <div class="label">Marketplace</div>
                            <div class="big">Tesla</div>
                            <div class="desc">Curated EV selection.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick actions strip (dark, same glass style) -->
        <div class="wrap pt-20 pb-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- Wallet -->
                <div class="glass soft p-6 flex items-center justify-between min-h-[86px]">
                    <div>
                        <div class="text-[12px] font-[700] text-white/55 mb-1">Wallet</div>
                        <div class="text-[14px] font-[900] text-white/90">Fund or withdraw</div>
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl border border-white/10 bg-black/20 grid place-items-center text-white/70">
                        <!-- wallet icon -->
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M21 12V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2" />
                            <path d="M21 12h-7a2 2 0 0 0 0 4h7" />
                        </svg>
                    </div>
                </div>

                <!-- Investments -->
                <div class="glass soft p-6 flex items-center justify-between min-h-[86px]">
                    <div>
                        <div class="text-[12px] font-[700] text-white/55 mb-1">Investments</div>
                        <div class="text-[14px] font-[900] text-white/90">Create a plan</div>
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl border border-white/10 bg-black/20 grid place-items-center text-white/70">
                        <!-- trend icon -->
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M3 17l6-6 4 4 8-8" />
                            <path d="M21 7v6h-6" />
                        </svg>
                    </div>
                </div>

                <!-- Stocks -->
                <div class="glass soft p-6 flex items-center justify-between min-h-[86px]">
                    <div>
                        <div class="text-[12px] font-[700] text-white/55 mb-1">Stocks</div>
                        <div class="text-[14px] font-[900] text-white/90">Market overview</div>
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl border border-white/10 bg-black/20 grid place-items-center text-white/70">
                        <!-- chart icon -->
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M4 19V5" />
                            <path d="M4 19h16" />
                            <path d="M8 15V9" />
                            <path d="M12 15V7" />
                            <path d="M16 15v-5" />
                        </svg>
                    </div>
                </div>

                <!-- Portfolio -->
                <div class="glass soft p-6 flex items-center justify-between min-h-[86px]">
                    <div>
                        <div class="text-[12px] font-[700] text-white/55 mb-1">Portfolio</div>
                        <div class="text-[14px] font-[900] text-white/90">Track performance</div>
                    </div>
                    <div
                        class="w-10 h-10 rounded-xl border border-white/10 bg-black/20 grid place-items-center text-white/70">
                        <!-- pie icon -->
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2">
                            <path d="M21.2 15.9A9 9 0 1 1 12 3v9l9.2 3.9Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- White inventory section (exact structure like screenshot) -->
    <section class="bg-white">
        <div class="wrap py-14">
            <div class="flex items-start justify-between gap-6">
                <div>
                    <h3 class="text-[26px] font-[900] tracking-[-.02em] text-[#0f1115]">
                        Available Inventory
                    </h3>
                    <p class="mt-2 text-[13px] text-black/50">
                        Explore a curated selection ready for delivery.
                    </p>
                </div>

                <a href="{{ route('inventory') }}" class="text-[13px] font-[700] text-black/50 hover:opacity-80 mt-2">
                    View all
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-7">
                <!-- Card 1 -->
                <div
                    class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)]">
                    <!-- Image -->
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="https://images.unsplash.com/photo-1617531653332-bd46c24f2068?w=800&h=600&fit=crop&q=80&auto=format"
                            alt="Tesla Model S" class="w-full h-full object-cover" loading="lazy" />
                    </div>

                    <!-- Content -->
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115]">
                            Tesla Model S
                        </div>

                        <!-- specs line -->
                        <div class="mt-3 grid grid-cols-3 gap-3">
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

                        <!-- price + buttons -->
                        <div class="mt-5 flex items-end justify-between gap-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">
                                    Starting at $79,990.00*
                                </div>
                                <div class="text-[12px] text-black/45">
                                    After Est. Gas Savings
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <button
                                    class="h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition cursor-pointer">
                                    Learn
                                </button>
                                @auth
                                    <a href="{{ route('dashboard.orders') }}"
                                        class="h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition cursor-pointer inline-flex items-center justify-center">
                                        Order
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition cursor-pointer inline-flex items-center justify-center">
                                        Order
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)]">
                    <!-- Image -->
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="{{asset('images/tess.avif')}}"
                            alt="Tesla Model Y" class="w-full h-full object-cover" loading="lazy" />
                    </div>

                    <!-- Content -->
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115]">
                            Tesla Model Y
                        </div>

                        <!-- specs line -->
                        <div class="mt-3 grid grid-cols-3 gap-3">
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

                        <!-- price + buttons -->
                        <div class="mt-5 flex items-end justify-between gap-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">
                                    Starting at $47,740.00*
                                </div>
                                <div class="text-[12px] text-black/45">
                                    After Est. Gas Savings
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <button
                                    class="h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition cursor-pointer">
                                    Learn
                                </button>
                                @auth
                                    <a href="{{ route('dashboard.orders') }}"
                                        class="h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition cursor-pointer inline-flex items-center justify-center">
                                        Order
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition cursor-pointer inline-flex items-center justify-center">
                                        Order
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===================================================== -->
    <!-- BIG INVENTORY CARD STRIP (like your screenshot) -->
    <!-- Put this RIGHT UNDER the "Available Inventory" section -->
    <!-- ===================================================== -->

    <section class="bg-white">
        <div class="wrap pb-16">
            <!-- Cards row -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div
                    class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)]">
                    <!-- Image -->
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="https://images.unsplash.com/photo-1560958089-b8a1929cea89?w=800&h=600&fit=crop&q=80&auto=format"
                            alt="Tesla Model X Plaid" class="w-full h-full object-cover" loading="lazy" />
                    </div>

                    <!-- Content -->
                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115]">
                            Tesla Model X Plaid
                        </div>

                        <!-- specs line -->
                        <div class="mt-3 grid grid-cols-3 gap-3">
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

                        <!-- price + buttons -->
                        <div class="mt-5 flex items-end justify-between gap-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">
                                    Starting at $94,990.00*
                                </div>
                                <div class="text-[12px] text-black/45">
                                    After Est. Gas Savings
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <button
                                    class="h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition">
                                    Learn
                                </button>
                                @auth
                                    <a href="{{ route('dashboard.orders') }}"
                                        class="h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition cursor-pointer inline-flex items-center justify-center">
                                        Order
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition cursor-pointer inline-flex items-center justify-center">
                                        Order
                                    </a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 (optional second card to match the top row in your screenshot) -->
                <div
                    class="rounded-[18px] border border-black/10 bg-white overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.08)]">
                    <div class="h-[300px] bg-[#f3f4f6]">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?w=800&h=600&fit=crop&q=80&auto=format"
                            alt="Tesla Model 3" class="w-full h-full object-cover" loading="lazy" />
                    </div>

                    <div class="p-5">
                        <div class="text-[18px] font-[900] tracking-[-.01em] text-[#0f1115]">
                            Tesla Model 3
                        </div>

                        <div class="mt-3 grid grid-cols-3 gap-3">
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

                        <div class="mt-5 flex items-end justify-between gap-4">
                            <div>
                                <div class="text-[14px] font-[900] text-[#0f1115]">
                                    Starting at $74,990.00*
                                </div>
                                <div class="text-[12px] text-black/45">
                                    After Est. Gas Savings
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <button
                                    class="h-[34px] px-4 rounded-md border border-black/15 bg-white text-[#0f1115] text-[12px] font-[800] hover:bg-black/5 transition">
                                    Learn
                                </button>
                                <button
                                    class="h-[34px] px-4 rounded-md bg-black text-white text-[12px] font-[800] hover:opacity-90 transition">
                                    Order
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NOTE: if you only want ONE big card (like your screenshot crop), delete Card 2 -->
        </div>
    </section>
    <!-- ===================================================== -->
    <!-- STOCK MARKETS (exact block like your screenshot) -->
    <!-- Put this RIGHT UNDER the big inventory cards section -->
    <!-- ===================================================== -->

    <section id="stocks" class="bg-[#07090c] py-16 scroll-mt-20">
        <div class="wrap">
            <!-- Header -->
            <div class="flex items-start justify-between gap-6">
                <div>
                    <h2 class="text-[28px] font-[900] tracking-[-.02em] text-white">
                        Stock Markets
                    </h2>
                    <p class="mt-2 text-[13px] text-white/45">
                        Featured picks, top gainers, losers, and most active.
                    </p>
                </div>
                <a href="{{ route('stocks') }}" class="text-[13px] font-[700] text-white/60 hover:opacity-80 mt-2">
                    Open markets
                </a>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 mt-8">
                <!-- Featured -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 overflow-hidden">
                    <div class="flex items-center justify-between px-5 py-4 text-[13px] font-[900] text-white/75">
                        <span>Featured</span>
                        <span class="text-white/40 font-[800]">See all</span>
                    </div>

                    <!-- row -->
                    <div class="flex items-center justify-between gap-3 px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3 min-w-0">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center text-white/90 text-[13px] font-[900]">
                                
                            </div>
                            <div class="min-w-0">
                                <div class="text-[13px] font-[900] text-white/90 truncate">
                                    AAPL <span class="text-white/40 font-[700]">· Apple Inc.</span>
                                </div>
                                <div class="text-[12px] text-white/40">Technology</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-[14px] font-[900] text-white/90">$229.35</div>
                            <div class="text-[12px] font-[900] text-emerald-400">+2.91 (+1.27%)</div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="flex items-center justify-between gap-3 px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3 min-w-0">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center text-white/90 text-[12px] font-[900]">
                                ▦
                            </div>
                            <div class="min-w-0">
                                <div class="text-[13px] font-[900] text-white/90 truncate">
                                    MSFT <span class="text-white/40 font-[700]">· Microsoft Corporation</span>
                                </div>
                                <div class="text-[12px] text-white/40">Technology</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-[14px] font-[900] text-white/90">$522.04</div>
                            <div class="text-[12px] font-[900] text-rose-400">-10.91 (-2.09%)</div>
                        </div>
                    </div>

                    <!-- row -->
                    <div class="flex items-center justify-between gap-3 px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3 min-w-0">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center text-white/90 text-[12px] font-[900]">
                                G
                            </div>
                            <div class="min-w-0">
                                <div class="text-[13px] font-[900] text-white/90 truncate">
                                    GOOGL <span class="text-white/40 font-[700]">· Alphabet Inc.</span>
                                </div>
                                <div class="text-[12px] text-white/40">Technology</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-[14px] font-[900] text-white/90">$201.42</div>
                            <div class="text-[12px] font-[900] text-rose-400">-3.54 (-1.76%)</div>
                        </div>
                    </div>
                </div>

                <!-- Top Gainers -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 overflow-hidden">
                    <div class="px-5 py-4 text-[13px] font-[900] text-white/75">
                        Top Gainers
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">TF</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">TMO</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+5.00%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">N</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">NVDA</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+4.94%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">P</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">PYPL</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+4.86%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">♥</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">CVS</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+4.83%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">V</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">VZ</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+4.78%</div>
                    </div>
                </div>

                <!-- Top Losers -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 overflow-hidden">
                    <div class="px-5 py-4 text-[13px] font-[900] text-white/75">
                        Top Losers
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">H</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">HON</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.93%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">N</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">NEE</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.91%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">G</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">GS</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.90%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">HD</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">HD</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.88%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">D</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">DIS</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.66%</div>
                    </div>
                </div>

                <!-- Most Active -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 overflow-hidden">
                    <div class="px-5 py-4 text-[13px] font-[900] text-white/75">
                        Most Active
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">P</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">PYPL</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 98.3M</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">F</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">FTNT</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 97.2M</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">WF</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">WFC</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 95.3M</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">A</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">ABNB</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 93.8M</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">J</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">JPM</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 93.7M</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================================================== -->
    <!-- MARKET NEWS (matches your screenshot layout) -->
    <!-- Put this RIGHT UNDER the Stock Markets section -->
    <!-- ===================================================== -->

    <section id="portfolio" class="bg-[#0a0f17] py-16 scroll-mt-20">
        <div class="wrap">
            <!-- Header -->
            <div class="flex items-start justify-between gap-6">
                <div>
                    <h2 class="text-[28px] font-[900] tracking-[-.02em] text-white">
                        Market News
                    </h2>
                    <p class="mt-2 text-[13px] text-white/45">
                        Latest headlines impacting your watchlist.
                    </p>
                </div>
                <a href="#" class="text-[13px] font-[700] text-white/60 hover:opacity-80 mt-2">
                    View stocks
                </a>
            </div>

            <!-- News cards grid (2 rows x 3 columns on desktop) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                <!-- Card 1 -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 p-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-[52px] h-[52px] rounded-[14px] border border-white/10 bg-orange-500/90 grid place-items-center overflow-hidden">
                            <span class="text-white font-[900] text-[12px]">SA</span>
                        </div>

                        <div class="min-w-0">
                            <div class="flex items-center gap-2 text-[12px] font-[800] text-white/55">
                                <span class="text-white/80 font-[900]">AAPL</span>
                                <span>SeekingAlpha</span>
                                <span class="text-white/35">•</span>
                                <span>2 months ago</span>
                            </div>

                            <div class="mt-2 text-[14px] font-[900] text-white/90 leading-snug line-clamp-2">
                                AMC, Cisco Set To Report Earnings As Investors Watch Out For Core...
                            </div>

                            <div class="mt-2 text-[12.5px] text-white/45 leading-relaxed line-clamp-2">
                                Stay informed with Seeking Alpha's Wall Street Week Ahead - your guide to key...
                            </div>

                            <div class="mt-4 text-[12px] font-[900] text-emerald-400">
                                Sentiment: Very Positive
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 p-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-[52px] h-[52px] rounded-[14px] border border-white/10 bg-white/10 overflow-hidden">
                            <img src="{{ asset('images/news-1.jpg') }}"
                                alt="" class="w-full h-full object-cover" />
                        </div>

                        <div class="min-w-0">
                            <div class="flex items-center gap-2 text-[12px] font-[800] text-white/55">
                                <span class="text-white/80 font-[900]">JPM</span>
                                <span>SeekingAlpha</span>
                                <span class="text-white/35">•</span>
                                <span>2 months ago</span>
                            </div>

                            <div class="mt-2 text-[14px] font-[900] text-white/90 leading-snug line-clamp-2">
                                How I've Built A Monster Passive Income Portfolio (And What I'm...
                            </div>

                            <div class="mt-2 text-[12.5px] text-white/45 leading-relaxed line-clamp-2">
                                Read about how to grow resilient passive income with a balanced dividend growth...
                            </div>

                            <div class="mt-4 text-[12px] font-[900] text-emerald-400">
                                Sentiment: Very Positive
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 p-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-[52px] h-[52px] rounded-[14px] border border-white/10 bg-purple-500/20 grid place-items-center overflow-hidden">
                            <span class="text-purple-400 font-[900] text-[22px]">!</span>
                        </div>

                        <div class="min-w-0">
                            <div class="flex items-center gap-2 text-[12px] font-[800] text-white/55">
                                <span class="text-white/80 font-[900]">AMZN</span>
                                <span>Yahoo</span>
                                <span class="text-white/35">•</span>
                                <span>2 months ago</span>
                            </div>

                            <div class="mt-2 text-[14px] font-[900] text-white/90 leading-snug line-clamp-2">
                                What Amazon's Latest Earnings Mean for Long-Term Investors
                            </div>

                            <div class="mt-2 text-[12.5px] text-white/45 leading-relaxed line-clamp-2">
                                It's important for investors to look beyond the market's immediate reaction.
                            </div>

                            <div class="mt-4 text-[12px] font-[900] text-emerald-400">
                                Sentiment: Very Positive
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 p-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-[52px] h-[52px] rounded-[14px] border border-white/10 bg-white/10 overflow-hidden">
                            <img src="{{ asset('images/news-2.jpg') }}"
                                alt="" class="w-full h-full object-cover" />
                        </div>

                        <div class="min-w-0">
                            <div class="flex items-center gap-2 text-[12px] font-[800] text-white/55">
                                <span class="text-white/80 font-[900]">META</span>
                                <span>SeekingAlpha</span>
                                <span class="text-white/35">•</span>
                                <span>2 months ago</span>
                            </div>

                            <div class="mt-2 text-[14px] font-[900] text-white/90 leading-snug line-clamp-2">
                                Is It Too Late To Buy Technology?
                            </div>

                            <div class="mt-2 text-[12.5px] text-white/45 leading-relaxed line-clamp-2">
                                Of the 15 sectors covered in reports by ValuEngine, the technology sector ranks...
                            </div>

                            <div class="mt-4 text-[12px] font-[900] text-white/35">
                                Sentiment: Neutral
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 p-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-[52px] h-[52px] rounded-[14px] border border-white/10 bg-white/10 overflow-hidden">
                            <img src="{{ asset('images/news-3.jpg') }}"
                                alt="" class="w-full h-full object-cover" />
                        </div>

                        <div class="min-w-0">
                            <div class="flex items-center gap-2 text-[12px] font-[800] text-white/55">
                                <span class="text-white/80 font-[900]">AMZN</span>
                                <span>SeekingAlpha</span>
                                <span class="text-white/35">•</span>
                                <span>2 months ago</span>
                            </div>

                            <div class="mt-2 text-[14px] font-[900] text-white/90 leading-snug line-clamp-2">
                                Is It Too Late To Buy Technology?
                            </div>

                            <div class="mt-2 text-[12.5px] text-white/45 leading-relaxed line-clamp-2">
                                Of the 15 sectors covered in reports by ValuEngine, the technology sector ranks...
                            </div>

                            <div class="mt-4 text-[12px] font-[900] text-white/35">
                                Sentiment: Neutral
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 p-5">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-[52px] h-[52px] rounded-[14px] border border-white/10 bg-white/10 overflow-hidden">
                            <img src="{{ asset('images/news-4.jpg') }}"
                                alt="" class="w-full h-full object-cover" />
                        </div>

                        <div class="min-w-0">
                            <div class="flex items-center gap-2 text-[12px] font-[800] text-white/55">
                                <span class="text-white/80 font-[900]">NVDA</span>
                                <span>SeekingAlpha</span>
                                <span class="text-white/35">•</span>
                                <span>2 months ago</span>
                            </div>

                            <div class="mt-2 text-[14px] font-[900] text-white/90 leading-snug line-clamp-2">
                                Is It Too Late To Buy Technology?
                            </div>

                            <div class="mt-2 text-[12.5px] text-white/45 leading-relaxed line-clamp-2">
                                Of the 15 sectors covered in reports by ValuEngine, the technology sector ranks...
                            </div>

                            <div class="mt-4 text-[12px] font-[900] text-white/35">
                                Sentiment: Neutral
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===================================================== -->
    <!-- CTA BANNER: "Ready to build your portfolio?" (like screenshot) -->
    <!-- Put this RIGHT UNDER the Market News section -->
    <!-- ===================================================== -->

    <section class="bg-white">
        <!-- Top white spacing band like screenshot -->
        <div class="h-20 bg-white"></div>

        <!-- Dark CTA strip -->
        <div class="bg-[#0a0f17]">
            <div class="wrap py-20">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-[28px] md:text-[32px] font-[900] tracking-[-.02em] text-white">
                        Ready to build your portfolio?
                    </h2>

                    <p class="mt-3 text-[14px] md:text-[15px] text-white/55">
                        Create an investment plan, follow stocks, and shop inventory in one place.
                    </p>

                    <div class="mt-8 flex items-center justify-center gap-4">
                        <a href="{{ route('register') }}" class="h-[44px] px-8 rounded-md bg-white text-[#0f1115] text-[13px] font-[900]
                     border border-black/10 hover:opacity-90 transition cursor-pointer flex items-center justify-center">
                            Get Started
                        </a>

                        <a href="{{ route('login') }}" class="h-[44px] px-8 rounded-md bg-transparent text-white text-[13px] font-[900]
                     border border-white/20 hover:bg-white/5 transition cursor-pointer flex items-center justify-center">
                            Sign In
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom white spacing band like screenshot -->
        <div class="h-20 bg-white"></div>
    </section>
@endsection
