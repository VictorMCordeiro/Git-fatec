<? php
    require_once('cabecalho.php');
    funtion retornaDadosUsuario()
    {
        require_once("conexao.php");
        try{
            $sql = "SELECT * FROM ususario WHERE id = ?";
            $stms = $pdo->prepare($sql); 
            $semt->execute([$SESSION['id']]);
            $ususario = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (Exception $e){
            die("ERROR ao consultar o ususario:" . $e->getMessage)
        } else {
            return $usuario;
        }
    }
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
            