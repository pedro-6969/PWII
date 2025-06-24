<?php 
    include '../../config/connection.php';
    include '../../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $titulo_anuncio = isset($_POST['titulo_anuncio']) ? $_POST['titulo_anuncio'] : exit();
    $descricao_anuncio = isset($_POST['descricao_anuncio']) ? $_POST['descricao_anuncio'] : exit();
    $data_publicacao = isset($_POST['data_publicacao']) ? $_POST['data_publicacao'] : exit();
    $marca_veiculo = isset($_POST['marca_veiculo']) ? $_POST['marca_veiculo'] : exit();
    $modelo_veiculo = isset($_POST['modelo_veiculo']) ? $_POST['modelo_veiculo'] : exit();
    $ano_veiculo = isset($_POST['ano_veiculo']) ? $_POST['ano_veiculo'] : exit();
    $cor_veiculo = isset($_POST['cor_veiculo']) ? $_POST['cor_veiculo'] : exit();
    $placa_veiculo = isset($_POST['placa_veiculo']) ? $_POST['placa_veiculo'] : exit();
    $nome_proprietario = isset($_POST['nome_proprietario']) ? $_POST['nome_proprietario'] : exit();
    $telefone_proprietario = isset($_POST['telefone_proprietario']) ? $_POST['telefone_proprietario'] : exit();
    
    $imagem_veiculo = isset($_FILES['imagem_veiculo']) ? $_FILES['imagem_veiculo'] : exit();
    $nome_imagem = uniqid() . "-" . $imagem_veiculo['name'];
    $caminho_imagem = "../../img/$nome_imagem";
    move_uploaded_file($imagem_veiculo['tmp_name'], $caminho_imagem);
    
    $stmt = $pdo->prepare('INSERT INTO anuncio (titulo_anuncio, descricao_anuncio, data_publicacao, marca_veiculo, modelo_veiculo, ano_veiculo, cor_veiculo, placa_veiculo, nome_proprietario, telefone_proprietario, imagem_veiculo) VALUES (:titulo_anuncio, :descricao_anuncio, :data_publicacao, :marca_veiculo, :modelo_veiculo, :ano_veiculo, :cor_veiculo, :placa_veiculo, :nome_proprietario, :telefone_proprietario, :imagem_veiculo)');
    
    $stmt->bindParam(':titulo_anuncio', $titulo_anuncio);
    $stmt->bindParam(':descricao_anuncio', $descricao_anuncio);
    $stmt->bindParam(':data_publicacao', $data_publicacao);
    $stmt->bindParam(':marca_veiculo', $marca_veiculo);
    $stmt->bindParam(':modelo_veiculo',$modelo_veiculo);
    $stmt->bindParam(':ano_veiculo', $ano_veiculo);
    $stmt->bindParam(':cor_veiculo', $cor_veiculo);
    $stmt->bindParam(':placa_veiculo', $placa_veiculo);
    $stmt->bindParam(':nome_proprietario', $nome_proprietario);
    $stmt->bindParam(':telefone_proprietario', $telefone_proprietario);
    $stmt->bindParam(':imagem_veiculo', $nome_imagem);
    $stmt->execute();

}
?>
<div class="d-flex">
        <div class="info-create d-flex justify-content-center">
            <div>
                <div class="d-flex justify-content-center">
                    <img src="../../img/carro-login.svg" alt="carro-login" class="imagem-create">
                </div>
                <h1 class="h1 white">Faça o cadastro do anúncio de seu veículo aqui!</h1>
                <li class="h2 quinary-color">Preencha todas as informações solicitadas.</li>
                <li class="h2 quinary-color">Seu anúncio será exibido à todos os usuários do sistema.</li> 
                <li class="h2 quinary-color">Você poderá editar ou excluir seu anúncio quando quiser.</li> 
                <li class="h2 quinary-color">Você poderá cadastrar outros veículos se quiser.</li> 
            </div>
        </div>
        <div class="form-create d-flex justify-content-center">
            <form action="create-anuncio.php" method="POST" enctype="multipart/form-data">
                <h1 class="h1 black mt-3">Cadastro de anúncio de veículos</h1>
                <!--1-->
                <label for="titulo_anuncio" class="h2 black mt-1">Título do anúncio</label> 
                <input type="text" name="titulo_anuncio" id="titulo_anuncio" class="input-text">
                <br>
                <!--2-->
                <label for="descricao_anuncio" class="h2 black mt-1">Descrição do anúncio</label>
                <input type="text" name="descricao_anuncio" id="descricao_anuncio" class="input-text">
                <br>
                <!--3-->
                <label for="data_publicacao" class="h2 black mt-1">Data da publicação</label>
                <input type="text" name="data_publicacao" id="data_publicacao" class="input-text">
                <br>
                <!--4-->
                <label for="marca_veiculo" class="h2 black mt-1">Marca do veículo</label>
                <input type="text" name="marca_veiculo" id="marca_veiculo" class="input-text">
                <br>
                <!--5-->
                <label for="modelo_veiculo" class="h2 black mt-1">Modelo do veículo</label>
                <input type="text" name="modelo_veiculo" id="modelo_veiculo" class="input-text">
                <br>
                <!--6-->
                <label for="ano_veiculo" class="h2 black mt-1">Ano do veículo</label>
                <input type="text" name="ano_veiculo" id="ano_veiculo" class="input-text">
                <br>
                <!--7-->
                <label for="cor_veiculo" class="h2 black mt-1">Cor do veículo</label>
                <input type="text" name="cor_veiculo" id="cor_veiculo" class="input-text">
                <br>
                <!--8-->
                <label for="placa_veiculo" class="h2 black mt-1">Placa do veículo</label>
                <input type="text" name="placa_veiculo" id="placa_veiculo" class="input-text">
                <br>
                <!--9-->
                <label for="nome_proprietario" class="h2 black mt-1">Nome do proprietário</label>
                <input type="text" name="nome_proprietario" id="nome_proprietario" class="input-text">
                <br>
                <!--10-->
                <label for="telefone_proprietario" class="h2 black mt-1">Telefone do proprietário</label>
                <input type="text" name="telefone_proprietario" id="telefone_proprietario" class="input-text">
                <br>
                <!-- 11 -->
            
                <label class="h2 black mt-1">Imagem do veículo</label>
                <label for="imagem_veiculo" class="h2 black mt-1 label-file">Escolher arquivo</label>
                <input type="file" name="imagem_veiculo" id="imagem_veiculo" class="form-control">
                

                <!-- <label for="imagem_veiculo" class="h2 black mt-2">Imagem do veículo</label>
                <input type="file" name="imagem_veiculo" id="imagem_veiculo" required> -->
                <br>
                <div class="button-create mb-3">
                    <button type="submit" class="h2 white">Cadastrar</button>
                </div>
                <script>
    const inputFile = document.getElementById('imagem_veiculo');
    const fileName = document.getElementById('file-name');

    inputFile.addEventListener('change', function(){
        if(this.files.length > 0){
            fileName.textContent = this.files[0].name;
        } else {
            fileName.textContent = "Nenhum arquivo selecionado";
        }
    });
</script>

                
            </form>
        </div>
        
    </div>
</div>


<?php include '../../includes/footer.php'; ?>