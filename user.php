<?php

    include_once 'db.php';
    class User extends DB{

        private $nombre;
        private $username;
        public function userExists($user,$pass){


            $con=mysqli_connect('localhost','root','','digitalizacion_titulacion') or die('Error en la conexion');
            $consulta ="SELECT * FROM tb_usuario
                WHERE control = '$user'
              AND contra = '$pass'";
            $result=mysqli_query($con,$consulta);
            $filas=mysqli_num_rows($result);
            

         //   $md5pass = md5($pass);
           // $query = $this->connect()->prepare('"SELECT * FROM tb_usuario WHERE control =  : $user AND contraseña = :$pass"');
          //  $query->execute(['user'=> $user,'pass'=> $md5pass]);

          if($filas>0){
            return true;
               
        }  else {return false;}
    }

            public  function setUser($user){
                $query = $this->connect()->prepare('SELECT * FROM tb_usuario WHERE control = :user AND contraseña = :pass');
            
            $query->execute(['user'=> $user] );

            foreach($query as $currentUser){
                $this->nombre=$currentUser['nombre'];
                $this->nombre=$currentUser['nombrename'];
            }
        }
        public function getNombre(){
            return $this->nombre;
        }

    }
    
 ?>