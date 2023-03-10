@extends('layouts.app')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Jurusan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('indexJurusan') }}">Index</a></li>
              <li class="breadcrumb-item active">Data Jurusan</li>
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
              <a href =" {{ route('createJurusan') }} " type="button" class="btn btn-block btn-success" style="width: 90px; height: 45px;">Tambah</a>
                <br>  
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                    
                      <th>Fakultas</th>
                      <th>Jurusan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $number = 1;
                    @endphp

                  @foreach ($jurusan as $index)
                    <tr>
                      <td>{{ $number }}</td>
                      <td>Ilmu Terapan</td>
                      <td>{{ $index->name}}</td>
            
                      <td style="display: flex;">
                          <form action="{{ route('deleteJurusan', $index->id) }}" method="POST"  >
                              <a href="{{ route('editJurusan', $index->id) }}" class="btn btn-primary" >Edit</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger" style="margin-left: 10px;" onclick="return confirm('are you sure');">Delete</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                    @php
                      $number++
                    @endphp
                    
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
   
    
      
@endsection