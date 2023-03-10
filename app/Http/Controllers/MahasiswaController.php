<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\jurusan;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = mahasiswa::with('jurusan')->get();
        return view('mahasiswa.index',compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = jurusan::all();
        return view('mahasiswa.create', compact('jurusan'));
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
            'email' => 'required|email|unique:mahasiswas',
            'fakultas' => 'required',
            'jurusan_id' => 'required|exists:jurusans,id',
            'telpon' => 'required'
        ]);
    
        $mahasiswa = new Mahasiswa();
        $mahasiswa->name = $request->name;
        $mahasiswa->email = $request->email;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->jurusan_id = $request->jurusan_id;
        $mahasiswa->telpon = $request->telpon;
    
        if ($mahasiswa->save()) {
            return redirect()->route('indexMahasiswa')->with('success', 'Data mahasiswa berhasil dibuat');
        } else {
            return redirect()->back()->withInput()->withErrors('Data Mahasiswa Gagal Dibuat');
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
        $mahasiswa = mahasiswa::findOrFail($id);
        $jurusan = jurusan::all();
    
        return view('mahasiswa.edit', compact('mahasiswa', 'jurusan'));
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
        
        $mahasiswa = Mahasiswa::find($id);
        
        if ($mahasiswa) {
            $mahasiswa->name = $request->name;
            $mahasiswa->email = $request->email;
            $mahasiswa->fakultas = $request->fakultas;
            $mahasiswa->jurusan_id = $request->jurusan_id;
            $mahasiswa->telpon = $request->telpon;

            if ($mahasiswa->save()) {
                return redirect()->route('indexMahasiswa')->with('Sukses', 'Data mahasiswa berhasil di update');
            } else {
                return redirect()->back()->withInput()->withErrors('Gagal update data mahasiswa');
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
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();

        return redirect()->route('indexMahasiswa')->with('sukses', 'Data Mahasiswa berhasil dihapus');
    }
}
