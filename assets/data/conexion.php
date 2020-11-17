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
       
        //Insertar comentarios en la Base de Datos
        function insertarComentario($name, $email, $tel, $msg){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'INSERT INTO contacto 
                        (nombre_contacto, correo_contacto, telefono_contacto, mensaje_contacto)
                         VALUES (:nombre, :correo, :telefono, :mensaje)'; 
            $stmt = $con->prepare($consulta);
            $rows = $stmt->execute(array(':nombre'=>$name,
                                ':correo'=>$email,
                                ':telefono'=>$tel,
                                ':mensaje'=>$msg));
            return $rows;
        }

         //Registrar usuarios en la Base de Datos
        function insertarUsuario($nombre, $apellidos, $usuario, $correo, $contra, $confirmar){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'INSERT INTO usuario 
                        (usuario, apellidos, usuario, correo, contrasenya, confirmarContrasenya)
                         VALUES (:nombre, :apellidos, :usuario, :correo, :contra, :confirmar)'; 

            $stmt = $con->prepare($consulta);
            $rows = $stmt->execute(array(':nombre'=>$nombre,
                                ':apellidos'=>$apellidos,
                                ':usuario'=>$usuario,
                                ':correo'=>$correo,
                                ':contra'=>$contra,
                                ':confirmar'=>$confirmar));
            return $rows;
        }

   }
   ?>