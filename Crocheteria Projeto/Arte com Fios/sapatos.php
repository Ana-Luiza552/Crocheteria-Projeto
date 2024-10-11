

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
<br><br><br>
<main class="container">
<div class="row">
<?php

            

            $produtos = [

                ["img" => "./img/27.jpg", "nome" => "Sapato bebê", "preco" => "R$ 45,00"],

                ["img" => "./img/28.jpg", "nome" => "Sapato bebê", "preco" => "R$ 50,00"],

                ["img" => "./img/29.jpg", "nome" => "Sapato bebê", "preco" => "R$ 79,00"],

                ["img" => "./img/30.jpg", "nome" => "Sapato bebê", "preco" => "R$ 70,00"],

                ["img" => "./img/31.jpg", "nome" => "Sapato bebê", "preco" => "R$ 81,00"],

                ["img" => "./img/32.jpg", "nome" => "Sapato bebê", "preco" => "R$ 76,00"],

                ["img" => "./img/33.jpg", "nome" => "Sapato bebê", "preco" => "R$ 80,00"],

                ["img" => "./img/34.jpg", "nome" => "Sapato bebê", "preco" => "R$ 92,00"],

                ["img" => "./img/35.jpg", "nome" => "Sapato bebê", "preco" => "R$ 64,00"],

                ["img" => "./img/36.jpg", "nome" => "Sapato bebê", "preco" => "R$ 58,00"],

                ["img" => "./img/37.jpg", "nome" => "Sapato bebê", "preco" => "R$ 60,00"],

                ["img" => "./img/38.jpg", "nome" => "Sapato bebê", "preco" => "R$ 78,00"],

                ["img" => "./img/39.jpg", "nome" => "Sapato bebê", "preco" => "R$ 83,00"],

                ["img" => "./img/40.jpg", "nome" => "Sapato bebê", "preco" => "R$ 65,00"],

                ["img" => "./img/41.jpg", "nome" => "Sapato bebê", "preco" => "R$ 89,00"],

                ["img" => "./img/42.jpg", "nome" => "Sapato bebê", "preco" => "R$ 75,00"],

                ["img" => "./img/43.jpg", "nome" => "Sapato bebê", "preco" => "R$ 56,00"],

                ["img" => "./img/44.jpg", "nome" => "Sapato bebê", "preco" => "R$ 69,00"],

                ["img" => "./img/45.jpg", "nome" => "Sapato bebê", "preco" => "R$ 98,00"],

                ["img" => "./img/46.jpg", "nome" => "Sapato bebê", "preco" => "R$ 64,00"],

                ["img" => "./img/47.jpg", "nome" => "Sapato bebê", "preco" => "R$ 87,00"],

                ["img" => "./img/48.jpg", "nome" => "Sapato bebê", "preco" => "R$ 78,00"],

                ["img" => "./img/69.jpg", "nome" => "Sapato bebê", "preco" => "R$ 68,00"],

                ["img" => "./img/70.jpg", "nome" => "Sapato bebê", "preco" => "R$ 85,00"],

            ];
 
            foreach ($produtos as $produto) {

                echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">';

                echo '  <div class="card shadow-sm">';

                echo '      <img src="' . $produto['img'] . '" class="imagemProduto" alt="Bolsa">';

                echo '      <h2>' . $produto['nome'] . '</h2>';

                echo '      <h5>' . $produto['preco'] . '</h5>';

                echo '  </div>';

                echo '</div>';

            }

            ?>
</div>
</main>
<br><br>
 
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

 
