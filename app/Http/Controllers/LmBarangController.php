<?php

namespace App\Http\Controllers;

use App\Models\m_Barang;
use App\Models\lm_Barang;
use RealRashid\SweetAlert\Facades\Alert;
use PDF;
use Illuminate\Http\Request;

class LmBarangController extends Controller
{
    public function viewPDF()
    {
        $m_barang = m_Barang::latest()->get();

        $data = [
            'title' => 'Data Produk',
            'date' => date('m/d/Y'),
            'm_barang' => $m_barang,
        ];

        $pdf = PDF::loadView('lm_barang.export-pdf', $data)
            ->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function __construct()
    {
        $this -> middleware('auth');
    }
    public function index()
    {
        $m_barang =  m_barang::all();

        confirmDelete('Delete','Are you sure?');
        return view('lm_barang.index', compact('m_barang'));
    }


    public function create()
    {

        $m_barang = m_barang::all();
        return view('lm_barang.create', compact('m_barang'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'keterangan' => 'required',

        ]);

        $lm_barang = new lm_barang();
        $lm_barang->id_m_barang = $request->id_m_barang;
        $lm_barang->keterangan = $request->keterangan;

        Alert::success('Success','data berhasil disimpan')->autoClose(1000);
        $lm_barang->save();

        return redirect()->route('lm_barang.index');
    }


    public function show(lm_barang $lm_barang)
    {
        //
    }


    public function edit($id)
    {
        $m_barang =  m_barang::all();
        $lm_barang = lm_barang::findOrFail($id);
        return view('lm_barang.edit', compact('lm_barang','m_barang'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'keterangan' => 'required',

        ]);

        $lm_barang = lm_barang::findOrFail($id);
        $lm_barang->id_m_barang = $request->id_m_barang;
        $lm_barang->keterangan = $request->keterangan;

        Alert::success('Success','data berhasil diubah')->autoClose(1000);
        $lm_barang->save();
        return redirect()->route('lm_barang.index');
    }


    public function destroy($id)
    {
        $lm_barang = lm_barang::findOrFail($id);
        $lm_barang->delete();
        Alert::success('success','Data berhasil Dihapus');
        return redirect()->route('lm_barang.index');
    }
}
