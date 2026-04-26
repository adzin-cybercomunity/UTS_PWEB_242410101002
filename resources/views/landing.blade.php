@extends('layouts.app')

@section('title', 'Kedai Kopi Modern')

@section('content')
    <section class="hero">
        <h1>{{ $site_name }}</h1>
        <p>Nikmati perpaduan rasa kopi autentik dengan suasana yang tenang dan inspiratif.</p>
        
        @if(!Session::has('username'))
            <a href="/login" class="btn-primary">Cobain Yuk!</a>
        @else
            <a href="/dashboard" class="btn-primary">Ke Dashboard</a>
        @endif
    </section>

    <div class="container" style="margin-top: 5rem;" id="tentang">
        <div style="text-align: center; margin-bottom: 4rem;">
            <p style="color: var(--accent-color); font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 0.5rem;">Pilihan Terbaik</p>
            <h2 style="font-size: 2.5rem; color: var(--primary-color);">Kenapa Memilih Kami?</h2>
        </div>
        <div class="stats-grid">
            <div class="card" style="text-align: center;">
                <div style="color: var(--accent-color); margin-bottom: 1.5rem;">
                    <x-icon name="coffee-cup" style="width: 48px; height: 48px;" />
                </div>
                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Biji Pilihan</h3>
                <p style="color: #666;">Hanya menggunakan 100% biji Arabika dan Robusta kualitas ekspor terbaik.</p>
            </div>
            <div class="card" style="text-align: center;">
                <div style="color: var(--accent-color); margin-bottom: 1.5rem;">
                    <x-icon name="chef" style="width: 48px; height: 48px;" />
                </div>
                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Barista Ahli</h3>
                <p style="color: #666;">Diseduh oleh para ahli yang memahami karakter unik setiap biji kopi.</p>
            </div>
            <div class="card" style="text-align: center;">
                <div style="color: var(--accent-color); margin-bottom: 1.5rem;">
                    <x-icon name="sparkles" style="width: 48px; height: 48px;" />
                </div>
                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Suasana Nyaman</h3>
                <p style="color: #666;">Tempat terbaik untuk bekerja maupun bersantai bersama teman tercinta.</p>
            </div>
        </div>
    </div>

    <div style="background-color: #f0ebe3; padding: 6rem 0; margin-top: 5rem;" id="menu">
        <div class="container">
            <div style="text-align: center; margin-bottom: 4rem;">
                <h2 style="font-size: 2.5rem; color: var(--primary-color);">Sajian Terpopuler</h2>
                <p style="color: #666;">Beberapa menu andalan yang paling dicintai pelanggan kami.</p>
            </div>
            <div class="stats-grid">
                <div style="text-align: center;">
                    <div style="height: 200px; background: #ddd; border-radius: 8px; margin-bottom: 1.5rem; background-image: url('https://imgcdn.espos.id/@espos/images/2024/09/ilustrasi-kopi.jpg?quality=60'); background-size: cover; background-position: center;"></div>
                    <h4 style="font-size: 1.2rem; color: var(--primary-color);">Signature Latte</h4>
                    <p style="color: var(--accent-color); font-weight: 700;">Rp 28.000</p>
                </div>
                <div style="text-align: center;">
                    <div style="height: 200px; background: #ddd; border-radius: 8px; margin-bottom: 1.5rem; background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=400&q=80'); background-size: cover; background-position: center;"></div>
                    <h4 style="font-size: 1.2rem; color: var(--primary-color);">Brown Sugar Coffee</h4>
                    <p style="color: var(--accent-color); font-weight: 700;">Rp 25.000</p>
                </div>
                <div style="text-align: center;">
                    <div style="height: 200px; background: #ddd; border-radius: 8px; margin-bottom: 1.5rem; background-image: url('https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=400&q=80'); background-size: cover; background-position: center;"></div>
                    <h4 style="font-size: 1.2rem; color: var(--primary-color);">Cold Brew Honey</h4>
                    <p style="color: var(--accent-color); font-weight: 700;">Rp 30.000</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 5rem; margin-bottom: 8rem;">
        <div style="background: var(--primary-color); color: var(--white); padding: 3.5rem 2rem; border-radius: 12px; text-align: center;">
            <h2 style="color: var(--secondary-color); font-size: 2.2rem; margin-bottom: 1.2rem;">Sistem Pengelolaan Data</h2>
            <p style="margin-bottom: 2.5rem; opacity: 0.9; line-height: 1.7; max-width: 700px; margin-left: auto; margin-right: auto; font-size: 0.95rem;">
                Kami menyediakan fitur khusus untuk admin mengelola inventaris kopi. 
                Mulai dari update stok harian, penyesuaian harga, hingga status ketersediaan menu dalam satu dashboard yang sangat intuitif.
            </p>
            <div style="display: flex; justify-content: center; gap: 3rem; flex-wrap: wrap;">
                <div style="font-weight: 600; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <x-icon name="check" style="width: 20px; height: 20px; color: var(--secondary-color);" /> Update Harga
                </div>
                <div style="font-weight: 600; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <x-icon name="check" style="width: 20px; height: 20px; color: var(--secondary-color);" /> Laporan Harian
                </div>
                <div style="font-weight: 600; font-size: 1.1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <x-icon name="check" style="width: 20px; height: 20px; color: var(--secondary-color);" /> Dashboard Cepat
                </div>
            </div>
        </div>
    </div>
@endsection
