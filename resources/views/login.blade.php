@extends('layouts.app')

@section('title', 'Login Admin')

@section('content')
<div class="login-container">
    <div class="login-card">
        <h2 style="text-align: center; margin-bottom: 0.5rem; color: var(--primary-color);">Masuk Admin</h2>
        <p style="text-align: center; color: #888; font-size: 0.9rem; margin-bottom: 2rem;">Silakan masukkan akun Anda.</p>
        
        @if(session('error'))
            <div style="background: #fdf2f2; color: #e74c3c; padding: 0.8rem; border-radius: 8px; text-align: center; margin-bottom: 1.5rem; font-size: 0.85rem; border: 1px solid #f9d7d7;">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label style="font-size: 0.85rem; color: #555;">Username</label>
                <input type="text" name="username" placeholder="Masukkan username admin" required 
                       style="background: #fbfbfb; border: 1px solid #eee; padding: 0.9rem;">
            </div>
            <div class="form-group">
                <label style="font-size: 0.85rem; color: #555;">Password</label>
                <input type="password" name="password" placeholder="Masukkan password" required 
                       style="background: #fbfbfb; border: 1px solid #eee; padding: 0.9rem;">
            </div>
            <button type="submit" class="btn-submit" style="padding: 1rem; font-size: 1rem; margin-top: 1rem;">
                Masuk Sekarang
            </button>
        </form>

        <p style="text-align: center; margin-top: 2rem; font-size: 0.9rem;">
            <a href="/" style="color: #999; text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 0.5rem; transition: 0.3s;" onmouseover="this.style.color='var(--primary-color)'" onmouseout="this.style.color='#999'">
                <span>←</span> Kembali ke Beranda
            </a>
        </p>
    </div>
</div>
@endsection
