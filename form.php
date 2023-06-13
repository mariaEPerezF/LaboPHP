<?php

    if($_POST){

        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $email= $_POST['email'];
        
        
        //Conexion
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="cursosql";
        
        //Crear conexion
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $sql= "INSERT INTO usuario (nombre, apellido, email)
        VALUES('$nombre', '$apellido', '$email')";

        if($conn->query($sql) === TRUE){
            $respuesta = "Registro Creado";
        }else{
            $respuesta = "Error: " . $sql . "<br>" . $conn->error ;
        }

        $conn-> close();

        include 'form.html';
        
    }

    

?>



