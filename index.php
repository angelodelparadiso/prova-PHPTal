<?php
require_once "./include/PHPTAL.php";
require_once "./include/database.php";
	
	global $db;
	
$db= new pr_sql_db('localhost', 'djangelo', 'scacchi', 'dblavoro', '', false, false);


$sql["SELECT"] = "*";
$sql["FROM"] = "lingua";
$query = $db->set_query('select', $sql, __FILE__, __LINE__);


$template = new PHPTAL('my_template_file.xhtml');

$template->title = 'Lingua';

$template->results = $query;


try {
    echo $template->execute();
}
catch (Exception $e){
    echo $e;
}
?>