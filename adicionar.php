<?php
include 'movimentacao.crud.php';
$conn = new Movimentacao();

if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo = addslashes($_POST['titulo']);
    $descrição = addslashes($_POST['descrição']);
    $valor = addslashes($_POST['valor']);
    $tipo = addslashes($_POST['tipo']);
    if($tipo == 0){
        $add = $conn->nova($titulo,$descrição,$valor,$tipo);
    } else {
        $add = $conn->nova($titulo,$descrição,"-".$valor,$tipo);
    }
    
    header("location: index.php");
} 
?>
<form method="POST">
    <h1>Nova Movimentacao</h1>
    titulo:</br>
    <input type="text" name="titulo"></br></br>
    descrição:</br>
    <input type="text" name="descrição"></br></br>
    valor:</br>
    <input type="text" name="valor"></br></br>



    <select name="tipo">
        <option></option>
        <option value="0">entrada</option>
        <option value="1">saida</option>
    </select></br></br>

    <input type="submit" value="enviar">
</form>