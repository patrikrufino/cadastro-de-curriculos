<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/cadastro-de-curriculos/Resources/Styles/style.css">
    <title>Enlatados Juarez</title>
</head>
<body class="w3-light-gray">
<?php
if (!isset($_SESSION)) {
    session_start();
}

?>

<div class="w3-padding-large" id="main">
</div>
<header class="w3-container w3-padding-32 w3-center " id="home">
        <img src="../Resources/Img/Enlatados.png" alt="Logo" class="w3-image logo mb-5">
    <br>
    <h1 class="w3-text-dark-grey w3-panel w3-amber w3-round-large">
        ADMINISTRAÇÃO
    </h1>
    <h1 class="w3-text-dark-grey w3-panel w3-amber w3-round-large mb-5">
        SISTEMA DE CURRICULOS
    </h1>
    <div class="container">
        <form action="Navegacao.php" method="post"
              class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="">
            <input type="hidden" name="nome_form" value="frmLoginADM"/>
            <button name="btnListarCadastrados"
                    class="w3-button w3-margin w3-amber w3-hover-yellow w3-cell w3-round-large mt-5"
                    style="width: 400px">
                <br>
                <i class="fa fa-address-book-o w3-xxlarge"></i><br>
                <p class="w3-xlarge">Usuários<br>
                    ADM Cadastrados</p>
            </button>
            <button name="btnListarCadastradosB"
                    class="w3-button w3-margin w3-amber w3-hover-yellow w3-cell w3-round-large mt-5"
                    style="width: 400px">
                <br>
                <i class="fa fa-address-book-o w3-xxlarge"></i><br>
                <p class="w3-xlarge">Currículos<br>
                    Cadastrados</p>
            </button>
        </form>
    </div>
</header>
</body>
</html>