<?php

/**
 * @author Axl Hoogelander
 * @copyright 2012
 * @description The class for uploading!
 */
 
Class Uploader{
    
    public $file;
    private $mimetypes = array('application/x-bittorrent', 'application/x-nzb'); //mimetypes in an array
    private $folder;
    
    public function __construct($file, $folder){ //the constructor for setup some vars
        
        $this->file = $file;
        $this->folder = $folder;
    }
    
    public function check_file(){
       
        
        if(!preg_match('/\.(torrent|nzb)$/i', $this->file['name']) || file_exists($this->folder.$this->file['name']) 
        ) { //the regex looks for: file [.torrent] etc, its really like an array
            
              throw new Exception('Folder doesn\'t exist or extension isn\'t right!');  
        }
            
    }           
    
    
    public function check_mime_type(){
        $file_info = new finfo(FILEINFO_MIME_TYPE);
        if(!in_array($file_info->file($this->file['name']), $this->mimetypes)){
            throw new Exception('Mime-type doen\'t match!');
        }
    }
    
    public function upload(){
          
        
        
        if(file_exists($this->folder.$this->file['name']) || !is_writable($this->folder)){
              throw new Exception('The folder is not writeable or the file exists already');
        }else{
           
           move_uploaded_file($this->file['tmp_name'], $this->folder.$this->file['name']);
        }
        
    }
}

