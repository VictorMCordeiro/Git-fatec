<?php //todas com tipo definido
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>exer 2 res</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>Resposta 2 LISTA 5</h1>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $alunos = [];
                $nomes = $_POST['nome'];
                $notas = $_POST['nota'];
                $erros = [];

                for ($i = 0; $i < 5; $i++) {
                    $nome = trim(htmlspecialchars($nomes[$i])); // Sanitiza nome
                    $notasAluno = array_map('floatval', $notas[$i]); // Garante valores numéricos
                    $media = array_sum($notasAluno) / count($notasAluno); // Calcula média

                    if (empty($nome)) {
                        $erros[] = "O nome do aluno na posição " . ($i + 1) . " está vazio.";
                    } elseif (isset($alunos[$nome])) {
                        $erros[] = "O nome '$nome' está duplicado.";
                    } else {
                        $alunos[$nome] = $media;
                    }
                }
                if (!empty($erros)) {
                  echo "<div class='alert alert-danger mt-3'>";
                  foreach ($erros as $erro) {
                      echo "<p>$erro</p>";
                  }
                  echo "</div>";
              } else {
                  arsort($alunos); // Ordena por média decrescente

                  echo "<div class='card mt-4 p-3 shadow-lg'>";
                  echo "<h3 class='text-center mb-3'>Resultados</h3>";
                  echo "<table class='table table-bordered'>";
                  echo "<thead class='table-dark'><tr><th>Aluno</th><th>Média</th></tr></thead><tbody>";

                  foreach ($alunos as $nome => $media) {
                      echo "<tr><td><strong>$nome</strong></td><td>" . number_format($media, 2) . "</td></tr>";
                  }

                  echo "</tbody></table></div>";
              }
          } catch (Exception $e) {
              echo "<div class='alert alert-danger mt-3'>Erro: " . $e->getMessage() . "</div>";
          }
      }
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>