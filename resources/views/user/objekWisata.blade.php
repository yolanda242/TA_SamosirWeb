@extends('layouts.templateUser')

@section('content')
<div class="content-wrapper" style="margin-top: 5%">
  <div class="card-body">
    <section id="objek"  class="section-bg">
      <div class="container">
        <header class="section-header">
          <br><h3 class="section-title" style="margin-top : 40px;">Objek Wisata</h3>
        </header>
      </div>
  
      <div class="container-objek" style="margin-top: 100px;">
        <div class="row">
          <div class="container-search">
            <form action="/objekUser">
              <div class="input-group mb-4 mt-4" style="width: 20rem;">
                <input type="text" class="form-control" placeholder="Search..." name="search" id="search" value="{{ request('search') }}">
                <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row">
          @foreach ($objek  as $objek)
          <div class="card" style="width: 20rem;">
            <div class="card-body" style="width: 20rem;">
              <img src="{{ asset('DataWisata/') }}/{{ $objek->gambar }}" class="card-img-top" alt="..." style="height: 10rem; width: 10rem;" >
            </div>
            <div class="container-article">
              <h5 class="card-title">{{ $objek->nama_objek }}</h5>
              <p class="card-text">{!! Str::limit (($objek->deskripsi), 50) !!}</p>
              <strong><p class="card-text"><i class="fa-solid fa-location-dot"></i>{!! Str::limit (($objek->lokasi), 20) !!}</p></strong>
              <a href="/DetailWisata/{{ $objek->id }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
 
@endsection