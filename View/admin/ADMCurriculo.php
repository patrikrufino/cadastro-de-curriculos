<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/cadastro-de-curriculos/Resources/Styles/style.css">
    <title>Visualizar Cadastro</title>

</head>
<body class="w3-light-grey">
<?php
include_once '../Model/Usuario.php';
include_once '../Controller/UsuarioController.php';
include_once '../Controller/FormacaoAcadController.php';
if(!isset($_SESSION))
{
    session_start();
}
?>

<div class="w3-padding-large">

    <header class="w3-container w3-padding-32 w3-center">
        <h1 class="w3-text-amber">
            VISUALIZAÇÃO DE CURRICULOS
        </h1>
    </header>

    <div class="w3-padding-128 w3-content w3-text-grey">

        <h2 class="w3-text-cyan">Dados Pessoais</h2>

        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-amber">
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Data de Nascimento</th>
                </tr>
                </thead>
                <?php
                $usuario = new UsuarioController();
                $results = $usuario->gerarCurriculo($_POST['id']);
                if($results != null)
                    while($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 24%;">'.$row->nome.'</td>';
                        echo '<td style="width: 25%;">'.$row->cpf.'</td>';
                        echo '<td style="width: 25%;">'.$row->email.'</td>';
                        echo '<td style="width: 25%;">'.$row->datanascimento.'</td>';
                    }
                ?>

            </table>
        </div>

        <div class="w3-padding-128 w3-content w3-text-grey">

            <h2 class="w3-text-cyan">Formação Acadêmica</h2>

            <div class="w3-container">
                <table class="w3-table-all w3-centered">
                    <thead>
                    <tr class="w3-center w3-blue">
                        <th>Início</th>
                        <th>Fim</th>
                        <th>Descrição</th>
                        <th>Apagar</th>
                    </tr>
                    </thead>
                    <?php
                    $fCon = new FormacaoAcadController();
                    $results = $fCon->gerarLista($_POST['id']);
                    if($results != null)

                        while($row = $results->fetch_object()) {
                            echo '<tr>';
                            echo '<td style="width: 10%;">'.$row->inicio.'</td>';
                            echo '<td style="width: 10%;">'.$row->fim.'</td>';
                            echo '<td style="width: 65%;">'.$row->descricao.'</td>';
                        }
                    ?>

                </table>
            </div>

            <div class="w3-padding-128 w3-content w3-text-grey">
                <h2 class="w3-text-cyan">Outras Formações</h2>

                <div class="w3-container">
                    <table class="w3-table-all w3-centered">
                        <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                        </thead>


                    </table>
                </div>

            </div>

            <div class="w3-padding-128 w3-content w3-text-grey">
                <h2 class="w3-text-cyan">Experiência Profissional</h2>


                <div class="w3-container">
                    <table class="w3-table-all w3-centered">
                        <thead>
                        <tr class="w3-center w3-blue">
                            <th>Início</th>
                            <th>Fim</th>
                            <th>Empresa</th>
                            <th>Descrição</th>
                            <th>Apagar</th>
                        </tr>
                        </thead>

                    </table>
                </div>
            </div>

        </div>

</body>
</html>
