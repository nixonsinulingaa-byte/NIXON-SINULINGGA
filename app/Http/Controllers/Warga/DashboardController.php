<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $laporans = auth()->user()->laporan()->latest()->get();

        return view('warga.dashboard', compact('laporans'));
    }
}
