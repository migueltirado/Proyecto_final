<?php
include_once 'user.php';
include_once 'user_session.php';

    $userSession = new UserSession();
    $user = new User();
        if(isset($_SESSION['user'])){
            echo "Hay sesion";
        }
        else if(isset($_POST["usuario"]) && isset($_POST["pass"] )) { 
            //    echo "validacion del login" ; 
            $userForm = $_POST['usuario'];
            $passForm = $_POST['pass'];
           
            if($user->userExists($userForm,$passForm)){
                include_once "home.html";
                  }
                  else{echo "Credenciales incorrectas";}           
            }



        else{
            echo 'Error de credenciales'.$_POST["usuario"].$_POST["pass"];
        
            
        }

?>
