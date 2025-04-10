@extends('layout.app')

@section('content-header')
<div class="row">
                            <div class="col-sm-6">
                                <h3 class="mb-0">Dashboard</h3>
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
