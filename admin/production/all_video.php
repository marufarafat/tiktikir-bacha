<?php include 'template/head-side-top-nav-ber.php';?>
<?php
if (isset($_GET['del'])){
    $delid = "DELETE FROM service WHERE service_id = '".$_GET['del']."'";
    $delrun = mysqli_query($conn, $delid);

    if ($delrun){
        $msg = "Service Deleted";
    }else{
        $msg = "Service Not Deleted";
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
                    <h2>Custom Services<small></small></h2>
                        <br>
                        <br>
                        <?php if (isset($msg)){?>
                            <div class="alert alert-success"><?=$msg;?></div>
                        <?php }?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
					  
                        <tr>
                          <th>#</th>
						  <th>Service Title</th>
                          <th>Service details</th>
                          <th>Worker Price/hr</th>
                          <th>Hour Price/hr</th>
                          <th>Service Price</th>
						  <th style="width: 20%">Actions</th>
                        </tr>
					
                      </thead>
					  
					<?php
						$i = 0;
						$query = "select * from service";
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
                          <td><?php echo $row['service_name'];?></td>
                          <td><?php echo $row['servece_details'];?></td>
                          <td><?php echo $row['worker'];?></td>
                          <td><?php echo $row['hour'];?></td>
                          <td><?php echo $row['service_price'];?></td>
                          <td>
							<a href="update_custom_service.php?servid=<?=$row['service_id'];?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
							<a href="all_custom_services.php?del=<?php echo $row['service_id'];?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>

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