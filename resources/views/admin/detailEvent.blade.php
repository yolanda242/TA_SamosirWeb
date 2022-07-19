@extends('layouts.template')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 style="text-align: center">Event</h1>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding: 20px 80px 20px 80px">
						<section id="objek"  class="section-bg" >
							<div class="container">
							  <header class="section-header mt-4 mb-4">
								<h5 class="section-title">{{ $detail->nama_event }}</h5>
							  </header>
							</div>

							<div class="container-detailgambar mt-4 mb-4">
								<img src="{{ asset('DataEvent/') }}/{{ $detail->gambar }} " class="card-img-top " alt="..." style="height: 20rem; width: 35rem;">
							  </div>

							<div class="container-desk mt-4 mb-4">
								<p class="card-text" style="text-align: justify">{{ $detail->deskripsi }}</p>
							</div>

                            <div class="container-lokasi mt-4 mb-4">
								<p class="card-text"><i class="fa-solid fa-location-dot"></i>{{ $detail->lokasi}}</p>
							</div>

						  </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection