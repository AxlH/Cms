<?php

/**
 * @author Axl Hoogelander
 * @copyright 2012
 * @description How 2 use the class
 */
include 'uploader.php';

if(isset($_POST['upload'])):
   $upload = new Uploader($_FILES['file'], './uploads2/');
    try{
        if($upload->check_file() || $upload->check_mime_type() || $upload->upload()):
            else: ?> Uploading ended <?php endif;?>
            <?php }catch(Exception $error){ echo $error->getMessage(), "\n"; } ?>
<?php else: ?>
    Upload a torrent or nzb!
<?php endif; ?>

<form method="post" enctype="multipart/form-data">
Bestand: <input type="file" name="file" /><br /><br />
<input type="submit" name="upload" value="Uploaden" /></form>

