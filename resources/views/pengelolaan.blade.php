
@extends('layouts.app')

@section('content')
@include('partials.alert')
<div style="padding: 10px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2 style="color: var(--blue); margin: 0;">Portfolio Saham</h2>
        <span style="background: #d7d7d7; padding: 5px 12px; border-radius: 20px; font-size: 1 rem; color: #1a4ec6;">
            Investor: <strong>{{ request('username') }}</strong>
        </span>
    </div>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama Perusahaan</th>
                    <th>Lot</th>
                    <th>Avg Price</th>
                    <th>PnL</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataSaham as $saham)
                <tr>
                    <td style="font-weight: bold; color: var(--blue);">{{ $saham['kode'] }}</td>
                    <td>{{ $saham['nama'] }}</td>
                    <td>{{ $saham['lot'] }}</td>
                    <td>Rp {{ $saham['avg'] }}</td>
                    <td>Rp {{ $saham['PnL'] }}</td>
                    <td>
                        @php
                            $color = $saham['status'] == 'Profit' ? '#27ae60' : '#e74c3c';
                            $bg = $saham['status'] == 'Profit' ? '#e8f5e9' : '#fdeded';
                        @endphp
                        <span style="background: {{ $bg }}; color: {{ $color }}; padding: 4px 10px; border-radius: 4px; font-weight: bold; font-size: 0.8rem;">
                            {{ $saham['status'] == 'Profit' ? '▲' : '▼' }} {{ $saham['status'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <p style="margin-top: 20px; font-size: 0.85rem; color: #7f8c8d; font-style: italic;">
        * Data di atas dirender secara dinamis dari Controller menggunakan Blade Directives.
    </p>
</div>
@endsection
