<!-- CONEXAO  COM BANCO DE DADOS -->
<?php
    $dbuser="root"; //usuario
    $dbpass=""; //senha
    $host="localhost"; //servidor
    $db="SalaoMawango"; // nome do BD
    $mysqli=new mysqli($host,$dbuser, $dbpass, $db); //funcao que trata da conexao
?>