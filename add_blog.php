<?php

session_start();

// --------Lunch------------

//check if the button is clicked
if(isset($_REQUEST['publishLunch'])){

	//open xml file
	$dishes = simplexml_load_file('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//prepare all the tags and data
	$lunch = $dishes->addChild('lunch');

	$lunch->addChild('id', $_REQUEST['lunch_id']);
	$lunch->addChild('category', $_REQUEST['lunch_category']);
	$lunch->addChild('name', $_REQUEST['lunch_name']);
	$lunch->addChild('price', $_REQUEST['lunch_price']);
	$lunch->addChild('date', $_REQUEST['lunch_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}

// -------Dinner---------

if(isset($_REQUEST['publishDinner'])){

	//open xml file
	$dishes = simplexml_load_file('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//prepare all the tags and data
	$dinner = $dishes->addChild('dinner');

	$dinner->addChild('id', $_REQUEST['dinner_id']);
	$dinner->addChild('category', $_REQUEST['dinner_category']);
	$dinner->addChild('name', $_REQUEST['dinner_name']);
	$dinner->addChild('price', $_REQUEST['dinner_price']);
	$dinner->addChild('date', $_REQUEST['dinner_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}



// -----Breakfast-------

if(isset($_REQUEST['publishBreakfast'])){

	//open xml file
	$dishes = simplexml_load_file('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//prepare all the tags and data
	$breakfast = $dishes->addChild('breakfast');

	$breakfast->addChild('id', $_REQUEST['breakfast_id']);
	$breakfast->addChild('category', $_REQUEST['breakfast_category']);
	$breakfast->addChild('name', $_REQUEST['breakfast_name']);
	$breakfast->addChild('price', $_REQUEST['breakfast_price']);
	$breakfast->addChild('date', $_REQUEST['breakfast_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}


// ---------Wine--------

if(isset($_REQUEST['publishWine'])){

	//open xml file
	$dishes = simplexml_load_file('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//prepare all the tags and data
	$wine = $dishes->addChild('wine');

	$wine->addChild('id', $_REQUEST['wine_id']);
	$wine->addChild('category', $_REQUEST['wine_category']);
	$wine->addChild('name', $_REQUEST['wine_name']);
	$wine->addChild('price', $_REQUEST['wine_price']);
	$wine->addChild('date', $_REQUEST['wine_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}


// ---------Drinks----------

if(isset($_REQUEST['publishDrinks'])){

	//open xml file
	$dishes = simplexml_load_file('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//prepare all the tags and data
	$drinks = $dishes->addChild('drinks');

	$drinks->addChild('id', $_REQUEST['drinks_id']);
	$drinks->addChild('category', $_REQUEST['drinks_category']);
	$drinks->addChild('name', $_REQUEST['drinks_name']);
	$drinks->addChild('price', $_REQUEST['drinks_price']);
	$drinks->addChild('date', $_REQUEST['drinks_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}


// ---------Desserts----------

if(isset($_REQUEST['publishDesserts'])){

	//open xml file
	$dishes = simplexml_load_file('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//prepare all the tags and data
	$desserts = $dishes->addChild('desserts');

	$desserts->addChild('id', $_REQUEST['desserts_id']);
	$desserts->addChild('category', $_REQUEST['desserts_category']);
	$desserts->addChild('name', $_REQUEST['desserts_name']);
	$desserts->addChild('price', $_REQUEST['desserts_price']);
	$desserts->addChild('date', $_REQUEST['desserts_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}


// -------Best Sellers---------

if(isset($_REQUEST['publishBestSellers'])){

	//open xml file
	$dishes = simplexml_load_file('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//prepare all the tags and data
	$bestsellers = $dishes->addChild('bestsellers');

	$bestsellers->addChild('id', $_REQUEST['bestsellers_id']);
	$bestsellers->addChild('category', $_REQUEST['bestsellers_category']);
	$bestsellers->addChild('name', $_REQUEST['bestsellers_name']);
	$bestsellers->addChild('price', $_REQUEST['bestsellers_price']);
	$bestsellers->addChild('date', $_REQUEST['bestsellers_date']);

	//save the data
	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($dishes->asXML());
	$dom->save('files/Monroyo_IT2A_finalproject_kusina-hustler.xml');

	//send a message to index
	$_SESSION['message'] = "Blog Successfully Posted";
	header("location: index.php");

} else {

	$_SESSION['message'] = "Fill up the form properly";
	header("location:index.php");
}


?>