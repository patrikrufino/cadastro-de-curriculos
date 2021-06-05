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
    include_once '../Model/Administrador.php';
    include_once '../Controller/AdministradorController.php';
    if(!isset($_SESSION))
    {
        session_start();
    }


?>

<header class="w3-container w3-padding-32 w3-center ">
    <h1 class="w3-text-dark-gray w3-panel w3-amber w3-round-large pt-5 pb-5">
        <b>Lista de Usuários Cadastrados no Sistema</b>
    </h1>
    <div class="w3-padding-128 w3-content w3-text-dark-grey">
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-amber w3-round-large">
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                </tr>
                <thead>
                <?php
                $adm = new AdministradorController();
                $results = $adm->gerarLista();
                if($results != null)
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 1%;">'.$row->idadministrador.'</td>';
                        echo '<td style="width: 50%;">'.$row->nome.'</td>';
                        echo '<td style="width: 50%;">'.$row->cpf.'</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </div>
    <div class="w3-padding-128 w3-content w3-text-grey">
        <form action="Navegacao.php" method="post"
              class="w3-container w3-light-grey w3-text-dark-gray w3-margin w3-center" style="width: 30%;">
            <div class="w3-row w3-section">
                <div>
                    <button name="btnVoltar"
                            class="w3-button w3-block w3-margin w3-amber w3-hover-yellow w3-cell w3-round-large"
                            style="width: 90%;">
                        Voltar
                    </button>
                </div>
            </div>
        </form>
    </div>
</header>
</body>
</html>
