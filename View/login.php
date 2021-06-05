<?php
require_once 'includes/header.php';
?>
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
<?php
require_once 'includes/footer.php';
?>