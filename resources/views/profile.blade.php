@extends('layouts.app')

@section('content')
<div style="padding: 20px; text-align: center;">
    <div style="width: 100px; height: 100px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 2.5rem; font-weight: bold; box-shadow: 0 10px 20px rgba(16, 185, 129, 0.2);">
    {{ substr($username, 0, 1) }}
</div>

<h2 style="color: var(--blue); margin-bottom: 5px;">Profil Investor</h2>
    <p style="color: #666; margin-bottom: 30px;">No. SID Sekuritas: #{{ rand(1000, 9999) }}</p>

    <div style="max-width: 500px; margin: 0 auto; text-align: left; background: #f9f9f9; padding: 20px; border-radius: 10px;">
        <table style="width: 100%; border: none;">
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px 0; font-weight: bold; color: #555;">Nama Lengkap</td>
                <td style="padding: 10px 0; text-align: right;">{{ $username }}</td>
            </tr>
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px 0; font-weight: bold; color: #555;">Status Akun</td>
                <td style="padding: 10px 0; text-align: right;"><span style="color: #27ae60;">● Aktif</span></td>
            </tr>
            <tr style="border-bottom: 1px solid #ddd;">
                <td style="padding: 10px 0; font-weight: bold; color: #555;">RDN Account </td>
                <td style="padding: 10px 0; text-align: right;">14324530009</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #555;">Profil Resiko</td>
                <td style="padding: 10px 0; text-align: right;">Bertumbuh</td>
            </tr>
            <tr>
                <td style="padding: 10px 0; font-weight: bold; color: #555;">Withdrawable Balance</td>
                <td style="padding: 10px 0; text-align: right;">Rp. 13.432.867</td>
            </tr>
        </table>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn" style="padding: 12px 30px; font-weight: bold;">
            ← Kembali ke Dashboard
        </a>
    </div>
</div>
@endsection
