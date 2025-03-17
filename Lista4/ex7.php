<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo 06-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>exercicio 7, Lista 4</h1>
    <h3>Crie um programa que receba o valor de duas datas no formato dd/mm/YYYY e que apresente 
    a diferença de dias entre as duas datas.</h3>

    <form method="post" action ="ex7res.php">   
            <div class="row">        
                <div class="mb-3 col-3">
                    <label for="d1" class="form-label">Informe data 1 (dd/mm/YYYY): </label>
                </div>
                <div class="mb-3 col-2">
                    <input type="text" id="" name="d1" class="form-control" required="" placeholder="">
                </div>
                <div class="mb-3 col-3">
                    <label for="d2" class="form-label">Informe data 2 (dd/mm/YYYY): </label>
                </div>
                <div class="mb-3 col-2">
                    <input type="text" id="" name="d2" class="form-control" required="" placeholder="">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Calcular diferença em dias</button>        
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>