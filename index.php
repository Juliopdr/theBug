<?php


require "app/conf/pageUser.php";


$page = new pageUser();

try{
include $page->loadUser();

}catch(Exception $e)
{
	echo "<h1>".$e->getMessage()."</h1>";
}