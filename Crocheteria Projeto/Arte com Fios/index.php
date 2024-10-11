<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="./style.css" rel="stylesheet"/>
    <title>Home</title>
</head>
<body>
    <header class="p-2 d-flex justify-content-between align-items-center">
        <ul class="nav nav-underline justify-content-center">
            <a href="./index.html">
                <img src="./IMG/01.png" class="logo" alt="Logo">
            </a>
            <li class="nav-item">
                <a class="nav-link text-dark" href="./sobre.html">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="./cadastrar.html">Cadastrar</a>
            </li>
        </ul>
    </header>

    <div class="menu">
        <ul>
            <li><a href="./bolsas.html">Bolsas</a></li>
            <li><a href="./roupas.html">Vestuário</a></li>
            <li><a href="./kitC.html">Kits</a></li>
            <li><a href="./sapatos.html">Sapatinhos</a></li>
            <li><a href="./toucas.html">Toucas</a></li>
        </ul>
    </div>

    <br><br><br>

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
