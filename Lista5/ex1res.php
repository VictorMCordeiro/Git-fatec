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
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?>
        <?php
            try {
                $contatos = [];
                $nomes = $_POST['nome'] ?? [];
                $tels = $_POST['tel'] ?? [];
                $erros = [];

                for ($i = 0; $i < count($nomes); $i++) {
                    $nome = trim($nomes[$i]);
                    $tel = trim($tels[$i]);
                    
                    if (empty($nome) || empty($tel)) continue;
                    if (isset($contatos[$nome]) || in_array($tel, $contatos)) {
                        $erros[] = "Contato duplicado: $nome - $tel";
                        continue;
                    }
                    $contatos[$nome] = $tel;
                }

                ksort($contatos);
            } catch (Exception $e) {
                $erros[] = "Erro: " . $e->getMessage();
            }
        ?>

        <?php if (!empty($erros)): ?>
            <div class="alert alert-danger mt-3">
                <ul class="mb-0">
                    <?php foreach ($erros as $erro): ?>
                        <li><?= htmlspecialchars($erro) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if (!empty($contatos)): ?>
            <div class="card mt-4 shadow-lg p-3">
                <h3 class="text-center text-primary">Lista de Contatos</h3>
                <ul class="list-group">
                    <?php foreach ($contatos as $nome => $tel): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong><?= htmlspecialchars($nome) ?></strong>
                            <span class="badge bg-primary"><?= htmlspecialchars($tel) ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>