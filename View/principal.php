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
    <link rel="stylesheet" href="https://juarezenlatados.000webhostapp.com//Resources/Styles/style.css">
    <title>Enlatados Juarez</title>
</head>
<body class="w3-light-grey">

<?php
include_once '../Model/Usuario.php';
include_once '../Controller/FormacaoAcadController.php';
include_once '../Controller/ExperienciaProfissionalController.php';
include_once '../Controller/OutrasFormacoesController.php';

if (!isset($_SESSION)) {
    session_start();
}
?>

<!-- Navbar -->
<nav class="w3-sidebar w3-bar w3-block w3-center w3-amber shadow-lg">
    <a href="#home"
       class="w3-bar-item w3-button w3-block w3-cell w3-hover-sand w3-hover-text-orange w3-text-sand w3-text-dark-grey">
        <i class="fa fa-home w3-xxlarge"></i>
        <p> Tela Principal </p>
    </a>
    <a href="#dPessoais"
       class="w3-bar-item w3-button w3-block w3-cell w3-hover-sand w3-hover-text-orange w3-text-sand w3-text-dark-grey">
        <i class="fa fa-address-book-o w3-xxlarge"></i>
        <p>Dados Pessoais</p>
    </a>
    <a href="#formacao"
       class="w3-bar-item w3-button w3-block w3-cell w3-hover-sand w3-hover-text-orange w3-text-sand w3-text-dark-grey">
        <i class="fa fa-mortar-board w3-xxlarge"></i>
        <p>Formação Acadêmica</p>
    </a>
    <a href="#oFormacao"
       class="w3-bar-item w3-button w3-block w3-cell w3-hover-sand w3-hover-text-orange w3-text-sand w3-text-dark-grey">
        <i class="fa fa-line-chart w3-xxlarge"></i>
        <p>Outras Formações</p>
    </a>
    <a href="#eProfissional"
       class="w3-bar-item w3-button w3-block w3-cell w3-hover-sand w3-hover-text-orange w3-text-sand w3-text-dark-grey">
        <i class="fa fa-briefcase w3-xxlarge"></i>
        <p>Experiências Profissionais</p>
    </a>
</nav>

<!-- Tela de Exibição -->
<div class="w3-padding-large exibicao" id="main">
    <!-- Tela Principal -->
    <header class="w3-container w3-padding-32 w3-center title-section" id="home">
        <img src="../Resources/Img/Enlatados.png" alt="Logo" class="w3-image logo">
        <h1 class="titulo-principal w3-text-dark-grey">
            SISTEMA DE CURRICULOS
        </h1>
    </header>

    <!-- Dados Pessoais -->
    <div class="w3-padding-128 w3-content w3-text-grey card mb-5 shadow" id="dPessoais">
        <h2 class="card-title w3-text-dark-grey title-section mb-5 w3-center">
            <i class="fa fa-address-book-o w3-xxlarge me-3 w3-center"></i>
            Dados Pessoais
        </h2>

        <form action="Navegacao.php" method="post" class="w3-row w3-text-grey w3-margin">
            <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden"
                   value="<?php echo unserialize($_SESSION['Usuario'])->getID(); ?>">
            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-user center-elements"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtNome" type="text"
                           placeholder="Nome Completo"
                           value="<?php echo unserialize($_SESSION['Usuario'])->getNome(); ?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-calendar center-elements"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder=""
                           value="<?php echo unserialize($_SESSION['Usuario'])->getDataNascimento(); ?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-drivers-license center-elements"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text"
                           placeholder="CPF: 33333333333"
                           value="<?php echo unserialize($_SESSION['Usuario'])->getCPF(); ?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:11%;">
                    <i class="w3-xxlarge fa fa-envelope-o center-elements"></i>
                </div>
                <div class="w3-rest">
                    <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email"
                           value="<?php echo unserialize($_SESSION['Usuario'])->getEmail(); ?>">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-center">
                    <button name="btnAtualizar"
                            class="btn w3-block w3-margin w3-amber w3-cell w3-round-large w3-hover-yellow"
                            style="width: 90%;">Atualizar
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Formação Acadêmica-->
    <div class="w3-padding-128 w3-content w3-text-grey card shadow mb-5" id="formacao">
        <h2 class="card-title w3-text-dark-grey title-section mb-5 w3-center">
            <i class="fa fa-mortar-board w3-xxlarge me-3"></i>
            Formação Acadêmica
        </h2>

        <form action="Navegacao.php" method="post" class="w3-row w3-text-grey w3-margin">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    <h3>Data Inicial</h3>
                </div>
                <div class="w3-res" style="">
                    <h3>Data Final</h3>
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
                    </div>
                </div>

                <div class="w3-row w3-section w3-rest" style="">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge  fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
                    </div>
                </div>

                <div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text"
                                   placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-center" style="">
                            <button name="btnAddFormacao"
                                    class="btn w3-button w3-block w3-amber w3-cell w3-round-large w3-hover-yellow"
                                    style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <!--Tabela de exibição das Formações Acadêmicas-->
        <div class="w3-container mb-5">
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-amber">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                <thead>

                <?php
                $fCon = new FormacaoAcadController();
                $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                if ($results != null)

                    while ($row = $results->fetch_object()) {
                        echo '<tr>';

                        echo '<td style="width: 18%;">' . $row->inicio . '</td>';
                        echo '<td style="width: 18%;">' . $row->fim . '</td>';
                        echo '<td style="width: 59%;">' . $row->descricao . '</td>';
                        echo '<td style="width: 5%;">
                            <form action="Navegacao.php"  method="post">
                                <input type="hidden" name="id" value="' . $row->idformacaoAcademica . '">
                                <button name="btnExcluirFA" class="btn w3-block btn-danger w3-cell w3-round-large">
                                    <i class="fa fa-trash"></i> 
                                </button>
                            </td>
                            </form>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </div>

    <!--Outras Formações-->
    <div class="w3-padding-128 w3-content w3-text-grey card shadow mb-5" id="oFormacao">
        <h2 class="card-title w3-text-dark-grey title-section mb-5 w3-center">
            <i class="fa fa-line-chart w3-xxlarge me-3"></i>
            Outras Formações
        </h2>

        <form action="Navegacao.php" method="post" class="w3-row w3-text-grey w3-margin">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    <h3>Data Inicial</h3>
                </div>

                <div class="w3-rest">
                    <h3>Data Final</h3>
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date" placeholder="">
                    </div>
                </div>

                <div class="w3-row w3-section w3-rest" style="">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge  fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date" placeholder="">
                    </div>
                </div>

                <div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text"
                                   placeholder="Descrição: Ex.: Sistemas para Internert - Centro Paula Souza">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-center" style="">
                            <button name="btnAddOF"
                                    class="btn w3-button w3-block w3-amber w3-cell w3-round-large w3-hover-yellow"
                                    style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--Tabela de exibição das Outras Formações-->
        <div class="w3-container mb-5">
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-amber">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                <thead>

                <?php
                $fCon = new OutrasFormacoesController();
                $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                if ($results != null)

                    while ($row = $results->fetch_object()) {
                        echo '<tr>';

                        echo '<td style="width: 18%;">' . $row->inicio . '</td>';
                        echo '<td style="width: 18%;">' . $row->fim . '</td>';
                        echo '<td style="width: 59%;">' . $row->descricao . '</td>';
                        echo '<td style="width: 5%;">
                            <form action="Navegacao.php"  method="post">
                            <input type="hidden" name="id" value="' . $row->idoutrasformacoes . '">
                            <button name="btnExcluirOF" class="btn w3-block btn-danger w3-cell w3-round-large">
                            <i class="fa fa-trash"></i> </button></td>
                            </form>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </div>


    <!-- Experiência Profissional -->
    <div class="w3-padding-128 w3-content w3-text-grey card shadow mb-5" id="eProfissional">
        <h2 class="card-title w3-text-dark-grey title-section mb-5 w3-center">
            <i class="w3-xxlarge fa fa-briefcase me-3" aria-hidden="true"></i>
            Experiência Profissional
        </h2>

        <form action="Navegacao.php" method="post" class="w3-row w3-text-grey w3-margin">
            <div class="w3-row w3-center">
                <div class="w3-col" style="width:50%;">
                    <h3>Data Inicial</h3>
                </div>
                <div class="w3-res" style="">
                    <h3>Data Final</h3>
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-row w3-section w3-col" style="width:45%;">
                    <div class="w3-col" style="width:15%;">
                        <i class="w3-xxlarge fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
                    </div>
                </div>

                <div class="w3-row w3-section w3-rest" style="">
                    <div class="w3-col w3-margin-left" style="width:13%;">
                        <i class="w3-xxlarge  fa fa-calendar"></i>
                    </div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
                    </div>
                </div>

                <div>
                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text"
                                   placeholder="Centro Paula Souza">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%;">
                            <i class="w3-xxlarge fa fa-align-justify"></i>
                        </div>
                        <div class="w3-rest">
                            <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text"
                                   placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-center" style="">
                            <button name="btnAddEP"
                                    class="btn w3-button w3-block w3-amber w3-cell w3-round-large w3-hover-sand w3-hover-yellow"
                                    style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Tabela Experiência Profissional -->
        <div class="w3-container mb-5">
            <table class="w3-table-all w3-centered">
                <thead>
                <tr class="w3-center w3-amber">
                    <th>Início</th>
                    <th>Fim</th>
                    <th>Empresa</th>
                    <th>Descrição</th>
                    <th>Apagar</th>
                </tr>
                <thead>

                <?php
                $ePro = new ExperienciaProfissionalController();
                $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                if ($results != null)

                    while ($row = $results->fetch_object()) {
                        echo '<tr>';
                        echo '<td style="width: 15%;">' . $row->inicio . '</td>';
                        echo '<td style="width: 15%;">' . $row->fim . '</td>';
                        echo '<td style="width: 10%;">' . $row->empresa . '</td>';
                        echo '<td style="width: 50%;">' . $row->descricao . '</td>';
                        echo '<td style="width: 5%;">
                            <form action="Navegacao.php"  method="post">
                            <input type="hidden" name="idEP" value="' . $row->idexperienciaprofissional . '">
                            <button name="btnExcluirEP" class="btn w3-block  btn-danger w3-cell w3-round-large">
                            <i class="fa fa-trash"></i> </button></td>
                            </form>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>

