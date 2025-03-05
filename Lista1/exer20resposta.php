<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="content mt-4">
    <h1>Resposta do exercicio 20</h1>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
            {
                try
                {
                    $distancia = floatval($_POST['distancia']);
                    $tempo = floatval($_POST['tempo']);
                    
                    if ($tempo <= 0) 
                    {
                        throw new Exception("O tempo deve ser maior que zero.");
                    }
                    
                    $velocidade_media = $distancia / $tempo;
                    
                    echo "<div class='alert alert-success'><strong>Resultado:</strong><br>";
                    echo "A velocidade média é " . number_format($velocidade_media, 2, ',', '.') . " km/h.</div>";                                                        
                }
                catch(Exception $e)
                { 
                    echo $e->getMessage();
                }
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>