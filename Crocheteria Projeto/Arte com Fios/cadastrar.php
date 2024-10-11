
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
 
    
}
?>

<html lang="pt-BR">

<br>
<br>
<br>
 
<main class="container">
<form id="registrationForm" method="POST" action="">
<div class="mb-3">
<label for="name" class="form-label">Nome</label>
<input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="mb-3">
<label for="email" class="form-label">E-mail</label>
<input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="mb-3">
<label for="password" class="form-label">Senha</label>
<input type="password" class="form-control" id="password" name="password" required>
</div>
<div class="mb-3">
<label for="confirmPassword" class="form-label">Confirmar Senha</label>
<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
</div>
<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</main>
 
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
 

</html>