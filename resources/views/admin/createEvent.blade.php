@extends('layouts.template')

@section('content')

<div class="content-wrapper">
    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card" style="margin: 50px;">
                <div class="card-header">
                  <div><h5 class="card-title" style="padding:20px;">Form Tambah Event</h5></div>
                </div>
                <div class="card-body" style="margin-top: 40px; margin-left : 30px;">
                    <form action="{{route('createdata.addEvent')}}" method="post" id="contact-form" enctype="multipart/form-data">
                        {{ csrf_field() }}
  
                      <div class="row mb-4">
                        <label for="nama_event" class="col-sm-2 ml-3 col-form-label">Nama Event</label>
                        <div class="col-sm-7">
                          <input type="text" id="nama_event" name="nama_event" class="form-control @error('nama_event') is-invalid @enderror"> @error('nama_event')<div class="invalid-feedback">Nama Event Harus Diisi</div> @enderror
                        </div>
                      </div>  
  
                      <div class="row mb-4">
                        <label for="gambar" class="col-sm-2 ml-3 col-form-label">File Upload</label>
                        <div class="col-sm-7">
                          <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile" name="gambar">
                          @error('gambar')<div class="invalid-feedback">Gambar Harus Diisi</div> @enderror
                        </div>
                      </div> 
                        
                        <div class="row mb-4">
                          <label for="deskripsi" class="col-sm-2 ml-3 col-form-label">Deskripsi</label>
                          <div class="col-sm-7">
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" rows="4" name="deskripsi"></textarea>
                              @error('deskripsi')
                              <div class="invalid-feedback">
                                Deskripsi Harus Diisi
                              </div>
                              @enderror
                          </div>
                        </div>
  
                      <div class="row mb-4">
                        <label for="lokasi" class="col-sm-2 ml-3 col-form-label">Lokasi</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi">
                          @error('lokasi')
                            <div class="invalid-feedback">
                              Lokasi Harus Diisi
                            </div>
                          @enderror
                        </div>
                      </div>
                                                            
                      <div class="row mb-4">
                        <label class="col-sm-2 ml-3 col-form-label"></label>
                        <div class="col-sm-6 mt-4">
                          <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>
</div>
  @endsection
