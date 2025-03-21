<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>controle de estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container mt-4">
    <h1 class="mt-4">Sistema de controle de estoque</h1>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            try
            {
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                if(($email == 'adm@adm.com') && ($senha == "123"))
                {   
                    $_SESSION['usuario'] = $email;
                    $_SESSION['acesso'] = true;
                    header('location: principal.php');
                }else
                    $mensagem['erro'] = "Usuario e/ou senha Incorretos!";
                                   
                
            }catch (Exception $e){
                echo"Erro: ".$e->GetMessage();
                die();
            }
        }
    ?>
    <?php if (isset($mensagem['erro'])) : ?>
    <div class="alert alert-danger mt-3 mb-3">
        <?$mensagem['erro']?>
    </div>
    <?php endif; ?>
    <?php if ((isset($_GET['mensagem'])) && ($_GET['mensagem'] == "acesso_negado"))
    <div class="alert alert-danger mt-3 mb-3">
        <?$mensagem['erro']?>
    </div>
    <?php endif; ?>
    <form method="post" action ="">   
            <div class="row">        
                <div class="mb-3 col-3">
                    <label for="email" class="form-label">Informe o email: </label>
                    <input type="email" id="" name="email" class="form-control" required="" placeholder="">
                </div>
                <div class="mb-3 col-3">
                    <label for="senha" class="form-label">Informe a senha: </label>
                    <input type="password" id="" name="senha" class="form-control" required="" placeholder="">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Acessar</button>        
        </form>

 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>