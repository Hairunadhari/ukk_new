<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(){
        $fasilitas = Fasilitas::all();
        return view('admin.Fasilitas', compact('fasilitas'));
    }


    public function masukin_data(Request $request){
        $fasilitas = Fasilitas::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotofasilitas/', $request->file('foto')->getClientOriginalName());
            $fasilitas->foto = $request->file('foto')->getClientOriginalName();
            $fasilitas->save();
        }
        return redirect()->route('fasilitas')->with('success','data berhasil ditambahkan ');
    }

    public function editsimpan(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotofasilitas/', $request->file('foto')->getClientOriginalName());
            $fasilitas->foto = $request->file('foto')->getClientOriginalName();
            $fasilitas->save();
        }
        return redirect()->route('fasilitas')->with('success','data berhasil diupdate ');
    }


    public function delete($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas')->with('success','data berhasil hapus  ');
    }
}
