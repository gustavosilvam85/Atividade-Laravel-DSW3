<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $cidade->nome }}</title>
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>
<body>

    <h1>{{ $cidade->nome }}</h1>

    <div class="city-details">
        <p><strong>Estado:</strong> {{ $cidade->estado }}</p>
        <p><strong>País:</strong> {{ $cidade->pais }}</p>
        <p><strong>População:</strong> {{ $cidade->populacao }} habitantes</p>
        <p><strong>Área:</strong> {{ $cidade->area }} km²</p>
    </div>

    <a class="back-link" href="{{ route('index') }}">Voltar para a lista</a>

</body>
</html>
