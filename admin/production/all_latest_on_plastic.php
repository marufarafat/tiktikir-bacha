<?php include 'template/head-side-top-nav-ber.php';?>
<?php
if (isset($_GET['del'])){
    $delid = "DELETE FROM job WHERE job_id = '".$_GET['del']."'";
    $delrun = mysqli_query($conn, $delid);

    if ($delrun){
        $msg = "Job Deleted";
    }else{
        $msg = "Job Not Deleted";
    }
}
?>
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
						$_SESSION['job_id']= $row['job_id'];
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
							<a href="job_apply.php?id=<?php echo $row['job_id'];?>" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
							<a href="job_update.php?id=<?=$row['job_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
							<a href="all_job.php?del=<?php echo $row['job_id'];?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

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