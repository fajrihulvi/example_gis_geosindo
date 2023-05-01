@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <p class="h1">Data Spasial - {{$jenis->jenis}}</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$jenis->jenis}}</li>
            </ol>
          </nav>
        <hr/>
        <p><a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#addDataSpasialModal"><i class="bi bi-plus-circle"></i> Tambah Data</a></p>
        @if(session('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif
        <table class="table tab2le-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nomor Objek</th>
                    <th scope="col">Nama Objek</th>
                    <th scope="col">Alamat Lengkap</th>
                    <th scope="col">Tampilkan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $data)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$data->nomor_objek}}</td>
                    <td>{{$data->nama_objek}}</td>
                    <td>{{$data->alamat}}</td> 
                    <td><span class="badge {{$data->tampilkan=='1' ? 'text-bg-success' : 'text-bg-danger'}}">{{$data->tampilkan=='1' ? 'Ya' : 'Tidak' }}</span></td>
                    <td>
                        <a class="btn btn-success" href="#" role="button" data-bs-toggle="modal" data-bs-target="#detailSpasialModal{{$data->id}}"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-warning" href="#" role="button" data-bs-toggle="modal" data-bs-target="#editSpasialModal{{$data->id}}"><i class="bi bi-pencil"></i></a>
                        <a class="btn btn-danger" href="{{ url('/data/spasial/delete/'.$data->id) }}" role="button"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @include('pages.data.detail')
                @include('pages.data.edit')
                @endforeach
            </tbody>
        </table>
        @include('pages.data.add')
    </div>
</div>
@stop