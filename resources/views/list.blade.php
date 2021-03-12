<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('estilo/css/bootstrap.min.css')}}">
        <title>Library</title>
</head>
    <body>
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-8 m-auto">
    <table class="table">
  <thead class="thead-dark">

        <tr>
        <th>Book</th>
        <th>Author</th>
        <th>Categories</th>
        <th>year</th>
        <th>Criar</th>
        <th>Editar</th>
        <th>Apagar</th>
        </tr>

            <tr>

                <td>{{$librarys->book}}</td>
                <td>{{$librarys->author}}</td>
                <td>{{$librarys->categories}}</td>
                <td>{{$librarys->year}}</td>
                <td><a href="{{ route('nova_lista')}}"
                        title="Criar" >Criar</a></td>
                <td><a href="{{ route('editar_lista', ['id'=>$librarys->id])}}"
                        title="Editar{{ $librarys->book }}" >Editar</a></td>

                <td><a href="{{ route('excluir_lista', ['id'=>$librarys->id])}}"
                        title="Excluir{{ $librarys->book }}" >Excluir</a></td>
            </tr>
        @endforeach
        </table>


      </div>
    </body>
</html>
