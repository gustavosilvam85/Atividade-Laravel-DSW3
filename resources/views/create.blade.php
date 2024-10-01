<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Nova Cidade</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>

    <h1>Adicionar Nova Cidade</h1>

    <form action="{{ route('cidades.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>

        <label for="estado">Estado:</label>
        <input type="text" name="estado" id="estado" required>

        <label for="pais">País:</label>
        <input type="text" name="pais" id="pais" required>

        <label for="populacao">População:</label>
        <input type="number" name="populacao" id="populacao" required>

        <label for="area">Área (km²):</label>
        <input type="number" name="area" id="area" required>

        <button type="submit">Salvar</button>
    </form>

    <a class="back-link" href="{{ route('index') }}">Voltar para a lista</a>

</body>
</html>
