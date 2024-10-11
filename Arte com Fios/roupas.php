
<main class="container">
    <div class="row">
        <h2>Roupas de Crianças</h2>

        <?php 
            $produtos = [
                ["imagem" => "./img/77.jpg", "titulo" => "Vestido Marrom", "preco" => "R$ 50,00"],
                ["imagem" => "./img/78.jpg", "titulo" => "Vestido Amarelo", "preco" => "R$ 60,00"],
                ["imagem" => "./img/79.jpg", "titulo" => "Conjunto Amarelo", "preco" => "R$ 75,00"],
                ["imagem" => "./img/80.jpg", "titulo" => "Vestido Rosa com laço", "preco" => "R$ 65,00"],
                
            ];
 
            foreach ($produtos as $produto) {
                echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <img src="' . $produto['imagem'] . '" class="imagemProduto" alt="' . $produto['titulo'] . '">
                            <h2>' . $produto['titulo'] . '</h2>
                            <h5>' . $produto['preco'] . '</h5>
                        </div>
                      </div>';
            }
        ?>

        <h2>Roupas de Adulto</h2>

        <?php 
            $produtosAdulto = [
                ["imagem" => "./img/89.jpg", "titulo" => "Conjunto", "preco" => "R$ 110,00"],
                ["imagem" => "./img/90.jpg", "titulo" => "Conjunto", "preco" => "R$ 115,00"],
                ["imagem" => "./img/91.jpg", "titulo" => "Conjunto de Short", "preco" => "R$ 103,00"],
                ["imagem" => "./img/92.jpg", "titulo" => "Blusa", "preco" => "R$ 82,00"],
           
            ];

            foreach ($produtosAdulto as $produto) {
                echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card shadow-sm">
                            <img src="' . $produto['imagem'] . '" class="imagemProduto" alt="' . $produto['titulo'] . '">
                            <h2>' . $produto['titulo'] . '</h2>
                            <h5>' . $produto['preco'] . '</h5>
                        </div>
                      </div>';
            }
        ?>

        
    </div>
</main>