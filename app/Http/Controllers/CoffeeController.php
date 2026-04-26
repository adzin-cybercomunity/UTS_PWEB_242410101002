<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CoffeeController extends Controller
{
    public function index()
    {
        $site_name = "Kopi Senja";
        return view('landing', compact('site_name'));
    }

    public function login()
    {
        if (Session::has('username')) {
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Simpan username ke session
        Session::put('username', $request->username);

        return redirect('/dashboard');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/');
    }

    public function dashboard()
    {
        if (!Session::has('username')) return redirect('/login');
        
        $username = Session::get('username');
        $stats = [
            'total_penjualan' => 'Rp 2.450.000',
            'menu_terlaris' => 'Signature Latte',
            'stok_menipis' => 3
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function pengelolaan()
    {
        if (!Session::has('username')) return redirect('/login');

        // Data array dinamis
        $menus = [
            ['id' => 1, 'nama' => 'Espresso', 'harga' => 20000, 'stok' => 15, 'status' => 'Ready'],
            ['id' => 2, 'nama' => 'Americano', 'harga' => 25000, 'stok' => 10, 'status' => 'Ready'],
            ['id' => 3, 'nama' => 'Caffe Latte', 'harga' => 30000, 'stok' => 8, 'status' => 'Ready'],
            ['id' => 4, 'nama' => 'Cappuccino', 'harga' => 30000, 'stok' => 12, 'status' => 'Ready'],
            ['id' => 5, 'nama' => 'Mocha', 'harga' => 35000, 'stok' => 5, 'status' => 'Ready'],
        ];

        return view('pengelolaan', compact('menus'));
    }

    public function profil()
    {
        if (!Session::has('username')) return redirect('/login');

        $user = [
            'username' => Session::get('username'),
            'role' => 'Admin Utama',
            'last_login' => now()->format('d M Y H:i')
        ];

        return view('profil', compact('user'));
    }
}
