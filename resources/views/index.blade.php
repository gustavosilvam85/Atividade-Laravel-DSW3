<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cidades</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

    <h1>Lista de Cidades</h1>

    @if (session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach ($cidades as $cidade)
            <li>
                <a href="{{ route('cidades.show', $cidade->id) }}">{{ $cidade->nome }}</a>
            </li>
        @endforeach
    </ul>

    <a class="add-city" href="{{ route('cidades.create') }}">Adicionar Nova Cidade</a>

</body>
</html>
