@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        <ul>
                            foreach ($errors->all() as $message) {
                            <li>{{ $message }}</li>
                            }
                        </ul>
                    </div>
                    @endif

                    @if (session('status') == 'Success')
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Data Event</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection