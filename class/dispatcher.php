<?php

/**
* 
*/
class Dispatcher
{
	
	/**
	* @var Dispatcher
	* @access private
	* @static
	*/
	private static $_instance = null;
	
	/**
	* Constructeur de la classe
	*
	* @param void
	* @return void
	*/
	private function __construct() { 
		echo "le dispatcher est lancé </br>";  
	}
	
	/**
	* Méthode qui crée l'unique instance de la classe
	* si elle n'existe pas encore puis la retourne.
	*
	* @param void
	* @return Dispatcher
	*/
	public static function getInstance() {
		if(is_null(self::$_instance)) {
			self::$_instance = new Dispatcher();
		}
		return self::$_instance;
		} 
		
	public static function dispatch($object,$action) {
	        if (file_exists('appli/models/'.$object.'_model.php'))
	        {
	                # ajouter le passega de paramètres
	                include 'appli/models/'.$object.'_model.php';
	               	$model_class = $object."_model";    
		        		  $model = new $model_class();
	        }
	        if (file_exists('appli/controllers/'.$object.'_controller.php'))
	        {
	                # code...
	                include 'appli/controllers/'.$object.'_controller.php'; 
		        			$controller_class = $object."_controller";    
		        			$controller = new $controller_class();	                
	        }
	        elseif (file_exists('appli/views/'.$object.'/'.$action.'.php'))
	        {
	                # code...
	                include 'appli/views/'.$object.'/'.$action.'.php' ;	                
	        }
	        else
	        {
	                # code...
	                echo 'rien à faire ici';
	        }

	}
}
?>
