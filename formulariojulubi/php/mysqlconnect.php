<?php
    $sevidor = "localhost";
    $dbusuario = "root";
    $dbsenha = "";
    $dbname = "julubi";

    // Create connection
        $conn = mysqli_connect($sevidor, $dbusuario, $dbsenha, $dbname);
    // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
?>