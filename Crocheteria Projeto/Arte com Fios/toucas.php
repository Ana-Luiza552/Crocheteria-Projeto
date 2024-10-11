
<html lang="pt-br">

<div class="menu">
<ul>
<li><a href="./bolsas.php">Bolsas</a></li>
<li><a href="./roupas.php">Vestuário</a></li>
<li><a href="./kitC.php">Kits</a></li>
<li><a href="./sapatos.php">Sapatinhos</a></li>
<li><a href="./toucas.php">Toucas</a></li>
</ul>
</div>
<br>
<br>
<br>
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
<br>
<br>
<footer class="fixed-bottom p-2 text-center">
<span>&copy; Todos os direitos reservados. 2024</span>
<span class="m-2">
<a href="https://www.instagram.com/crocheteria.artecomfios/" target="_blank" class="me-2">
<i class="fab fa-instagram"></i>
</a>
<a href="https://wa.me/5527996060747" target="_blank">
<i class="fab fa-whatsapp"></i>
</a>
</span>
</footer>
</body>
</html>
