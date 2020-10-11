@extends('apps.layout')
 @section('sectionheader')
 <h1>
    Data Bonus
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
            <table class="table" id="sum_table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Nilai Masa Kerja</th>
                    <th scope="col">Nilai Jabatan</th>
                    <th scope="col">Nilai Kedisiplinan</th>
                    <th scope="col">Nilai Kinerja</th>
                    <th scope="col">Total Nilai</th>
                    <th scope="col">Bonus</th>
                </tr>
            </thead>
            <tbody>
              @foreach($hitung as $p)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->masa_kerja}}</td>
                <td>{{$p->jabatan}}</td>
                <td>{{$p->kedisiplinan}}</td>
                <td>{{$p->kinerja}}</td>
                <td>{{$p->total_nilai*100}}%</td>
                <td>
                @if($p->total_nilai == "1")
                    <p>Rp2.000.000</p>
                @elseif($p->total_nilai >=0.675&&$p->total_nilai<1)
                    <p>Rp1.000.000</p>
                @elseif($p->total_nilai >=0.3&&$p->total_nilai<0.675)
                    <p>Rp500.000</p>
                @else
                    <p>Tidak Dapat Bonus</p>
                @endif
                  <!-- <a href="/" class ="btn btn-success">Hitung Bonus</a> -->
                </td>
              </tr>
              @endforeach
            </tbody>
            </table>
 @endsection