@extends('layouts.app')

@section('content')
<style>
    .container {
        padding: 0;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        align-items: stretch;
    }

    @media (max-width: 768px) {
        .login-image-section { display: none; }
        .login-form-section { width: 100% !important; padding: 40px !important; }
    }
</style>

<div class="login-image-section" style="width: 50%; background-image: url('{{ asset('image/login.png') }}'); background-size: cover; background-position: center; display: flex; align-items: flex-end; padding: 40px; position: relative;"> </div>


<div class="login-form-section" style="width: 50%; padding: 60px; display: flex; flex-direction: column; justify-content: center; background: transparent">
    <div style="text-align: center; margin-bottom: 40px;">
        @if(request()->has('error'))
    <div style="background-color: #fee2e2; color: #ef4444; padding: 15px; border-radius: 10px; margin-bottom: 25px; border: 1px solid #fca5a5; display: flex; align-items: center; gap: 10px; animation: shake 0.5s;">
        <span style="font-size: 1.2rem;">⚠️</span>
        <span style="font-size: 0.85rem; font-weight: 600;">
            {{ request('error') }}
        </span>
    </div>
    <style>
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
    </style>
@endif
        <h2 style="color: var(--blue); font-weight: 700; font-size: 1.8rem; margin: 0;">Selamat Datang Kembali</h2>
        <p style="color: var(--gray); margin-top: 8px;">Silakan masukkan Username Anda</p>
    </div>
    <form action="{{ route('dashboard') }}" method="GET" style="max-width: 350px; margin: 0 auto; width: 100%;">
        <div style="margin-bottom: 25px; text-align: left;">
            <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 0.9rem; color: var(--blue);">Nama Lengkap / Username</label>
            <input type="text" name="username" placeholder="Contoh: Iklina Najzil" required
                   style="width: 100%; padding: 14px; border: 2px solid #e2e8f0; border-radius: 10px; box-sizing: border-box; outline: none; transition: 0.3s; font-size: 1rem;">
        </div>

        <button type="submit" style="width: 100%; padding: 14px; font-weight: 700; font-size: 1rem; border-radius: 10px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.25);">
            Masuk ke Stock Track
        </button>
    </form>

    <p style="margin-top: 50px; font-size: 0.8rem; color: var(--gray); text-align: center; font-style: italic;">
        Aplikasi simulasi UTS Pemrograman Web | Iklina Najzil - 2026
    </p>
</div>
@endsection
