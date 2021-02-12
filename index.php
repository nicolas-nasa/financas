<?php
include 'movimentacao.crud.php';

$conn = new Movimentacao(); 
$listar = $conn->listar();
$saldo = $conn->saldo()
?>
<a href="adicionar.php">Adicionar</a>
<table border="1" width="400">
    <tr>
        <th>tipo</th>
        <th>valor</th>
        <th>titulo</th>
        <th>descrição</th>
        <th>data</th>
    </tr>
    <?php
        $s = 0;
        foreach($listar as $moves){
            
            if($moves['tipo'] == 0){
                echo '
                    <td>Entrada</td>
                        <td><font color="green">'.$moves['valor'].'</font></td>
                        <td>'.$moves['titulo'].'</td>
                        <td>'.$moves['descricao'].'</td>
                        <td>'.$moves['data'].'</td>
                    </tr>
                ';
                $s = $moves['valor'] + $s;
               
            }else {
                echo '<td>Saida</td>';
                echo '<td><font color="red">'.$moves['valor'].'</font></td>';
                echo '<td>'.$moves['titulo'].'</td>';
                echo '<td>'.$moves['descricao'].'</td>';
                echo '<td>'.$moves['data'].'</td>';
                echo '</tr>';
                $s =$s + $moves['valor'];
                
                
            }
        }
            echo '<tr>';
            echo '<td>';
            echo 'Saldo';
            echo '</td>';
            echo '<td>';
            foreach($saldo as $valor){
                echo $valor[0];
            }
            echo '</td>';
            echo '</tr>';
            
    ?>
</table>
<?=  "total: ".$s;?>