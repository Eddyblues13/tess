@extends('layouts.app')

@section('title', 'Stock Markets - TESLA')

@section('content')
    <!-- Hero Section -->
    <section class="bg-[#07090c] py-16">
        <div class="wrap">
            <div class="max-w-3xl">
                <h1 class="text-[48px] md:text-[64px] font-[900] tracking-[-.04em] text-white mb-4">
                    Stock Markets
                </h1>
                <p class="text-[15px] md:text-[16px] text-white/60">
                    Featured picks, top gainers, losers, and most active stocks.
                </p>
            </div>
        </div>
    </section>

    <!-- Stock Markets Grid -->
    <section class="bg-[#07090c] pb-20">
        <div class="wrap">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- Featured -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 overflow-hidden">
                    <div class="flex items-center justify-between px-5 py-4 text-[13px] font-[900] text-white/75">
                        <span>Featured</span>
                        <span class="text-white/40 font-[800]">See all</span>
                    </div>

                    <div class="flex items-center justify-between gap-3 px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center text-white/90 text-[13px] font-[900]">
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

                    <div class="flex items-center justify-between gap-3 px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center text-white/90 text-[12px] font-[900]">
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

                    <div class="flex items-center justify-between gap-3 px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center text-white/90 text-[12px] font-[900]">
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
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">TF</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">TMO</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+5.00%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">N</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">NVDA</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+4.94%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">P</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">PYPL</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+4.86%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">♥</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">CVS</div>
                        </div>
                        <div class="text-[12px] font-[900] text-emerald-400">+4.83%</div>
                    </div>
                </div>

                <!-- Top Losers -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 overflow-hidden">
                    <div class="px-5 py-4 text-[13px] font-[900] text-white/75">
                        Top Losers
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">H</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">HON</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.93%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">N</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">NEE</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.91%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">G</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">GS</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.90%</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">HD</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">HD</div>
                        </div>
                        <div class="text-[12px] font-[900] text-rose-400">-4.88%</div>
                    </div>
                </div>

                <!-- Most Active -->
                <div class="rounded-[18px] border border-white/10 bg-white/5 overflow-hidden">
                    <div class="px-5 py-4 text-[13px] font-[900] text-white/75">
                        Most Active
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">P</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">PYPL</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 98.3M</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">F</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">FTNT</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 97.2M</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">WF</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">WFC</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 95.3M</div>
                    </div>

                    <div class="flex items-center justify-between px-5 py-4 border-t border-white/7">
                        <div class="flex items-center gap-3">
                            <div class="w-[30px] h-[30px] rounded-[10px] border border-white/10 bg-black/20 grid place-items-center">
                                <span class="text-[12px] font-[900] text-white/85">A</span>
                            </div>
                            <div class="text-[13px] font-[900] text-white/90">ABNB</div>
                        </div>
                        <div class="text-[12px] font-[800] text-white/55">Vol 93.8M</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
