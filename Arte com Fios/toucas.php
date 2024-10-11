

<main class="container">
<div class="row">
<?php
            $produtos = [
                ["nome" => "Touca de Flor", "preco" => "R$ 60,00", "img" => "./img/106.jpg"],
                ["nome" => "Touca cor Caqui", "preco" => "R$ 56,00", "img" => "./img/107.jpg"],
                ["nome" => "Touca Bege", "preco" => "R$ 48,00", "img" => "./img/108.jpg"],
                ["nome" => "Touca azul fundo do Mar", "preco" => "R$ 60,00", "img" => "./img/109.jpg"],
                ["nome" => "Touca cinza", "preco" => "R$ 59,00", "img" => "./img/110.jpg"],
                ["nome" => "Touca azul escuro", "preco" => "R$ 45,00", "img" => "./img/111.jpg"],
                ["nome" => "Touca", "preco" => "R$ 130,00", "img" => "./img/112.jpg"],
                ["nome" => "Touca Rosa", "preco" => "R$ 50,00", "img" => "./img/113.jpg"],
                ["nome" => "Touca Branca", "preco" => "R$ 61,00", "img" => "./img/114.jpg"],
                ["nome" => "Touca Colorida", "preco" => "R$ 57,00", "img" => "./img/115.jpg"],
                ["nome" => "Touca rosa com laço", "preco" => "R$ 49,00", "img" => "./img/116.jpg"],
                ["nome" => "Touca", "preco" => "R$ 58,00", "img" => "./img/117.jpg"],
            ];
 
            foreach ($produtos as $produto) {
                echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">';
                echo '    <div class="card shadow-sm">';
                echo '        <img src="' . $produto['img'] . '" class="imagemProduto">';
                echo '        <h2>' . $produto['nome'] . '</h2>';
                echo '        <h5>' . $produto['preco'] . '</h5>';
                echo '    </div>';
                echo '</div>';
            }
            ?>
</div>
</main>
