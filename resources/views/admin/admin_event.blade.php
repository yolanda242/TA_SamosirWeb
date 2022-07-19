@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Event</h1>
                </div>
                <div class="col-sm-6">
                    <a href="/createevent" class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Event</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Data Event</h3>
                        </div>

                        <div class="card-body">
                            @if(session()->has('success-update'))
                            <div class="alert alert-warning col-lg-4" role="alert">
                              {{ session('success-update') }}
                            </div>
                            @elseif(session()->has('success-create'))
                            <div class="alert alert-success col-lg-4" role="alert">
                              {{ session('success-create') }}
                            </div>
                            @elseif(session()->has('success-delete'))
                            <div class="alert alert-danger col-lg-4" role="alert">
                              {{ session('success-delete') }}
                            </div>
                            @endif

                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Nama Event</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                        <th>Lokasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                        @foreach ($event as $value)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $value->nama_event }}</td>
                                                <td><img src="{{ asset('DataEvent/') }}/{{ $value->gambar }}" alt="" style="width: 100px"></td>
                                                <td>{{ Str::limit ($value->deskripsi, 50) }}</td>
                                                <td>{{ $value->lokasi }}</td>
                                                <td>
                                                    <a href="/admin/Detail_Event/{{$value->id}}" class="btn btn-primary btn-sm">Detail</a>
                                                    <a href="/admin/Edit_Event/{{$value->id}}" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/admin/Delete_Event/{{$value->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')">Hapus</a>
                                                </td>
                                            </tr>
                                    <?php $no++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection