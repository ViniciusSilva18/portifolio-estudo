<?php
session_start();
$retorno=$_SESSION["retorno"] ?? null;
unset($_SESSION["retorno"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
    <link rel="icon" type="image/png" href="/public/assets/images/favicon.png">
    <link rel="stylesheet" href="/public/assets/css/estilo.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="menu">
        <div class="menu-corpo">

            <a class="text-white" href="/">inicio</a>
            <a class="text-white" href="/">contato</a>
        </div>
    </div>

    <form action="controllers/EnviarContato.php" method="POST" class="bloco-contato">
        <div class="linha">
            <div class="grupo-campo">
                <label for="nome">Nome</label>
                <input required name="nome" type="text">
            </div>
            <div class="grupo-campo">
                <label for="email">E-mail </label>
                <input required name="email" type="email">
            </div>
        </div>
        <div class="linha">
            <div class="grupo-campo m-2">
                <label for="mensagem"> Mensagem </label>
                <textarea required name="mensagem" rows="20"></textarea>
            </div>

        </div>
        <div>
            <button class="btn-confirmar">
                Enviar
            </button>
            <?php if (!empty($retorno)) { ?>
                <div class="mt-2">
                <?php echo $retorno ?>
                </div>
            <?php } ?>
        </div>
    </form>

    <div class="menu">
        <div class="menu-corpo">

            <a class="text-white" href="/">
                <i class="fab fa-facebook"> </i>
            </a>
            <a class="text-white" target="_blank" href="https://wa.me/5518997600702">
                <i class="fab fa-whatsapp"> </i>
            </a>

            <a class="text-white" href="/">
                <i class="fab fa-instagram-square"> </i>
            </a>

            <a class="text-white" href="mailto:viniciu.rodrigues200015@gmail.com">
                <i class="fas fa-envelope-square"></i>
            </a>

            <a class="text-white" href="tel:11994334690">
                <i class="fas fa-phone"></i>
            </a>

        </div>
    </div>

</body>

</html>