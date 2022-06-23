@extends('layouts.template')

@section('content')

<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
              <div class="col-md-12">
                  <div class="card">
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div><h5 class="card-title">Form Tambah Edit Event</h5></div><br>

                          <form action="{{route('updatedataEvent.addEvent',$edits->id)}}"  method="post" id="contact-form" enctype="multipart/form-data">
                              {{ csrf_field() }}
                            <div class="row mb-3">
                              <label for="nama_wisata" class="col-sm-2 col-form-label">Nama Event</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="nama_event" value="{{$edits->nama_event}}">
                              </div>
                            </div>  
                            <div class="row mb-3">
                                <label for="gambar" class="col-sm-2 col-form-label">File Upload</label>
                                <div class="col-sm-6">
                                  <input class="form-control" type="file" id="formFile" name="gambar" value="{{$edits->gambar}}">
                                </div>
                              </div> 
                            <div class="row mb-3">
                              <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="deskripsi" value="{{$edits->deskripsi}}">
                              </div>
                            </div>

                            <div class="row mb-3">
                              <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="lokasi" value="{{$edits->lokasi}}">
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
  </section>
</div>
@endsection
