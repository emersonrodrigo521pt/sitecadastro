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
    <nav>

        <div class="w3-bar w3-coll-row w3-black w3-border w3-border-gray w3-padding">
            <ul>
                <li class="w3-bar-item w3-red w3-row w3-left w3-margin-top w3-round-medium w3-hover-white">
                    <a href="index.php">Home</a>
                </li>
                </li>
                <li class="w3-bar-item w3-row w3-right w3-hover ">
                    <a href="index.php">UNINASSAU - Parnaíba <img src="img/logo2.png" alt="logo"> </a>
                </li>
            </ul>
        </div>

    </nav>
    <br><br><br>
    <div class="w3-container w3-center  w3-hover">
        <h2>Login</h2>
        <form class="contato-form" action="autenticar-login.php" method="POST">

            <label for="email">E-mail</label>
            <br>
            <input type="email" name="email" required><br><br>
            <label for="text">Senha</label><br>
            <input type="password" name="senha" required>
            <br>
            <a href="cadastro.php">Não tem cadastro? Click aqui.</a>
            <br><br>
            <button type="submit">Entrar</button>


        </form>
        <br>
        <br>

        <br>
        <br>
    </div>

    </div>



    <footer class="w3-container w3-center w3-black w3-padding">

        <p>Criado por EMERSON RODRIGO, 2022.</p>

    </footer>
</body>

</html>