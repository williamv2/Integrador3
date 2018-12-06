<?php

class conexion{

	private $conexion;
	private $host_db = "localhost";
	private $user_db = "root";
	private $pass_db = "";
	private $db_master = "unidaddeportiva";
	private $tbl_name = "admin";
	private $usuario;
	private $clave;
	public static $_singleton;//variable estatica para realizar llamados fuera de la clase



	public function __construct(){

		$this->conexion = new mysqli($this->host_db, $this->user_db, $this->pass_db, $this->db_master);

		if($this->conexion->connect_errno){

			die ("fallo en tratar de conectar con MYSQL: (". $this->conexion->connect_errno.")");
		}

	}

	/** EVITA QUE SE REALICE MAS DE UNA CONEXION**/

	public static function getInstance()
	{
		if (is_null (self::$_singleton))
		{
			self::$_singleton = new conexion;
		}
		return self::$_singleton;
	}

	/**FUNCION PARA COMPROBAR SI HAY O NO CONEXION CON LA BASE DE DATOS**/
		
	public function isConexion(){
		if($this->conexion)
			return true;
		return false;
	}

	public function cerrar(){

		$this->conexion->close();
	}


	public function login($user,$pass){

		$this->usuario = $user;
		$this->clave = $pass;

		$query = "SELECT * FROM administrador WHERE usuario ='$user' AND password = '$pass'";

		$consulta= $this->conexion->query($query);



		if($row = mysqli_fetch_array($consulta)){

			session_start();
			$_SESSION['id'] = $row['idcodigoadm'];
			$_SESSION['user']= $row['usuario'];
			$_SESSION['pass']= $row['password'];

			
			echo '<script>window.location="./dashboard.php";</script>';

			

						
		}
		else{

			echo '<script>alert("Usuario o contraseña incorrectos.")</script>';
			echo '<script>window.location="./login.php";</script>';
		}


	}

	public function consulta($string){


		return mysqli_query($this->conexion,$string);
	}	

	public function contador($string){

		$result = mysqli_query($this->conexion,$string);
		return mysqli_num_rows($result);
	}
}
?>