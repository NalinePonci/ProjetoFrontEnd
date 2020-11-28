<?php
header("Content-Type: text/html; charset=utf-8", true);
$activePage = basename($_SERVER['REQUEST_URI']);
switch ($activePage) {
    case "pagina-inicial":
        $title = "Bem vindo | PizTopper";
        break;
    case "cadastro":
        $title = "Cadastro | PizTopper";
        break;
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require "inc/inc.css.php";
    ?>
    <title><?= $title ?></title>

</head>

<body class="fadeIn">