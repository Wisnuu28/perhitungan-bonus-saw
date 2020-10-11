@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Edit Data
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Edit Data</li>
    </ol>
  </section>
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
                <form action="/pegawai/update/{{ $pegawai->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <input class="form-control" name="nama" value="{{ $pegawai->nama }}">
                </div>
                <div class="form-group">
                
                        <label>Masa Kerja</label>
                        <select class="custom-select" name="masa_kerja">
                            <option selected>{{ $pegawai->masa_kerja }}</option>
                            <option value="0.25">1 Tahun</option>
                            <option value="0.5">3 Tahun</option>
                            <option value="0.75">5 Tahun</option>
                            <option value="1">>5 Tahun</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="custom-select" name="jabatan">
                            <option selected>{{ $pegawai->jabatan }}</option>
                            <option value="1">Kepala Produksi</option>
                            <option value="0.75">Kepala Bagian</option>
                            <option value="0.25">Produksi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kedisiplinan</label>
                        <select class="custom-select" name="kedisiplinan">
                            <option selected>{{ $pegawai->kedisiplinan }}</option>
                            <option value="1">Sangat Baik</option>
                            <option value="0.75">Baik</option>
                            <option value="0.5">Cukup</option>
                            <option value="0.25">Kurang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kinerja</label>
                        <select class="custom-select" name="kinerja">
                            <option selected>{{ $pegawai->kinerja }}</option>
                            <option value="1">Sangat Baik</option>
                            <option value="0.75">Baik</option>
                            <option value="0.5">Cukup</option>
                            <option value="0.25">Kurang</option>
                        </select>
                    </div>
                <input type="submit" value="Upload" class="btn btn-primary">
                </form>
                <a class="btn btn-default" href="/dashboard">Cancel</a>
            </div>
        </div>
    </div>

@endsection