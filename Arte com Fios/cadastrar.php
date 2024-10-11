
<h2 class="fw-light text-center mt-3">Cadastro Usuario :</h2>
 
<main class="container">
<form id="registrationForm" method="POST" action="?page=salvar">
<input type="hidden" name="acao" value="cadastrar"/>
<div class="mb-3">
<label for="nome" class="form-label">Nome</label>
<input type="text" class="form-control" id="nome" name="nome" required>
</div>
<div class="mb-3">
<label for="email" class="form-label">E-mail</label>
<input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="mb-3">
<label for="senha" class="form-label">Senha</label>
<input type="password" class="form-control" id="senha" name="senha" required>
</div>
<div class="mb-3">
<label for="confirmarsenha" class="form-label">Confirmar Senha</label>
<input type="password" class="form-control" id="confirmarsenha" name="confirmarsenha" required>
</div>
<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</main>
<script>
     $("#nome").change(function() {
            $(this).val($(this).val().toUpperCase());
        });
    </script>

</html>