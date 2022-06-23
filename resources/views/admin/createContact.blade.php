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
                          <div><h5 class="card-title">Form Tambah Contact Us</h5></div><br>

                            <form action="{{route('create.addContact')}}"  method="post" id="contact-form" enctype="multipart/form-data">
                                {{ csrf_field() }}
                              <div class="row mb-3">
                                <label for="nama_contact" class="col-sm-2 col-form-label">Contact</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="contact">
                                </div>
                              </div>  

                              <div class="row mb-3">
                                <label for="jenis_contact" class="col-sm-2 col-form-label">Jenis Contact</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" name="jenis_contact">
                                </div>
                              </div>
                                                                    
                              <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                  <button type="submit" class="btn btn-primary">Upload Contact</button>
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
