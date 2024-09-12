<?php

namespace App\Http\Controllers;
use App\Models\ruangan;
use App\Models\pm_ruangan;
use Illuminate\Http\Request;

class PmRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pm_ruangan=pm_ruangan::all();
        return view('pm_ruangans.index',compact('pm_ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangan=ruangan::all();
    return view('pm_ruangans.create',compact('ruangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pm_ruangan=new pm_ruangan;
        $pm_ruangan->penanggungjawab=$request->penanggungjawab;
        $pm_ruangan->instansi=$request->instansi;
        $pm_ruangan->jenis_kegiatan=$request->jenis_kegiatan;
        $pm_ruangan->id_ruangan=$request->id_ruangan;
        $pm_ruangan->tanggal_peminjaman=$request->tanggal_peminjaman;
        $pm_ruangan->documentasi=$request->documentasi;
        $pm_ruangan->keterangan=$request->keterangan;
         if ($request->hasFile('documentasi')) {
            $img = $request->file('documentasi');
            $name = rand(1000, 999) . $img->getClientOriginalName();
            $img->move('images/pm_ruangan', $name);
            $pm_ruangan->documentasi = $name;
         }
        $pm_ruangan->save();
        return redirect()->route('pm_ruangan.index',);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pm_ruangan = pm_ruangan::FindOrFail($id);
        return view('pm_ruangans.show',compact('pm_ruangan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ruangan=ruangan::all();
        $pm_ruangan = pm_ruangan::FindOrFail($id);
        return view('pm_ruangans.edit', compact('pm_ruangan','ruangan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pm_ruangan = pm_ruangan::FindOrFail($id);
        $pm_ruangan->penanggungjawab=$request->penanggungjawab;
        $pm_ruangan->instansi=$request->instansi;
        $pm_ruangan->jenis_kegiatan=$request->jenis_kegiatan;
        $pm_ruangan->id_ruangan=$request->id_ruangan;
        $pm_ruangan->tanggal_peminjaman=$request->tanggal_peminjaman;
        $pm_ruangan->documentasi=$request->documentasi;
        $pm_ruangan->keterangan=$request->keterangan;
        $pm_ruangan->save();
        return redirect()->route('pm_ruangan.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pm_ruangan =  pm_ruangan::FindOrFail($id);

        $pm_ruangan->delete();
        return redirect()->route('pm_ruangan.index');

    }
}
