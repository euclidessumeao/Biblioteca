<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{url('estilo/css/bootstrap.min.css')}}">
        <title>Library</title>
        <style>
            label{
                float: left;
                display: block;
                width:99px;
            }
        </style>
    </head>
    <body>

    <h1 class="text-center">Crud</h1>
    <hr>
    <div class="col-6 m-auto">
    <a href="{{ route('library.list')}}"title="Livros" >Ver Lista</a>
        <form action="{{ route('salvar_livro') }}" method="post">

            <div><label for="book" >Book</label><input  type="text" name="book" id="book" class="form-control" required></div>
            <div><label for="author">Author</label><input type="text" name="author" id="author" class="form-control" required></div>
            <div><label for="categories">Categories</label><input type="text" name="categories" id="categories" class="form-control" required></div>
            <div><label for="year">Year</label><input type="text" name="year" id="year" class="form-control" required></div>
             <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <button type="submit" class="btn btn-info">Cancelar</button>
        </form>
        </div>
    </body>
</html>
