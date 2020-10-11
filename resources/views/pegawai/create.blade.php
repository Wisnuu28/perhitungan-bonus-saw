@extends('apps.layout')
@section('sectionheader')
<h1>
    Tambah Pegawai
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
            <form action="/pegawai/store" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                    
                        <label>Masa Kerja</label>
                        <select class="custom-select" name="masa_kerja">
                            <option selected>--Masukkan Nilai--</option>
                    @foreach($masa_kerja as $mk)
                            <option value="{{$mk->bobot}}">{{$mk->pilihan}}</option>
                    @endforeach
                        </select>
                    
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="custom-select" name="jabatan">
                            <option selected>--Masukkan Nilai--</option>
                            <option value="1">Kepala Produksi</option>
                            <option value="0.75">Kepala Bagian</option>
                            <option value="0.50">Produksi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Absen</label>
                        <select class="custom-select" name="kedisiplinan">
                            <option selected>--Masukkan Nilai--</option>
                            <option value="1">25 Hari Masuk</option>
                            <option value="0.75">24-20 Hari Masuk</option>
                            <option value="0.5">19-15 Hari Masuk</option>
                            <option value="0.25">14-10 Hari Masuk</option>
                            <option value="0"><1 Hari Masuk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kinerja</label>
                        <select class="custom-select" name="kinerja">
                            <option selected>--Masukkan Nilai--</option>
                            <option value="1">Sangat Baik</option>
                            <option value="0.75">Baik</option>
                            <option value="0.5">Cukup</option>
                            <option value="0.25">Kurang</option>
                            <option value="0">Sangat Kurang</option>
                        </select>
                    </div>
                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                    <a class="btn btn-default" href="/dashboard">Cancel</a>
                </div>
            </div>
        </div>
   </div>
</section>
@endsection
