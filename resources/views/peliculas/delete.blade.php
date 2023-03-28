<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineClub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/menu1.css">
</head>
<body>
    <header>
        <!-- <nav class="navbar navbar-expand-lg navbar-light ">
            <h1 class="titulo">CINE <strong class="club">CLUB</strong></h1>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="proyecciones">
                  <a class="nav-link" href="#">Proyecciones</a>
                </li>
                <li class="historial">
                  <a class="nav-link" href="#">Historial</a>
                </li>
                <li class="cuenta">
                  <a class="nav-link disabled" href="#">César Escobedo</a>
                </li>
              </ul>
            </div>
          </nav> -->
          <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <h1 class="titulo">CINE <strong class="club">CLUB</strong></h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="/menu" id="active">Proyecciones</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/historial">Historial</a>
                  </li>
                </ul>
                <a href="/index.html">
                  <span class="navbar-text" id="cuenta">
                    César Escobedo
                  </span>
                </a>
              </div>
            </div>
          </nav>
    </header>

    <div class="contenido">

    <h2>Eliminar peliculas</h1> <hr>
    <div class="contenido-peliculas">
        <div class="card" >
            <div class="card-body">
                <img src="{{$pelicula->foto}}" alt="">
                <h4 class="card-title">{{$pelicula->nombre}}</h4>
                <p class="card-text">{{$pelicula->año}}</p>
            </div>
        </div> 
    </div>
    <p>¿Estas seguro de eliminar <strong>{{$pelicula->nombre}}</strong>?</p>
    <form action="{{route('peliculas.destroy',$pelicula->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-primary" id="cartaBoton">Si</button>
        <button type="submit" class="btn btn-primary" id="cartaBoton"><a href="{{route('peliculas.index')}}">Cancelar</a></button>
    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>