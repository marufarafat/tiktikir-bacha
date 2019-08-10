<?php include 'template/head-side-top-nav-ber.php';?>

<?php
if (isset($_GET['del'])){
    $delid = "DELETE FROM `service_payment` WHERE pay_id = '".$_GET['del']."'";
    $delrun = mysqli_query($conn, $delid);

    if ($delrun){
        $msg = "Payment History Deleted";
    }else{
        $msg = "Payment Not Deleted";
    }
}


function get_pro_name($db, $id, $field){
    $res = mysqli_query($db, 'SELECT `'.$field.'` FROM `product` WHERE `product_id` = "'.$id.'"');
    $fet = mysqli_fetch_assoc($res);
    return $fet[$field];
}
function get_user_name($db, $id, $field){
    $res = mysqli_query($db, 'SELECT `'.$field.'` FROM `user` WHERE `user_id` = "'.$id.'"');
    $fet = mysqli_fetch_assoc($res);
    return $fet[$field];
}

function get_package_details($con, $id, $field){
    $sql = "SELECT `".$field."` FROM package WHERE package_id = '".$id."'";
    $fet = mysqli_fetch_assoc(mysqli_query($con, $sql));
    return $fet[$field];
}

    function get_service_details($con, $id, $field){
        $sql = "SELECT `".$field."` FROM service WHERE service_name = '".$id."'";
        $fet = mysqli_fetch_assoc(mysqli_query($con, $sql));
        return $fet[$field];
    }
?>
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
					<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ALL USERS LIST<small>Users</small></h2>

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
                          <th>Payment ID</th>
                          <th>Payment Type</th>
                          <th>Paid Item Name</th>
                          <th>Card Number</th>
                          <th>Card Name</th>
                          <th>Card Expiry</th>
                          <th>Card CVC/CVV</th>
                          <th>Amount</th>
                          <th>User Email</th>
                            <th>Paid</th>
                            <th style="width: 100px;">#Edit</th>
                        </tr>
					
                      </thead>
					<?php
						$i = 0;						
						$query = "SELECT * FROM `service_payment` ORDER BY pay_id DESC ";
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
                          <td><?php echo $row['tr_id'];?></td>
                          <td><?php if($row['pkg_type'] == 1){
                                    echo '<label class="label label-primary">Customize Service</label>';
                                }else if($row['pkg_type'] == 2){
                                    echo '<label class="label label-info">Service Package</label>';
                                }else{
                                    echo '<label class="label label-success">Product</label>';
                                }?>
                          </td>
                          <td><?php if($row['pkg_type'] == 1){
                                    echo get_service_details($conn, $row['pkg_id'], 'service_name');
                                }else if($row['pkg_type'] == 2){
                                    echo get_package_details($conn, $row['pkg_id'], 'package_name');
                                }else{
                                    echo get_pro_name($conn, $row['pkg_id'], 'name');
                                }?>
                          </td>
                          <td><?php echo $row['cr_number'];?></td>
                          <td><?php echo $row['cr_name'];?></td>
                          <td><?php echo $row['cr_expiry'];?></td>
                          <td><?php echo $row['cr_cvv'];?></td>
                          <td><?php echo $row['pay_amount'];?></td>
                          <td><?php echo get_user_name($conn, $row['user_id'], 'email');?></td>
                          <td><?php echo $row['pay_date'];?></td>
                          <td style="width: 100px;">
							<a href="all_payment.php?del=<?=$row['user_id'];?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
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
        </div>
        <!-- /page content -->
		
        <!-- footer content -->
<?php include'template/footer.php';?>