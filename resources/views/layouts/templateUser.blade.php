<!doctype html>
<html lang="en">
  <head>
    <title>Dinas Kebudayaan dan Pariwisata Samosir</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

</head>
  <body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-white bg-light fixed-top">
          <div class="logo"><img src="/assets/img/Logo.png"></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item" text-color="black">
                <li class="nav-item-user" text-color="black">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item-user">
                <a class="nav-link active" href="/#objek">Object Wisata</a>
                </li>
                <li class="nav-item-user">
                <a class="nav-link active" href="/#event">Event</a>
                </li>
                <li class="nav-item-user">
                <a class="nav-link active" href="/#contact">Contact Us</a>
                </li>
                <li class="nav-item-user">
                <a class="nav-link active" href="/#contact">Review</a>
                </li>
                <li class="nav-item-user">
                <a class="nav-link active" href="/login">Login</a>
                </li>
            </ul>
          </div>
        </nav>

 
      @yield('content')
        
        <section id="contact">
        <div class="section-contact">
          <h3>Contact Us</h3>
            <div class="contact-section">
              <div class="contact-info">
                <?php $no = 1;?>
                @foreach ($contact  as $cnct)
                  <ul>
                    <li>
                      <div><p>{{ $cnct->jenis_contact }} : {{ $cnct->contact }}</p></div>    
                    </li>
                </ul>
              @endforeach
              </div>

              <div class="review-form">
                <div class="message"><strong><p>Jika anda ingin memberikan kritik, saran dan komentar, Silahkan isi form ini</p></strong></div>
                @if(session()->has('success'))
                <div class="alert alert-success col-lg-8" role="alert">
                  {{ session('success') }}
                </div>
                @endif
                <form action="{{route('create.addReview')}}"  method="post" id="contact-form" enctype="multipart/form-data">
                {{ csrf_field() }}
                  <input type="text" name="nama" id="nama" class="text-box" placeholder="Nama" required>
                  <input type="text" name="alamat" id="alamat" class="text-box" placeholder="Alamat" required>
                  <select class="form-select" aria-label="Default select example" name="jenisreview_id" id="jenisreview_id">
                    <option selected>Pilih Review</option>
                    @foreach ($jenis_review as $j_review)
                    <option value="{{ $j_review->id }}">{{ $j_review->nama_review }} ( {{ $j_review->kode_review }} )</option>
                    @endforeach
                  </select>
                  <textarea name="deskripsi" rows="5" placeholder="Tuliskan kritik, saran, ide anda" required ></textarea>
                  <input class="btn btn-primary" type="submit" value="Submit">
                </form>
                </div>
            </div>
        </div>
      </section>


      <footer class="container-footer"> 
          <div class="d-flex justify-content-center py-4 border-top">
            <p style="text-align:right">&copy; Kelompok 02</p>
          </div>
        </footer>

    </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>