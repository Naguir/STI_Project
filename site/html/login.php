<?php
require("utils.php");
session_start(); 

$pseudo = $_POST['pseudo'];
$passwd = $_POST['passwd'];

if(isset($pseudo) && isset($passwd)){
    
    if(connect($pseudo, $passwd) == 1){
            
        $row = getUser($pseudo, $passwd);

        if($row['validity'] == 1){

            $_SESSION['pseudo'] = $row['pseudo'];
            $_SESSION['connec'] = true;
            $_SESSION['roles'] = $row['roles'];
            $_SESSION['id'] = $row['id'];

            header('Location: message.php');
        }
        else{

            header('Location: index.php');
        }
    }
    else{
        
	    header('Location: index.php');
    }
}
?>