<?php 
    include '../../config/connection.php';

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $id = isset($_GET['id']) ? $_GET['id'] : exit();

        if(empty($id)){
            echo "<script>alert('É necessário informar a placa do veículo!');</script>";
            exit();
        }

        $stmt = $pdo->prepare('SELECT * FROM anuncio WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $dados = $stmt->fetchAll();
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = isset($_POST['id']) ? $_POST['id'] : exit();

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

        if(!empty($_FILES['imagem_veiculo']['name'])) {
            $imagem_veiculo = $_FILES['imagem_veiculo'];
            $nome_imagem = uniqid() . "-" . $imagem_veiculo['name'];
            $caminho_imagem = "../../img/$nome_imagem";
            move_uploaded_file($imagem_veiculo['tmp_name'], $caminho_imagem);
        } else {
            $stmt = $pdo->prepare('SELECT imagem_veiculo FROM anuncio WHERE id = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $imagem = $stmt->fetch();
            $nome_imagem = $imagem['imagem_veiculo'];
        }

        $stmt = $pdo->prepare('UPDATE anuncio SET titulo_anuncio = :titulo_anuncio, descricao_anuncio = :descricao_anuncio, data_publicacao = :data_publicacao, marca_veiculo = :marca_veiculo, modelo_veiculo = :modelo_veiculo, ano_veiculo = :ano_veiculo, cor_veiculo = :cor_veiculo, placa_veiculo = :placa_veiculo, nome_proprietario = :nome_proprietario, telefone_proprietario = :telefone_proprietario, imagem_veiculo = :imagem_veiculo WHERE id = :id');
        $stmt->bindParam(':id', $id);
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

        Header("Location: read-anuncio.php");
    }
    
?>
<form action="update-anuncio.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $dados[0]['id']; ?>">
    <!--1-->
    <label for="titulo_anuncio">Título do anúncio</label> 
    <input type="text" name="titulo_anuncio" id="titulo_anuncio" value="<?php echo $dados[0]['titulo_anuncio']; ?>">
    <br>
    <!--2-->
    <label for="descricao_anuncio">Descrição do anúncio</label>
    <input type="text" name="descricao_anuncio" id="descricao_anuncio" value="<?php echo $dados[0]['descricao_anuncio']; ?>">
    <br>
    <!--3-->
    <label for="data_publicacao">Data da publicação</label>
    <input type="text" name="data_publicacao" id="data_publicacao" value="<?php echo $dados[0]['data_publicacao']; ?>">
    <br>
    <!--4-->
    <label for="marca_veiculo">Marca do veículo</label>
    <input type="text" name="marca_veiculo" id="marca_veiculo" value="<?php echo $dados[0]['marca_veiculo']; ?>">
    <br>
    <!--5-->
    <label for="modelo_veiculo">Modelo do veículo</label>
    <input type="text" name="modelo_veiculo" id="modelo_veiculo" value="<?php echo $dados[0]['modelo_veiculo']; ?>">
    <br>
    <!--6-->
    <label for="ano_veiculo">Ano do veículo</label>
    <input type="text" name="ano_veiculo" id="ano_veiculo" value="<?php echo $dados[0]['ano_veiculo']; ?>">
    <br>
    <!--7-->
    <label for="cor_veiculo">Cor do veículo</label>
    <input type="text" name="cor_veiculo" id="cor_veiculo" value="<?php echo $dados[0]['cor_veiculo']; ?>">
    <br>
    <!--8-->
    <label for="placa_veiculo">Placa do veículo</label>
    <input type="text" name="placa_veiculo" id="placa_veiculo" value="<?php echo $dados[0]['placa_veiculo']; ?>">
    <br>
    <!--9-->
    <label for="nome_proprietario">Nome do proprietário</label>
    <input type="text" name="nome_proprietario" id="nome_proprietario" value="<?php echo $dados[0]['nome_proprietario']; ?>">
    <br>
    <!--10-->
    <label for="telefone_proprietario">Telefone do proprietário</label>
    <input type="text" name="telefone_proprietario" id="telefone_proprietario" value="<?php echo $dados[0]['telefone_proprietario']; ?>">
    <br>
    <!-- 11 -->
     <label for="imagem_veiculo">Imagem do veículo</label>
    <input type="file" name="imagem_veiculo" id="imagem_veiculo">
    <br>

    <button type="submit">Salvar</button>
</form>