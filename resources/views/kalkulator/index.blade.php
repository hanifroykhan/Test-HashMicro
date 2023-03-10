@extends('layouts.app')

@section('content')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kalkulator</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('indexCalculator') }}">Index</a></li>
              <li class="breadcrumb-item active">Hitung Kalkulator</li>
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
               
               @if (isset($hasil))
                  <h3>Hasil: {{ $hasil }}</h3>
               @endif

              <form method="POST" action="{{ route('hitungCalculator') }}">
               @csrf
                <div class="form-group">
                  <input type="number" id="num1" name="num1" placeholder="Masukkan Angka" required>
                  &nbsp;
                  <select id="operator" name="operator" required >
                    <option value="">Pilih Operator</option>
                    <option value="+">+ (Tambah)</option>
                    <option value="-">- (Kurang)</option>
                    <option value="*">x (Kali)</option>
                    <option value="/">: (Bagi)</option>
                  </select>
                  &nbsp;
                  <input type="number" id="num2" name="num2" placeholder="Masukkan Angka" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Hitung</button>
                </div>      
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection