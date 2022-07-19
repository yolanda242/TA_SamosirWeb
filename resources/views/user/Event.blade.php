@extends('layouts.templateUser')

@section('content')
<div class="content-wrapper" style="margin-top: 5%">
  <div class="card-body">
    <section id="event"  class="section-bg" >
      <div class="container">
        <header class="section-header">
          <br><h3 class="section-title" style="margin-top : 40px;">Event</h3>
        </header>
      </div>

      <div class="container-event" style="margin-top: 100px;">
        <div class="row">
          <div class="container-search">
            <form action="/eventUser">
              <div class="input-group mb-4 mt-4">
                <input type="text" class="form-control" placeholder="Search..." name="search" id="search" value="{{ request('search') }}">
                <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
              </div>
            </form>
          </div>
        </div>

        <div class="row">
          @foreach ($even  as $event)
          <div class="card" style="width: 20rem;">
            <div class="card-body" style="width: 20rem;">
              <img src="{{ asset('DataEvent/') }}/{{ $event->gambar }}"  class="card-img-top " alt="..." style="height: 10rem; width: 10rem;" >
            </div>
            <div class="container-article">
              <h5 class="card-title">{{ $event->nama_event }}</h5>
              <p class="card-text">{!! Str::limit(($event->deskripsi),50) !!}</p>
              <strong><p class="card-text"><i class="fa-solid fa-location-dot"></i>{{ $event->lokasi }}</p></strong>
            </div>
              <a href="/DetailEvent/{id}" class="btn btn-primary mt-4">Read More</a>
          </div>
          @endforeach
        </div>
      </section>
    </div>
  </div>
</div>
@endsection