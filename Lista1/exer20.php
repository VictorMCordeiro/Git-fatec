<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="conteiner mt-4">
    <h1>Exercicio 20</h1>

    <form method="post" class="mb-3" action ="exer20resposta.php">
    <div class="mb-3">
            <label for="distancia" class="form-label">Distância (km):</label>
            <input type="number" name="distancia" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tempo" class="form-label">Tempo (horas):</label>
            <input type="number" name="tempo" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
