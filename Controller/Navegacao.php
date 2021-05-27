<?php

if (isset($_POST["btnPrimeiroAcesso"])) {
    include_once '../View/primeiroAcesso.php';
} else {
    include_once 'View/login.php';
}
