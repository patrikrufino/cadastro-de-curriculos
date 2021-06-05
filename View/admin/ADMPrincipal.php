<?php
require_once '../includes/header.php';
?>
<?php

if (!isset($_SESSION)) {
    session_start();
}

?>

<div class="w3-padding-large" id="main">
</div>
<header class="w3-container w3-padding-32 w3-center " id="home">
    <br>
    <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
        ADMINISTRAÇÃO
    </h1>
    <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
        SISTEMA DE CURRICULOS
    </h1>
    <form action="/Controller/navegacao.php" method="post" class="w3-container w3-light-grey w3-text-blue w3-margin w3-center" style="">
        <input type="hidden" name="nome_form" value="frmLoginADM" />


        <button name="btnListarCadastrados" class="w3-button w3-margin w3-blue w3-cell w3-round-large" style="">
            <br>
            <i class="fa fa-address-book-o w3-xxlarge"></i><br>
            <p class="w3-xlarge">Usuários<br>
                Cadastrados</p>
        </button>
</header>



<?php
require_once '../includes/footer.php';
?>

