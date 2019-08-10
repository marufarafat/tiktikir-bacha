       <?php include 'template/head-side-top-nav-ber.php';?>
       <?php
            if (isset($_GET['del'])){
                $delid = "DELETE FROM product WHERE product_id = '".$_GET['del']."'";
                $delrun = mysqli_query($conn, $delid);

                if ($delrun){
                    $msg = "Product Deleted";
                }else{
                    $msg = "Product Not Deleted";
                }
            }
       ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
			<div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_content">
				 <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Campaign <small></small></h2>
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
						  <th>User ID</th>
						  <th>Campaign</th>
                          <th>Campaign Description</th>
                          <th>Status</th>
						  <th>Start Date</th>
						  <th>End Date</th>
						   <th>Address</th>
						  <th style="width: 20%">Edit <small>Panel<small></th>
                        </tr>
                      </thead>
					  
					 
					<?php
						$i = 0;
						$query = "select * from product WHERE user_id = 0";
						 
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
						  <td><?php echo $row['user_id'];?></td>
                          <td><?php echo $row['campaigntitle'];?></td>
                          <td><?php echo $row['campaigndesc'];?></td>
                          <td><?php echo $row['status'];?></td>
						  <td><?php echo $row['date'];?></td>
						  <td><?php echo $row['enddate'];?></td>
						  <td><?php echo $row['campaignlocation'];?></td>
                          
						  <td>

                            <a href="single_property.php?id=<?php echo $row['product_id']?>" class="btn btn-primary btn-xs"> View </a>
							<a href="product_update.php?id= <?php echo $row['product_id']?>" type="hidden" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
							<a href="all_property.php?del=<?php echo $row['product_id']?>" class="btn btn-danger btn-xs">Delete</a>
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
		  </div>
		</div>
        <!-- /page content -->

        <!-- footer content -->
<?php include'template/footer.php';?>
	  
			