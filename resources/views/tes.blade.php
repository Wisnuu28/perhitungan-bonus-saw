@extends('apps.layout')
@section('sectionheader')
 <h1>
    Data Mobil
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Mobil</li>
  </ol>
 @endsection
 @section('content')
 <h4>Jabatan</h4>
                <table class="table" id="sum_table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Pilihan</th>
                            <th scope="col">Bobot</th>
                            <th scope="col"><i class="fa fa-cogs"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($kedisiplinans as $k)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$k->pilihan}}</td>
                            <td>{{$k->bobot}}</td>
                            <td><a href="#" class="btn btn-danger">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
 @endsection