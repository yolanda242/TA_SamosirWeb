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
      <div class="content-wrapper-lg">
        <nav class="navbar navbar-expand-md navbar-white fixed-top" style="background: #ebe7e0">
          <div class="logo"><img src="/assets/img/Logo.png"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: black"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item" text-color="black">
                    <li class="nav-item-user" text-color="black">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item-user">
                      <a class="nav-link active" href="/objekUser">Objek Wisata</a>
                    </li>

                    <li class="nav-item-user">
                      <a class="nav-link active" href="/eventUser">Event</a>
                    </li>

                    <li class="nav-item-user">
                      <a class="nav-link active" href="/#contact">Contact Us</a>
                    </li>

                    <li class="nav-item-user">
                      <a class="nav-link active" href="/#review">Review</a>
                    </li>

                    <li class="nav-item-user">
                      <a class="nav-link active" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

 
        @yield('content')
        
        <section id="contact">
          <div class="section-contact" style=" background-color: #c6d4e1">
            <h3>Contact Us</h3>
              <div class="contact-section">
                <div class="contact-info">
                  <table id="contact1" style="margin : 20px;">
                    <tbody>
                      <?php $no = 1;?>
                      @foreach ($contact  as $cnct)
                                <tr>
                                    <td>{{ $cnct->jenis_contact }}</td>
                                    <td>: </td>
                                    <td>{{ $cnct->contact }}</td>
                                </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
          </div>
        </section>

        <footer class="container-footer" style="background: #ebe7e0"> 
          <div class="d-flex justify-content-center py-4 border-top">
            <p style="text-align:right; text-color: black">&copy; Kelompok 02</p>
          </div>
        </footer>
      </div>
    </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>