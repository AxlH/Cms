<?php include 'cms/initializer.php';


$init = new Initializer;
$init->load_core('cms/core');

$template = new Core_Template('./cms/templates/default', 'index')

?>
