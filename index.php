<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login multiuser PHP MY SQL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form>
    <!-- <img class="mb-4" src="assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Form Login</h1>
    <p>Masukan Username dan Password anda dengan benar</p>

    <div class="form-floating">
      <input type="text" class="form-control" name="username"  placeholder="masukan username" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating mt-3">
      <input type="password" class="form-control" name="password" placeholder="masukan password" required>
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating mt-3">
      <select name="level" class="form-control">
          <option value="Pegawai">Pegawai</option>
          <option value="Operator">Operator</option>
          <option value="Administrator">Administrator</option>
      </select> 
    </div>



    <div class="checkbox mb-3 mt-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2020 <?= date('Y'); ?> Khalid Ibrahim</p>
  </form>
</main>


    
  </body>
</html>
