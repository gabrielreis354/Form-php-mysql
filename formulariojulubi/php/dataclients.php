<?php include_once("mysqlconnect.php");?>
 <html lang="pt-br">
 <body>
 <?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $nascimento = $_POST["nascimento"];
    $cpf = $_POST["cpf"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $rua = $_POST["rua"];
    $numerocasa = $_POST["numerocasa"];
    $bairro = $_POST["bairro"];
    $estado = $_POST["estado"];

    $conn = mysqli_connect($sevidor, $dbusuario, $dbsenha, $dbname);
    mysqli_select_db($conn,'$dbname');
    $sql = "INSERT INTO clientes (nome, email, sexo, nascimento, cpf, cep, cidade, rua, numerocasa, bairro, estado) 
                        VALUES ('$nome','$email','$sexo','$nascimento', '$cpf', '$cep', '$cidade', '$rua', '$numerocasa','$bairro', '$estado')";
    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Salvei seus Dados !'); windown.location = 'index.php'</script>";
    }else{
        echo "Deu Erro: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
 </body>
 </html>
