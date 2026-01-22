@extends('layouts.dashboard')

@section('title', 'TESLA Dashboard')
@section('topTitle', 'Dashboard')

@section('content')
<div class="wrap" id="dashboard">
    <!-- Hero / Welcome -->
    <div class="surface">
                    <div class="heroCard">
                        <div class="heroText">
                            <h3>Welcome back, {{ $user?->name ?? 'Investor' }}</h3>
                            <p>Track your investments, manage your portfolio, and explore opportunities.</p>
                        </div>

                        <div class="balanceBox">
                            <div class="balanceTop">
                                <span>Available Balance</span>
                                <span
                                    class="inline-flex w-8 h-8 rounded-xl border border-white/10 bg-black/20 items-center justify-center">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        style="color:rgba(255,255,255,.85)" stroke-width="2">
                                        <path
                                            d="M21 12V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2" />
                                        <path d="M21 12h-7a2 2 0 0 0 0 4h7" />
                                    </svg>
                                </span>
                            </div>
                            <div class="balanceAmt">
                                ${{ number_format($dashboardStats['available_balance'] ?? 0, 2) }}
                            </div>
                            <div class="balanceBtns">
                                <a href="{{ route('dashboard.wallet.deposit') }}" class="sbtn" style="text-decoration: none; display: inline-block;">+ Deposit</a>
                                <a href="{{ route('dashboard.wallet.withdraw') }}" class="sbtn ghost" style="text-decoration: none; display: inline-block;">â€” Withdraw</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats (white cards) -->
                <div class="statGrid">
                    <div class="stat">
                        <div>
                            <small>Portfolio Value</small>
                            <strong>${{ number_format($dashboardStats['portfolio_value'] ?? 0, 0) }}</strong>
                            <div class="sub up">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M3 17l6-6 4 4 8-8" />
                                    <path d="M21 7v6h-6" />
                                </svg>
                                +11.1% this month
                            </div>
                        </div>
                        <div class="chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                stroke-width="2">
                                <path d="M3 17l6-6 4 4 8-8" />
                                <path d="M21 7v6h-6" />
                            </svg>
                        </div>
                    </div>

                    <div class="stat">
                        <div>
                            <small>Investments</small>
                            <strong>${{ number_format($dashboardStats['investments_value'] ?? 0, 0) }}</strong>
                            <div class="sub" style="color:#2563eb;">
                                2 active investments
                            </div>
                        </div>
                        <div class="chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb"
                                stroke-width="2">
                                <path d="M12 8v4l3 3" />
                                <path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                        </div>
                    </div>

                    <div class="stat">
                        <div>
                            <small>Stock Holdings</small>
                            <strong>${{ number_format($dashboardStats['stock_holdings_value'] ?? 0, 0) }}</strong>
                            <div class="sub" style="color:#7c3aed;">
                                2 stock positions
                            </div>
                        </div>
                        <div class="chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#7c3aed"
                                stroke-width="2">
                                <path d="M4 19V5" />
                                <path d="M4 19h16" />
                                <path d="M8 15V9" />
                                <path d="M12 15V7" />
                                <path d="M16 15v-5" />
                            </svg>
                        </div>
                    </div>

                    <div class="stat">
                        <div>
                            <small>Tesla Vehicles</small>
                            <strong>{{ $dashboardStats['tesla_vehicles_count'] ?? 0 }}</strong>
                            <div class="sub" style="color:#ef4444;">
                                Electric fleet
                            </div>
                        </div>
                        <div class="chip">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ef4444"
                                stroke-width="2">
                                <path d="M3 12h18" />
                                <path d="M6 12l3-7h6l3 7" />
                                <path d="M7 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                                <path d="M17 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Quick actions -->
                <div class="quickGrid">
                    <div class="quick">
                        <div>
                            <h4>Browse Cars</h4>
                            <p>Explore our inventory</p>
                            <a href="{{ route('dashboard.inventory') }}" style="color:#2563eb;">View Inventory <span>â†’</span></a>
                        </div>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="2"
                            style="opacity:.55">
                            <path d="M3 12h18" />
                            <path d="M6 12l3-7h6l3 7" />
                            <path d="M7 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                            <path d="M17 19a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" />
                        </svg>
                    </div>

                    <div class="quick">
                        <div>
                            <h4>Investments</h4>
                            <p>Grow your wealth</p>
                            <a href="{{ route('dashboard.investments') }}" style="color:#10b981;">Start Investing <span>â†’</span></a>
                        </div>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2"
                            style="opacity:.65">
                            <path d="M3 17l6-6 4 4 8-8" />
                            <path d="M21 7v6h-6" />
                        </svg>
                    </div>

                    <div class="quick">
                        <div>
                            <h4>Stocks</h4>
                            <p>Trade individual stocks</p>
                            <a href="#stocks" style="color:#7c3aed;">Trade Stocks <span>â†’</span></a>
                        </div>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#7c3aed" stroke-width="2"
                            style="opacity:.65">
                            <path d="M4 19V5" />
                            <path d="M4 19h16" />
                            <path d="M8 15V9" />
                            <path d="M12 15V7" />
                            <path d="M16 15v-5" />
                        </svg>
                    </div>

                    <div class="quick">
                        <div>
                            <h4>Portfolio</h4>
                            <p>View your holdings</p>
                            <a href="{{ route('dashboard.portfolio') }}" style="color:#f59e0b;">View Portfolio <span>â†’</span></a>
                        </div>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2"
                            style="opacity:.65">
                            <path d="M7 7h10v10H7z" />
                            <path d="M4 10V4h6" />
                            <path d="M20 14v6h-6" />
                        </svg>
                    </div>
                </div>

                <!-- Lower panels -->
                <div class="lowerGrid">
                    <!-- Recent Orders -->
                    <div class="whitePanel">
                        <div class="panelHead">
                            <div>
                                <h5>Recent Orders</h5>
                                <small>Your latest Tesla purchases</small>
                            </div>
                            <a class="viewAll" href="{{ route('dashboard.orders') }}">
                                View All <span>â†’</span>
                            </a>
                        </div>

                        @forelse ($recentOrders as $order)
                            <div class="orderRow">
                                <div class="orderLeft">
                                    <div class="thumb">
                                        @if($order->car && $order->car->image_url)
                                            <img src="{{ $order->car->image_url }}" alt="{{ $order->car->name }}" style="width:100%;height:100%;object-fit:cover;" />
                                        @endif
                                    </div>
                                    <div class="min-w-0">
                                        <div class="orderTitle">{{ $order->car?->name ?? 'Tesla Vehicle' }}</div>
                                        <div class="orderMeta">
                                            {{ $order->car?->year }} {{ $order->car?->model }}
                                            @if($order->car?->variant)
                                                · {{ $order->car->variant }}
                                            @endif
                                            · {{ $order->created_at->format('M d, Y') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="orderRight">
                                    <div class="price">
                                        ${{ number_format($order->total_price, 2) }}
                                    </div>
                                    <span class="status ok">{{ $order->status }}</span>
                                </div>
                            </div>
                        @empty
                            <div style="padding: 20px; font-size: 13px; color: #6b7280;">
                                You have no recent orders yet.
                            </div>
                        @endforelse
                    </div>

                    <!-- Market Overview -->
                    <div class="whitePanel">
                        <div class="panelHead">
                            <div>
                                <h5>Market Overview</h5>
                                <small>Live market data</small>
                            </div>
                            <a class="viewAll" href="{{ route('dashboard.stocks') }}">
                                View All <span>â†’</span>
                            </a>
                        </div>

                        @forelse ($topStocks as $stock)
                            @php
                                $initials = strtoupper(substr($stock->ticker, 0, 2));
                                $colors = [
                                    ['bg' => '#fee2e2', 'text' => '#dc2626'],
                                    ['bg' => '#dcfce7', 'text' => '#16a34a'],
                                    ['bg' => '#dbeafe', 'text' => '#2563eb'],
                                    ['bg' => '#fef3c7', 'text' => '#d97706'],
                                    ['bg' => '#e9d5ff', 'text' => '#7c3aed'],
                                ];
                                $colorIndex = $loop->index % count($colors);
                                $color = $colors[$colorIndex];
                                $changeColor = $stock->change_percent >= 0 ? '#10b981' : '#ef4444';
                            @endphp
                            <div class="mItem">
                                <div class="mLeft">
                                    <div class="logo" style="background:{{ $color['bg'] }};color:{{ $color['text'] }};">
                                        {{ $initials }}
                                    </div>
                                    <div class="min-w-0">
                                        <div class="mName">{{ $stock->name }}</div>
                                        <div class="mTicker">{{ $stock->ticker }}</div>
                                    </div>
                                </div>
                                <div class="mRight">
                                    <div class="mPrice">${{ number_format($stock->price, 2) }}</div>
                                    <div class="mChange" style="color:{{ $changeColor }};">
                                        {{ $stock->change_percent >= 0 ? '+' : '' }}{{ number_format($stock->change_percent, 2) }}%
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div style="padding: 20px; font-size: 13px; color: #6b7280;">
                                No market data available.
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Stock Market Performance (chart) -->
                <div class="chartWrap">
                    <div class="panelHead" style="border-bottom:1px solid rgba(0,0,0,.06);">
                        <div>
                            <h5>Stock Market Performance</h5>
                            <small>Top stocks over the last 30 days</small>
                        </div>

                        <div class="legend">
                            <span><i class="dotc" style="background:var(--blue)"></i>PYPL</span>
                            <span><i class="dotc" style="background:var(--cyan)"></i>FTNT</span>
                            <span><i class="dotc" style="background:var(--amber)"></i>WFC</span>
                            <span><i class="dotc" style="background:var(--red)"></i>ABNB</span>
                            <span><i class="dotc" style="background:var(--violet)"></i>JPM</span>
                        </div>
                    </div>

                    <div class="chartBody">
                        <!-- simple SVG chart (clean + looks like the screenshot vibe) -->
                        <svg viewBox="0 0 900 220" width="100%" height="220" role="img" aria-label="Performance chart" style="max-width: 100%; height: auto;">
                            <!-- grid -->
                            <g opacity="0.12" stroke="#111">
                                <line x1="40" y1="20" x2="40" y2="200" />
                                <line x1="40" y1="200" x2="880" y2="200" />
                                <line x1="40" y1="160" x2="880" y2="160" />
                                <line x1="40" y1="120" x2="880" y2="120" />
                                <line x1="40" y1="80" x2="880" y2="80" />
                                <line x1="40" y1="40" x2="880" y2="40" />
                            </g>

                            <!-- lines -->
                            <path
                                d="M40 160 C140 150, 200 120, 280 130 C380 145, 430 90, 520 95 C620 100, 700 70, 880 60"
                                fill="none" stroke="#60a5fa" stroke-width="3" opacity="0.95" />
                            <path
                                d="M40 150 C130 140, 230 155, 300 120 C380 75, 480 110, 560 105 C650 100, 740 120, 880 90"
                                fill="none" stroke="#22d3ee" stroke-width="3" opacity="0.95" />
                            <path
                                d="M40 175 C160 185, 240 150, 320 145 C420 140, 520 150, 610 130 C720 105, 790 140, 880 115"
                                fill="none" stroke="#f59e0b" stroke-width="3" opacity="0.95" />
                            <path
                                d="M40 140 C160 110, 240 140, 330 115 C430 85, 520 120, 610 95 C720 70, 790 88, 880 70"
                                fill="none" stroke="#fb7185" stroke-width="3" opacity="0.9" />
                            <path
                                d="M40 165 C150 155, 240 170, 340 150 C440 125, 520 140, 620 120 C740 95, 800 110, 880 98"
                                fill="none" stroke="#a78bfa" stroke-width="3" opacity="0.9" />

                            <!-- dots (end) -->
                            <circle cx="880" cy="60" r="5" fill="#60a5fa" />
                            <circle cx="880" cy="90" r="5" fill="#22d3ee" />
                            <circle cx="880" cy="115" r="5" fill="#f59e0b" />
                            <circle cx="880" cy="70" r="5" fill="#fb7185" />
                            <circle cx="880" cy="98" r="5" fill="#a78bfa" />
                        </svg>
                    </div>
                </div>
</div>
@endsection