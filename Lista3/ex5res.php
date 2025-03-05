<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Resposta do exercicio 5, lista 3</h1>
        <?php
            if($_SERVER['REQUEST_METHOD']=='POST') // ESSE VAI TER EM TODOS OS EXERCICIOS
            {
                try
                {
                    $numero = $_POST['n_mes']; 
                    //solucao para usar estrutura de repeticao ..vetor 
                    $mes= ["Janeiro", "Fevereiro", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                    $nome_mes= "";                 

                    if($numero  > 12 || $numero < 1) 
                    {//o codigo abaixo é uma maneira de encerrar o codigo , recomendado usar com if
                        throw new Exception("numero invalido");
                    }                    
                    
                    for ($i = 0; $i < count($mes); $i++) 
                    {
                        // votor o indice comeca em 0, solucao para comecar de 1
                        if (($i + 1) == $numero) 
                        {
                            $nome_mes = $mes[$i];
                            break;
                        }
                    }                  
                 
                    
                    echo "<div class='alert alert-success'><strong>Mes correspondente:</strong><br>";
                    echo "mes de $nome_mes"; 
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