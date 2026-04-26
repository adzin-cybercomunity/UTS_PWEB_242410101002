@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div style="margin-bottom: 3rem;">
        <h1 style="color: var(--primary-color);">Selamat Datang, {{ $username }}!</h1>
        <p style="color: #666;">Berikut adalah ringkasan operasional kedai Anda hari ini.</p>
    </div>

    <div class="stats-grid">
        <div class="card" style="text-align: center; padding: 1.5rem;">
            <div style="color: var(--accent-color); margin-bottom: 1rem;">
                <x-icon name="coffee" style="width: 32px; height: 32px;" />
            </div>
            <h3 style="color: #666; font-size: 0.8rem; margin-bottom: 0.4rem; text-transform: uppercase; letter-spacing: 1px;">Total Penjualan</h3>
            <p style="font-size: 1.4rem; font-weight: 700; color: var(--primary-color);">{{ $stats['total_penjualan'] }}</p>
        </div>

        <div class="card" style="text-align: center; padding: 1.5rem;">
            <div style="color: var(--accent-color); margin-bottom: 1rem;">
                <x-icon name="sparkles" style="width: 32px; height: 32px;" />
            </div>
            <h3 style="color: #666; font-size: 0.8rem; margin-bottom: 0.4rem; text-transform: uppercase; letter-spacing: 1px;">Menu Terlaris</h3>
            <p style="font-size: 1.4rem; font-weight: 700; color: var(--primary-color);">{{ $stats['menu_terlaris'] }}</p>
        </div>

        <div class="card" style="text-align: center; padding: 1.5rem;">
            <div style="color: #e74c3c; margin-bottom: 1rem;">
                <x-icon name="dashboard" style="width: 32px; height: 32px;" />
            </div>
            <h3 style="color: #666; font-size: 0.8rem; margin-bottom: 0.4rem; text-transform: uppercase; letter-spacing: 1px;">Stok Menipis</h3>
            <p style="font-size: 1.4rem; font-weight: 700; color: #e74c3c;">{{ $stats['stok_menipis'] }} Menu</p>
        </div>
    </div>

    <div class="card" style="margin-top: 3rem; padding: 2.5rem;">
        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); display: flex; align-items: center; gap: 0.8rem;">
            <x-icon name="check" style="width: 24px; height: 24px; color: var(--accent-color);" /> Aktivitas Terbaru
        </h3>
        <ul style="list-style: none;">
            <li style="padding: 1.2rem 0; border-bottom: 1px solid rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 0.95rem;">Update stok biji kopi Arabika Gayo</span>
                <span style="color: #999; font-size: 0.8rem;">10 menit yang lalu</span>
            </li>
            <li style="padding: 1.2rem 0; border-bottom: 1px solid rgba(0,0,0,0.05); display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 0.95rem;">Perubahan harga menu Mocha Ice</span>
                <span style="color: #999; font-size: 0.8rem;">1 jam yang lalu</span>
            </li>
            <li style="padding: 1.2rem 0; display: flex; justify-content: space-between; align-items: center;">
                <span style="font-size: 0.95rem;">Login pengguna: <strong>{{ $username }}</strong></span>
                <span style="color: #999; font-size: 0.8rem;">Baru saja</span>
            </li>
        </ul>
    </div>
</div>
@endsection
