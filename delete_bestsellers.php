<?php 

session_start();
$id = $_REQUEST['id'];

$dishes = simplexml_load_file("files/Monroyo_IT2A_finalproject_kusina-hustler.xml");

//create an iterator
$index = 0;
$i = 0;


foreach($dishes->bestsellers as $bestsellers){

//remove if the ID matches
	if($bestsellers->id = $id){
		$index = $i;
		break;
	}
	$i++;
}

unset($dishes->bestsellers[$index]);
file_put_contents('files/Monroyo_IT2A_finalproject_kusina-hustler.xml',$dishes->asXML());

$_SESSION['message'] = 'Blog Successfully Deleted';
header("location:index.php");


?>