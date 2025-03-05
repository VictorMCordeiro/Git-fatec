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
                    $valor1 = $_POST['n1'];
                    $valor2 = $_POST['n2'];
                    $soma = $valor1 + $valor2;

                    if($valor1 == $valor2) 
                    {
                        $resultado = 3* $soma;
                        $mensagem = "Os valores são iguais. O triplo da soma é ";
                    }                    
                    else 
                    {
                        $resultado = $soma;
                        $mensagem = "A soma dos valores é ";
                    }
                    echo "<div class='alert alert-success'><strong>Resultado:</strong><br>";
                    echo $mensagem . number_format($resultado, 2, ',', '.') . ".</div>";
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