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
              <div><h5 class="card-title" style="padding: 20px;">Form Edit Contact</h5></div>
            </div>
              <!-- /.card-header -->
              <div class="card-body" style="margin-top: 40px; margin-left: 30px;">
                  <form action="{{route('updatedataContact.addContact',$edits->id)}}"  method="post" id="contact-form" enctype="multipart/form-data">
                      {{ csrf_field() }}
                    <div class="row mb-4">
                      <label for="contact" class="col-sm-2 ml-3 col-form-label">Contact</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{$edits->contact}}">
                        @error('contact')<div class="invalid-feedback">Contact Harus Diisi</div> @enderror
                      </div>
                    </div>  
                  
                    <div class="row mb-4">
                      <label for="jenis_contact" class="col-sm-2 ml-3 col-form-label">Jenis Contact</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control @error('jenis_contact') is-invalid @enderror" name="jenis_contact" value="{{$edits->jenis_contact}}">
                        @error('jenis_contact')<div class="invalid-feedback">Jenis Contact Harus Diisi</div> @enderror
                      </div>
                    </div>
                                                          
                    <div class="row mb-4">
                      <label class="col-sm-2 ml-3 col-form-label"></label>
                      <div class="col-sm-7 mt-4">
                        <button type="submit" class="btn btn-primary">Update Contact</button>
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
