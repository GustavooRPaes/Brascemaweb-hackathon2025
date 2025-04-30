<?php

$email = $_POST['email'];
$userpassword = $_POST['password'];

include "conex.php";
$query = "SELECT * FROM usuarios WHERE email = '".$email."' AND senha = '".$userpassword."'";


if ($result = mysqli_query($con, $query)) {
    // Verifica se há um resultado retornado, ou seja, se o email e a senha são válidos
    if (mysqli_num_rows($result) > 0) {
        echo "<script>
                alert('Login efetuado com sucesso!');
                window.location.href = '../index.html';
              </script>";
        exit();
    } else {
        echo "Erro na conexão";
    }
}

$con->close();
?>