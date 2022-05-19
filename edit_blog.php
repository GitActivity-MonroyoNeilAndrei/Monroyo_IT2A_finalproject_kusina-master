<?php 

session_start();

if(isset($_REQUEST['edit_blog'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->lunch as $lunch){

		if($lunch->id == $_POST['lunch_id']){
			$lunch->name = $_POST['lunch_name'];
			$lunch->category = $_POST['lunch_category'];
			$lunch->price = $_POST['lunch_price'];
			$lunch->date = $_POST['lunch_date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $dishes->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}

// ----------Dinner------------



if(isset($_REQUEST['edit_blog1'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->dinner as $dinner){

		if($dinner->id == $_POST['dinner_id']){
			$dinner->name = $_POST['dinner_name'];
			$dinner->category = $_POST['dinner_category'];
			$dinner->price = $_POST['dinner_price'];
			$dinner->date = $_POST['dinner_date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $dishes->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}
// -----------Breakfast-----------



if(isset($_REQUEST['edit_blog2'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->breakfast as $breakfast){

		if($breakfast->id == $_POST['breakfast_id']){
			$breakfast->name = $_POST['breakfast_name'];
			$breakfast->category = $_POST['breakfast_category'];
			$breakfast->price = $_POST['breakfast_price'];
			$breakfast->date = $_POST['breakfast_date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $dishes->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}
// ---------Wine-------------



if(isset($_REQUEST['edit_blog3'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->wine as $wine){

		if($wine->id == $_POST['wine_id']){
			$wine->name = $_POST['wine_name'];
			$wine->category = $_POST['wine_category'];
			$wine->price = $_POST['wine_price'];
			$wine->date = $_POST['wine_date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $dishes->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}
// ----------Drinks------------



if(isset($_REQUEST['edit_blog4'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->drinks as $drinks){

		if($drinks->id == $_POST['drinks_id']){
			$drinks->name = $_POST['drinks_name'];
			$drinks->category = $_POST['drinks_category'];
			$drinks->price = $_POST['drinks_price'];
			$drinks->date = $_POST['drinks_date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $dishes->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}
// -----------Desserts-----------



if(isset($_REQUEST['edit_blog5'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->desserts as $desserts){

		if($desserts->id == $_POST['desserts_id']){
			$desserts->name = $_POST['desserts_name'];
			$desserts->category = $_POST['desserts_category'];
			$desserts->price = $_POST['desserts_price'];
			$desserts->date = $_POST['desserts_date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $dishes->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}
// ---------Best Sellers-------------



if(isset($_REQUEST['edit_blog6'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->bestsellers as $bestsellers){

		if($bestsellers->id == $_POST['bestsellers_id']){
			$bestsellers->name = $_POST['bestsellers_name'];
			$bestsellers->category = $_POST['bestsellers_category'];
			$bestsellers->price = $_POST['bestsellers_price'];
			$bestsellers->date = $_POST['bestsellers_date'];
			break;
		} //end of if

	}//end of foreach

	file_put_contents('files/blogs.xml', $dishes->asXML());
	$_SESSION['message'] = "Blog Successfully Updated";
	header("location: index.php");

}//end of if isset
else {
	$_SESSION['message'] = "select blog to edit first";
	header("location: index.php");
}

?>