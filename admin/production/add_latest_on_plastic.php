<?php include 'template/head-side-top-nav-ber.php';?>
<?php include 'add_package_action.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Latest On Plastic</h3>
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
              <div class="col-md- col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Latest On Plastic</h2>
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
                    <br />
                    <form class="form-horizontal form-label-left" action="add_service_package.php" method="POST" enctype="multipart/form-data">
					<div class="col-md-12">
                        <?php if (isset($msg)){?>
                            <div class="alert alert-primary"><?=$msg;?></div>
                        <?php }?>
					</div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Title</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="package">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
					 
					  
										  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Image</label>
                        <div class="col-md-6 col-sm-8 col-xs-6">
                          <input type="file" class="form-control" name="image">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>								
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>
                    </form>
					</div>
                </div>
              </div>
              <!-- /form input mask -->
           </div>
        </div>
        </div>
		<!-- /page content -->

<?php include'template/footer.php';?>
