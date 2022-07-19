@extends('layouts.template')

@section('content')
<!-- Content Wrapper. Contains page content -->

  

@if (session('status') == 'Success')

<script type ="text/JavaScript">  
alert("{{ session('message') }}")
</script>

@endif

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $jumlah_event }}</h3>

                            <p>Event</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <a href="/admin/event" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $jumlah_wisata }}</h3>

                            <p>Objek Wisata</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-folder"></i>
                        </div>
                        <a href="/admin/objek" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="container-fluid-review">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Review User</h1>
                    </div>
                </div>

                <section class="content">
                    <div class="container-fluid">
            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">List Review</h3>
                                    </div>
            
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Jenis Review</th>
                                                    <th>Deskripsi</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
            
                                            <tbody>
                                                <?php $no = 1; ?>
                                                    @foreach ($review as $value)
                                                        <tr>
                                                            <td>{{ $no }}</td>
                                                            <td>{{ $value->nama }}</td>
                                                            <td>{{ $value->alamat }}</td>
                                                            <td>{{ $value->nama_review }}</td>
                                                            <td>{{ Str::limit ($value->deskripsi, 50) }}</td>
                                                            <td>
                                                                <a href="/Delete_review/{{$value->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')">Hapus</a>
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
        </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection