<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\M_siswa;

class Siswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = M_siswa::all();
        return View('siswa', ['datasiswa'=>$datasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $datasiswa = new siswa;
        // $datasiswa->nis = $request->nis;
        // $datasiswa->nama = $request->nama;
        // $datasiswa->tempat_lahir = $request->tempat_lahir;
        // $datasiswa->tgl_lahir = $request->tgl_lahir;
        // $datasiswa->alamat = $request->alamat;
        // $datasiswa->agama = $request->agama;
        // $datasiswa->status = $request->status;

        DB::table('siswa')->insert(
            ['nis' => $request->nis, 'nama' => $request->nama]
        );

        //$datasiswa->save();
        //redirect('siswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$datasiswa = DB::select('call sp_siswa');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
