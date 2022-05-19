<!-- Lunch -->
<div class="modal fade" id="addLunch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Lunch</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch ID:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_id" readonly value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_category" readonly value="<?php echo "Lunch" ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lunch_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Lunch Price: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="lunch_price">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="lunch_date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishLunch" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Dinner -->
<div class="modal fade" id="addDinner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dinner</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner ID:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_id" readonly value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_category" readonly value="<?php echo "Dinner" ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="dinner_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dinner Price: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="dinner_price">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="dinner_date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishDinner" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- -------Breakfast--------- -->

<div class="modal fade" id="addBreakfast" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dinner</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Breakfast ID:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_id" readonly value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_category" readonly value="<?php echo "Breakfast" ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Breakfast Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="breakfast_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Breakfast Price: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="breakfast_price">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="breakfast_date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishBreakfast" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- ----------Wine--------- -->

<div class="modal fade" id="addWine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dinner</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine ID:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_id" readonly value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_category" readonly value="<?php echo "Wine" ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="wine_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Wine Price: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="wine_price">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="wine_date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishWine" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- ------------Drinks-------------- -->


<div class="modal fade" id="addDrinks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dinner</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks ID:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_id" readonly value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_category" readonly value="<?php echo "Drinks" ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="drinks_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Drinks Price: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="drinks_price">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="drinks_date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishDrinks" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- ------------Desserts---------- -->


<div class="modal fade" id="addDesserts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dinner</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Desserts ID:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_id" readonly value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_category" readonly value="<?php echo "Desserts" ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Desserts Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="desserts_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Desserts Price: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="desserts_price">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="desserts_date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishDesserts" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- ---------------Best Sellers---------- -->

<div class="modal fade" id="addBestSellers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Dinner</h4></center>
            </div>

            <div class="modal-body">
			<div class="container-fluid">
			

			<form method="POST" action="add_blog.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Best Sellers ID:</label>
					</div>
					
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_id" readonly value="<?php echo  strtotime(date('Y-m-d H:i:s')); ?>"/>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Category:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_category" readonly value="<?php echo "Best Sellers" ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Best Sellers Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bestsellers_name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Best Sellers Price: </label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required name="bestsellers_price">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Date Published:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" required readonly name="bestsellers_date" value="<?php echo date('M/d/Y'); ?>">
					</div>
				</div>

				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
                <button type="submit" name="publishBestSellers" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Publish </a>
			</form>
            </div>

        </div>
    </div>
</div>


