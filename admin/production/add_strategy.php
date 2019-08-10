<?php include 'template/head-side-top-nav-ber.php';?>
<?php include 'add_blog_action.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Strategy Add_BLOG</h3>
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
              <!-- form input mask -->
				<div class="col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_title">
							<h2>Add New Strategy </h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
								  <li><a href="#">Settings 1</a>
								  </li>
								  <li><a href="#">Sttings 2</a>
								  </li>
								</ul>
							  </li>
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
						<br />
							<form class="form-horizontal form-label-left" action="add_blog.php" method="POST" enctype="multipart/form-data">
								<div class="row">
								<div class="col-md-12">
                                    <?php if (isset($msg)){?>
                                        <div class="alert alert-primary"><?=$msg;?></div>
                                    <?php }?>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="col-md-4">Strategy Title</label>
										<div class="col-md-6">
											<input type="text" class="form-control" value="<?php echo $titel;?>" name="titel">
											<span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4">Strategy Description</label>
										<div class="col-md-6">
											<textarea type="text" class="form-control" value="" name="description"><?php echo $description;?> </textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
										
									<div class="form-group">
										<label class="col-md-4">Strategy Image</label>
										<div class="col-md-6">
											<input type="file" class="form-con trol" value ="<?php echo $bigimage;?>" name="bgimage" enctype="multipart/form-data" accept="image/*" multiple />
											<span class="form-control-feedback right" aria-hidden="true"><img src="../../images/icons/favicon.ico"> </span>
										</div>
									</div>
								</div>
							</div>
								<div class="ln_solid"></div> 
								<div class="form-group">
									<div class="col-md-9 col-md-offset-3">
									  <button type="submit" class="btn btn-primary" name="cancel">Cancel</button>
									  <button type="submit" class="btn btn-success" name="submit">Submit</button>
									</div>
								</div>									
							</form>
						</div>	
					</div>
				</div>
            </div>
              <!-- /form input mask -->
       </div>
    </div>
        
		<!-- /page content -->

        <!-- footer content -->
<?php include'template/footer.php';?>