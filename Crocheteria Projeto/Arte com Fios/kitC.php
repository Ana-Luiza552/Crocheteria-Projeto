
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
                ['img' => './img/49.jpg', 'nome' => 'Kit Cozinha 3 peças', 'preco' => 'R$ 120,00'],
                ['img' => './img/50.jpg', 'nome' => 'Kit Cozinha 3 peças', 'preco' => 'R$ 119,00'],
                ['img' => './img/51.jpg', 'nome' => 'Kit Cozinha 3 peças', 'preco' => 'R$ 125,00'],
                ['img' => './img/52.jpg', 'nome' => 'Capa de Botijão', 'preco' => 'R$ 40,00'],
                ['img' => './img/53.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 120,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/54.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 130,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/55.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 129,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/56.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 146,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/65.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 140,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/58.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 135,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/59.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 132,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/60.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 127,80', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/61.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 141,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/62.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 120,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/63.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 139,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/64.jpg', 'nome' => 'Caminho de Mesa', 'preco' => 'R$ 134,00', 'observacao' => 'Sujeito a mudança de valor conforme tamanho da peça'],
                ['img' => './img/57.jpg', 'nome' => 'Kit Cozinha 3 peças', 'preco' => 'R$ 128,00'],
                ['img' => './img/66.jpg', 'nome' => 'Kit Cozinha 3 peças', 'preco' => 'R$ 133,00'],
                ['img' => './img/67.jpg', 'nome' => 'Puxa Saco', 'preco' => 'R$ 30,00'],
                ['img' => './img/68.jpg', 'nome' => 'Capa de Botijão', 'preco' => 'R$ 35,00'],
                // Itens do Kit WC
                ['img' => './img/71.jpg', 'nome' => 'Kit Banheiro', 'preco' => 'R$ 110,00'],
                ['img' => './img/72.jpg', 'nome' => 'Kit Banheiro', 'preco' => 'R$ 120,00'],
                ['img' => './img/73.jpg', 'nome' => 'Kit Banheiro', 'preco' => 'R$ 1150,00'],
                ['img' => './img/74.jpg', 'nome' => 'Kit Banheiro', 'preco' => 'R$ 110,00'],
                ['img' => './img/75.jpg', 'nome' => 'Tampa de Vaso', 'preco' => 'R$ 130,00'],
                ['img' => './img/76.jpg', 'nome' => 'Tapete de Banheiro', 'preco' => 'R$ 121,00'],
            ];
 
            foreach ($produtos as $produto) {
                echo '<div class="col col-lg-3 col-md-4 col-sm-6 col-12">
<div class="card shadow-sm">
<img src="' . $produto['img'] . '" class="imagemProduto" alt="' . $produto['nome'] . '">
<h2>' . $produto['nome'] . '</h2>
<h5>' . $produto['preco'] . '</h5>';
                if (isset($produto['observacao'])) {
                    echo '<h7>' . $produto['observacao'] . '</h7>';
                }
                echo '    </div>
</div>';
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
</footer