<?php

$Nome = $_POST ['nome'];
$Sobrenome = $_POST ['sobrenome'];
$Email = $_POST ['email'];
$Matricula = $_POST ['matricula'];



$con = mysqli_connect("localhost", "root", "" ,"ifpbpt10anos");
$insert = "insert into cadastro values ($Matricula, '$Nome', '$Sobrenome' ,'$Email')";


$query = mysqli_query($con, $insert);

 if($query){

 	echo "Cadastro Enviado";
 }
 else {

 	echo "Erro ao cadastrar";
 }

?>