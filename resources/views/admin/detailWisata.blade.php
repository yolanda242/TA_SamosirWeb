@extends('layouts.template')

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
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
						<section id="objek"  class="section-bg" >
							<div class="container">
							  <header class="section-header">
								<h5 class="section-title">{{ $detail->nama_objek }}</h5>
							  </header>
							</div>

							<div class="container-detailgambar">
								<img src="{{ asset('DataWisata/') }}/{{ $detail->gambar }} " class="card-img-top " alt="...">
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

{{-- <div class="content-wrapper">
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
				<div class="col-md-12">
					<div class="card">
						<
						{{-- <table class="table table-striped">
							<tbody>
							  <tr>
								<th scope="col">Nama Event </th>
								<th scope="col">: </th>
								<th scope="col">{{ $detail->nama_objek }}</th>
							  </tr>
							</tbody>
							<tbody>
							  <tr>
								<th scope="col">Gambar </th>
								<th scope="col">: </th>
								<th scope="col"><img src="{{ asset('DataEvent/') }}/{{ $detail->gambar }}" alt="" style="width: 1000px"></th>
							  </tr>
							  <tr>
								<th scope="col">Lokasi </th>
								<th scope="col">: </th>
								<th scope="col">{{ $detail->lokasi }}</th>
							  </tr>
							  <tr>
								<th scope="col">Deskripsi </th>
								<th scope="col">: </th>
								<th scope="col">{{ $detail->deskripsi }}</th>
							  </tr>
							</tbody>
						  </table>
					--}}</div> 
				</div>
		</div>
	</section>
  </div>
 --}}
@endsection