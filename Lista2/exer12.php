<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Exercicio 12</h1>

    <form method="post" action ="exer12resposta.php">   
        <div class="row">        
            <div class="mb-3 col-3">
                <label for="b" class="form-label">Insira a base: </label>
                <input type="number" id="b" name="b" class="form-control" required="" placeholder="">
            </div>
            <div class="mb-3 col-3">
                <label for="e" class="form-label">Insira o expoente: </label>
                <input type="number" id="e" name="e" class="form-control" required="" placeholder="">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Calcular</button>        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>          