<?php 

		function conexion(){

      $servidor="localhost";
      $usuario="root";
      $password="";
      $bd="registro";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);


			return $conexion;
		}

?>