<?php
include_once 'user.php';
include_once 'user_session.php';

    $userSession = new UserSession();
    $user= new User();
        if(isset($_SESSION['user'])){
            echo "Hay sesion";
        }
        else if(isset($_POST['username']) && isset($_POST['Password'] )) { 
                echo "validacion del login" ; 
            $userForm = $_POST['username'];
            $passForm = $_POST['Password'];
            if($user->userExist($userForm,$passForm)){
                echo       "Validacion correcta";
                  }
                  else{echo "Error";}           
            }



        else{
           
            include_once 'login.html';
            echo "Error de credenciales";
        }

?>
