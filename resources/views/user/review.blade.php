@extends('layouts.templateUser')

@section('content')

{{-- <div class="container-review">
  <div class="message"><strong>Jika anda ingin memberikan kritik, saran dan komentar, Silahkan isi form ini</strong></div>
  <form action="{{route('create.addReview')}}"  method="post" id="contact-form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama</label>
      <input type="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Alamat</label>
      <input type="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat" name="alamat">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Review</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tuliskan kritik, saran, ide anda" name="deskripsi_review"></textarea>
    </div>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>
  </div> --}}
  
@endsection