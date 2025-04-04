<?php
    require_once('cabecalho.php');

    funtion retornaDadosUsuario()
    {
        require("conexao.php");
        try{
            $sql = "SELECT * FROM ususario WHERE id = ?";
            $stmt = $pdo->prepare($sql); 
            $stmt->execute([$SESSION['id']]);
            $ususario = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (Exception $e){
            die("ERROR ao consultar o ususario:" . $e->getMessage)
        } else {
            return $usuario;
        }
    }

    funtion alteraDadosUsuario($nome, $email)
    {
        require("conexao.php");
        try{
            $sql = "UPDATE ususarios SET nome = ?, email = ? WHERE id = ?";
            $stms = $pdo->prepare($sql); 
            if ($semt->execute($nome, $email, $SESSION['id']));
                echo "<p>Dados alterados com sucesso! </p>";
            else 
                echo "<p class='text-danger'> Erro ao alterar dados! </p>";
        }catch (Exception $e){
            die("ERROR ao alterar o ususario:" . $e->getMessage)
        }
        
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if (issert($_POST['nome']) && isset($_POST['email']))
        {
            alteraDadosUsuario($_POST[ 'nome'], $_POST['email']);
        }
    }

    $ususario = retornaDadosUsuario();
?>

    <h3>alteração dados pessoais</h3>
    
    <form method="post">
                        
        <div class="mb-3">
            <label for="" class="form-label">Nome do usuario</label>
            <input value ="<?= $usuario ['nome']?>" type="text" id="" name="" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email do usuario</label>
            <input value ="<?= $usuario ['email']?> type="text" id="" name="" class="form-control" required="">
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <h3>alteração Senha</h3>
    <form method="post">
                        
        <div class="mb-3">
            <label for="" class="form-label">Nome do usuario</label>
            <input value ="<?= $usuario ['nome']?>" type="text" id="" name="" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email do usuario</label>
            <input value ="<?= $usuario ['email']?> type="text" id="" name="" class="form-control" required="">
        </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
            