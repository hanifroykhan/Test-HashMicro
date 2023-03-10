<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = jurusan::all();
        return view('jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
           
        ]);
    
        $mahasiswa = new jurusan();
        $mahasiswa->name = $request->name;
    
        if ($mahasiswa->save()) {
            return redirect()->route('indexJurusan')->with('success', 'Data Jurusan berhasil dibuat');
        } else {
            return redirect()->back()->withInput()->withErrors('Data Jurusan Gagal Dibuat');
        }
    
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
        $jurusan = jurusan::findOrFail($id);
    
        return view('jurusan.edit', compact( 'jurusan'));
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
        $jurusan = jurusan::find($id);
        
        if ($jurusan) {
            $jurusan->name = $request->name;

            if ($jurusan->save()) {
                return redirect()->route('indexJurusan')->with('Sukses', 'Data Jurusan berhasil di update');
            } else {
                return redirect()->back()->withInput()->withErrors('Gagal update data Jurusan');
            }
        } else {
            return redirect()->back()->withInput()->withErrors('Terjadi kesalahan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = jurusan::find($id);
        $jurusan->delete();

        return redirect()->route('indexJurusan')->with('sukses', 'Data Jurusan berhasil dihapus');
    }
}
