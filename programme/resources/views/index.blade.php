
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>School.Z</title>    
    <!-- Bootstrap core CSS -->
<link href= "{{url('css/bootstrap.min.css')}}" rel="stylesheet">

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
      body{
        background: url('imgs/img2.jpg') fixed no-repeat;
        background-size: cover;
        background-blend-mode: color-burn;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{url('css/signin.css')}}" rel="stylesheet">
  </head>
  <body class="text-center">







    
<main class="form-signin">
  <form method="HEAD" action="{{url('home')}}">
    <img class="mb-4 img-fluid" src="{{url('imgs/Image3.png')}}" alt="" width="auto" >
    <h4 class="h3 mb-3 fw-bold text-primary">Connexion</h4>

    <div class="form-floating mb-3 ">
      <input type="number" name="numero" class="form-control" id="floatingInput" placeholder="Numéro" required>
      <label for="floatingInput">Numéro</label>

    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>

      
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> M'enregistrer
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" name="connexion" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023–2024</p>
  </form>
</main>
<div class="m-3" style="border: 1px red solid;">
  <!-- @yield('content') -->
</div>


    
  </body>
</html>


