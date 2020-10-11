@extends('apps.layout')
 @section('sectionheader')
 <h1>
    Data Pegawai
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Mobil</li>
  </ol>
 @endsection
 @section('content')
 <section class="content">
   <div class="box box-primary">
        <div class="box-body">
        <a href ="/pegawai/create" class ="btn btn-primary">Tambah Pegawai</a>
            <table class="table" id="sum_table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Nilai Masa Kerja</th>
                    <th scope="col">Nilai Jabatan</th>
                    <th scope="col">Nilai Kedisiplinan</th>
                    <th scope="col">Nilai Kinerja</th>
                </tr>
            </thead>
            <tbody>
              @foreach($pegawai as $p)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->masa_kerja}}</td>
                <td>{{$p->jabatan}}</td>
                <td>{{$p->kedisiplinan}}</td>
                <td>{{$p->kinerja}}</td>
                <td>
                  <!-- <a href="/pegawai/edit/{{ $p->id }}" class ="btn btn-primary">Edit</a> -->
                  <a href="/pegawai/delete/{{ $p->id }}" class ="btn btn-danger">Hapus</a>
                  <a href="/pegawai/hitung/{{ $p->id }}" class ="btn btn-success">Hitung Bonus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
 @endsection