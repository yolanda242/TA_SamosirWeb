@extends('layouts.templateUser')

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
        <div class="container-content">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
						<section id="objek"  class="section-bg" >
							<div class="container">
							  <header class="section-header">
								<h5 class="section-title">{{ $detailEvent->nama_event }}</h5>
							  </header>
							</div>

							<div class="container-detailgambar">
								<img src="{{ asset('DataEvent/') }}/{{ $detailEvent->gambar }} " class="card-img-top " alt="..." style="width: 10%">
							  </div>

							<div class="container-desk">
								<p class="card-text">{{ $detailEvent->deskripsi }}</p>
							</div>

                            <div class="container-lokasi">
								<strong><p class="card-text">{{ $detailEvent->lokasi}}</p></strong>
							</div>

						  </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection