<?php
session_start();
/*
se(a se "loggedin" estiver nulo ou não definida) ou (loggedin for diferente de TRUE)*/
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Técnico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo ($_SESSION["username"]); ?>
        <br>
        </b>Boas Vindas ao Sistema</h1>
    </div>
    <p>
        
        <a href="leitura.php" class="btn btn-primary">Verificar Solicitações</a>
        <br><br>

        <a href="leiturage.php" class="btn btn-primary">Verificar Solicitações GE</a>
        <br><br>

        <a href="leituradsm.php" class="btn btn-primary">Verificar Solicitações DSM</a>
        <br><br>
        
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>