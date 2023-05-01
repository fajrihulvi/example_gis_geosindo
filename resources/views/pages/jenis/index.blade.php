@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <p class="h1">Jenis Spasial - {{$kategori->kategori}}</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$kategori->kategori}}</li>
            </ol>
          </nav>
        <hr/>
        <p><a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#addJenisModal"><i class="bi bi-plus-circle"></i> Tambah Data</a></p>
        @if(session('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif
        <table class="table tab2le-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jenis Spasial</th>
                    <th scope="col">Tampilkan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $data)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$data->jenis}}</td>
                    <td><span class="badge {{$data->tampilkan=='1' ? 'text-bg-success' : 'text-bg-danger'}}">{{$data->tampilkan=='1' ? 'Ya' : 'Tidak' }}</span></td>
                    <td>
                        <a class="btn btn-info" href="{{ url('/data/spasial/'.$data->id) }}" role="button"><i class="bi bi-database"></i></a>
                        <a class="btn btn-success" href="#" role="button" data-bs-toggle="modal" data-bs-target="#komponenModal{{$data->id}}"><i class="bi bi-columns"></i></a>
                        <a class="btn btn-warning" href="#" role="button" data-bs-toggle="modal" data-bs-target="#editJenisModal{{$data->id}}"><i class="bi bi-pencil"></i></a>
                        <a class="btn btn-danger" href="{{ url('/jenis/spasial/delete/'.$data->id) }}" role="button"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @include('pages.jenis.komponen')
                @include('pages.jenis.edit_jenis')
                @endforeach
            </tbody>
        </table>
        @include('pages.jenis.add_jenis')
    </div>
</div>
@stop