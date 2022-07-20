@extends('layouts.template')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-12">
          <div class="card" style="margin: 50px;">
            <div class="card-header">
              <div><h5 class="card-title" style="padding: 20px;">Form Tambah jenis Review</h5></div><br>
            </div>

              <div class="card-body" style="margin-top: 40px; margin-left : 30px;">
                  <form action="{{route('createdata.addJenisReview')}}"  method="post" id="contact-form" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="row mb-4">
                      <label for="kode_review" class="col-sm-2 ml-3 col-form-label">Kode Review</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control @error('kode_review') is-invalid @enderror" name="kode_review">
                        @error('kode_review')<div class="invalid-feedback">Kode Review Harus Diisi</div>@enderror
                      </div>
                    </div>  
                    <div class="row mb-4">
                      <label for="jenis_review" class="col-sm-2 ml-3 col-form-label">Jenis Review</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control @error('nama_review') is-invalid @enderror" name="nama_review">
                        @error('nama_review')<div class="invalid-feedback">Jenis Review Harus Diisi</div>@enderror
                      </div>
                    </div>

                                                          
                    <div class="row mb-4">
                      <label class="col-sm-2 ml-3 col-form-label"></label>
                      <div class="col-sm-7 mt-4">
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
</div>
@endsection