<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/cadastro-de-curriculos/Resources/Styles/style.css">

    <title>Elatados Juarez</title>
</head>

<body>
    <form action="Controller/Navegacao.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-dark-grey w3-margin w3-display-middle" style="width: 30%;">
        <h2 class="w3-center">Login</h2>

        <div class="w3-row w3-section ">
            <div class="w3-col center-elements " style="width: 11%;">
                <i class="w3-xxlarge fa fa-user"></i>
            </div>
            <div class="w3-rest">
                <input type="text" class="w3-input w3-border w3-round-large" name="txtCPF" placeholder="CPF: 333333333333">
            </div>
        </div>

        <div class="w3-row w3-section">
            <div class="w3-col center-elements" style="width: 11%;">
                <i class="w3-xxlarge fa fa-lock"></i>
            </div>
            <div class="w3-rest">
                <input type="password" class="w3-input w3-border w3-round-large" name="txtSenha" placeholder="Senha">
            </div>
        </div>

        <div class="w3-row w3-section extra-align">
            <div class="w3-center w3-col">
                    <button name="btnEntrar" style="width: 90%;" class="w3-button w3-block w3-margin w3-amber w3-hover-yellow w3-cell w3-round-large">
                        Entrar
                    </button>
            </div>
            <div class="w3-center w3-col">
                    <button name="btnPrimeiroAcesso" style="width: 90%;" class="w3-button w3-block w3-margin w3-amber w3-hover-yellow w3-cell w3-round-large">
                        Primeiro Acesso?
                    </button>
            </div>
        </div>
    </form>
</body>

</html>