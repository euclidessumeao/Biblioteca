<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('estilo/css/bootstrap.min.css')}}">

        <title>Actualizar</title>
        <style>
            label{
                float: left;
                display: block;
                width:95px;
            }
        </style>
    </head>
    <body>
    @yield('content')
    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-8 m-auto">
    <a href="{{ route('livros')}}"title="Livros" >Ver Lista</a>
        <form action="{{ route('atualizar_livro', ['id' => $librarys->id]) }}" method="post">
        @csrf
            <div><label for="book">Book</label>
            <input type="text" name="book" id="book" value="{{$librarys->book}}" class="form-control" required></div>
            <div><label for="author">Author</label>
            <input type="text" name="author" id="author"  value="{{$librarys->author}}" class="form-control" required></div>
            <div><label for="categories">Categories</label>
            <input type="text" name="categories" id="categories"  value="{{$librarys->categories}}" class="form-control" required></div>
            <div><label for="year">Year</label>
            <input type="text" name="year" id="year"  value="{{$librarys->year}}" class="form-control" required></div>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="submit" class="btn btn-info">Cancelar</button>
        </form>
        </div>
    </body>
</html>
