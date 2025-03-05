<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Exercicio 17 e 18</h1>

    <form method="post" class="mb-3" action="exer17e18resposta">
        <div class="mb-3">
            <label for="cap" class="form-label">Capital (R$):</label>
            <input type="number" name="cap" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="taxa" class="form-label">Taxa de Juros (% ao período):</label>
            <input type="number" name="taxa" class="form-control" >
        </div>
        <div class="mb-3">
            <label for="p" class="form-label">Período:</label>
            <input type="number" name="p" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>          