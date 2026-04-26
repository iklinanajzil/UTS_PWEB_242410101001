<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function dashboard(Request $request) {
        $username = $request->input('username');
        if (!$username) {
            return redirect()->route('login', ['error' => 'Akses Ditolak! Masukkan nama dulu ya.']);
        }
            $marketTrends = [
            ['kode' => 'BMRI', 'harga' => '4.500', 'change' => '+1.2%', 'trend' => 'up'],
            ['kode' => 'TLKM', 'harga' => '2.820', 'change' => '-0.5%', 'trend' => 'down'],
            ['kode' => 'BBNI', 'harga' => '3.725', 'change' => '+2.1%', 'trend' => 'up'],
            ['kode' => 'UNVR', 'harga' => '1.575', 'change' => '-1.8%', 'trend' => 'down'],
            ['kode' => 'BBRI', 'harga' => '3.170', 'change' => '+1.2%', 'trend' => 'up'],
            ['kode' => 'ASII', 'harga' => '6.325', 'change' => '-0.5%', 'trend' => 'down'],
            ['kode' => 'WBSA', 'harga' => '1.330', 'change' => '+24.88%', 'trend' => 'up'],
            ['kode' => 'BELL', 'harga' => '144', 'change' => '-1.8%', 'trend' => 'down'],
        ];

            return view('dashboard', compact('username', 'marketTrends'));
        }

    public function profile(Request $request) {
        $username = $request->input('username');

        if (!$username) {
            return redirect()->route('login', ['error' => 'Akses Ditolak! Masukkan nama dulu ya.']);
        }

        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request) {
        $username = $request->input('username');

        if (!$username) {
            return redirect()->route('login', ['error' => 'Akses Ditolak! Masukkan nama dulu ya.']);
        }

        $dataSaham = [
            ['kode' => 'BBCA', 'nama' => 'Bank Central Asia', 'lot' => 10, 'avg' => '10.150', 'PnL' =>'850.000', 'status' => 'Profit'],
            ['kode' => 'TLKM', 'nama' => 'Telkom Indonesia', 'lot' => 50, 'avg' => '3.900', 'PnL' =>'500.000', 'status' => 'Loss'],
            ['kode' => 'ASII', 'nama' => 'Astra International', 'lot' => 25, 'avg' => '5.200', 'PnL' =>'2.500.000', 'status' => 'Profit'],
            ['kode' => 'GOTO', 'nama' => 'GoTo Gojek Tokopedia', 'lot' => 100, 'avg' => '50', 'PnL' =>'250.000', 'status' => 'Loss'],
            ['kode' => 'AMRT', 'nama' => 'Sumber Alfaria Trijaya', 'lot' => 15, 'avg' => '2.800', 'PnL' =>'320.000', 'status' => 'Profit'],
            ['kode' => 'BMRI', 'nama' => 'Bank Mandiri', 'lot' => 50, 'avg' => '4710', 'PnL' =>'1.250.000', 'status' => 'Profit'],
            ['kode' => 'WBSA', 'nama' => 'BSA Logistic', 'lot' => 20, 'avg' => '168', 'PnL' =>'3.100.000', 'status' => 'Profit'],
            ['kode' => 'PTRO', 'nama' => 'Petrosea', 'lot' => 25, 'avg' => '7.200', 'PnL' =>'1.500.000', 'status' => 'Loss'],
            ['kode' => 'BRPT', 'nama' => 'Barito Pasific', 'lot' => 80, 'avg' => '2.450', 'PnL' =>'850.000', 'status' => 'Loss'],
            ['kode' => 'BUMI', 'nama' => 'Bumi Resources', 'lot' => 300, 'avg' => '218', 'PnL' =>'320.000', 'status' => 'Profit'],
        ];

        return view('pengelolaan', compact('dataSaham', 'username'));
    }
}
