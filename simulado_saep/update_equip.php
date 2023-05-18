<?php
    require('conn.php');

    $esquipamento = $_POST['equipamento'];
    $defeito = $_POST['defeito'];
    $horaInicio = $_POST['horaInicio'];
    $horaFinal = $_POST['horaFinal'];
    $dataDefeito = $_POST['dataDefeito'];
    $id_equip= $_POST['id_equip'];

    if(empty($equipamento) || empty($defeito) || empty($horaInicio) || empty($horaFinal) || empty($dataDefeito) || empty($id_equip)){
        echo "Os valores não podem ser vazios";
    }else{
        $update_equip = $pdo->prepare("UPDATE equip_defeito set 
        equipamento = :equipamento, 
        defeito = :defeito, 
        horaInicio = :horaInicio, 
        horaFinal = :horaFinal,
        dataDefeito = :dataDefeito WHERE 
        id_equip = :id_equip;");
    

    $update_equip->execute(array(
        ':id_equip' => $id_equip,
        ':esquipamento'=> $esquipamento,
        ':defeito'=> $defeito,
        ':horaInicio'=> $horaInicio,
         ':horaFinal'=> $horaFinal  
    ));

    echo 'sucesso';
    }

?>