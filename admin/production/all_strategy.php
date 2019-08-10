<?php include'template/head-side-top-nav-ber.php';?>
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

if (isset($_GET['sts'])){
    $delid = "UPDATE product SET status = 'appoved' WHERE product_id = '".$_GET['sts']."'";
    $delrun = mysqli_query($conn, $delid);

    if ($delrun){
        $msg = "Product Approved";
    }else{
        $msg = "Product Not Approved";
    }
}

if (isset($_GET['stsold'])){
    $delid = "UPDATE product SET status = 'sold' WHERE product_id = '".$_GET['stsold']."'";
    $delrun = mysqli_query($conn, $delid);

    if ($delrun){
        $msg = "Product Marked as Sold";
    }else{
        $msg = "Product Not Sold";
    }
}
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Uploaded <small>Product</small></h3>
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
                    <h2>User Uploaded Product List <small></small></h2>
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
						  <th>Category</th>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th>Price</th>
                          <th>Charge</th>
                          <th>Total Price</th>
						  <th>Description</th>
						  <th>Status</th>
                          <th>Image</th>
						  <th style="width: 20%">#Edit</th>
                        </tr>
					
                      </thead>
					 
					  
					<?php
						$i = 0;						
						$query = "select * from product where user_id != ''";
						 
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
                          <td><?php echo $row['product_type'];?></td>
                          <td><?php echo $row['name'];?></td>
                          <td><?=($row['quantity'] < 10)?'<div class="label label-danger">'.$row['quantity'].'</div>':'<div class="label label-primary">'.$row['quantity'].'</div>';?></td>
                          <td><?php echo $row['price'];?></td>
                          <td><?php echo $row['vat'];?></td>
                          <td><?php echo $row['total_price'];?></td>
                          <td><?php echo $row['description'];?></td>
                          <td><?php echo $row['status'];?></td>
                          <td> <img src="../../img/product/<?php echo $row['image'];?>" style="width: 150px;height: 150px;"/></td>
                          <td>
							<a href="" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
							<a href="product_update.php?id= <?php echo $row['product_id']?>" type="hidden" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <?php if ($row['status'] == "pending"){?>
                                <a href="user_product.php?sts= <?php echo $row['product_id']?>" type="hidden" class="btn btn-warning btn-xs"><i class="fa fa-thumbs-up"></i> Approve </a>
                            <?php }elseif($row['status'] == "appoved"){?>
                                <a href="user_product.php?stsold= <?php echo $row['product_id']?>" type="hidden" class="btn btn-warning btn-xs"><i class="fa fa-thumbs-up"></i> Mark it Sold </a>
                            <?php }?>
                            <a href="user_product.php?del= <?php echo $row['product_id']?>" type="hidden" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete </a>
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