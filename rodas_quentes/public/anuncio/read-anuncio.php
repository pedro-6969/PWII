<?php 
    include '../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM anuncio');
    $anuncios = $stmt->fetchAll();
    foreach ($anuncios as $indice => $ad) { ?>
        
            <div class="read-anuncio">
                <div class="read-anuncio-update-delete">
                    <a href="delete-anuncio.php?id=<?php echo $ad['id']; ?>">Delete</a>
                    <a href="update-anuncio.php?id=<?php echo $ad['id']; ?>">update</a>
                </div>
                <div class="read-anuncio-img">
                    <img src="../../img/<?php echo $ad['imagem_veiculo']; ?>" alt="<?php echo $ad['titulo_anuncio']; ?>">
                </div>
                <div class="read-anuncio-info">
                    <p>Título: <?php echo $ad['titulo_anuncio'] ?></p>
                    <p>Descrição: <?php echo $ad['descricao_anuncio'] ?></p>
                    <p>Marca: <?php echo $ad['marca_veiculo'] ?></p>
                    <p>Modelo: <?php echo $ad['modelo_veiculo'] ?></p>
                    <p>Ano: <?php echo $ad['ano_veiculo'] ?></p>
                    <p>Cor: <?php echo $ad['cor_veiculo'] ?></p>
                    <p>Placa: <?php echo $ad['placa_veiculo'] ?></p>
                    <p>Proprietário: <?php echo $ad['nome_proprietario'] ?></p>
                    <p>Telefone: <?php echo $ad['telefone_proprietario'] ?></p>
                </div>
            </div>
        
<?php } ?>
