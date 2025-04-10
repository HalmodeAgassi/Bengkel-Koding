@extends('layout.app')

@section('content-header')
<div class="row">
                            <div class="col-sm-6">
                                <h3 class="mb-0">Obat</h3>
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
                                        Dashboard
                                    </li>
                                </ol>
    </div>
</div>
@endsection

@section('content')
<!-- Form Input Obat -->
<div class="card card-primary card-outline mb-4">
  <!--begin::Header-->
  <div class="card-header">
    <div class="card-title">Quick Example</div>
  </div>
  <!--end::Header-->

  <!--begin::Form-->
  <form>
    <!--begin::Body-->
    <div class="card-body">
      <div class="mb-3">
        <label for="nama_obat" class="form-label">Nama Obat</label>
        <input type="text" class="form-control" id="nama_obat">

        <label for="kemasan" class="form-label mt-3">Kemasan</label>
        <input type="text" class="form-control" id="kemasan">

        <label for="harga" class="form-label mt-3">Harga</label>
        <input type="text" class="form-control" id="harga">
      </div>
    </div>
    <!--end::Body-->

    <!--begin::Footer-->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <!--end::Footer-->
  </form>
  <!--end::Form-->
</div>

<!-- Table Obat -->
<div class="card mb-4">
  <div class="card-header">
    <h3 class="card-title">Obat Table</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 10px">No</th>
          <th>Id Obat</th>
          <th>Nama Obat</th>
          <th>Kemasan</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($obat as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nama_obat }}</td>
          <td>{{ $item->kemasan }}</td>
          <td>{{ $item->harga }}</td>
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

