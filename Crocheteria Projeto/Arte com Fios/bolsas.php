
<html lang="pt-br">




    <div class="menu">
        <ul >
            <li><a  href="./bolsas.html">Bolsas</a></li>
            <li><a href="./roupas.html">Vestuário</a></li>
            <li><a href="./kitC.html">Kits</a></li>
            <li><a href="./sapatos.html">Sapatinhos</a></li>
            <li><a href="./toucas.html">Toucas</a></li>
        </ul>
    </div>
    <br>
    <br>
    <br>
    <main class="container">
       
        <div class="row">


    <?php
    $produtos = [
     ["imagem" => "./img/02.jpg", "nome" => "Bolsa", "preço" => 130,00],
     ["imagem" => "./img/08.jpg", "nome" => "Bolsa", "preço" => 125,60],
     
     ["imagem" => "./img/09.jpg", "nome" => "Bolsa", "preço" => 135,90],
     
     ["imagem" => "./img/10.jpg", "nome" => "Bolsa", "preço" => 120,99],
     
     ["imagem" => "./img/11.jpg", "nome" => "Bolsa", "preço" => 133,00],
     
     ["imagem" => "./img/12.jpg", "nome" => "Bolsa", "preço" => 140,00],
     ["imagem" => "./img/13.jpg", "nome" => "Bolsa", "preço" => 130,00],
     ["imagem" => "./img/14.jpg", "nome" => "Bolsa", "preço" => 129,90],
     ["imagem" => "./img/15.jpg", "nome" => "Bolsa", "preço" => 136,00],
     ["imagem" => "./img/16.jpg", "nome" => "Bolsa", "preço" => 130,00],
     ["imagem" => "./img/17.jpg", "nome" => "Bolsa", "preço" => 128,00],
     ["imagem" => "./img/18.jpg", "nome" => "Bolsa", "preço" => 110,00],
     ["imagem" => "./img/19.jpg", "nome" => "Bolsa", "preço" => 120,00],
     ["imagem" => "./img/20.jpg", "nome" => "Bolsa", "preço" => 127,00],
     ["imagem" => "./img/21.jpg", "nome" => "Bolsa", "preço" => 138,00],
     ["imagem" => "./img/22.jpg", "nome" => "Bolsa", "preço" => 140,00],
     ["imagem" => "./img/23.jpg", "nome" => "Bolsa", "preço" => 124,00],
     ["imagem" => "./img/24.jpg", "nome" => "Bolsa", "preço" => 137,00],
     ["imagem" => "./img/25.jpg", "nome" => "Bolsa", "preço" => 146,90],
     ["imagem" => "./img/26.jpg", "nome" => "Bolsa", "preço" => 141,00],
    
     

    ];
         echo"<div class='col col-lg-3 col-md-4 col-sm-6 col-12'>
          <div class='card shadow-sm'> <img src='{$produto['imagem']}' class='imagemProduto' alt='Imagem do Produto'>
           <h2>{$produto['nome']}</h2>
         <h5>R$" . number_format($produto['preço'],2,','.'). "
         </h5>
         </div> </div>;}
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
        <a href="https://wa.me/5527996060748" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </span>
</footer>
</body>

</html>