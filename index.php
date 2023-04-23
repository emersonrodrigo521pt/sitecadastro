<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema para adicionar notas</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="w3-container w3-margin w3-center w3-animate-left">
        <h1 id="topo">UNINASSAU - Parnaíba</h1>
    </div>

    <nav>

        <div class="w3-bar w3-coll-row w3-black w3-border w3-border-gray w3-padding">
            <ul>
                <li class="w3-bar-item w3-red w3-row w3-left w3-margin w3-round-medium w3-hover-white">
                    <a href="index.php">Home</a>
                </li>
                <li class="w3-bar-item w3-blue w3-row w3-right w3-margin w3-padding w3-round-medium w3-hover-white">
                    <a href="login.php">login</a>


            </ul>
        </div>

    </nav>
    <div class="w3-container w3-margin w3-center w3-animate-right">
        <h1>Sistema de Educação Digital</h1>
        <p>Seu futuro está aqui</p>
        <img src="img/logo.png" alt="logo">

    </div>



    <footer class="w3-container w3-center w3-black">
    <?php
//definição de constante
define("nome", 'Emerson Rodrigo');
?>
        <p>Criado por <?php echo nome?> 2022.</p>


    </footer>




</body>

</html>