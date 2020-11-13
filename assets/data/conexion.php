<?php
   class Conexion{
       var $con;

       function conectar(){
           $con = null;
            try{
             $con = new PDO('mysql:host=localhost;dbname=COOLKICKS_3', 'root', '');
             //maneja los errores
             $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
             //echo 'se establecio la conexión<br><br>';

            }catch(PDOException $e){
              die('Error conectado con la base de datos: '
                . $e->getMessage());
            }
        return $con;
       }

        function insertarUsuario($user, $nombre,  $correo, $pass){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'INSERT INTO usuario 
                      (nom_usuario, nombre, correo, contrasena) /*contraseña cambiar por contrasena*/
                     VALUES (:user, :nom, :email, :pass)'; 

             $stmt = $con->prepare($consulta);
             $stmt->execute(array(':user'=>$user,
                                  ':nom'=>$nombre,
                                  ':email'=>$correo,
                                  ':pass'=>$pass));

        }

        //Buscar usuarios registrados en la Base de Datos
        function buscarUsuario($user, $pass){
           $con = $this->conectar();

           $consulta = 'SELECT nom_usuario
                        FROM usuario
                        WHERE nom_usuario=:usuario
                        AND contrasena=:pass';
            $stmt = $con->prepare($consulta);
            $stmt->execute(array(':usuario'=>$user, ':pass'=>$pass));
            $registro = $stmt->fetchALL(PDO::FETCH_ASSOC);            
            $numRegistros = count($registro);

            return $numRegistros;
        }

        function buscarProductoH(){
           $con = $this->conectar();

           $consulta = 'SELECT * FROM calzadoh';

           $stmt = $con->prepare($consulta);
           $stmt->execute();
           $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 
         
           json_encode($registros, JSON_FORCE_OBJECT);

            return $registros;
        }
    
        function buscarProductoM(){
           $con = $this->conectar();

           $consulta = 'SELECT * FROM calzadom';

           $stmt = $con->prepare($consulta);
           $stmt->execute();
           $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 
         
            json_encode($registros, JSON_FORCE_OBJECT);

            return $registros;
        }

        function detallesM(){
            $con = $this->conectar();
 
            $consulta = 'SELECT * FROM calzadom';
 
            $stmt = $con->prepare($consulta);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 
          
             json_encode($registros, JSON_FORCE_OBJECT);
 
             return $registros;
        }
        
        function detallesH(){
            $con = $this->conectar();
 
            $consulta = 'SELECT * FROM calzadom WHERE id=id';
 
            $stmt = $con->prepare($consulta);
            $stmt->execute();
            $registros = $stmt->fetchALL(PDO::FETCH_ASSOC); 
          
             json_encode($registros, JSON_FORCE_OBJECT);
 
             return $registros;
        }
       
        function guardarComentarios($nombre, $correo, $telefono, $coment){
          $con = $this->conectar(); //mandar llamar al metodo de conectar

          $consulta = 'INSERT INTO contacto 
                    (nombre, correo, telefono, comentario) 
                     VALUES (:nom, :cor, :tel, :comen)'; 

          $stmt = $con->prepare($consulta);
          $stmt->execute(array(':nom'=>$nombre,
                               ':cor'=>$correo,
                               ':tel'=>$telefono,
                               ':comen'=>$coment));
        // return $rows;
        }
   }
   ?>