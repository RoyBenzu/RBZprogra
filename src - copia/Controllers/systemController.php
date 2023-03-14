
<?php


require 'Models\systemModels.php';

class controlador {
	public function iniciar_sesion() {
		if (!isset($_SESSION)) {
			session_start();
		}
		
		if (isset($_SESSION["name"])) {
			return true;
		}
		return false;
	}

	//INICIO DE SESION
	public function login() {
		include_once(__dir__."Views/systemViews.html");
	}
	public function validate() {
		include_once(__dir__."Views/systemViews.html");
	}
	//FIN INICIO DE SESION

	//FUNCION AL CERRAR SESION
	function logout()
	{
		if(!isset($_SESSION)){
			session_start();
		}
		session_destroy();
		header('Location: Views/systemViews.html');
	}

	public function index() {
		include_once(__dir__."Views/systemViews.html");
	}
}
?>



