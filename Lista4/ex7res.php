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
    <h1>Resposta 7 formulario 4</h1>
        <?php 
            function calculaDiferencaDias(string $data1, string $data2): int 
            {
              $d1 = DateTime::createFromFormat('d/m/Y', $data1);
              $d2 = DateTime::createFromFormat('d/m/Y', $data2);
              if (!$d1 || !$d2) 
              {
                  throw new Exception('Uma ou ambas as datas estão em um formato inválido.');
              }
          
              // Calcula a diferença entre as datas.
              $intervalo = $d1->diff($d2);
              // Retorna a diferença de dias.
              return (int)$intervalo->format('%a');
          }
    
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
              try 
              {
                echo "<div class='alert alert-success'><strong>Solução:</strong><br>";
                $data1 = $_POST ['d1'];
                $data2 = $_POST ['d2'];
                $diferencaDias = calculaDiferencaDias($data1, $data2);
                echo "a diferença em dias das datas $data1 e $data2 é de: $diferencaDias dias";
    
              } catch(Exception $e){
                  echo $e->getMessage();
              }
            } 
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>