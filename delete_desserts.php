<?php 

session_start();
$id = $_REQUEST['id'];

$dishes = simplexml_load_file("files/blogs.xml");

//create an iterator
$index = 0;
$i = 0;


foreach($dishes->desserts as $desserts){

//remove if the ID matches
	if($desserts->id = $id){
		$index = $i;
		break;
	}
	$i++;
}

unset($dishes->desserts[$index]);
file_put_contents('files/blogs.xml',$dishes->asXML());

$_SESSION['message'] = 'Blog Successfully Deleted';
header("location:index.php");


?>