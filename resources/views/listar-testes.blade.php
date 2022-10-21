<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Testes</h1>
@foreach($testes as $teste)
    <h2>{{ $teste }}</h2>
@endforeach
<form action="teste/save" method="POST">
    @csrf
    <h3>ID do Tipo do Teste:</h3>
    <input type="text" id="test_type_id" name="test_type_id"></br>
    <h3>Nome do Autor:</h3>
    <input type="text" id="author_name" name="author_name"></br>
    <h3>Descrição:</h3>
    <input type="text" id="description" name="description"></br>
    <button type="submit">Adicionar Teste</button>
</form>
</body>
</html>
