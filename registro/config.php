<?php
     
     $dbHost = 'education';
     $dbUsername = 'root';
     $dbPassword = 'Analiza2008@';
     $dbName = 'formulario';

     $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

     if( $conexao->connect_errno){
        echo "Erro";
     } else{
        echo "Conexao efetuada com sucesso";
     }


?>