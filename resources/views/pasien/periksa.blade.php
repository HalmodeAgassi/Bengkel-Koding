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
        <label for="nama_obat" class="form-label">Nama Anda</label>
        <input type="text" class="form-control" id="nama_obat">

        <label for="dokter" class="form-label mt-3">Dokter</label>
        <input type="text" class="form-control" id="dokter">
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
            <p> Riwayat </p>
    </a>
</li>
@endsection
