<?php 
define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__).DS);
define("APP",ROOT_PATH.'app'.DS);
define("CONFIG",ROOT_PATH.'config'.DS);
define("CORE",value: APP.'core'.DS);
define("CONFIGDB",value: CONFIG.'config'.DS);
define("CONTROLLERS",APP.'controllers'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);
define("UPLOADS",ROOT_PATH.'public'.DS.'uploads'.DS);
define("LIBS",ROOT_PATH.'lib'.DS);
define("BURL","http://localhost:8000/");
// configuration files 
require_once(CONFIG.'config.php');
require_once(CONFIG.'helpers.php');



// autoload all classes 
$modules = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload');


