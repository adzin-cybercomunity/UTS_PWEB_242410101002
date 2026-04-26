@extends('layouts.app')

@section('title', 'Pengelolaan Menu')

@section('content')
<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <div>
            <h1 style="color: var(--primary-color);">Pengelolaan Menu</h1>
            <p style="color: #666;">Daftar menu kopi yang tersedia di outlet saat ini.</p>
        </div>
        <button class="btn-primary" style="padding: 0.7rem 1.5rem; font-size: 0.9rem;">+ Tambah Menu</button>
    </div>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr>
                    <td>#{{ $menu['id'] }}</td>
                    <td style="font-weight: 600;">{{ $menu['nama'] }}</td>
                    <td>Rp {{ number_format($menu['harga'], 0, ',', '.') }}</td>
                    <td>{{ $menu['stok'] }} pcs</td>
                    <td>
                        <span style="padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.8rem; background: #e8f5e9; color: #2e7d32;">
                            {{ $menu['status'] }}
                        </span>
                    </td>
                    <td>
                        <a href="#" style="color: #3498db; text-decoration: none; margin-right: 10px;">Ubah</a>
                        <a href="#" style="color: #e74c3c; text-decoration: none;">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
