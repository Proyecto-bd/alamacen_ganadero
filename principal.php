 <?php session_start();

    if(isset($_SESSION['usuario'])){
        require 'index-vista.php';
    }else{
        header ('location: index-vista.php');
    }
        
?> 