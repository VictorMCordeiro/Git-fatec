<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exemplo 06-03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1>exercicio 3, Lista 5</h1>
    <h3>Crie um formulário que leia dados de 5 produtos, que são: código, nome e 
preço. Leia os dados e crie um mapa ordenado onde as chaves são os 
códigos dos produtos e os valores são também mapas ordenados com o 
nome e o preço dos produtos. Aplique um desconto de 10% em todos os 
produtos com preço acima de R$100,00 e exiba a lista ordenada pelo nome 
do produto. </h3>


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