<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Hitung;

class HitungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $hitung = Hitung::all();
            return view('hitung.dashboard', ['hitung' => $hitung]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'kinerja' => 'required',
            'total_nilai' => 'required'
        ]);
        Hitung::create ([
            'nama' => $request->nama,
            'masa_kerja' => $request->masa_kerja,
            'jabatan' => $request->jabatan,
            'kedisiplinan' => $request->kedisiplinan,
            'kinerja' => $request->kinerja,
            'total_nilai' => $request->total_nilai
        ]);
        return redirect('/dashboardhitung');
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
        {
            $pegawai = Pegawai::find($id);
            return view ('hitung.hitung', ['pegawai' =>$pegawai]);
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
