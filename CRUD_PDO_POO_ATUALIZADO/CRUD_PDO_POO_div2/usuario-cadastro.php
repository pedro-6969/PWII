<?php 
    include './header.php';
    include './usuario.php';
 
   
?>

    <div class="container-fluid plano-fundo">
        <div class="row d-flex justify-content-center">
            <div class="col-4 d-flex justify-content-center align-items-center altura">
                <div class="card w-100 shadow d-flex justify-content-center align-items-center flex-column">
                    <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-group-1024.png" width="100px">
                    <div class="card-body">
                        <form action="./usuario-cadastro.php" method="post">
                        <div class="mb-3">
                                <label for="nome" class="label-control">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="label-control">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="confirmar_senha" class="label-control">Confirmar Senha</label>
                                <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                            <div class="mb-3">
                                <p>Já possui conta? <a href="./form-login.php">Realize o Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
        if (isset($_POST['nome'])) 
        exit();

        if (isset($_POST['email'])) 
        exit();

        if (isset($_POST['senha'])) 
        exit();

        if (isset($_POST['confirmar_senha'])) 
        exit();

        $usuario = new Usuario('', '', '', '');
        echo '<div class= "alert alert-primary">';
        echo $usuario->inserir($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['confirmar_senha'], '');
        echo'</div>';
    ?>

<?php include './footer.php'; ?>

