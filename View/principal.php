<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/cadastro-de-curriculos/resources/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Elatados Juarez</title>
</head>

<body class="w3-light-grey">

    <!--Navbar-->
    <nav class="w3-sidebar w3-bar w3-block w3-center w3-blue">
        <a href="#home" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-home w3-xxlarge"></i>
            <p> Tela Principal </p>
        </a>
        <a href="#dPessoais" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>
        </a>
        <a href="#formacao" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação Acadêmica</p>
        </a>
        <a href="#outrasformacoes" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="fa fa-newspaper-o w3-xxlarge"></i>
            <p>Outas Formções</p>
        </a>
        <a href="#xpp" class="w3-bar-item w3-button w3-block w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
            <i class="w3-xxlarge fa fa-briefcase" aria-hidden="true"></i>
            <p>Experiências Profissionais</p>
        </a>
    </nav>

    <!--Tela de Exibição-->

    <div class="w3-padding-large exibicao" id="main">

        <!--Tela Principal-->
        <header class="w3-container w3-padding-32 w3-center title-section" id="home">
            <h1>
                <img src="../Resources/Img/enlatados.png" alt="Logo" class="w3-image">
            </h1>
        </header>

        <!--Dados Pessoais-->
        <div class="w3-padding-128 w3-content w3-text-grey card mb-5 shadow" id="dPessoais">
            <h2 class="card-title w3-text-cyan title-section mb-5">
                <i class="fa fa-address-book-o w3-xxlarge me-3"></i>
                Dados Pessoais
            </h2>
            <form action="" method="post" class="w3-row w3-text-blue w3-margin">
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i class="w3-xxlarge fa fa-user center-elements"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" class="w3-input w3-border w3-round-large" name="txtNome" placeholder="Nome Completo">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i class="w3-xxlarge fa fa-calendar center-elements"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="date" class="w3-input w3-border w3-round-large" name="txtData" placeholder="">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i class="w3-xxlarge fa fa-drivers-license center-elements"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="text" class="w3-input w3-border w3-round-large" name="txtCPF" placeholder="CPF: 33333333333">
                    </div>
                </div>

                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:11%">
                        <i class="w3-xxlarge fa fa-envelope-o center-elements"></i>
                    </div>
                    <div class="w3-rest">
                        <input type="email" class="w3-input w3-border w3-round-large" name="txtEmail" placeholder="Email">
                    </div>
                </div>

                <div class="w3-row w3 section">
                    <div class="w3-center">
                        <button type="button" class="btn w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
                            Atualizar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!--Formação Acadêmica-->
        <div class="w3-padding-128 w3-content w3-text-grey card shadow mb-5" id="formacao">
            <h2 class="card-title w3-text-cyan title-section mb-5">
                <i class="fa fa-mortar-board w3-xxlarge me-3"></i>
                Formação Acadêmica
            </h2>
            <div class="w3-center">
                <form action="" method="POST" class="w3-row w3-text-blue w3-margin">
                    <div class="w3-row w3-center">
                        <div class="w3-col" style="width: 50%;">
                            <h3>Data Inicial</h3>
                        </div>
                        <div class="w3-rest">
                            <h3>Data Final</h3>
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-row w3-section w3-col" style="width: 45%;">
                            <div class="w3-col" style="width: 15%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input type="date" name="txtInicioFA" class="w3-input w3-border w3-round-large">
                            </div>
                        </div>

                        <div class="w3-row w3-section w3-rest">
                            <div class="w3-col w3-margin-left" style="width: 13%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input type="date" name="txtFimFA" class="w3-input w3-border w3-round-large">
                            </div>
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%">
                            <i class="w3-xxlarge fa fa-bars"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="text" name="txtDescFa" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza" class="w3-input w3-border w3-round-large">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-center">
                            <button class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!--Tabela de exibição das Formações Acadêmicas-->
                <div class="w3-container mb-5">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Descrição</th>
                                <th>Apagar</th>
                            </tr>
                            <td>01/02/2020</td>
                            <td>01/08/2021</td>
                            <td>Desenvolvimento de Sistema - Centro Paula Souza</td>
                            <td>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--Outras Formações -->
        <div class="w3-padding-128 w3-content w3-text-grey card shadow mb-5" id="outrasformacoes">
            <h2 class="card-title w3-text-cyan title-section mb-5">
                <i class="fa fa-newspaper-o w3-xxlarge me-3"></i>
                Outras Formações
            </h2>
            <div class="w3-center">
                <form action="" method="POST" class="w3-row w3-text-blue w3-margin">
                    <div class="w3-row w3-center">
                        <div class="w3-col" style="width: 50%;">
                            <h3>Data Inicial</h3>
                        </div>
                        <div class="w3-rest">
                            <h3>Data Final</h3>
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-row w3-section w3-col" style="width: 45%;">
                            <div class="w3-col" style="width: 15%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input type="date" name="txtInicioFA" class="w3-input w3-border w3-round-large">
                            </div>
                        </div>

                        <div class="w3-row w3-section w3-rest">
                            <div class="w3-col w3-margin-left" style="width: 13%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input type="date" name="txtFimFA" class="w3-input w3-border w3-round-large">
                            </div>
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%">
                            <i class="w3-xxlarge fa fa-bars"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="text" name="txtDescFa" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza" class="w3-input w3-border w3-round-large">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-center">
                            <button class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!--Tabela de exibição das Outras Formações-->
                <div class="w3-container mb-5">
                    <table class="w3-table-all w3-centered">
                        <thead>
                            <tr class="w3-center w3-blue">
                                <th>Início</th>
                                <th>Fim</th>
                                <th>Descrição</th>
                                <th>Apagar</th>
                            </tr>
                            <td>01/10/2020</td>
                            <td>01/01/2021</td>
                            <td>Estruturas de Dados - Faculdadade Metropolitana</td>
                            <td>
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <!--Experiências Profissionais-->
        <div class="w3-padding-128 w3-content w3-text-grey card shadow mb-5" id="xpp">
            <h2 class="card-title w3-text-cyan title-section mb-5">
                <i class="w3-xxlarge  fa fa-briefcase me-3" aria-hidden="true"></i>
                Experiências Profissionais
            </h2>
            <div class="w3-center">
                <form action="" method="POST" class="w3-row w3-text-blue w3-margin">
                    <div class="w3-row w3-center">
                        <div class="w3-col" style="width: 50%;">
                            <h3>Data Inicial</h3>
                        </div>
                        <div class="w3-rest">
                            <h3>Data Final</h3>
                        </div>
                    </div>
                    <div class="w3-row w3-section">
                        <div class="w3-row w3-section w3-col" style="width: 45%;">
                            <div class="w3-col" style="width: 15%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input type="date" name="txtInicioFA" class="w3-input w3-border w3-round-large">
                            </div>
                        </div>

                        <div class="w3-row w3-section w3-rest">
                            <div class="w3-col w3-margin-left" style="width: 13%;">
                                <i class="w3-xxlarge fa fa-calendar"></i>
                            </div>
                            <div class="w3-rest">
                                <input type="date" name="txtFimFA" class="w3-input w3-border w3-round-large">
                            </div>
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%">
                            <i class="w3-xxlarge fa fa-building"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="text" name="txtDescFa" placeholder="Empresa" class="w3-input w3-border w3-round-large">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-col" style="width:7%">
                            <i class="w3-xxlarge fa fa-bars"></i>
                        </div>
                        <div class="w3-rest">
                            <input type="text" name="txtDescFa" placeholder="Descrição das atividades na empresa" class="w3-input w3-border w3-round-large">
                        </div>
                    </div>

                    <div class="w3-row w3-section">
                        <div class="w3-center">
                            <button class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
                                <i class="w3-xxlarge fa fa-user-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!--Tabela de exibição das Experiências Profissionais-->
                <div class="w3-container mb-5">
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
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</html>