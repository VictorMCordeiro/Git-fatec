<?php //todas com tipo definido
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aula 06-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Resposta 3 formulario 4</h1>
        <?php
            function verifica($texto, $busca) : void
            {
              echo strpos($texto, $busca) !== false ? "A palavra $texto está contida em $busca" : "<div class='alert alert-danger'>A palavra $texto não está contidaem $busca ";
            }
            
           
            
            if($_SERVER['REQUEST_METHOD']=='POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
            {
                try
                {
                    echo "<div class='alert alert-success'><strong>Solução:</strong><br>";
                    $palavra1 = $_POST["p"];
                    $palavra2= $_POST["p2"];
                    verifica($palavra1, $palavra2);
                    
                }               
                catch(Exception $e)
                { 
                    echo "<div class='alert alert-danger'>Erro: " . $e->getMessage() . "</div>";
                }
                }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>