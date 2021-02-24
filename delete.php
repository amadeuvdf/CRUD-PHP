<?php
include_once("Crud.php");
$crud = new Crud();
 
//recebe o id pela url
$id = $crud->escape_string($_GET['id']);
//deleta de acordo com o id na tabela
$result = $crud->delete($id, 'users');
 
if ($result) {
    //redireciona para a pagina principal caso delete
    header("Location:index.php");
}
?>