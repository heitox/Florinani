<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao_curta']; // Note que no formulário o nome é 'descricao_curta'
$imagem = $_POST['imagem'];

// Use UPDATE em vez de DELETE + INSERT
$sql_update = "UPDATE materiais SET 
                nome = '$nome', 
                preco = '$preco', 
                quantidade = '$quantidade', 
                categoria = '$categoria', 
                descricao = '$descricao', 
                imagem = '$imagem' 
               WHERE id = $id";

if (mysqli_query($conn, $sql_update)) {
    // Redireciona de volta para a lista de materiais após o sucesso
    header("Location: materiais.php?sucesso=1");
} else {
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
?>