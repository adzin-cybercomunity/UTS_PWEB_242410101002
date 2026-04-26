@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<div class="container">
    <div style="text-align: center; margin-bottom: 3rem;">
        <h1 style="color: var(--primary-color);">Profil Pengguna</h1>
        <p style="color: #666;">Informasi akun administrator sistem.</p>
    </div>

    <div style="max-width: 600px; margin: 0 auto;">
        <div class="card" style="padding: 3rem; text-align: center;">
            <div style="width: 120px; height: 120px; background: var(--bg-light); border-radius: 50%; margin: 0 auto 2rem; display: flex; align-items: center; justify-content: center; border: 4px solid var(--accent-color); box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <x-icon name="user" style="width: 60px; height: 60px; color: var(--primary-color);" />
            </div>

            <!-- Profile Section -->
            <div style="text-align: left; background: var(--bg-light); padding: 2rem; border-radius: 12px;">
                <div style="margin-bottom: 1.5rem; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; color: #999; text-transform: uppercase; font-weight: 700; letter-spacing: 1px; margin-bottom: 0.5rem;">Username</label>
                    <p style="font-weight: 600; font-size: 1.2rem; color: var(--primary-color);">{{ $user['username'] }}</p>
                </div>

                <div style="margin-bottom: 1.5rem; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; color: #999; text-transform: uppercase; font-weight: 700; letter-spacing: 1px; margin-bottom: 0.5rem;">Password</label>
                    <p style="font-weight: 600; font-size: 1.2rem; color: var(--primary-color);">••••••••••••</p>
                </div>

                <div style="margin-bottom: 1.5rem; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; color: #999; text-transform: uppercase; font-weight: 700; letter-spacing: 1px; margin-bottom: 0.5rem;">Role</label>
                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <span style="display: inline-block; width: 10px; height: 10px; background: #2ecc71; border-radius: 50%;"></span>
                        <p style="font-weight: 600; font-size: 1.2rem; color: var(--primary-color);">{{ $user['role'] }}</p>
                    </div>
                </div>

                <div>
                    <label style="display: block; font-size: 0.75rem; color: #999; text-transform: uppercase; font-weight: 700; letter-spacing: 1px; margin-bottom: 0.5rem;">Login Terakhir</label>
                    <p style="font-weight: 600; font-size: 1rem; color: #666;">{{ $user['last_login'] }}</p>
                </div>
            </div>

            <button class="btn-primary" style="width: 100%; margin-top: 2.5rem; padding: 0.8rem;">Edit Profil</button>
        </div>
    </div>
</div>
@endsection
