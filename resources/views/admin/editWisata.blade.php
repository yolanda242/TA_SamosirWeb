@extends('layouts.template')

@section('content')

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" >
          <div class="card" style="margin: 50px;">
            <div class="card-header">
              <div><h5 class="card-title" style="padding: 20px;">Form Edit Objek Wisata</h5></div>
            </div>

              <!-- /.card-header -->
              <div class="card-body" style="margin-top: 40px; margin-left : 30px;">
                  <form action="{{route('updatedataWisata.addWisata',$edits->id)}}"  method="post" id="contact-form" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="row mb-4">
                      <label for="nama_wisata" class="col-sm-3 ml-3 col-form-label">Nama Objek Wisata</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control @error('nama_objek') is-invalid @enderror" name="nama_objek" value="{{$edits->nama_objek}}">
                        @error('nama_objek')
                        <div class="invalid-feedback">
                          Nama Objek Wisata Harus Diisi
                        </div>
                        @enderror
                      </div>
                    </div>  

                    <div class="row mb-4">
                        <label for="gambar" class="col-sm-3 ml-3 col-form-label">File Upload</label>
                        <div class="col-sm-7">
                          <input class="form-control" type="file" id="formFile" name="gambar" accept="image/*" value="{{$edits->gambar}}">
                        </div>
                    </div> 
                    
                    <div class="row mb-4">
                      <label for="deskripsi" class="col-sm-3 ml-3 col-form-label">Deskripsi</label>
                      <div class="col-sm-7">
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror"  rows="3" name="deskripsi">{{$edits->deskripsi}}</textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                          Deskripsi Harus Diisi
                        </div>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label for="lokasi" class="col-sm-3 ml-3 col-form-label">Lokasi</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{$edits->lokasi}}">
                        @error('lokasi')
                        <div class="invalid-feedback">
                          Lokasi Harus Diisi
                        </div>
                        @enderror
                      </div>
                    </div>
                                                          
                    <div class="row mb-4">
                      <label class="col-sm-3 ml-3 col-form-label"></label>
                      <div class="col-sm-6 mt-4">
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
  </section>
</div>
@endsection
