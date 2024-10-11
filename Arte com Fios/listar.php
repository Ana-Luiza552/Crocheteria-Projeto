

<h2 class="fw-light text-center mt-3">Listar :</h2>
 
  <?php 
  $sql = "SELECT * FROM cadastros";
  $result = $conn->query($sql);


  if ( $result === false){
    die("Erro na consulta: " . $conn->error);
  }
  $qtd = $result->num_rows;
  
  if($qtd > 0){
    echo "  <table class='table table-bordered'>";
    echo "<thead>";
    echo " <tr>";
    echo "<th>#</th>";
    echo "<th>Nome Completo</th>";
    echo " <th>E-mail</th>";
    echo " <th class='flex justify-content-center'>#</th>";
    echo " </tr>";
    echo "</thead>";
    
    while($exibirRegistros = mysqli_fetch_array($result)) {
      $id = $exibirRegistros[0];
      $nome = $exibirRegistros[1];
      $email = $exibirRegistros[2];

      echo "<tbody>";
      echo "<tr>";
      echo "<td>$id</td>";
      echo "<td>$nome</td>";
      echo "<td>$email</td>";
      echo "<td class='d-flex justify-content-center'>";
      echo "<button class='btn' onclick=\"location.href='?page=editar&id=".$id."'\"><i class='bi-pencil-square' ></i></button>";
      echo "<button class='btn' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$id."';}else{false;}\"><i class='bi-trash3'></i></button>";
     echo  "</td>";
      echo " </tr>";
      echo "</tbody>";
    }
    echo"</table>";
  } else{
      echo "<p class='alert alert-danger'>Não encontrou resultados!</p>";
  }
  $conn->close();
  ?>    <a href="?page=cadastrar">
           <button type="submit" class="btn btn-primary" >Novo Cadastro</button>
</a>
    </main>
    