<?php
    $sql = "SELECT * FROM cadastros WHERE id=".$_REQUEST["id"];
    $result = $conn->query($sql);
    $exibirRegistros = mysqli_fetch_array($result);
    $id = $exibirRegistros[0];
    $nome = $exibirRegistros[1];
    $email = $exibirRegistros[2];
    $senha = $exibirRegistros[3];
    $confirmarsenha = $exibirRegistros[4];
 
    $row = $result->fetch_object();
 
?>
<h2 class="fw-light text-center mt-3">Editar Cadastro:</h2>
<hr>
<main class="container">
    <div class="row">
<div class="col-12">
    <form action="?page=salvar" method="POST" >
        <input type="hidden" name="acao" value="editar"/>
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome"
                placeholder="Digite seu nome.." required value="<?php print $nome; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Digite seu e-mail.." required value="<?php print $email; ?>">
        </div>
        
        <div class="row mt-3">
            <div>
                <button class="btn btn-primary" type="submit">Salvar</button>
                <button class="btn btn-danger" type="reset">Limpar</button>
            </div>
        </div>
    </form>
</div>
</main>
<script>
    $("#nome").change(function() {
        $(this).val($(this).val().toUpperCase());
    });
</script>