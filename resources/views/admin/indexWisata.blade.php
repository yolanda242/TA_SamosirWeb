@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Objek Wisata</h1>
                </div>
                <div class="col-sm-6">
                    <a href="/admin/create" class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Objek Wisata</button></a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Data objek Wisata</h3>
                        </div>
                        <!-- /.card-header -->
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
                                      <th scope="col">#</th>
                                      <th scope="col">Nama Objek Wisata</th>
                                      <th scope="col">Gambar</th>
                                      <th scope="col">Deskripsi</th>
                                      <th scope="col">Lokasi</th>
                                      <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                          
                                  <tbody>
                                      <?php $no = 1;?>
                                      @foreach ($ObjekWisata as $wisata)
                                     <tr>
                                      <td>{{ $no++ }}</td>
                                      <td>{{ $wisata->nama_objek}}</td>
                                      <td><img src="{{ asset('DataWisata/') }}/{{ $wisata->gambar }}" alt="" style="width: 100px"></td>
                                      <td>{{ Str::limit ($wisata->deskripsi, 50) }}</td>
                                      <td>{{ $wisata->lokasi }}</td>
                                      <td>
                                          <a href="/Wisata/Detail/{{$wisata->id}}" class="btn btn-primary btn-sm">Detail</a>
                                          <a href="/Wisata/Edit/{{$wisata->id}}" class="btn btn-warning btn-sm">Edit</a>
                                          <a href="/Wisata/Delete/{{$wisata->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')">Hapus</a>
                                      </td>
                                     </tr>
                                     
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
</div>
  @endsection