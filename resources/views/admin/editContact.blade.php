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
                        <div><h5 class="card-title">Form Edit Contact</h5></div><br>

                          <form action="{{route('updatedataContact.addContact',$edits->id)}}"  method="post" id="contact-form" enctype="multipart/form-data">
                              {{ csrf_field() }}
                            <div class="row mb-3">
                              <label for="contact" class="col-sm-2 col-form-label">Contact</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="contact" value="{{$edits->contact}}">
                              </div>
                            </div>  
                          
                            <div class="row mb-3">
                              <label for="jenis_contact" class="col-sm-2 col-form-label">Jenis Contact</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" name="jenis_contact" value="{{$edits->jenis_contact}}">
                              </div>
                            </div>
                                                                  
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary">Update Contact</button>
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
