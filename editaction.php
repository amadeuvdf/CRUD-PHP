<?php
include_once("Crud.php");
 
$crud = new Crud();
if(isset($_POST['update']))
{    
    $id = $crud->escape_string($_POST['id']);
    
    $name = $crud->escape_string($_POST['name']);
    $age = $crud->escape_string($_POST['age']);
    $email = $crud->escape_string($_POST['email']);
    
        //atualizando a tabela
        $result = $crud->execute("UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
        
        //redireciona para pagina principal
        header("Location: index.php");
}
?>