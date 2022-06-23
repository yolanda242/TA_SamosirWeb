@extends('layouts.templateUser')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/assets/img/TELE.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
    </div>

    <div class="carousel-item">
      <img src="/assets/img/Pusat Informasi Geopark.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
    </div>

    <div class="carousel-item">
      <img src="/assets/img/Bukit Holbung.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
    </div>
      
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>  
</div>

<div class="container-home">
      <section id="objek"  class="section-bg" >
        <div class="container">
          <header class="section-header">
            <br><h3 class="section-title">Objek Wisata</h3>
          </header>
        </div>
  
        <div>
          <nav aria-label="Page navigation example" style=margin-top:2%>
              <ul class="pagination justify-content-center"></ul>
          </nav>
        </div>

        <div class="container-objek">
          <div class="row">
            @foreach ($objwisata  as $obj)
            <div class="card" style="width: 20rem;">
              <div class="card-body" style="width: 20rem;">
                <img src="{{ asset('DataWisata/') }}/{{ $obj->gambar }}" class="card-img-top" alt="..." style="height: 10rem; width: 10rem;" >
              </div>
              <div class="container-article">
                <h5 class="card-title">{{ $obj->nama_objek }}</h5>
                <p class="card-text">{!! Str::limit (($obj->deskripsi), 50) !!}</p>
                <strong><p class="card-text"><i class="fa-solid fa-location-dot"></i>{!! Str::limit (($obj->lokasi), 20) !!}</p></strong>
                <a href="/DetailWisata/{{ $obj->id }}" class="btn btn-primary">Read More</a>
              </div>
            </div>
            @endforeach
          </div>
      </section>

      <section id="event"  class="section-bg" >
        <div class="container">
          <header class="section-header">
            <br><h3 class="section-title">Event</h3>
          </header>
        </div>
  
        <div>
          <nav aria-label="Page navigation example" style=margin-top:2%>
              <ul class="pagination justify-content-center"></ul>
          </nav>
        </div>

        <div class="container-event">
          <div class="row">
            @foreach ($event  as $event)
            <div class="card" style="width: 20rem;">
              <div class="card-body" style="width: 20rem;">
                <img src="{{ asset('DataEvent/') }}/{{ $event->gambar }}"  class="card-img-top " alt="..." style="height: 10rem; width: 10rem;" >
              </div>
              <div class="container-article">
                <h5 class="card-title">{{ $event->nama_objek }}</h5>
                <p class="card-text">{!! Str::limit(($event->deskripsi),50) !!}</p>
                <strong><p class="card-text"><i class="fa-solid fa-location-dot"></i>{{ $event->lokasi }}</p></strong>
              </div>
                <a href="/DetailEvent/{id}" class="btn btn-primary">Read More</a>
            </div>
            @endforeach
        </div>
      </section>
    </div>
  
</div>

@endsection

