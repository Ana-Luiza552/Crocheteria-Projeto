
<main class="container">
        <div class="row">

        <?php
            $produtos = [
                ["imagem" => "./img/02.jpg", "nome" => "Bolsa", "preco" => 130.00],
                ["imagem" => "./img/117.jpg", "nome" => "Touca", "preco" => 125.60],
                ["imagem" => "./img/48.jpg", "nome" => "Sapatinho de Bebê", "preco" => 135.90],
                ["imagem" => "./img/56.jpg", "nome" => "Caminho de Mesa", "preco" => 120.99],
                ["imagem" => "./img/33.jpg", "nome" => "Sapatinho de Bebê", "preco" => 133.00],
                ["imagem" => "./img/40.jpg", "nome" => "Bolsa", "preco" => 140.00],
                ["imagem" => "./img/77.jpg", "nome" => "Vestido", "preco" => 120.00],
                ["imagem" => "./img/101.jpg", "nome" => "Biquíni", "preco" => 130.90],
            ];

            foreach ($produtos as $produto) {
                echo "
                    <div class='col col-lg-3 col-md-4 col-sm-6 col-12'>
                        <div class='card shadow-sm'>
                            <img src='{$produto['imagem']}' class='imagemProduto' alt='Imagem do Produto'>
                            <h2>{$produto['nome']}</h2>
                            <h5>R$ " . number_format($produto['preco'], 2, ',', '.') . "</h5>
                        </div>
                    </div>";
            }
        ?>
        </div>
    </main>