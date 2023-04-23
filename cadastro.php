<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="w3-container">
<?php
define("nome", ' Carlos Araújo ');
define("idade", ' 37 ');
define("contato", ' 995750419 ');
define("divida", '500' );
$Npost=200;
$Npost=$Npost - 500;



echo "O aluno". nome, "tem a idade de ". idade,
 "anos e seu telefone é". contato, "e seu saldo atual é de R$". $Npost;
?>

</div>

</body>
</html>
