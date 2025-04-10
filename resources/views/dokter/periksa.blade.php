@extends('layout.app')

@section('content-header')
<div class="row">
                            <div class="col-sm-6">
                                <h3 class="mb-0">Periksa</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-end">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                        Periksa
                                    </li>
                                </ol>
                            </div>
                        </div>
@endsection

@section('content')
<div class="card mb-4">
                  <div class="card-header">
                    <h3 class="card-title">Periksa Table</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">No</th>
                          <th>Id Periksa</th>
                          <th>Pasien</th>
                          <th>Tanggal Periksa</th>
                          <th>Catatan</th>
                          <th>Biaya Periksa</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($periksas as $periksa)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $periksa->id}}</td>
                          <td>{{ $periksa->pasien->nama}}</td>
                          <td>{{ $periksa->tgl_periksa}}</td>
                          <td>{{ $periksa->catatan}}</td>
                          <td>{{ $periksa->biaya_periksa}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
@endsection

@section('sidebar')
<li class="nav-item">
    <a href="#" class="nav-link active">
        <i class="nav-icon bi bi-speedometer"></i>
            <p> Dashboard </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link active">
        <i class="nav-icon bi bi-speedometer"></i>
        <p> Periksa </p>
    </a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link active">
        <i class="nav-icon bi bi-speedometer"></i>
            <p> Obat </p>
    </a>
</li>
@endsection
