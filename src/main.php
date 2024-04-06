<?php
include("./../vendor/autoload.php");

//um erro pode estar aqui.
use App\model\SistemaUsuario;
use App\persistence\ConnectionFactory;

// $user = new SistemaUsuario("Rudr1gu");


    if($conn = ConnectionFactory::getConnection()){
        try{
            $sql = "select * from pessoas";
            $statement = $conn->prepare($sql);
            $statement->execute();
            $rs = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach($rs as $registro){
                echo print_r($registro['nome'] ." ". $registro['idade'] ."<br>", true);
            }
        } catch(Exception $e){
            echo print_r($e, true);
        }
        
    }else{
        echo "Não Funcionou!";
    }


//echo print_r($conn, true);