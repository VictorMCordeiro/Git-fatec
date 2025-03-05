<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Resposta do exercicio 1, lista 3</h1>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
            {
                try
                {
                    $numeros = [];
                
                    // Lendo números
                    for ($i = 1; $i <= 7; $i++) 
                    {
                        // se precisar converter float $numeros[] = floatval($_POST['num' . $i]);//conversão para float
                        $numeros[] =$_POST['num' . $i];
                    }
                    
                    // Encontrando posição e menor 
                    $menor_valor = $numeros[0];
                    $posicao = 1;
                    
                    for ($i = 1; $i < count($numeros); $i++) 
                    {
                        if ($numeros[$i] < $menor_valor) {
                            $menor_valor = $numeros[$i];
                            $posicao = $i + 1; // Ajustando  posição iniciar em 1 + 1
                        }
                    }
                         
                    echo "<div class='alert alert-success'><strong>Resultado:</strong><br>";
                    echo "O menor valor é " . number_format($menor_valor, 2, ',', '.') . "<br>";
                    echo "Ele está na posição " . $posicao . " da sequência inserida.</div>";
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