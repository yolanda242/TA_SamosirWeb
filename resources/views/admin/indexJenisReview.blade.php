@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenis Review</h1>
                </div>
                <div class="col-sm-6">
                    <a href="/TambahJenisReview" class="btn btn-primary" style="float: right;" id="openAddModal">Tambah Jenis Review</button></a>
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
                            <h3 class="card-title">List Jenis Review</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">id</th>
                                      <th scope="col">Kode Review</th>
                                      <th scope="col">Jenis Review</th>
                                      <th scope="col">Aksi</th>
                                    </tr>
                                  </thead>
                          
                                  <tbody>
                                      <?php $no = 1;?>
                                      @foreach ($review as $value)
                                     <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $value->kode_review}}</td>
                                        <td>{{ $value->nama_review }}</td>
                                        <td>
                                            <a href="/jenis/Delete_Review/{{$value->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete?')">Hapus</a>
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