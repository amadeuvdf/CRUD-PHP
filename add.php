<html>
<head>
    <title>Adicionar</title>
</head>
 
<body>
<?php
//controler de adição -> instancia os metodos crud do banco
//incluindo arquivo de connecção com banco
include_once("Crud.php");

$crud = new Crud();

if(isset($_POST['Submit'])) {
    //tras a string do dado    
    $name = $crud->escape_string($_POST['name']);
    $age = $crud->escape_string($_POST['age']);
    $email = $crud->escape_string($_POST['email']);
    
           
        //insert dos dados no banco 
        $result = $crud->execute("INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");
        
        //Mensagem de sucesso
        echo "<font color='green'>Os dados foram salvos com sucesso.";
        
        echo "<br/><a href='index.php'>Ver o resultado</a>";
    
}
?>
</body>
</html>