<?php include 'template/head-side-top-nav-ber.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
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
                    <h2>Plain Page</h2>
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
					<div class="col-xs-12 col-sm-12">
   <div class="panel-body">
              <div class="row">
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
				<div class="col-md-3 col-lg-3 " align="center"> 
					<img alt="User Pic" src="../../images/employee/<?php echo $row['image'];?>" class="img-thumbnail">
				</div>
						<?php }?>
                <div class=" col-md-6 col-lg-6 "> 
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
				  <table class="table table-user-information">
						
					
				   <tbody>
                      <tr>
                        <td>Name:</td>
                        <td><?php echo $row['name'];?></td>
                      </tr>
					  <tr>
                        <td>Last Name:</td>
                        <td><?php echo $row['lastName'];?></td>
                      </tr>
                      <tr>
                        <td>Post:</td>
                        <td><?php echo $row['post'];?></td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?php echo $row['dateOfbirth'];?></td>
                      </tr>
					  <tr>
                        <td>Gender</td>
                        <td><?php echo $row['gender'];?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php echo $row['address'];?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="#"><?php echo $row['email'];?></a></td>
                      </tr>
                      <tr>
						<td>Phone Number</td>
                        <td><?php echo $row['phone'];?><br>
                        </td>
                      </tr>
                     
                    </tbody>
					
                  </table>
				  	<a href="update_profile.php?id=<?php echo $row['staff_id']?>" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"> UPDATE PROFILE <i class="glyphicon glyphicon-edit"></i></a>
				<?php }?>
                </div>
              </div>
            </div>
             
                    
            
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    <?php include'template/footer.php';?>