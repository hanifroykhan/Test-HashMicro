@extends('layouts.app')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cek Huruf</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('indexHuruf') }}">Index</a></li>
              <li class="breadcrumb-item active">Cek Huruf</li>
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
                <form action="{{ route('cekHuruf') }}" method="POST">
                    @csrf
                    <div class="form-group" >
                        <label for="input1">Input 1:</label>
                        <input type="text" id="input1" name="input1">
                    </div>
                    <div class="form-group">
                        <label for="input2">Input 2:</label>
                        <input type="text" id="input2" name="input2">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Periksa</button>
                    </div>
                        @if (isset($periksa))
                            <p>Hasil: {{ $periksa }}%</p>
                        @endif
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
      
   
    
      
@endsection