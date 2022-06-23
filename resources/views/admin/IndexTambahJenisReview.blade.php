@extends('layouts.template')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <div class="col-md-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div><h5 class="card-title">Form Tambah jenis Review</h5></div><br>
                      @if(session()->has('success'))
                      <div class="alert alert-success col-lg-8" role="alert">
                        {{ session('success') }}
                      </div>
                      @endif
                        <form action="{{route('createdata.addJenisReview')}}"  method="post" id="contact-form" enctype="multipart/form-data">
                            {{ csrf_field() }}
                          <div class="row mb-3">
                            <label for="kode_review" class="col-sm-2 col-form-label">Kode Review</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="kode_review">
                            </div>
                          </div>  
                          <div class="row mb-3">
                            <label for="jenis_review" class="col-sm-2 col-form-label">Jenis Review</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="nama_review">
                            </div>
                          </div>

                                                                
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-6">
                              <button type="submit" class="btn btn-primary">Submit Form</button>
                            </div>
                          </div>
          
                        </form><!-- End General Form Elements -->

                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
    </div>
</div>
@endsection