<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/projeto-final-etec/cadastro-de-curriculos/resources/styles/style.css">

    <title>Elatados Juarez</title>
</head>

<body class="w3-light-grey">

    <!--Navbar-->
    <nav class="w3-sidebar w3-bar block w3-center w3-blue">
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
    </nav>

    <!--Tela de Exibição-->

    <div class="w3-padding-large" id="main">

        <!--Tela Principal-->
        <header class="w3-container w3-padding-32 w3-center" id="home">
            <h1>
                <img src="../Resources/Img/enlatados.png" alt="Logo" class="w3-image">
            </h1>
        </header>

        <!--Dados Pessoais-->
        <div class="w3-padding-32 w3-content w3-text-grey w3-container" id="dPessoais">
            <h2 class="w3-text-cyan">Dados Pessoais</h2>
            <form action="" method="post" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%">
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

                <div class="w3-ro w3 section">
                    <div class="w3-center">
                        <button style="width:90%" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large">
                            Atualizar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!--Formação Acadêmica-->
        <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
            <h2 class="w3-text-cyan">
                Formação
            </h2>

            <form action="" method="POST" class="w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
                <div class="w3-row w3-center">
                    <div class="w3-col" style="width: 50%;">
                        Data Inicial
                    </div>
                    <div class="w3-rest">
                        Data Final
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
                        <i class="w3-xxlarge fa fa-align-justfy"></i>
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
        </div>

    </div>
</body>

</html>