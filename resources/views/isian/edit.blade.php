@extends('layout.ndes')
@section('content')
<h3>Edit Data Pendaftar Tiket Konser Bts</h3>
<form method="POST" action="{{'/desti/'.$data->Nama}}">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="Nama" class="form-label">Nama</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Isi Nama Kamu" value="{{Session::get('Nama')}}">
    </div>
    <div class="mb-3">
        <label for="Email" class="form-label">Email</label>
        <input type="text" id="Email" name="Email" class="form-control" placeholder="Isi Email Kamu" value="{{Session::get('Email')}}">
    </div>
    <div class="mb-3">
        <label for="Nomor telepon" class="form-label">Nomor telepon</label>
        <input type="Number" id="Nomor telepon" name="Nomortelepon" class="form-control" placeholder="Isi Nomor Telepon Kamu" value="{{Session::get('Nomortelepon')}}">
    </div>
    <div class="mb-3">
        <label for="Seat" class="form-label">Seat</label>
        <input type="Number" id="Seat" name="Seat" class="form-control" placeholder="Pilih Seat" value="{{Session::get('Seat')}}">
    <div class="mb-3">
        <button>Edit</button> <a class="btn btn-secondry" href="/desti">Kembali</a>
    </div>
</form>
@endsection