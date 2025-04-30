<?php

    $username = $_POST['nomeuser'];
    $useremail = $_POST['emailuser'];
    $userpass = $_POST['passuser'];
    
    include "conex.php";

    $sntp = $con -> prepare("INSERT INTO usuarios(nome, email, senha) VALUES(?, ?, ?)");

    $sntp -> bind_param("sss", $username, $useremail, $userpass);

    if($sntp -> execute()){
        echo "<script>
        alert('Cadastro efetuado com sucesso!');
                    window.location.href = '../index.html';
            </script>";
        exit();
    }
    else{
        echo "Erro no envio do cadastro " .$sntp -> error;
    }

    if ($result = mysqli_query($con, $query)) {
        // Verifica se há um resultado retornado, ou seja, se o email e a senha são válidos
        if (mysqli_num_rows($result) > 0) {
            
        } else {
            echo "Erro na conexão";
        }
    }

    $sntp -> close();
    $con -> close();
?>