<?php
    require_once("conexao.php");
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        try{
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
            $stmt = $pdo->prepare("INSERT INTO usuario(nome, email, senha) VALUES (?, ? , ?)");
            if ($stmt->execute([$nome, $email, $senha]))
            {
                echo "<p>Usuario inserido com exito!</p>";
                header ("location: index.php?cadastro=true");
            } else{
                echo "<p>erro ao inserir ususario</p>";
            }

        } catch (Exception $e){
            echo "ERROR ao inserir usuario". $e->getMessage();
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <main>
        <h1>Novov Usuario</h1>
        
        <form method="post" action="">
            <div clas="row">
                <div class="col-4 mb-3">
                    <label for="nome" class="form-label">Informe nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" required="">
                </div>
            
                <div class="col-4 mb-3">
                    <label for="email" class="form-label">Informe Email</label>
                    <input type="text" id="email" name="email" class="form-control" required="">
                </div>
            
                <div class="col-4 mb-3">
                    <label for="senha" class="form-label">Informe Senha</label>
                    <input type="password" id="senha" name="senha" class="form-control" required="">
                </div>
            </div>        
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </main>
  </body>
</html>