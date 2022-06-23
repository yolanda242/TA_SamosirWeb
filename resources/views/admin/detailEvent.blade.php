@extends('layouts.template')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Event</h1>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
						<section id="objek"  class="section-bg" >
							<div class="container">
							  <header class="section-header">
								<h5 class="section-title">{{ $detail->nama_event }}</h5>
							  </header>
							</div>

							<div class="container-detailgambar">
								<img src="{{ asset('DataEvent/') }}/{{ $detail->gambar }} " class="card-img-top " alt="..." style="width: 20%">
							  </div>

							<div class="container-desk">
								<p class="card-text">{{ $detail->deskripsi }}</p>
							</div>

                            <div class="container-lokasi">
								<p class="card-text">{{ $detail->lokasi}}</p>
							</div>

						  </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection