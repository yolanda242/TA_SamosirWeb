@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Review User</h1>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                @foreach ($review as $review)
                <div class="col-md-12">
                    <div class="card">
                       
                        <section id="review"  class="section-bg" >
							<div class="container">
							    <h4 class="section-title">{{ $review->nama}}</h4>
							</div>

							<div class="container">
								<h4 class="card-text">{{ $review->alamat }}</h4>
							</div>

                            <div class="container">
								<p class="card-text">{{ $review->deskripsi_review }}</p>
							</div>

						  </section>
                        
						
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection