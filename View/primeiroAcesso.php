<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/teste/Resources/Styles/style.css">
    <title>Document</title>
</head>
<body>
<form action="Navegacao.php" method="post"
      class="w3-container w3-card-4 w3-light-grey w3-text-dark-grey w3-margin w3-display-middle" style="width: 30%;">
    <h2 class="w3-center mt-5 mb-5">Primeiro Acesso</h2>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-user"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo">
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-drivers-license"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF: 33333333333">
        </div>
    </div>
    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fa fa-envelope-o"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-col" style="width:11%">
            <i class="w3-xxlarge fa fa-lock"></i>
        </div>
        <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
        </div>
    </div>

    <div class="w3-row w3-section">
        <div class="w3-center" style="">
            <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-amber w3-hover-yellow w3-cell w3-cell w3-round-large"
                    style="width: 90%;">Cadastrar
            </button>
        </div>
    </div>
</form>
</body>
</html>

