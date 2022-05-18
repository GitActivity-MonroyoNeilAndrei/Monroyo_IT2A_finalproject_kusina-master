<?php 

session_start();
$id = $_REQUEST['id'];

$dishes = simplexml_load_file("files/blogs.xml");

//create an iterator
$index = 0;
$i = 0;

foreach($dishes->dish as $dish){

//remove if the ID matches
	if($dish->id = $id){
		$index = $i;
		break;
	}
	$i++;
}


unset($dishes->dish[$index]);
file_put_contents('files/blogs.xml',$dishes->asXML());

$_SESSION['message'] = 'Blog Successfully Deleted';
header("location:index.php");


?>