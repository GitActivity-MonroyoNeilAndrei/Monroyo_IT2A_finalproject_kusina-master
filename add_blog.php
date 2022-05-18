<?php

session_start();

//check if the button is clicked
if(isset($_REQUEST['publish'])){

	//open xml file
	$dishes = simplexml_load_file('files/blogs.xml');

	//prepare all the tags and data
	$dish = $dishes->addChild('dish');

	$dish->addChild('id', $_REQUEST['dish_id']);
	$dish->addChild('name', $_REQUEST['dish_name']);
	$dish->addChild('price', $_REQUEST['dish_price']);
	$dish->addChild('date', $_REQUEST['dish_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/blogs.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}


?>