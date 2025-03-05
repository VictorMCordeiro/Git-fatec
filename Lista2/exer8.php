<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Exercicio 8</h1>

    <form method="post" action ="exer8resposta.php">   
        <div class="row">        
            <div class="mb-3 col-3">
                <label for="al" class="form-label">Digite Altura</label>
                <input type="number" id="al" name="al" class="form-control" required="" placeholder="">
            </div>
            <div class="mb-3 col-3">
                <label for="la" class="form-label">Digite Largura</label>
                <input type="number" id="la" name="la" class="form-control" required="" placeholder="">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Calcular area</button>        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>            