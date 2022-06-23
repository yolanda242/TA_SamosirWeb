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
                            <h3 class="card-title">List Data objek Wisata</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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