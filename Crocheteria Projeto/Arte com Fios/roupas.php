<!DOCTYPE html>
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


</html>
