<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Divisi;
use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawans.index',[
            'karyawans'=>Karyawan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawans.create',[
            'jabatans'=>Jabatan::all(),
            'divisis'=>Divisi::all(),
            'clubs'=>Club::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return dd($request);
        $validatedData = $request->validate([
            'nik'=>'required|max:255',
            'nama_karyawan'=>'required|max:255',
            'club'=>'required',
            'divisi'=>'required',
            'jabatan'=>'required',
            'jenis_kelamin'=>'required'
        ]);
        Karyawan::create($validatedData);

        return redirect('/karyawan')->with('success','Karyawan Baru telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawans.show',[
            'karyawan'=>$karyawan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawans.edit',[
            'karyawan'=>$karyawan,
            'jabatans'=>Jabatan::all(),
            'divisis'=>Divisi::all(),
            'clubs'=>Club::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $rules = [
            'nik'=>'required|max:255',
            'nama_karyawan'=>'required|max:255',
            'club'=>'required',
            'divisi'=>'required',
            'jabatan'=>'required',
            'jenis_kelamin'=>'required'
        ];

        $validatedData = $request->validate($rules);
        Karyawan::where('id',$karyawan->id)->update($validatedData);

        return redirect('/karyawan')->with('success','Data Karyawan telah diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        Karyawan::destroy($karyawan->id);

        return redirect('/karyawan')->with('success','Data Karyawan telah dihapus!');
    }
}
