@extends('layouts.app')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('indexMahasiswa') }}">Data Mahasiswa</a></li>
              <li class="breadcrumb-item active">Tambah Mahasiswa</li>
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
             
              <form action="{{ route('storeMahasiswa') }}" method="post">
                @csrf
               
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap" required autocomplete="name" autofocus>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required autocomplete="email">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>This Email is Already Exist</strong>
                          </span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="fakultas">Nama Fakultas</label>
                    <input id="fakultas" type="text" class="form-control @error('fakultas') is-invalid @enderror" name="fakultas" value="{{ old('fakultas') }}" placeholder="Masukkan Nama Fakultas" required autofocus>
                  </div>
                  <div class="form-group">
                  <label for="jurusan_id">Pilih Jurusan</label>
                  <select class="form-control" id="jurusan_id" name="jurusan_id">
                        @foreach($jurusan as $jurusans)
                            <option value="{{ $jurusans->id }}">{{ $jurusans->name }}</option>
                         @endforeach
                  </select>
                  </div>
                  <div class="form-group">
                    <label for="telpon">No.telpon</label>
                    <input id="telpon" type="text" class="form-control @error('telpon') is-invalid @enderror" name="telpon" value="{{ old('telpon') }}" placeholder="Masukkan Nomor Telpon" required  autofocus>
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