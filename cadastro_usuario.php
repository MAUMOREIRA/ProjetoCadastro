<?php
    include("conexao.php");
    // Upload foto
    if(file_exists($_FILES['foto']['tmp_name'])){
    $pasta_destino = 'fotos/';
    $extensao = strtolower(substr($_FILES['foto']['name'],-4));
    $nome_foto = $pasta_destino . date("Ymd-His") . $extensao;
    move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
    }
    // fim upload

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "<h1>Dados do usuário</h1>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Telefone: $fone <br>";
    echo "Senha: $senha <br>";

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, senha, foto)";

    $sql .= " VALUES ('".$nome."','".$email."','".$fone."','".$senha."','".$nome_foto."')";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);

    if ($result)
        echo "Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!";
        
?>
