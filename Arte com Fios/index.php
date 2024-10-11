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
            <a href="./index.php">
                <img src="./IMG/01.png" class="logo" alt="Logo">
            </a>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?page=sobre">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?page=cadastrar">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="?page=listar">Listar</a>
            </li>
        </ul>
    </header>
    <div class="menu">
<ul>
            <li><a href="?page=bolsas">Bolsas</a></li>
            <li><a href="?page=roupas">Vestuário</a></li>
            <li><a href="?page=kitC">Kits</a></li>
            <li><a href="?page=sapatos">Sapatinhos</a></li>
            <li><a href="?page=toucas">Toucas</a></li>
        </ul>
</div>


    <div class="container">
            <div class="py-5">
                 <?php
                 include("config.php");
                 switch(@$_REQUEST["page"]){
                     case "cadastrar":
                     include("cadastrar.php");
                     break;

                     case "sobre":
                        include("sobre.php");
                        break;

                        case "bolsas":
                            include("bolsas.php");
                            break;

                            case "kitC":
                                include("kitC.php");
                                break;

                                case "roupas":
                                    include("roupas.php");
                                    break;

                                    case "sapatos":
                                        include("sapatos.php");
                                        break;

                                        case "toucas":
                                            include("toucas.php");
                                            break;

                                            case "listar":
                                                include("listar.php");
                                                break;

                                                case "editar":
                                                    include("editar.php");
                                                    break;

                                                    case "salvar":
                                                        include("salvar.php");
                                                        break;

                                default:
                                include("destaques.php");
                 }
                 ?>
        </div>

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
