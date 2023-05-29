<?php
$hostname = 'Localhost1';
$user = 'root';
$password = ''
$dbname = 'hotel';

$conexao = new mysqli( $hostname, $user, $password, $dbname);

if($conexao -> connect_errno){
    echo"ERRO NA CONEXÃO"

}
else{
    echo"CONECTADO"
}

?>