<?php include 'template/head-side-top-nav-ber.php';?>
<?php include 'staff_registration.php';?>
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
						<h2>Staff Registration<small>form</small></h2>
						<ul class="nav navbar-right panel_toolbox">
						  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						  </li>
						  <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
							<ul class="dropdown-menu" role="menu">
							  <li><a href="#">Settings 1</a>
							  </li>
							  <li><a href="#">Settings 2</a>
							  </li>
							</ul>
						  </li>
						  <li><a class="close-link"><i class="fa fa-close"></i></a>
						  </li>
						</ul>
						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<br/>
						
						<form id="demo-form2" data-parsley-validate method="POST" action="form.php" class="form-horizontal form-label-left" enctype="multipart/form-data">
						   <div class="form-group">
							<?php include'error.php';?>
							<?php include'successfull.php';?>
							</div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="first-name" name="fname" value="<?php echo $name;?>" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lname">Last Name <span class="">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="last-name" name="lname" value="<?php echo $lastName;?>" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  
						  <div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input id="contact-number" value="<?php echo $contacNo;?>" class="form-control col-md-7 col-xs-12" type="text" name="contact">
							</div>
						  </div>
						  
						  <div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email Address</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input id="email" value="<?php echo $email;?>" class="form-control col-md-7 col-xs-12" type="text-area" name="email">
							</div>
						  </div>					  
						  <div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Full Address</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input  style="height: 85px;" class="form-control" id="exampleTextarea" value="<?php echo $address;?>" name="fulladdress" rows="3"></input>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input id="birthday" name="dateofbirth" value="<?php echo $dob;?>" class="date-picker form-control col-md-7 col-xs-12" type="date">
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
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Post</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <select class="form-control" name="post">
							     <option value="default" <?php if($Post == "default"){ echo "selected";}?>>Default</option>
								<option value="accountant"<?php if($Post == "accountant"){ echo "selected";}?>>  Accountant</option>
								<option value="reciptionist"<?php if($Post == "reciptionist"){ echo "selected";}?>>Reciptionist</option>
								<option value="employee"<?php if($Post == "employee"){ echo "selected";}?>>Employee</option>
								<option value="iT Executive"<?php if($Post == "iT Executive"){ echo "selected";}?>>IT Executive</option>
							  </select>
							</div>
						  </div>
						  
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lname">Password<span class="">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="password" id="password" name="password" value="<?php echo $password;?>" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="lname">Confirm password <span class="">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="password" id="cpassword" name="cpassword" value="<?php echo $confirmpassword;?>" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  
						  <div class="control-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
							<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" class="m-wrap medium" value ="" name="image" enctype="multipart/form-data" accept="image/*" multiple />

							</div>
						   </div>
					  </div>
					</div>
						  <div class="ln_solid"></div>
						  <div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							  <button type="submit" name="register-submit" class="btn btn-success">Submit</button>
							</div>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
				</div>
		  </div>
		</div>
        <!-- /page content -->     
<?php include'template/footer.php';?>