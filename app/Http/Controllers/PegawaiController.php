<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\MasaKerja;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.dashboard', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $masa_kerja = MasaKerja::all();
        $plucked = $masa_kerja->pluck('pilihan', 'bobot');
        $plucked->all();
        return view('pegawai.create', compact('masa_kerja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'masa_kerja' => 'required',
            'jabatan' => 'required',
            'kedisiplinan' => 'required',
            'kinerja' => 'required'
        ]);
        Pegawai::create ([
            'nama' => $request->nama,
            'masa_kerja' => $request->masa_kerja,
            'jabatan' => $request->jabatan,
            'kedisiplinan' => $request->kedisiplinan,
            'kinerja' => $request->kinerja
        ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view ('pegawai.edit', ['pegawai' =>$pegawai]);
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
        $this->validate($request,[
            'nama' => 'required',
            'masa_kerja' => 'required',
            'jabatan' => 'required',
            'kedisiplinan' => 'required',
            'kinerja' => 'required'
        ]);
        $pegawai = Pegawai::find($id);
        $pegawai -> nama = $request->nama;
        $pegawai -> masa_kerja = $request->masa_kerja;
        $pegawai -> jabatan = $request->jabatan;
        $pegawai -> kedisiplinan = $request->kedisiplinan;
        $pegawai -> kinerja = $request->kinerja;
        $pegawai -> save();
        return redirect ('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect('/dashboard');
    }
    public function index2()
    {
        $pegawai = Pegawai::sum('masa_kerja','jabatan');
        return $pegawai;
    }
}
