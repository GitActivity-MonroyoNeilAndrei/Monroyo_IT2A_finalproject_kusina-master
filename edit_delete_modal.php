<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_category" value="<?php echo "Lunch"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_blog" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Blog</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- ------------Dinner----------- -->
<div class="modal fade" id="edit1_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_category" value="<?php echo "Dinner"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_blog1" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Blog</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- ------------Breakfast----------- -->
<div class="modal fade" id="edit2_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Breakfast ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_category" value="<?php echo "Breakfast"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Breakfast Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Breakfast Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_blog2" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Blog</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- ------------Wine----------- -->
<div class="modal fade" id="edit3_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_category" value="<?php echo "Wine"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_price" value="<?php echo $rows->breakfast; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_blog3" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Blog</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- ------------Drinks----------- -->
<div class="modal fade" id="edit4_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_category" value="<?php echo "Drinks"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_blog4" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Blog</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- -----------Desserts---------- -->

<div class="modal fade" id="edit5_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Desserts ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_category" value="<?php echo "Desserts"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Desserts Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Desserts Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_blog5" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Blog</a>
			</form>
            </div>

        </div>
    </div>
</div>
<!-- -----------Best Sellers------------ -->
<div class="modal fade" id="edit6_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Dish </h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
				
			<form method="POST" action="edit_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Best Sellers ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_id" value="<?php echo $rows->id; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_category" value="<?php echo "Best Sellers"; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Best Sellers Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_name" value="<?php echo $rows->name; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Best Sellers Price:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_price" value="<?php echo $rows->price; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_date" value="<?php echo $rows->date; ?>">
					</div>
				</div>
            


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <button type="submit" name="edit_blog6" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update Blog</a>
			</form>
            </div>

        </div>
    </div>
</div>








<!-- Delete -->
<!-- ----Lunch---- -->
<div class="modal fade" id="delete_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_lunch.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- ---Dinner---- -->

<div class="modal fade" id="delete1_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_dinner.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- ------breakfast------- -->

<div class="modal fade" id="delete2_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_breakfast.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- ------Wine--------- -->

<div class="modal fade" id="delete3_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_wine.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- ----------Drinks---------- -->


<div class="modal fade" id="delete4_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_drinks.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- ----------Desserts----------- -->

<div class="modal fade" id="delete5_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_desserts.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>

<!-- -----------Best Sellers---------- -->

<div class="modal fade" id="delete6_<?php echo $rows->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Are you sure you want to delete blog:</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center text-danger"> This action is irreversable! </p>
				<h3 class="text-center">Name:<?php echo $rows->name; ?></h3>
				<p class="text-center">Price:<?php echo $rows->price; ?></p>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

                <a href="delete_bestsellers.php?id=<?php echo $rows->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>



