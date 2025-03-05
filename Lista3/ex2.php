<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4 mb-3">
    <h1 class=" mt-4 mb-3">Exercicio 2, lista 3</h1>
    <h3>Escreva um programa para calcular a soma dos dois valores de entrada. Se 
    os dois valores forem iguais, retorne o <strong>TRIPLO</strong> da soma.</h3>

    <form method="post" class="mb-3" action="ex2res.php">
    <?php 
        // repetição para criar os dois campos de entrada, se modificar o 2 para qualquer outro numero, indicara a qtd de repetição, e i=1 significa indice partindo do 1 e nao 0
        for ($i = 1; $i <= 2; $i++): ?>
        <div class="row mt-4">
            <div class="mb-3 col-1">
                <label for="n<?= $i ?>" class="form-label">Valor <?= $i ?>:</label>
            </div>
            <div class="mb-3 col-1">
                <input type="number" name="n<?= $i ?>" class="form-control">
            </div>
        </div>
    
    <?php endfor;?>
        <button type="submit" class="btn btn-primary">Calcular</button>      

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>          