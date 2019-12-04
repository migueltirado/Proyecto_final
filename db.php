<?php

    class DB{
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function _construct(){ 
            $this->host     ='localhost';
            $this->db     ='digitalizacion_titulacion';
            $this->user     ='root';
            $this->password     ='';
            $this->charset     ='utf8mb4';
         
            }

            function connect(){
                try{
                      $con=mysqli_connect('localhost','root','','digitalizacion_titulacion') or die('Error en la conexion');
                }
                   
            catch(PDOException $e){
                print_r('Error connection:'.$e->getMessage());
            }
        }
    }

    ?>