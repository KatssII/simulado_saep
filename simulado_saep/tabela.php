<?php
    require("conn.php");

    $tabela = $pdo->prepare("SELECT id_equip, equipamento, defeito, horaInicio, horaFinal, dataDefeito
    FROM equip_defeito;");
    $tabela->execute();
    $rowTabela = $tabela->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela de Equipamentos Defeito</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <img src="sisdef.png" alt="">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Tabela de Equipamentos com Defeito</h1>
            <br>  
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID FERRAMENTA</th>
            <th scope="col">TIPO DO EQUIPAMENTO</th>
            <th scope="col">TIPO DO DEFEITO</th>
            <th scope="col">HORA DE INICIO DO DEFEITO</th>
            <th scope="col">HORA FINAL DO DEFEITO</th>
            <th scope="col">DATA DO FEITO</th>
            <th scope="col">EDITAR EQUIPAMENTO</th>
            <th scope="col">EXCLUIREQUIPAMENTO</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($rowTabela as $linha){
                echo '<tr>';
                echo "<th scope='row'>".$linha['id_equip']."</th>";
                echo "<td>".$linha['equipamento']."</td>";
                echo "<td>".$linha['defeito']."</td>";
                echo "<td>".$linha['horaInicio']."</td>";
                echo "<td>".$linha['horaFinal']."</td>";
                echo "<td>".$linha['dataDefeito']."</td>";
                echo '<td><a href=update_equip.php?funcionario='.$linha['id_equip'].' class="btn btn-warning">Editar</a></td>';
                echo '<td><a href=del_equip.php?funcioanario='.$linha['id_equip'].' class="btn btn-danger">Excluir</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        </table>
        <a href="index_equip.php" class="btn btn-primary">CADASTRAR EQUIPAMENTO</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>