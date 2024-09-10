<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Merk;
use App\Models\Kondisi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function index()
    {
        $barang =  Barang::all();
        confirmDelete('Delete','Are you sure?');
        return view('barang.index', compact('barang'));
    }


    public function create()
    {
        $merk =  Merk::all();
        $kondisi = Kondisi::all();
        return view('barang.create', compact('merk', 'kondisi'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'ruangan' => 'required',
            'posisi' => 'required',
            'spek' => 'required',

        ]);

        $barang = new barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->id_merk = $request->id_merk;
        $barang->ruangan = $request->ruangan;
        $barang->id_kondisi = $request->id_kondisi;
        $barang->posisi = $request->posisi;
        $barang->spek = $request->spek;

        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
        $barang->save();

        return redirect()->route('barang.index');
    }


    public function show(barang $barang)
    {
        //
    }


    public function edit($id)
    {
        $merk =  Merk::all();
        $kondisi = Kondisi::all();
        $barang = barang::findOrFail($id);
        return view('barang.edit', compact('barang','merk','kondisi'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_barang' => 'required',
            'ruangan' => 'required',
            'posisi' => 'required',
            'spek' => 'required',

        ]);

        $barang = barang::findOrFail($id);
        $barang->nama_barang = $request->nama_barang;
        $barang->id_merk = $request->id_merk;
        $barang->ruangan = $request->ruangan;
        $barang->id_kondisi = $request->id_kondisi;
        $barang->posisi = $request->posisi;
        $barang->spek = $request->spek;

        Alert::success('Success','data berhasil diubah')->autoClose(1000);
        $barang->save();
        return redirect()->route('barang.index');
    }


    public function destroy($id)
    {
        $barang = barang::findOrFail($id);
        $barang->delete();
        Alert::success('success','Data berhasil Dihapus');
        return redirect()->route('barang.index');
    }
}
