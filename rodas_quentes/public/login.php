<?php include '../includes/header.php'; ?>

    <h1>Login e Senha</h1>
    <form action="login.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="password">Senha</label>
        <input type="password" name="password" id="password">

        <button type="submit">Continuar</button>
    </form>
    
<?php 
    $email = isset($_POST['email']) ? $_POST['email'] : exit();
    $password = isset($_POST['password']) ? $_POST['password'] : exit();
    
    $email_adm = 'rodas_quentes@gmail.com';
    $password_adm = '123123';

    if($email == $email_adm && $password == $password_adm){
        header('Location: index.php');
    }
    else{
        echo '<script>alert("Email ou senha incorretos!")</script>';
    }
?>
<?php include '../includes/footer.php'; ?>