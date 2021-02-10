<?php
include 'movimentacao.crud.php';

$conn = new Movimentacao();

//$add = $conn->nova("salario","salario do mes",1000,0);

$listar = $conn->listar();
print_r($listar);

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
    </select>
    <input type="button" value="">
</form>

<a href="novamove.php">Adicionar</a>

<table border="1" width="400">
    <tr>
        <th>tipo</th>
        <th>valor</th>
        <th>titulo</th>
        <th>descrição</th>
        <th>data</th>
    </tr>


</table>