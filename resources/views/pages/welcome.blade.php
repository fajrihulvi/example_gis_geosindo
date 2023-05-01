@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
        <p class="h1">Kategori Spasial</p>
        <hr/>
        <p><a class="btn btn-primary" href="#" role="button" data-bs-toggle="modal" data-bs-target="#addKategoriModal"><i class="bi bi-plus-circle"></i> Tambah Data</a></p>
        @if(session('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tampilkan</th>
                    <th scope="col">Jenis Peta</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $data)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$data->kategori}}</td>
                    <td><span class="badge {{$data->tampilkan=='1' ? 'text-bg-success' : 'text-bg-danger'}}">{{$data->tampilkan=='1' ? 'Ya' : 'Tidak' }}</span></td>
                    <td>{{$data->jenis_peta}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('/jenis/spasial/'.$data->id) }}" role="button"><i class="bi bi-columns"></i></a>
                        <a class="btn btn-warning" href="#" role="button" data-bs-toggle="modal" data-bs-target="#editKategoriModal{{$data->id}}"><i class="bi bi-pencil"></i></a>
                        <a class="btn btn-danger" href="{{ url('/kategori/delete/'.$data->id) }}" role="button"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                @include('pages.edit_kategori')
                @endforeach
            </tbody>
        </table>
        @include('pages.add_kategori')
    </div>
</div>
@stop