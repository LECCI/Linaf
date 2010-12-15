<?php


/**
* 
*/
class FrontControler
{
	
	/**
	* @var FrontControler
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
		echo "FrontControler est contruit</br>";  
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
	        self::$_instance = new FrontControler();
	}
	return self::$_instance;
	}    
	
	public static function setup() {
         	Router::init(); // execute router 
                $object = Router::getController();
                $action = Router::getAction();
                Dispatcher::getInstance();	
                Dispatcher::dispatch($object,$action);					
	} 
	
	public static function start() {
	         self::getInstance();
	         self::setup();
	}   
	
}

?>
