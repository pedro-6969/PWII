<?php 
include '../includes/header.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = isset($_POST['email']) ? $_POST['email'] : exit();
    $password = isset($_POST['password']) ? $_POST['password'] : exit();
    
    $email_adm = 'rodas_quentes@gmail.com';
    $password_adm = '123123';
    
    if($email == $email_adm && $password == $password_adm){
        header('Location: index.php');
        exit();
    }
    else{
        echo '<script>alert("Email ou senha incorretos!")</script>';
    }
}

?>
<body class="login">
    <div class="container-fluid">
        <div class="row justify-content-center margin-top-bottom">
            <div class="col-xl-8">
                <div class="row cont-login">
                    <div class="form-login">
                        
                        <div class="d-flex flex-column">
                            <h1 class="h1 black">Login e Senha</h1>
                            <div class="d-flex gap-3 justify-content-center mt-5">
                                <img src="../img/google-login.png" alt="Google" style="width: 32px; height: auto;">
                                <img src="../img/facebook-login.png" alt="Facebook" style="width: 32px; height: auto;">
                                <img src="../img/linkedin-login.png" alt="Linkedin" style="width: 32px; height: auto;">
                            </div>
                            
                        </div>
                    
                        <hr style="border-color: var(--light-gray); width: 400px; border: solid 1px;">
                        
                        <form action="login.php" method="POST">
                            <div class="input-login">
                                <img src="../img/email.png" alt="Email" style="width: 20px; heigth: auto;">
                                <label for="email" class="h2 black">Email</label><br>
                                <input type="email" name="email" id="email" placeholder="Digite o email" class="input-text">
                            </div>
                            
                            <div class="input-login">
                                <img src="../img/password.png" alt="Senha" style="width: 20px; heigth:auto;">
                                <label for="password" class="h2 black">Senha</label><br>
                                <input type="password" name="password" id="password" placeholder="Digite o email" class="input-text">
                            </div>
                            
                            <div class="button-create mb-3">
                                    <button type="submit" class="h2 white">Continuar</button>
                            </div>
                            
                        </form>
                    </div>
                    <div class="form-info">
                        <div class="d-flex flex-column align-items-center">
                            <img src="../img/carro-login.svg" alt="carro-login">
                            <div class="d-flex flex-column mt-3">
                                <h2>Nosso sistema permite:</h2>
                                <li class="h3 quinary-color">Cadastro: Registra dados de veículos e clientes</li>
                                <li class="h3 quinary-color">Vendas: Controla negociações, contratos e pagamentos.</li>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>

<?php 
    include '../includes/footer.php'; 
?>


