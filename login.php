<?php
include('conexao.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuario 
WHERE  email_usuario = '$email'
AND senha = '$senha'";

$result = mysqli_query($con,$sql);
$rowcount = mysqli_num_rows($result);
?>