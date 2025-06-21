<?php 
include '../../config/connection.php';
?>

<form action="create-anuncio.php" method="POST" enctype="multipart/form-data">
    <!--1-->
    <label for="titulo_anuncio">Título do anúncio</label> 
    <input type="text" name="titulo_anuncio" id="titulo_anuncio">
    <br>
    <!--2-->
    <label for="descricao_anuncio">Descrição do anúncio</label>
    <input type="text" name="descricao_anuncio" id="descricao_anuncio">
    <br>
    <!--3-->
    <label for="data_publicacao">Data da publicação</label>
    <input type="text" name="data_publicacao" id="data_publicacao">
    <br>
    <!--4-->
    <label for="marca_veiculo">Marca do veículo</label>
    <input type="text" name="marca_veiculo" id="marca_veiculo">
    <br>
    <!--5-->
    <label for="modelo_veiculo">Modelo do veículo</label>
    <input type="text" name="modelo_veiculo" id="modelo_veiculo">
    <br>
    <!--6-->
    <label for="ano_veiculo">Ano do veículo</label>
    <input type="text" name="ano_veiculo" id="ano_veiculo">
    <br>
    <!--7-->
    <label for="cor_veiculo">Cor do veículo</label>
    <input type="text" name="cor_veiculo" id="cor_veiculo">
    <br>
    <!--8-->
    <label for="placa_veiculo">Placa do veículo</label>
    <input type="text" name="placa_veiculo" id="placa_veiculo">
    <br>
    <!--9-->
    <label for="nome_proprietario">Nome do proprietário</label>
    <input type="text" name="nome_proprietario" id="nome_proprietario">
    <br>
    <!--10-->
    <label for="telefone_proprietario">Telefone do proprietário</label>
    <input type="text" name="telefone_proprietario" id="telefone_proprietario">
    <br>
    <!-- 11 -->
     <label for="imagem_veiculo">Imagem do veículo</label>
    <input type="file" name="imagem_veiculo" id="imagem_veiculo" required>
    <br>

    <button type="submit">Cadastrar</button>
</form>

<?php
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
<?php include '../../includes/footer.php'; ?>
    

