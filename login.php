<?php


        $login = $_POST["login"];
        $senha = $_POST["senha"];
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "controlcore");

        $result = $mysqli->query("SELECT * FROM cadastro");
        
        if ($result) {
            printf("Select retornou %d linhas.\n", $result->num_rows);
           
            while ($row = $result->fetch_assoc()) {
                $login1 = $row['login'];
                $senha1 = $row['senha'];
                printf("Login: %s, Senha: %s\n", $row['login'], $row['senha']);
            }
            $result->free();
        } else {
    
            echo "Erro ao executar a consulta: " . $mysqli->error;
        }

        if($login1 == $login && $senha1 == $senha){
            echo "conectado";
        }else{
            echo "login ou senha errada por gentileza verificar";
        }
        
        
        $mysqli->close();


 
?>
