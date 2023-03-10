@extends('layouts.app')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Jurusan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('indexJurusan') }}">Data Jurusan</a></li>
              <li class="breadcrumb-item active">Tambah Jurusan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
             
              <form action="{{ route('storeJurusan') }}" method="post">
                @csrf
               
                  <div class="form-group">
                  <label for="companies">Pilih Fakultas</label>
                    <select class="form-control">
                       <option>Pilih Fakultas</option>
                       <option>Ilmu Terapan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="name">Nama Jurusan</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Jurusan" required autofocus>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
            </div>
            </div>
          </div>
        </div>
    </div>
    
        
    

@endsection