@extends('layouts.templateUser')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Objek Wisata</h1>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
						<section id="objek"  class="section-bg" >
                            <div class="container-detail">
                                <div class="row">
                                    <div class="sub-heading">
                                        <h3>{{ $detailWisata->nama_objek }}</h3>
                                    </div>
                                    <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                                        <div class="about-slider">
                                            <img src="{{ asset('DataWisata/') }}/{{ $detailWisata->gambar }} " class="card-img-top " alt="...">
                                        </div>
                                    </div>

                                    <div class="col-md-7 col-sm-12 wow fadeInLeft">
                                        <div class="content">
                                            <p>{{ $detailWisata->deskripsi }}</p>
                                            <p><strong>
                                                {{ $detailWisata->lokasi}}
                                            </strong></p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
						</section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection