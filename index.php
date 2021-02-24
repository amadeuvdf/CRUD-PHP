<?php
include_once("Crud.php");
 
$crud = new Crud();
 
//query de seleção de dados em ordem mais recente
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);

?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.html">Novo Registro</a>
<br/>
<br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Nome</td>
            <td>Idade</td>
            <td>Email</td>
            <td>Update</td>
        </tr>
    <?php 
    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['age']."</td>";
        echo "<td>".$res['email']."</td>";    
        echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Você realmente que deletar?')\">Delete</a></td>";        
    }
    ?>
    </table>
</body>
</html>