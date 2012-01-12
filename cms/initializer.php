<?php error_reporting(E_ALL||E_STRICT);

class Initializer {
    
    public function settings(){
        
    }
    public function load_core($path){
        if(is_dir($path)){
            foreach(glob($path."/*.core.php") as $file){
                include $file;
            }
        }
    }
    
    //TODO: add some checks for classes
    
}

?>
