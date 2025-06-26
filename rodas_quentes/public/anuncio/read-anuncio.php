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
                            <a href="delete-anuncio.php?id=<?php echo $ad['id'] ?>"><img src="../../img/placeholder.png" alt="Delete" style="width: 20px; heigth: auto;"></a>
                            <a href="update-anuncio.php?id=<?php echo $ad['id'] ?>"><img src="../../img/placeholder.png" alt="Update" style="width: 20px; heigth: auto;"></a>
                        </div>
                        <div class="d-flex cont-anuncio position-relative">
                            <div class="ligth-gray-anuncio">
                                <img src="../../img/<?php echo $ad['imagem_veiculo']; ?>" alt="<?php echo $ad['titulo_anuncio']; ?>" style="width: 80%; heigth: auto; border-radius: 5px">
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