<?php 

session_start();
$id = $_REQUEST['id'];

$dishes = simplexml_load_file("files/blogs.xml");

//create an iterator
$index = 0;
$i = 0;


foreach($dishes->breakfast as $breakfast){

//remove if the ID matches
	if($breakfast->id = $id){
		$index = $i;
		break;
	}
	$i++;
}

unset($dishes->breakfast[$index]);
file_put_contents('files/blogs.xml',$dishes->asXML());

$_SESSION['message'] = 'Blog Successfully Deleted';
header("location:index.php");


?>