@extends('Layouts.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Admin</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item"><a href="{{ route('Admin') }}"></a>Admin</li>
        <li class="breadcrumb-item active">Ubah Data Admin</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updateAdmin', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama_admin" class="form-label">Nama Admin</label>
            <input type="text" class="form-control" id="nama_admin" name="nama_admin" value="{{ $data->nama_admin }}" required>
          </div>
          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}" required>
          </div>
          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" required>
          </div>
          {{-- <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{ $data->password }}" required>
          </div> --}}
          {{-- <div class="col-12">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $data->jabatan }}" required>
          </div> --}}
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection