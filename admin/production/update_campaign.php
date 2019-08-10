<?php include 'template/head-side-top-nav-ber.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Product Details</h3>
                  <?php if (isset($_SESSION['msg'])){?>
                      <div class="alert alert-default"><?=$_SESSION['msg'];?></div>
                    <?php unset($_SESSION['msg']);}?>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <!-- form input mask -->
				<div class="col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Update Product</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
								  <li><a href="#">Settings 1</a>
								  </li>
								  <li><a href="#">Sttings 2</a>
								  </li>
								</ul>
							  </li>
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
						<br />
								<?php
									$i = 0;
									$id=$_GET['id'];									
									$query = "select * from product where product_id='$id'";
									 
									$run = mysqli_query($conn,$query);
									if (!$query) {
									printf("Error: %s\n", mysqli_error($conn));
									exit();
									}
									error_reporting(0);
									while($row = mysqli_fetch_array($run)){
								
									$i++;					  
								  ?>
						
							<form class="form-horizontal form-label-left" action="update_product_action.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
								<div class="col-md-12">
									<?php include'error.php';?>
									<?php include'successfull.php';?>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4">Campaign Title</label>
										<div class="col-md-6">
											<input type="text" class="form-control" value="<?php echo $row['campaigntitle'];?>" name="Campaign Title">
											<input type="hidden" class="form-control" value="<?php echo $row['product_id'];?>" name="proid">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4">Description</label>
										<div class="col-md-6">
											<textarea type="text" class="form-control" value="" name="description"><?php echo $row['description'];?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4">Price</label>
										<div class="col-md-6">
											<input type="text" class="form-control" value="<?php echo $row['price'];?>" name="price">
											<span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
										</div>
									</div>
										<div class="form-group">
										<label class="col-md-4">Quantity</label>
										<div class="col-md-6">
											<input type="text" class="form-control" value="<?php echo $row['quantity'];?>" name="quantity">
											<span class="fa fa-money form-control-feedback right" aria-hidden="true"></span>
										</div>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4">Category</label>
										<div class="col-md-6 col-sm-12">
											<select class="select2_single form-control" tabindex="-1" name="category">
												<option value="<?php echo $row['product_type'];?>"><?php echo $row['product_type'];?></option>
												<option value="Tree"<?php if($category == "Tree"){ echo "selected";}?>>Tree</option>
												<option value="Instrument"<?php if($category == "Instrument"){ echo "selected";}?>>Instrument</option>
												<option value="Flower"<?php if($category == "Flower"){ echo "selected";}?>>Flower</option>
												<option value="Fertilizer"<?php if($category == "Fertilizer"){ echo "selected";}?>>Fertilizer</option>
												<option value="Seeds"<?php if($category == "Seeds"){ echo "selected";}?>>Seeds</option>
												<option value="Soil"<?php if($category == "Soil"){ echo "selected";}?>>Soil</option>
											</select>
										</div>
									</div>								
									<div class="form-group">
										<label class="col-md-4">Image(Big)</label>
										<div class="col-md-6">
											<input type="file" class="form-con trol" value ="<?php echo $row['image'];?>" style="width:50%; height:100%;" name="bgimage" accept="image/*"/>
                                            <br>
											<span class="form-control-feedback right" aria-hidden="true"><img width="100px" src="../../img/product/<?php echo $row['image'];?>"> </span>
										</div>
									</div>
								</div>
							</div>
								<div class="ln_solid"></div> 
								<div class="form-group">
									<div class="col-md-9 col-md-offset-3">
									  <a href="all_property.php" class="btn btn-primary">Cancel</a>
									  <button type="submit" class="btn btn-success" name="submit">Submit</button>
									</div>
								</div>									
							</form>
						<?php }?>
							
						
<?php
	session_start();
	$name			= $_POST['pname'];
	$id				= $_POST['id'];
	$price			= $_POST['price'];
	$quantity		= $_POST['quantity'];
	$category		= $_POST['category'];
	$description	= $_POST['description'];
	$product_image= $_FILES['bgimage']['name'];  
	$product_tmp = $_FILES['bgimage']['tmp_name'];
	$errors = array();
	$successfull = array();
	error_reporting (0);
	
	if(isset($_POST['submit'])) {
		
		if (empty($name)) {
			array_push($errors,"Product Name can't blank");
		 }
		if (empty($description)) {
			array_push($errors,"Description can't blank");
		 }
		 if (empty($quantity)) {
			array_push($errors,"Quantity can't blank");
		 }
		 if (preg_match("/^[a-zA-Z ]*$/",$quantity)) {
				array_push($errors,"Quantity can't be letter");
			 }
		if (preg_match("/^[a-zA-Z ]*$/",$price)) {
				array_push($errors,"Price can't be letter");
			 }
		if (empty($price)) {
				array_push($errors,"Price can't be blank");
			 }
		 
		if($_POST['category'] == "default"){
				array_push($errors,"Please select One option from Category");
			 }			 		 			 
		   						
	if(count($errors)==0){
			if(is_uploaded_file($product_tmp)){
			move_uploaded_file($product_tmp,"../../img/product/$product_image");		
			
			 $sql="UPDATE `product` SET
			 `user_id`='',
			 `product_type`='$category',
			 `name`='$name',
			 `price`='$price',
			 `quantity`='$quantity', 
			 `description`='$description', 
			 `image`='$product_image' where=product_id='product_image'";
 			
			$run=mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>alert('Product update successfully! Thank you')window.location.href='all_property.php';</script>";
			header('location:index.php');

		}else{
			$sql="UPDATE `product` SET
			 `user_id`='',
			 `product_type`='$category',
			 `name`='$name',
			 `price`='$price',
			 `quantity`='$quantity', 
			 `description`='$description', 
			  where=product_id='product_image'";			
			$run=mysqli_query($conn,$sql);
			echo "<script type='text/javascript'>alert('Product update successfully! Thank you')window.location.href='all_property.php';</script>";
			header('location:index.php');

		}
		
	}
	}

?>
	
							
							
							
							
							
							
							
						</div>	
					</div>
				</div>
            </div>
              <!-- /form input mask -->
       </div>
    </div>
        
		<!-- /page content -->

        <!-- footer content -->
<?php include'template/footer.php';?>