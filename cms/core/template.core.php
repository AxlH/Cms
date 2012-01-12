<?php
    class Core_Template{
        private $file;
        private $location;
        
        public function __construct($location, $file){
            $this->file = $file.'.php';
            $this->location = $location;
        }
        
        public function load_template(){
            if(file_exists($this->location.$this->file)){
                include $this->location.$this->file.'.php';
            }
        }
        
    }
?>
