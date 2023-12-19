@extends('layout.ndes')
@section('content')

 <table class=table border= "2" cell padimg="10" cellspacing"0" >
    <thead>
         <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor telepon</th>
            <th>Seat</th>
            <th>Jumlah tiket</th>
            <th>Aksi</th>
         </tr>
     </thead>

        @foreach ($data as $item)
        <tr>
            <td>{{$item->Nama}}</td>
            <td>{{$item->Email}}</td>
            <td>{{$item->Nomortelepon}}</td>
            <td>{{$item->Seat}}</td>
            <td>{{$item->Jumlahtiket}}</td>
        <td>
            <a class='btn btn-warning btn-sm' href="{{url('/desti/'.$item->Nama.'/edit')}}">Edit</a>
            <form onsubmit="return confirm('Apakah Yakin?')" class="d-inline" action="{{'/desti/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
            </form>    
        </td>
        </tr>
        @endforeach
    </table>