<?php 
    include '../config/connection.php';
    include '../includes/header.php';
?>
<div class="anuncios d-flex flex-wrap">

<?php 
    $stmt = $pdo->query('SELECT * FROM anuncio');
    $anuncios = $stmt->fetchAll();
    foreach ($anuncios as $indice => $ad) { ?>
        
                <div class="col-xl-6 d-flex justify-content-center">
                    <div class="d-flex cont-anuncio m-5">
                        <div class="ligth-gray-anuncio">
                            <img src="../img/<?php echo $ad['imagem_veiculo']; ?>" alt="">
                            
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
            
        
<?php } ?> 

</div>
<?php include '../includes/footer.php'; ?>