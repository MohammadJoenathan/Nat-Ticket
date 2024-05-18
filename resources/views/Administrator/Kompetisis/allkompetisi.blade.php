@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Detail Data Kompetisi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Kompetisi</li>
        <li class="breadcrumb-item"><a href="{{ route('Kompetisi') }}"></a>Kompetisi</li>
        <li class="breadcrumb-item active">Detail Data Kompetisi</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('allKompetisi', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="id" class="form-label">ID Kompetisi</label>
            <input type="number" class="form-control" id="id" name="id" value="{{ $data->id }}" readonly>
          </div>
          <div class="col-12">
            <label for="nama_kompetisi" class="form-label">Nama Kompetisi</label>
            <input type="text" class="form-control" id="nama_kompetisi" name="nama_kompetisi" value="{{ $data->nama_kompetisi }}" readonly>
          </div>
          <div class="col-12">
            <label for="tipe_kompetisi" class="form-label">Tipe Kompetisi</label>
            <input type="text" class="form-control" id="tipe_kompetisi" name="tipe_kompetisi" value="{{ $data->tipe_kompetisi }}" readonly>
          </div>
          <div class="col-12">
            <label for="musim_kompetisi" class="form-label">Musim Kompetisi</label>
            <input type="text" class="form-control" id="musim_kompetisi" name="musim_kompetisi" value="{{ $data->musim_kompetisi }}" readonly>
          </div>
        </form>
      </div>
    </div>
@endsection