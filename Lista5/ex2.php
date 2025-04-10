<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>exercicio 2, Lista 5</h1>
    <h3>Crie um formulário que leia dados de 5 alunos: nome e três notas. Leia os 
dados e crie um mapa ordenado onde as chaves são os nomes dos alunos 
e os valores são as médias das notas. Exiba a lista de alunos ordenada pela 
média das notas (do maior para o menor).</h3>


<div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">Cadastro de Alunos e Notas</h2>
        
        <form action="ex2.php" method="POST" class="row g-3">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <div class="col-md-3">
                    <input type="text" name="nome[]" class="form-control" placeholder="Nome do aluno" required>
                </div>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <div class="col-md-3">
                        <input type="number" name="nota[<?= $i ?>][]" class="form-control" placeholder="Nota <?= $j + 1 ?>" step="0.1" min="0" max="10" required>
                    </div>
                <?php endfor; ?>
            <?php endfor; ?>
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">Calcular Médias</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>