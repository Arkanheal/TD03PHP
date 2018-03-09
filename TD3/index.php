<?php
/*
 * MODULE DE PHP
 * Index du site
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

require_once('./config/configuration.php');
require_once('./lib/foncBase.php');
require_once(PATH_TEXTES.LANG.'.php');

//vérifie que la page existe sinon back to index
if(isset($_GET['page']))
{
  $page = htmlspecialchars($_GET['page']);
  if(!is_file(PATH_CONTROLLERS.$_GET['page'].".php"))
  { 
    $page = "404"; 
  }
}
else
	$page="accueil"; 

require_once(PATH_CONTROLLERS.$page.'.php'); 

?>
