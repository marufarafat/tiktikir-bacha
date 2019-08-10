<?php include'template/head-side-top-nav-ber.php';?>
<?php
if (isset($_GET['del'])){
    $delid = "DELETE FROM staff WHERE staff_id = '".$_GET['del']."'";
    $delrun = mysqli_query($conn, $delid);

    if ($delrun){
        $msg = "Staff Deleted";
    }else{
        $msg = "Staff Not Deleted";
    }
}
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Register user<small>Information</small></h3>
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
                    <h2>All Staff <small></small></h2>
					 <?php include 'error.php';?>
					  <?php include 'successfull.php';?>

                      <br>
                      <br>
                      <?php if (isset($msg)){?>
                          <div class="alert alert-success"><?=$msg;?></div>
                      <?php }?>
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
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
					  
                        <tr>
                          <th>#</th>
                          <th>Name</th>
						  <th>Contact</th>
                          <th>Email</th>
                          <th>Gender</th>
                          <th>Designation</th>
						  <th style="width: 20%">#Edit</th>
                        </tr>
					
                      </thead>
					  
					<?php
						$i = 0;						
						$query = "SELECT * FROM `staff`";
						$run = mysqli_query($conn,$query);
						if (!$query) {
						printf("Error: %s\n", mysqli_error($conn));
						exit();
						}
						error_reporting(0);
						while($row = mysqli_fetch_array($run)){
					
						$i++;					  
					  ?>
                      <tbody>
						<tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $row['name'];?> <?php echo $row['lastName'];?></td>
                          <td><?php echo $row['phone'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td><?php echo $row['gender'];?></td>
                          <td><?php echo $row['designation'];?></td>
                          <td>
							<a href="profile.php?id=<?php echo $row['staff_id']?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
							<a href="update_profile.php?id=<?php echo $row['staff_id']?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
							<a href="all_staff.php?del=<?php echo $row['staff_id']?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
						  </td>
                        </tr>
						
                       </tbody>
						<?php }?>
					  </table>
                  </div>
                </div>
              </div>
			</div>
          </div>
        </div>
        <!-- /page content -->
<?php include'template/footer.php';?>