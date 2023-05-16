<?php
     include('conexao.php');
     $id_usuario = $_GET['id_usuario'];
     $sql = "SELECT * FROM usuario  WHERE id_usuario=$id_usuario";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     $nome_usuario = $row['nome_usuario'];


    echo "<h1>Deletar dados</h1>";
    echo "<p>Usuário: $nome_usuario</p>";
    $sql = "DELETE from usuario where id_usuario = $id_usuario";


    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar dados: ".$mysqli_error($con)."!";
?>
<a href="index.php">Voltar</a>