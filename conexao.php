<?php
$hostname = "localhost";
$bancodedados = "unitec";
$usuario = "root";
$senha = "";

$mysqli = new mysqli( $hostname, $usuario, $senha ,$bancodedados);
$conn = mysqli_connect ( $hostname, $usuario, $senha ,$bancodedados);
if ($mysqli -> connect_errno) {
    echo "Falha na CONEXAO: (" . $mysqli -> connect_errno . ")" . $mysqli -> connect_error;
};
?>