<?php
require_once('library/config.php');

if ($user->is_logged_in()) {
    header('Location: pagina_inicial.php');
}

if (isset($_POST['submit'])) {

    //very basic validation
    if (strlen($_POST['username']) < 3) {
        $error[] = 'Informe um Username que possua pelo menos 3 caracteres.';
    } else {
        $stmt = $db->prepare('SELECT username FROM usuario WHERE username = :username');
        $stmt->execute(array(':username' => $_POST['username']));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($row['username'])) {
            $error[] = 'O Username informado já existe.';
        }

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>All In System - Entre ou Cadastre-se</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="box">
    <div id="header">
        <h1 id="logomarca">All In System</h1>
    </div>

    <?php
    if (isset($error)) {
        foreach ($error as $error) {
            echo '<p class="bg-danger">' . $error . '</p>';
        }
    }
    ?>

    <form method="post">
        <div class="group">
            <input class="inputMaterial" type="text" name="nome">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Nome Completo</label>
        </div>
        <div class="group">
            <input class="inputMaterial" type="email" name="email">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>E-mail</label>
        </div>
        <div class="group">
            <input class="inputMaterial" type="text" name="username" value="<?php if (isset($error)) {
                echo $_POST['email'];
            } ?>">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Username</label>
        </div>
        <div class="group">
            <input class="inputMaterial" type="password" name="senha">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Senha</label>
        </div>
        <div class="group">
            <input class="inputMaterial" type="password" name="senhaconfirmacao">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Confirmação de Senha</label>
        </div>
        <button id="buttonlogintoregister" type="submit" name="submit">Cadastrar</button>
    </form>
</div>
</body>
</html>