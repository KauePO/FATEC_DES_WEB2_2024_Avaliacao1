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
$content = file_get_contents("dsm.txt"); // pega o conteudo de dsm e coloca no $content 
echo nl2br($content); // nl2br transforma as quebras de linha para br no html
?>
<br><br>
<h3>Gestão Empresarial</h3>

<?php
$filename2 = "ge.txt";
$handle = fopen($filename2, "r");
echo file_get_contents($filename2);
$content2 = file_get_contents("ge.txt");
echo nl2br($content2)
?>
</body>