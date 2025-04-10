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
    <h1>Resposta 1 LISTA 5</h1>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            try {
                $produtos = processarProdutos($_POST['codigo'] ?? [], $_POST['nome'] ?? [], $_POST['preco'] ?? []);

                if (!empty($produtos['erros'])) {
                    echo "<div class='alert alert-danger mt-3'>";
                    foreach ($produtos['erros'] as $erro) {
                        echo "<p>$erro</p>";
                    }
                    echo "</div>";
                } else {
                    exibirTabelaProdutos($produtos['lista']);
                }

            } catch (Exception $e) {
                echo "<div class='alert alert-danger mt-3'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
            }

            function processarProdutos(array $codigos, array $nomes, array $precos): array {
              $produtos = [];
              $erros = [];
  
              for ($i = 0, $n = count($codigos); $i < $n; $i++) {
                  $codigo = trim(htmlspecialchars((string) ($codigos[$i] ?? '')));
                  $nome = trim(htmlspecialchars((string) ($nomes[$i] ?? '')));
                  $precoOriginal = floatval($precos[$i] ?? 0);
  
                  if (empty($codigo) || empty($nome)) {
                      $erros[] = "O código ou nome do produto na posição " . ($i + 1) . " está vazio.";
                      continue;
                  }
  
                  if (isset($produtos[$codigo])) {
                      $erros[] = "O código '$codigo' já foi cadastrado.";
                      continue;
                  }
        }
        $precoFinal = $precoOriginal > 100 ? $precoOriginal * 0.9 : $precoOriginal;

                $produtos[$codigo] = [
                    'nome' => $nome,
                    'preco_original' => $precoOriginal,
                    'preco_final' => $precoFinal
                ];
            }

            usort($produtos, fn($a, $b) => strcmp($a['nome'], $b['nome']));

            return ['lista' => $produtos, 'erros' => $erros];
        }

        function exibirTabelaProdutos(array $produtos): void {
            echo "<div class='card mt-4 p-3 shadow-lg'>";
            echo "<h3 class='text-center mb-3'>Lista de Produtos</h3>";
            echo "<table class='table table-bordered'>";
            echo "<thead class='table-dark'><tr><th>Código</th><th>Nome</th><th>Preço</th><th>Final (com desconto)</th></tr></thead><tbody>";

            foreach ($produtos as $codigo => $produto) {
                echo "<tr>
                <td><strong>$codigo</strong></td>
                        <td>{$produto['nome']}</td>
                        <td>R$ " . number_format($produto['preco_original'], 2, ',', '.') . "</td>
                        <td>R$ " . number_format($produto['preco_final'], 2, ',', '.') . "</td>
                      </tr>";
            }

            echo "</tbody></table></div>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>