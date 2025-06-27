<?php 
    include '../../config/connection.php';
    include '../../includes/header.php';
?>
<div class="anuncios d-flex flex-wrap">

<?php 
    $stmt = $pdo->query('SELECT * FROM anuncio');
    $anuncios = $stmt->fetchAll();
    foreach ($anuncios as $indice => $ad) { ?>
        
                <div class="col-xl-6 d-flex justify-content-center">
                    <div class="d-flex flex-column m-5">
                        <div class="d-flex m-1">
                            <a href="delete-anuncio.php?id=<?php echo $ad['id'] ?>"><img src="../../img/delete.png" alt="Delete" style="width: 30px; heigth: auto; margin-right: 5px;"></a>
                            <a href="update-anuncio.php?id=<?php echo $ad['id'] ?>"><img src="../../img/update.png" alt="Update" style="width: 30px; heigth: auto; margin-left: 5px;"></a>
                        </div>
                        <div class="d-flex cont-anuncio">
                            <div class="ligth-gray-anuncio">
                                <div class="img-read" style="background-image: url(../../img/<?php echo $ad['imagem_veiculo']; ?>); width: 330px; height: 330px; border-radius: 5px;"></div>
                            </div>
                            <div class="blue-anuncio">
                                <div class="read-anuncio-info m-3">
                                    <p>
                                    Título: <?php echo $ad['titulo_anuncio'] ?><br>
                                    Descrição: <?php echo $ad['descricao_anuncio'] ?><br>
                                    Marca: <?php echo $ad['marca_veiculo'] ?><br>
                                    Modelo: <?php echo $ad['modelo_veiculo'] ?><br>
                                    Ano: <?php echo $ad['ano_veiculo'] ?><br>
                                    Cor: <?php echo $ad['cor_veiculo'] ?><br>
                                    Placa: <?php echo $ad['placa_veiculo'] ?><br>
                                    Proprietário: <?php echo $ad['nome_proprietario'] ?><br>
                                    Telefone: <?php echo $ad['telefone_proprietario'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        
<?php } ?> 

</div>
<?php include '../../includes/footer.php'; ?>