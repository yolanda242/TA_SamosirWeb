@extends('layouts.template')

@section('content')


<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="padding: 5%">
			<div class="row">
                <div class="col-sm-12">
                    <h1 style="text-align: center">Objek Wisata</h1>
                </div>
			</div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="padding: 20px 80px 20px 80px">
						<section id="objek"  class="section-bg" >
							<div class="container">
							  <header class="section-header">
								<h3 class="section-title mt-4 mb-4">{{ $detail->nama_objek }}</h3>
							  </header>
							</div>

							<div class="container-detailgambar mt-4 mb-4">
								<img src="{{ asset('DataWisata/') }}/{{ $detail->gambar }} " class="card-img-top " alt="..." style="height: 20rem; width: 35rem;">
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

</div> 

@endsection