<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Solicitações</title>
</head>
<body>
<h1>Solicitações
<h3>Desenvolvimento de Software Multiplataformas</h3>

<?php
$filename1 = "dsm.txt";
$handle = fopen($filename1, 'r');
echo file_get_contents($filename1);
?>

</body>