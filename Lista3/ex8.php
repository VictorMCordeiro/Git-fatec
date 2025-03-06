<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4 mb-3">
    <h1 class=" mt-4 mb-3">Exercicio 8, lista 3</h1>
    <h3>Crie um formulário para que o usuário informe um número. Use um loop 
while para somar todos os números de 1 até o número informado e exibir o 
resultado.</h3>

    <form method="post" class="mb-3" action="ex8res.php">   
        <div class="row">        
            <div class="mb-3 mt-4 col-2">
                <label for="n" class="form-label">Insira um valor para contagem regressiva: </label>
            </div>
            <div class="mb-3 mt-4 col-2">
                <input type="number" id="n" name="n" class="form-control" required="" placeholder="">
            </div>
            <div class="mb-3 mt-4 col-2">
                <button type="submit" class="btn btn-primary">Enviar</button>  
            </div>
        </div>
    
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>           