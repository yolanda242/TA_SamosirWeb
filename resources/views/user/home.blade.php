@extends('layouts.templateUser')
@section('content')

<div class="content-wrapper">
  <div id="carouselExampleCaptions-lg" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner mb-4">
      <div class="carousel-item active">
        <img src="/assets/img/TELE.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Dinas Kebudayaan dan Pariwisata Samosir</h5>
              <p><b>Kabupaten Samosir - Satahi Saoloan</b> "Landasan untuk menciptakan persatuan dan kesatuan yang identik dengan azas kebersamaan atau gotong-royong dalam konteks yang berdampak positif untuk membangun Kabupaten Samosir"</p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="/assets/img/Pusat Informasi Geopark.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Dinas Kebudayaan dan Pariwisata Samosir</h5>
              <p><b>Samosir - Negeri Indah Kepingan Surga</b> "Di alam, semuanya sempurna. Pohon bisa berkerut, bengkok dengan cara yang aneh, dan masih cantik"</p>
          </div>
      </div>

      <div class="carousel-item">
        <img src="/assets/img/Bukit Holbung.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <h5>Dinas Kebudayaan dan Pariwisata Samosir</h5>
              <p><b>Samosir - Selamat Memasuki Gerbang Surga</b> "Berinteraksi, mengenali, dan menikmati keindahan alam, menyadarkan kita untuk menjaga dan melindungi kelestarian alam Indonesia"</p>
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
          <br><h3 class="section-title mt-4">Objek Wisata</h3>
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
              <p class="card-text">{!! Str::limit (($obj->deskripsi), 100) !!}</p>
              <strong><p class="card-text"><i class="fa-solid fa-location-dot"></i>{!! Str::limit (($obj->lokasi), 20) !!}</p></strong>
              <a href="/DetailWisata/{{ $obj->id }}" class="btn mt-4 btn-primary">Read More</a>
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
              <h5 class="card-title">{{ $event->nama_event }}</h5>
              <p class="card-text">{!! Str::limit(($event->deskripsi),100) !!}</p>
              <strong><p class="card-text"><i class="fa-solid fa-location-dot"></i>{{ $event->lokasi }}</p></strong>
            </div>
              <a href="/DetailEvent/{id}" class="btn mt-4 btn-primary" >Read More</a>
          </div>
          @endforeach
      </div>
    </section>
    
    <section id="review"  class="section-bg">
      <div class="container-rev mt-3">
        <div class="container" >
          <header class="section-header">
            <br><h3 class="section-title">Review</h3>
          </header>
        </div>

        <div>
          <nav aria-label="Page navigation example" style=margin-top:2%>
              <ul class="pagination justify-content-center"></ul>
          </nav>
        </div>


        {{-- Hasil Review --}}
        <div class="container-md row">
          <div class="col-md-6 mb-5">
            <div class="card" style="width: 30rem;">
              <div class="card-body">
                <?php $no = 1;?>
                @foreach ($review as $value)
                <h5 class="card-title">{{ $value->nama_review }} ({{ $value->kode_review}})</h5>
                <p class="card-text">{{ $value->deskripsi }}</p>
                - <small>{{ $value->nama }} from <i>{{ $value->alamat }}</i></small>
                @endforeach
            </div>
              {{ $review->links()}}
            </div>

          </div>

          {{-- Review --}}
          <div class="col-md-6 mb-5">
            <p class="col-md-12"><strong>Jika anda ingin memberikan kritik, saran dan komentar, Silahkan isi form ini</p></strong></h3>
            <form class="row g-2" action="{{route('create.addReview')}}"  method="post" id="contact-form" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="col-md-6">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda">
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Anda">
              </div>
              <div class="col-md-12">
                <select name="jenisreview_id" id="jenisreview_id" class="form-select">
                  <option selected>Pilih Review</option>
                  @foreach ($jenis_review as $j_review)
                  <option value="{{ $j_review->id }}">{{ $j_review->nama_review }} ( {{ $j_review->kode_review }} )</option>
                  @endforeach
                </select>
              </div>
              <textarea name="deskripsi" rows="5" placeholder="Tuliskan kritik, saran, ide anda" required ></textarea>
              <div class="col-md-12">
                <input class="btn btn-primary" type="submit" value="Submit">
              </div>
            </form>
          </div>
        </div>

      </div>
    </section> 

</div>
@endsection

