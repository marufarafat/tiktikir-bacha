<?php include 'template/head-side-top-nav-ber.php';?>
<?php
if(isset($_POST['submit'])) {
    $id= $_POST['id'];
    $name= mysqli_real_escape_string($conn, $_POST['fname']);
    $lastName= mysqli_real_escape_string($conn, $_POST['lname']);
    $contacNo= mysqli_real_escape_string($conn, $_POST['contact']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $address= mysqli_real_escape_string($conn, $_POST['fulladdress']);
    $dob= mysqli_real_escape_string($conn, $_POST['dateofbirth']);
    $gender= mysqli_real_escape_string($conn, $_POST['gender']);
    $designation= mysqli_real_escape_string($conn, $_POST['designation']);

    $product_image= $_FILES['image']['name'];
    $product_tmp = $_FILES['image']['tmp_name'];


    if (empty($name)){
        $msg = "Username is required";
    }elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $msg = "First name should be letter";
    }elseif (empty($lastName)){
        $msg = "Last name is required";
    }elseif (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
        $msg = " Last name should be letter";
    }elseif(empty($contacNo)){
        $msg = "Contact number is required";
    }elseif (preg_match("/^[a-zA-Z ]*$/",$contacNo)) {
        $msg = "Invalid phone number";
    }elseif(empty($address)){
        $msg = "Address is required";
    }elseif(empty($dob)){
        $msg = "Please select your date of birth";
    }elseif($_POST['designation'] == "default"){
        $msg = "Please select Designation";
    }elseif (empty($email)){
        $msg = "Email address is required";
    }elseif (empty($gender)){
        $msg = "Please select gender";
    }elseif (!preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $email)) {
        $msg = "Invalid Email address";
    }else{
        if(is_uploaded_file($product_tmp)){
            move_uploaded_file($product_tmp,"../../images/employee/$product_image");
            $sql="UPDATE `staff` SET `name`='$name',`lastName`='$lastName',`post`='$designation',`gender`='$gender',`phone`='$contacNo',`email`='$email',`address`='$address',`dateOfbirth`='$dob',`image`='$product_image' WHERE `staff_id`='$id'";
        }else{
            $sql="UPDATE `staff` SET `name`='$name',`lastName`='$lastName',`post`='$designation',`gender`='$gender',`phone`='$contacNo',`email`='$email',`address`='$address',`dateOfbirth`='$dob' WHERE `staff_id`='$id'";
        }
        $run = mysqli_query($conn,$sql);
        if ($run){
            $msg = "Profile update successfully! Thank you";
        }else{
            $msg = "Profile not update!";
        }
    }
}

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
				<div class="page-title">
				  <div class="title_left">
					<h3>Form</h3>
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
				  <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_title">
						<h2>Update<small>profile</small></h2>
                          <?php if (isset($msg)){?>
                              <div class="alert alert-primary"><?=$msg;?></div>
                          <?php }?>
						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<br/>
							<?php
								$i = 0;	
								$id= $_GET['id'];												
								$query = "SELECT * FROM `staff` WHERE staff_id ='$id'";
								$run = mysqli_query($conn,$query);
								if (!$query) {
								printf("Error: %s\n", mysqli_error($conn));
								exit();
								}
								error_reporting(0);
								while($row = mysqli_fetch_array($run)){
							
								$i++;						
							  ?>						
						<form id="demo-form2" data-parsley-validate method="POST" action="" class="form-horizontal form-label-left" enctype="multipart/form-data">
						   <div class="form-group">
							<?php include'error.php';?>
							<?php include'successfull.php';?>
							</div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="first-name" name="fname" value="<?php echo $row['name'];?>" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lname">Last Name <span class="">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="last-name" name="lname" value="<?php echo $row['lastName'];?>" class="form-control col-md-7 col-xs-12">
							  <input type="hidden" name="id" value="<?php echo $row['staff_id'];?>" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input id="contact-number" value="<?php echo $row['phone'];?>" class="form-control col-md-7 col-xs-12" type="text" name="contact">
							</div>
						  </div>
						  <div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email Address</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input id="email" value="<?php echo $row['email'];?>" class="form-control col-md-7 col-xs-12" type="text-area" name="email">
							</div>
						  </div>					  
						  <div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Full Address</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input  style="height: 85px;" class="form-control" id="exampleTextarea" value="<?php echo $row['address'];?>" name="fulladdress" rows="3"></input>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input id="birthday" name="dateofbirth" value="<?php echo $row['dateOfbirth'];?>" class="date-picker form-control col-md-7 col-xs-12" type="date">
							</div>
						  </div>
						  <div class="form-group">
						    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12">
								  <div class="radio">
									<label>
									  <input type="radio" checked="" value="Male" id="optionsRadios1" name="gender"> Male
									</label>
								  </div>
								  <div class="radio">
									<label>
									  <input type="radio" value="Female" id="optionsRadios2" name="gender"> Female
									</label>
								  </div>
								</div>
							  </div>
							</div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Designation </label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select class="form-control" name="designation">
								<option value="<?php echo $row['post'];?>"><?php echo $row['designation'];?><span class="required"></option>
								<option value="accountant"<?php if($row['post'] == "accountant"){ echo "selected";} ?>>Accountant</option>
								<option value="reciptionist"<?php if($row['post'] == "reciptionist"){ echo "selected";} ?>>Reciptionist</option>
								<option value="employee"<?php if($row['post'] == "employee"){ echo "selected";} ?>>Employee</option>
								<option value="iT Executive"<?php if($row['post'] == "iT Executive"){ echo "selected";} ?>>IT Executive</option>
							  </select>
							</div>
						  </div>
						  <div class="control-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" class="m-wrap medium" value ="<?php echo $row['image'];?>" name="image" enctype="multipart/form-data" accept="image/*" multiple />
								<br/>
								<img src="../../images/employee/<?php echo $row['image'];?>" style=" width:100px; height:100px;"/>												
							</div>
						   </div>
					  </div>
					</div>
					<div class="ln_solid"></div>
						  <div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							  <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
							</div>
						  </div>
							<?php }?>
						</form>
	
								
					
						
					  </div>
					</div>
				  </div>
				</div>
		  </div>
		</div>
        <!-- /page content -->     
<?php include'template/footer.php';?>