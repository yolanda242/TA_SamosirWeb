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
                          <div><h5 class="card-title">Form Tambah Data Objek Wisata</h5></div><br>

                            <form action="{{route('createdata.addWisata')}}"  method="post" id="contact-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                              <div class="row mb-3">
                                <label for="nama_wisata" class="col-sm-2 col-form-label">Nama Objek Wisata</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="nama_objek">
                                </div>
                              </div>  
                              <div class="row mb-3">
                                  <label for="gambar" class="col-sm-2 col-form-label">File Upload</label>
                                  <div class="col-sm-6">
                                    <input class="form-control" type="file" id="formFile" name="gambar">
                                  </div>
                                </div> 
                              <div class="row mb-3">
                                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-6">
                                  <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="lokasi">
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
