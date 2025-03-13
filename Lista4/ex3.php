<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo 06-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>exercicio 3, Lista 4</h1>
    <h3>Crie um programa em PHP em que sejam lidas duas palavras, e verifique se a segunda palavra 
    está contida na primeira. </h3>

    <form method="post" action ="ex3res.php">   
            <div class="row">        
                <div class="mb-3 col-3">
                    <label for="p" class="form-label">Informe PRIMEIRA palavra: </label>
                </div>
                <div class="mb-3 col-3">
                    <input type="text" id="p" name="p" class="form-control" required="" placeholder="1°">
                </div>
            </div>
            <div class="row">        
                <div class="mb-3 col-3">
                    <label for="p2" class="form-label">Informe SEGUNDA palavra: </label>
                </div>
                <div class="mb-3 col-3">
                    <input type="text" id="p2" name="p2" class="form-control" required="" placeholder="2°">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Verificar</button>        
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>