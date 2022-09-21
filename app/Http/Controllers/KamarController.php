<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index(){
        $kamar = Kamar::all();
        return view('admin.Kamar', compact('kamar'));
    }


    public function masukin_data(Request $request){
        Kamar::create($request->all());
        return redirect()->route('kamar')->with('success','data berhasil ditambahkan ');
    }

    public function editsimpan(Request $request, $id)
    {
        $kamar = kamar::find($id);
        $kamar->update($request->all());
        return redirect()->route('kamar')->with('success','data berhasil diupdate ');
    }


    public function delete($id)
    {
        $kamar = Kamar::find($id);
        $kamar->delete();
        return redirect()->route('kamar')->with('success','data berhasil hapus  ');
    }
}
