<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4 mb-3">
    <h1 class=" mt-4 mb-3">Exercicio 4, lista 3</h1>
    <h3>Faça um programa em PHP onde o valor de um produto é informado. Se 
esse valor for superior a R$100,00 deve ser aplicado um desconto de 15% 
sobre ele e exibido o novo valor do produto.  </h3>

    <form method="post" class="mb-3" action="ex4res.php">   
        <div class="row">        
            <div class="mb-3 col-3">
                <label for="p" class="form-label">Insira um preço: </label>
            </div>
            <div class="mb-3 col-3">
                <input type="number" id="p" name="p" class="form-control" required="" placeholder="R$">
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>      

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>          