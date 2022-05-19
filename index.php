<?php

include "add_modal.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Full XML and PHP Lesson</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>
<div class="container">
    <h1 class="page-header text-center"> Coffee Blog Management</h1>
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
        
        <a href="#addLunch" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Lunch</a>

        <a href="kusina-hustler/index.php#blog" class="btn btn-light" target="_blank"> View Website</a>   

            <!-- ----------- LUNCH ----------- -->
            
            <?php 
            // session_start();
            if(isset($_SESSION['message'])){
          
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;"> 
                <?php echo $_SESSION['message'] ?>
            </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>


            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>
                </thead>
                
                <tbody>

                    <?php  
                    //load the xml file to the table
                    $file = simplexml_load_file('files/blogs.xml');

                    //loop through all the data and display each rows
                    foreach($file->lunch as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->id; ?> </td>
                            <td> <?php echo $rows->category; ?> </td>
                            <td> <?php echo $rows->name; ?> </td>
                            <td> <?php echo $rows->price; ?> </td>
                            <td> <?php echo $rows->date; ?> </td></td>

                            <td>
                                
                                <a href="#edit_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                
                                <a href="#delete_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>

            <!-- ----------- DINNER ------------ -->

            <a href="#addDinner" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Dinner</a>

            <?php 
            if(isset($_SESSION['message'])){
          
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;"> 
                <?php echo $_SESSION['message'] ?>
            </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>
                </thead>
                
                <tbody>

                    <?php  
                    //load the xml file to the table
                    $file = simplexml_load_file('files/blogs.xml');

                    //loop through all the data and display each rows
                    foreach($file->dinner as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->id; ?> </td>
                            <td> <?php echo $rows->category; ?> </td>
                            <td> <?php echo $rows->name; ?> </td>
                            <td> <?php echo $rows->price; ?> </td>
                            <td> <?php echo $rows->date; ?> </td></td>

                            <td>
                                
                                <a href="#edit1_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                
                                <a href="#delete1_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>
        
            <!-- ---------Breakfast------------- -->

            <a href="#addBreakfast" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Breakfast</a>

            <?php 
            if(isset($_SESSION['message'])){
          
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;"> 
                <?php echo $_SESSION['message'] ?>
            </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>
                </thead>
                
                <tbody>

                    <?php  
                    //load the xml file to the table
                    $file = simplexml_load_file('files/blogs.xml');

                    //loop through all the data and display each rows
                    foreach($file->breakfast as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->id; ?> </td>
                            <td> <?php echo $rows->category; ?> </td>
                            <td> <?php echo $rows->name; ?> </td>
                            <td> <?php echo $rows->price; ?> </td>
                            <td> <?php echo $rows->date; ?> </td></td>

                            <td>
                                
                                <a href="#edit2_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                
                                <a href="#delete2_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>

            <!-- ---------Wine-------- -->

            <a href="#addWine" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Wine</a>

            <?php 
            if(isset($_SESSION['message'])){
          
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;"> 
                <?php echo $_SESSION['message'] ?>
            </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>
                </thead>
                
                <tbody>

                    <?php  
                    //load the xml file to the table
                    $file = simplexml_load_file('files/blogs.xml');

                    //loop through all the data and display each rows
                    foreach($file->wine as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->id; ?> </td>
                            <td> <?php echo $rows->category; ?> </td>
                            <td> <?php echo $rows->name; ?> </td>
                            <td> <?php echo $rows->price; ?> </td>
                            <td> <?php echo $rows->date; ?> </td></td>

                            <td>
                                
                                <a href="#edit3_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                
                                <a href="#delete3_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>

            <!-- ---------Drinks--------- -->


            <a href="#addDrinks" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Drinks</a>

            <?php 
            if(isset($_SESSION['message'])){
          
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;"> 
                <?php echo $_SESSION['message'] ?>
            </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>
                </thead>
                
                <tbody>

                    <?php  
                    //load the xml file to the table
                    $file = simplexml_load_file('files/blogs.xml');

                    //loop through all the data and display each rows
                    foreach($file->drinks as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->id; ?> </td>
                            <td> <?php echo $rows->category; ?> </td>
                            <td> <?php echo $rows->name; ?> </td>
                            <td> <?php echo $rows->price; ?> </td>
                            <td> <?php echo $rows->date; ?> </td></td>

                            <td>
                                
                                <a href="#edit4_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                
                                <a href="#delete4_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>


            <!-- ---------Desserts----------- -->


            <a href="#addDesserts" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Desserts</a>

            <?php 
            if(isset($_SESSION['message'])){
          
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;"> 
                <?php echo $_SESSION['message'] ?>
            </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>
                </thead>
                
                <tbody>

                    <?php  
                    //load the xml file to the table
                    $file = simplexml_load_file('files/blogs.xml');

                    //loop through all the data and display each rows
                    foreach($file->desserts as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->id; ?> </td>
                            <td> <?php echo $rows->category; ?> </td>
                            <td> <?php echo $rows->name; ?> </td>
                            <td> <?php echo $rows->price; ?> </td>
                            <td> <?php echo $rows->date; ?> </td></td>

                            <td>
                                
                                <a href="#edit5_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                
                                <a href="#delete5_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>

            <!-- -----------Best Sellers---------- -->


            <a href="#addBestSellers" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> New Best Sellers</a>

            <?php 
            if(isset($_SESSION['message'])){
          
            ?>

            <div class="alert alert-info text-center" style="margin-top:20px; width: 100%;"> 
                <?php echo $_SESSION['message'] ?>
            </div>

            <?php
                unset($_SESSION['message']);
            }
            ?>

            <table class="table table-sm table-striped table-condensed" style="margin-top:20px;">
                <thead class="table-dark">
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>
                </thead>
                
                <tbody>

                    <?php  
                    //load the xml file to the table
                    $file = simplexml_load_file('files/blogs.xml');

                    //loop through all the data and display each rows
                    foreach($file->bestsellers as $rows) {
                    ?>

                        <tr>
                            <td> <?php echo $rows->id; ?> </td>
                            <td> <?php echo $rows->category; ?> </td>
                            <td> <?php echo $rows->name; ?> </td>
                            <td> <?php echo $rows->price; ?> </td>
                            <td> <?php echo $rows->date; ?> </td></td>

                            <td>
                                
                                <a href="#edit6_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                
                                <a href="#delete6_<?php echo $rows->id; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        <?php include "edit_delete_modal.php"; ?>
                        </tr>
                    <?php 
                    }//closing bracket of foreach
                    ?>
                </tbody>

                <tfoot>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Category</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Date Published</th>
                    <th scope="col">Action</th>                        
                </tfoot>
            </table>


    </div>
    </div>
</div>




<script src="bootstrap/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>