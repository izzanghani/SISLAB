<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use App\Models\Kondisi;
use App\Models\pm_barang;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PmBarangController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function index()
    {
        $pm_barang =  pm_barang::all();
        confirmDelete('Delete','Are you sure?');
        return view('pm_barang.index', compact('pm_barang'));
    }


    public function create()
    {
        $barang =  Barang::all();
        $ruangan =  Ruangan::all();
        $kondisi = Kondisi::all();
        return view('pm_barang.create', compact('barang','ruangan', 'kondisi'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_peminjam' => 'required',
            'email' => 'required',
            'instansi' => 'required',
            'tanggal_peminjaman' => 'required',
            'keterangan' => 'required',

        ]);

        $pm_barang = new pm_barang();
        $pm_barang->nama_peminjam = $request->nama_peminjam;
        $pm_barang->email = $request->email;
        $pm_barang->instansi = $request->instansi;
        $pm_barang->id_barang = $request->id_barang;
        $pm_barang->id_ruangan = $request->id_ruangan;
        $pm_barang->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pm_barang->keterangan = $request->keterangan;
        $pm_barang->id_kondisi = $request->id_kondisi;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/pm_barang', $name);
            $pm_barang->cover = $name;
        }

        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
        $pm_barang->save();

        return redirect()->route('pm_barang.index');
    }


    public function show(pm_barang $barang)
    {
        //
    }


    public function edit($id)
    {
        $barang =  Barang::all();
        $ruangan =  Ruangan::all();
        $kondisi = Kondisi::all();
        $pm_barang = pm_barang::findOrFail($id);
        return view('pm_barang.edit', compact('pm_barang','barang','ruangan','kondisi'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_peminjam' => 'required',
            'email' => 'required',
            'instansi' => 'required',
            'tanggal_peminjaman' => 'required',
            'keterangan' => 'required',

        ]);

        $pm_barang = pm_barang::findOrFail($id);
        $pm_barang->nama_peminjam = $request->nama_peminjam;
        $pm_barang->email = $request->email;
        $pm_barang->instansi = $request->instansi;
        $pm_barang->id_barang = $request->id_barang;
        $pm_barang->id_ruangan = $request->id_ruangan;
        $pm_barang->tanggal_peminjaman = $request->tanggal_peminjaman;
        $pm_barang->keterangan = $request->keterangan;
        $pm_barang->id_kondisi = $request->id_kondisi;

        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/pm_barang', $name);
            $pm_barang->cover = $name;
        }

        Alert::success('Success','data berhasil diubah')->autoClose(1000);
        $pm_barang->save();
        return redirect()->route('pm_barang.index');
    }


    public function destroy($id)
    {
        $pm_barang = pm_barang::findOrFail($id);
        $pm_barang->delete();
        Alert::success('success','Data berhasil Dihapus');
        return redirect()->route('pm_barang.index');
    }
}
