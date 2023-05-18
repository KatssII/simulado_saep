<?php
    require('conn.php');

    $equipamento = $_POST['equipamento'];
    $defeito = $_POST['defeito'];
    $horaInicio = $_POST['horaInicio'];
    $horaFinal = $_POST['horaFinal'];
    $dataDefeito = $_POST['dataDefeito'];
   
    if(empty($equipamento) || empty($defeito) || empty($horaInicio) || empty($horaFinal)|| empty($dataDefeito)){
        echo "Os valores não podem ser vazios";
    }else{
        $index_equip = $pdo->prepare("INSERT INTO equip_defeito(equipamento, defeito, horaInicio, horaFinal, dataDefeito) 
        VALUES(:equipamento, :defeito, :horaInicio, :horaFinal, :dataDefeito)");
        $index_equip->execute(array(
            ':equipamento'=> $equipamento,
            ':defeito'=> $defeito,
            ':horaInicio'=> $horaInicio,
            ':horaFinal'=> $horaFinal,
            ':dataDefeito'=> $dataDefeito  
        ));

        echo "<script>
        alert('Equipamento Cadastrado com sucesso!');
        </script>";
    }
?>



//

< ?php
require("conn.php");
if (isset($_REQUEST["acao"])) {
    switch ($_REQUEST["acao"]) { //switch recebe as ações criadas 
        case 'cadastrar':
            $equipamento = $_POST['equipamento'];
            $defeito = $_POST['defeito'];
            $horaInicio = $_POST['horaInicio'];
            $horaFinal = $_POST['horaFinal'];
            $dataDefeito = $_POST['dataDefeito'];

            $query = "INSERT INTO equip_defeito (equipamento, defeito, horaInicio, horaFinal) VALUES ('{$equipamento}','{$defeito}','{$horaInicio}','{$horaFinal}','{$dataDefeito}')"; // Executar a consulta SQL
            
            $result = $pdo->query($query);
//            break;
             if ($result == true) { // Verificar se a consulta foi executada com sucesso
                echo "<script>alert('Cadastrado com sucesso');</script>"; //caso n funcione print
                echo "<script>location.href='tabela.php';</script>";
             } elseif ($result->num_rows > 0) {
//                echo "<script>alert('Usuario Cadastrado com sucesso!');window.location.href='index.php';</script>";
                echo "<script>alert('Deu erro no cadastro');</script>";
                echo "<script>location.href='index_equip.php';</script>";
             }
            break;
    }
}
?>




