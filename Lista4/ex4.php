<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo 06-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>exercicio 4, Lista 4</h1>
    <h3>Crie um programa em PHP que leia três valores: dia, mês e ano. Verifique se a data informada 
    é válida e apresente a data em formato dd/mm/YYYY.  </h3>

    <form method="post" action ="ex4res.php">   
            <div class="row">        
                <div class="mb-3 col-2">
                    <label for="d" class="form-label">Informe dia: </label>
                </div>
                <div class="mb-3 col">
                    <input type="text" id="d" name="d" class="form-control" required="" placeholder="">
                </div>
                <div class="mb-3 col-2">
                    <label for="m" class="form-label">Informe mes: </label>
                </div>
                <div class="mb-3 col">
                    <input type="text" id="m" name="m" class="form-control" required="" placeholder="">
                </div>
                <div class="mb-3 col-2">
                    <label for="a" class="form-label">Informe ano: </label>
                </div>
                <div class="mb-3 col">
                    <input type="text" id="a" name="a" class="form-control" required="" placeholder="">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Verificar</button>        
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>