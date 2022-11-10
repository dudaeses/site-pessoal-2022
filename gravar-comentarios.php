<?php

// Capturando os dados enviados através do formulário
$nome = $_POST['txtnome'];
$comentario = $_POST['txtcomentario'];

// Criando a linha SQL para gravar no banco de dados
$sql = "INSERT INTO comentarios (nome, comentario, ativo) 
        VALUES ('$nome', '$comentario', 'N')";

// Fazendo a conexão com o banco de dados e executando a linha SQL
$conexao = new PDO('mysql:host=127.0.0.1;dbname=bdduda', 'root', '');
$conexao->exec($sql);

echo "<h3>Recado enviado com sucesso!</h3><br>";
echo "<a href='comentarios.php'>Voltar</a>";

?>