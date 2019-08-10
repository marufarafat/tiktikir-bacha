<?php include 'template/head-side-top-nav-ber.php';?>
<?php include 'video_upload_action.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plastic Pollution Video Zone</h3>
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
                    <h2>Upload New Video</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="vedio_upload.php" method="POST" enctype="multipart/form-data">
                      <div class="col-md-12">
                          <?php if (isset($msg)){?>
                              <div class="alert alert-primary"><?=$msg;?></div>
                          <?php }?>
						</div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Vedio title</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="title">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div>
                     
					  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3">Category</label>
							<div class="col-md-6 col-sm-12">
								<select class="select2_single form-control" tabindex="-1" name="category">
									<option value="default">Default</option>
									<option value="Tree">Pollution Video</option>
									<option value="Instrument">Land Plastic Pollution</option>
									<option value="Flower">Sea Plastic Pollution</option>
								</select>
							</div>
						</div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Video</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="link" class="form-control" name="video">
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
