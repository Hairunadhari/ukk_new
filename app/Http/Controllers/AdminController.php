<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $jumlahkamar = Kamar::count();
        $jumlahfasilitas = Fasilitas::count();
        return view('admin.dashboard', compact('jumlahkamar','jumlahfasilitas'));
    }
}
