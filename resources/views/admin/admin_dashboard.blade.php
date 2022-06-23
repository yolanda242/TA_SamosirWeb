@extends('layouts.template')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
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
                <div class="card">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Review User</h1>
                        </div>
                    </div>

                <section class="content">
                    <div class="container-fluid">
            
                        <div class="row">
                            @foreach ($review as $review)
                            <div class="col-md-12">
                                <div class="card">
                                    <section id="review"  class="section-bg" >
                                        <h4 class="card-text">{{ $review->nama}}</h4>
                                        <h4 class="card-text">{{ $review->alamat }}</h4>
                                        <h4 class="card-text">{{ $review->jenis_review }}</h4>
                                        <p class="card-text">{{ $review->deskripsi_review }}</p>
                                    </section>  
                                </div>
                            </div>
                            @endforeach
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