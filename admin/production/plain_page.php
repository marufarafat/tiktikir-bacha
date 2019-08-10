<?php include 'template/head-side-top-nav-ber.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
			<div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
					<div class="x_title">
                    <h2>APPLYED ALL PEOPLE<small></small></h2>
	
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
				    <?php
						if (isset($_GET['id'])){
							$id = $_GET['id'];
							$query="delete from job where job_id='$id'";
							$run=mysqli_query($conn,$query);
							
							if($run===true){
								echo "<script type='text/javascript'>alert('Job deleted successfully!')</script>";
							}else{
								echo "<script type='text/javascript'>alert('Job are not daleted ')</script>";
							}
						}				 	
					
					?> 
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
					  
                        <tr>
                          <th>#</th>
						  <th>Job Title</th>
                          <th>Price</th>
                          <th>Job details</th>
                          <th>job type</th>
                          <th>Posted date</th>
						  <th style="width: 20%">#Edit</th>
                        </tr>
					
                      </thead>
					  
					<?php
						$i = 0;
						$query = "select * from job";
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
                          <td><?php echo $row['job_title'];?></td>
                          <td><?php echo $row['job_price'];?></td>
                          <td><?php echo $row['job_details'];?></td>
                          <td><?php echo $row['job_type'];?></td>
                          <td><?php echo $row['time'];?></td>
                          <td>
							<a href="user_upload_request.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
							<a href="#" type="hidden" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
							<a href="all_job.php?id=<?php echo $row['job_id'];?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

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
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php include'template/footer.php';?>