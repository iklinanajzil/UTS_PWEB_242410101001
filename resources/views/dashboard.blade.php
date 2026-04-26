
@extends('layouts.app')

    @section('content')
    @include('partials.alert')
    <div style="background: linear-gradient(135deg, var(--blue), var(--primary)); color: white; padding: 30px; border-radius: 16px; margin-bottom: 25px;">
        <h1 style="margin: 0; font-size: 1.8rem;">Selamat Datang, {{ $username }}! 🚀</h1>
        <p style="opacity: 0.9; margin-top: 10px;">Pantau performa aset investasi Anda hari ini secara real-time.</p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 20px;">
        <div style="background: #ecfdf5; padding: 20px; border-radius: 12px; border-left: 5px solid var(--primary);">
            <small style="color: var(--gray); font-weight: bold;">TOTAL ASSET</small>
            <h2 style="margin: 5px 0; color: var(--blue);">Rp 325.450.000</h2>
        </div>
        <div style="background: #f0fdf4; padding: 20px; border-radius: 12px; border-left: 5px solid var(--primary-dark);">
            <small style="color: var(--gray); font-weight: bold;">TOTAL LOT</small>
            <h2 style="margin: 5px 0; color: var(--blue);">200 Lot</h2>
        </div>

        <div style="background: #f0fdf4; padding: 20px; border-radius: 12px; border-left: 5px solid var(--primary-dark);">
            <small style="color: var(--gray); font-weight: bold;">TOTAL PnL</small>
            <h2 style="margin: 5px 0; color: var(--blue);">+ Rp 189.654.000</h2>
        </div>
    </div>

    <div style="display: flex; gap: 20px; margin-top: 30px; align-items: flex-start;">
    <div style="flex: 2; background: white; padding: 25px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3 style="margin: 0; font-size: 1.1rem; color: var(--dark-bg);">Asset Performance Analysis</h3>
            <span style="font-size: 0.8rem; color: var(--gray); background: #f1f5f9; padding: 4px 12px; border-radius: 20px;">Last 7 Days</span>
        </div>
        <div style="position: relative; height:300px; width:100%;">
            <canvas id="assetChart"></canvas>
        </div>
    </div>

    <div style="flex: 1; background: white; padding: 25px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.05);">
        <h3 style="margin: 0 0 20px 0; font-size: 1.1rem; color: var(--blue);">🔥 Market Watch</h3>

        @foreach($marketTrends as $item)
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px 0; border-bottom: 1px solid #f8fafc;">
                <div>
                    <div style="font-weight: 700; color: var(--dark-bg);">{{ $item['kode'] }}</div>
                    <div style="font-size: 0.75rem; color: var(--gray);">IDR {{ $item['harga'] }}</div>
                </div>
                <div style="text-align: right;">
                    <div style="color: {{ $item['trend'] == 'up' ? '#27ae60' : '#e74c3c' }}; font-weight: 700; font-size: 0.9rem;">
                        {{ $item['change'] }} {{ $item['trend'] == 'up' ? '▲' : '▼' }}
                    </div>
                    <div style="font-size: 0.7rem; color: #8da2b9;">{{ $item['trend'] == 'up' ? 'Bullish' : 'Bearish' }}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn" style="padding: 12px 30px; font-weight: bold;">
            Lihat Portfolio Lengkap →
        </a>
    </div>
</div>

<script>
    const ctx = document.getElementById('assetChart').getContext('2d');
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(16, 185, 129, 0.4)');
    gradient.addColorStop(1, 'rgba(16, 185, 129, 0)');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Mon', 'Tue'],
            datasets: [{
                label: 'Total Asset Value (Million)',
                data: [20.5, 21.2, 20.8, 22.5, 23.1, 24.0, 25.0],
                borderColor: '#10b981',
                borderWidth: 3,
                backgroundColor: gradient,
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#10b981',
                pointBorderWidth: 2
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: false,
                    grid: { color: '#f1f5f9' },
                    ticks: { callback: function(value) { return 'Rp ' + value + 'M'; } }
                },
                x: { grid: { display: false } }
            }
        }
    });
</script>
@endsection


