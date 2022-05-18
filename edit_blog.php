<?php 

session_start();

if(isset($_REQUEST['edit_blog'])){

	$dishes = simplexml_load_file('files/blogs.xml');

	foreach($dishes->dish as $dish){

		if($dish->id == $_POST['dish_id']){
			$dish->name = $_POST['dish_name'];
			$dish->price = $_POST['dish_price'];
			$dish->date = $_POST['blog_date'];
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