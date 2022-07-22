@extends('layouts.templateUser')

@section('content')
<div class="content-wrapper" style="margin-top: 10%;">
    <!-- Main content -->
    <section class="content">
        <div class="container-content">
            <div class="row mb-4">
                <div class="col-sm-12">
                    <h1 style="text-align: center">Objek Wisata</h1>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="card" style="background-color: white">
						<section id="objek"  class="section-bg" >
                            <div class="container-detail" style="padding: 5%">
                                <div class="row">
                                    <div class="sub-heading mb-4">
                                        <h3>{{ $detailWisata->nama_objek }}</h3>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 mt-4 mb-4 wow fadeInLeft" data-wow-delay="0.3s">
                                        <div class="about-slider">
                                            <img src="{{ asset('DataWisata/') }}/{{ $detailWisata->gambar }} " class="card-img-top " alt="...">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 mt-4 mb-4 wow fadeInLeft ">
                                        <div class="content" style="text-align: justify">
                                            <p>{{ $detailWisata->deskripsi }}</p>
                                        </div>
                                        <div class="content-lokasi mt-4 mb-4">
                                            <p><strong>
                                                <i class="fa-solid fa-location-dot"></i>{{ $detailWisata->lokasi}}
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