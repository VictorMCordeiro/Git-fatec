<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo 06-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>exercicio 1, Lista 5</h1>
    <h3>Crie um formulário que leia dados de 5 contatos: nome e número de 
telefone. Leia os dados e crie um mapa ordenado onde as chaves são os 
nomes dos contatos e os valores são os números de telefone. Verifique se 
há duplicatas de nome ou número de telefone antes de adicionar um novo 
contato. Exiba a lista ordenada pelos nomes dos contatos. </h3>


<form method="post" action="ex1res.php">
    <?php for ($i = 0; $i < 3 ; $i++): ?>
      <div class="row mb-3">
        <div class="col-md-4">
          <input type="text" name="nome[]" class="form-control" placeholder="Nome do contato">
        </div>
        <div class="col-md-4">
          <input type="text" name="telefone[]" class="form-control" placeholder="Telefone do contato">
        </div>
      </div>
    <?php endfor; ?>
    <button type="submit" class="btn btn-primary">Cadastrar Contatos</button>
  </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>