<!DOCTYPE html>
<html lang="pt-br">
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
<body>
<form action="Controller/Navegacao.php" method="post"
      class="w3-container w3-card-4 w3-light-grey w3-text-dark-grey w3-margin w3-display-middle" style="width: 30%;">
    <input type="hidden" name="nome_form" value="frmLogin"/>

    <h2 class="w3-center mt-5 mb-5">Login</h2>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtLogin" type="text"
                   placeholder="Login CPF (ex.: 33333333333)">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-half" style="">
            <button name="btnLogin" class="w3-button w3-block w3-margin w3-amber w3-hover-yellow w3-cell w3-round-large"
                    style="width: 90%;">Entrar
            </button>
        </div>
        <div class="w3-half">
            <button name="btnPrimeiroAcesso" class="w3-button w3-block w3-margin w3-amber w3-hover-yellow w3-cell w3-round-large"
                    style="width: 90%;">Primeiro Acesso?
            </button>
        </div>
    </div>
    <div class="w3-center" style="">
        <button name="btnADM" class="w3-button w3-light-gray w3-border w3-border-amber w3-hover-amber w3-round-large mb-3 w3-text-dark-gray"
                style="width: 40%;">Login como Administrador</button>
    </div>

</form>
</body>
</html>