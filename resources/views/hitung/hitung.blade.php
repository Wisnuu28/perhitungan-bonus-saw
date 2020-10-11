@extends('apps.layout')
@section('sectionheader')
 <h1>
    Hitung Bonus
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Mobil</li>
  </ol>
 @endsection
 @section('content')
 <section class="content">
   <div class="box box-primary">
        <div class="box-header">
        @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
        </div>
        <div class="box-body">
            <div class="row">
                <form action="/hitung/store" method="post">
                {{ csrf_field() }}
                <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input class="form-control" readonly name="nama" value="{{ $pegawai->nama }}">
                </div>
                <div class="form-group">
                    <label>Masa Kerja</label>
                    <input class="form-control" readonly name="masa_kerja" value="{{ $pegawai->masa_kerja*0.2 }}">
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input class="form-control" readonly name="jabatan" value="{{ $pegawai->jabatan*0.2 }}">
                </div>
                <div class="form-group">
                    <label>Kedisiplinan</label>
                    <input class="form-control" readonly name="kedisiplinan" value="{{ $pegawai->kedisiplinan*0.3 }}">
                </div>
                <div class="form-group">
                    <label>Kinerja</label>
                    <input class="form-control" readonly name="kinerja" value="{{ $pegawai->kinerja*0.3 }}">
                </div>
                <div class="form-group">
                    <label>Total Nilai</label>
                    <input class="form-control" readonly name="total_nilai" value="{{$pegawai->masa_kerja*0.2+$pegawai->jabatan*0.2+$pegawai->kedisiplinan*0.3+$pegawai->kinerja*0.3}}">
                </div>
                <input type="submit" value="Upload" class="btn btn-primary">
                <a href="/dashboard" class="btn btn-danger">Cancel</a>
 @endsection