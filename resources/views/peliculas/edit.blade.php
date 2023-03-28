<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineClub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/create.css">
</head>

<body>
    <header>
        <header>
              <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <h1 class="titulo">CINE <strong class="club">CLUB</strong></h1>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="/menu">Proyecciones</a>
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
        </header>    </header>

    <div class="contenido">
        <h3>{{$pelicula->nombre}}</h3> <hr>

        <div class="contenedor-formulario">
            <form action="{{route('peliculas.update', $pelicula->id)}}" method="POST" class="row g-3" id="formulario">
                @csrf
                @method('put')
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Nombre de pelicula</label>
                    <input type="text" class="form-control" id="validationDefault01" name="nombre" value="{{$pelicula->nombre}}" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Director</label>
                    <input type="text" class="form-control" id="validationDefault01" name="director" value="{{$pelicula->director}}">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">Año</label>
                    <input type="number" class="form-control" id="validationDefault01" name="año" value="{{$pelicula->año}}">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">URL de imágen</label>
                    <input type="text" class="form-control" id="validationDefault01" name="foto" value="{{$pelicula->foto}}">
                </div>
                    
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">Genero</label>
                    <select name="genero" class="form-select" id="validationDefault04" value="{{$pelicula->genero}}"> 
                        <option selected disabled>Elige un genero</option>

                    </select>
                </div>

                <button type="button" class="btn btn-primary" id="btn-secundario" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Añadir genero</button>

                <div class="col-md-4" id="descripcion">
                    <label for="validationDefault01" class="form-label">Descripción</label>
                    <textarea name="descripcion" cols="50" rows="5" value="{{$pelicula->descripcion}}" ></textarea>                    
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </div>
            </form>
        </div>

        <!-- Añadir genero inicia -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Añadir genero</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Escribe el nuevo genero que deseas añadir</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Crear</button>
                </div>
                </div>
            </div>
            </div>
            <!-- Añadir genero termina -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>