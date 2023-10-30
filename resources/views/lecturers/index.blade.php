@extends('components.layout')
@section('title', 'Dosen')
<div class="container-fluid">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h2 class="text-dark m-0">Data Dosen</h2>
        </div>
    </div>
</div>
@section('content')
    <div class="box-header with-border">
        <a href="{{ route('lecturers.create') }}" class="btn btn-success btn-xs btnflat"><i class="fa fa-plus-circle"></i>
            Tambah Data
        </a>
    </div>
    <br>
    <div class="box-body table-responsive">
        <table class="table-stiped table-bordered table">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Keilmuan</th>
                    <th width="20%"><i class="fas fa-cog">Action</i></th>
                </tr>
            </thead>
            @foreach ($dosen as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->keilmuan }}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Detail</a>
                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin akan menghapus data?')">Delete
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
@endsection
