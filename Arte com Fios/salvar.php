<?php 
switch($_REQUEST["acao"]){
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confirmarsenha = $_POST["confirmarsenha"];
      $sql = "INSERT INTO cadastros (NOME, EMAIL, SENHA, CONFIRMARSENHA)
      VALUES ('{$nome}' , '{$email}', '{$senha}', '{$confirmarsenha}')";
       
       $result = $conn->query($sql);

       if($result == true){
           echo "<script>alert('Cadastrado com sucesso!');</script>";
           echo "<script>location.href='?page=index';</script>";
       }else{
        echo "<script>alert('Não foi possivel cadastrar!');</script>";
        echo "<script>location.href='?page=index';</script>";
       }
       break;
 
    case 'editar':
        $id = intval($_POST["id"]);
        $nome = $conn->real_escape_string($_POST["nome"]);
        $email = $conn->real_escape_string($_POST["email"]);
        $senha = $conn->real_escape_string($_POST["senha"]);
        $confirmarsenha = $conn->real_escape_string($_POST["confirmarsenha"]);
 
        $sql = "UPDATE cadastros SET nome='$nome', email='$email', senha='$senha', confirmarsenha='$confirmarsenha' WHERE id=$id";
 
        if ( $conn && $conn->query($sql) === true) {
            echo "<script>alert('Atualizado com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível atualizar!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;
 
    case 'excluir':
        $id = intval($_REQUEST["id"]);
 
        $sql = "DELETE FROM cadastros WHERE id=$id";
 
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Excluído com sucesso!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível excluir!');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;
}
?>
 
