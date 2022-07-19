<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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


  <!-- Custom styles for this template -->
  <link href="/css/style.css" rel="stylesheet">
</head>

<body class="text-center">
  <div class="container-sm-login">
    <main class="form-login">
      <form method="post" action="/admin/prosesLogin">
        @csrf
        <img class="mb-4" src="/assets/img/Logo.png" alt="" width="150" height="57">
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @if (session('status') == 'Failed')
        <div class="alert alert-danger" role="alert">
          <p>{{ session('message') }}</p>
        </div>
        @endif

        @if (session('status') == 'Success')
        <div class="alert alert-success" role="alert">
          <p>{{ session('message') }}</p>
        </div>
        @endif
        
        <div class="form-floating">
          <input type="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" name="username" placeholder="username" required>
          <label for="floatingInput">Username<span class="text-danger"> *</span></label>
        </div>
        
        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password" required>
          <label for="floatingPassword">Password<span class="text-danger"> *</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted">&copy; Kelompok 02</p>
      </form>
    </main>
  </div>
</body>

</html>