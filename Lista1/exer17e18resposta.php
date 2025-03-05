<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="content mt-4">
    <h1>Resposta do exercicio 17 e 18</h1>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
            {
                try
                {
                  $capital = $_POST['cap'];
                  $periodo = $_POST['p'];
                  $i = $_POST['t'];
                  
                  $juros_s = $capital * $i * $periodo;
                  $montante_s = $capital + $juros_s;

                  $montante_c = $capital * pow((1 + $i), $periodo);
                  $juros_c = $montante_c - $capital;
                  
                  echo "Juros simples resulta em um montante de:$montante_s---juros de $juros_s ao mes por um periodo de $periodo meses."; 
                  echo "Juros Compostos resulta em um montante de:$montante_c---juros de $juros_c ao mes por um periodo de $periodo meses."; 
                                                        
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