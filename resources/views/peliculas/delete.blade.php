<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar peliculas</h1>
    <p>Esta seguro de eliminar <strong>{{$pelicula->nombre}}</strong></p>
    <form action="{{route('peliculas.destroy',$pelicula->id)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Si</button>
    <button type="submit"><a href="{{route('peliculas.index')}}">Cancelar</a></button>
    </form>
</body>
</html>