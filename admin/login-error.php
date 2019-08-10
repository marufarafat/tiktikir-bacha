
<?php
if(isset($_SESSION['msg'])){?>
	<div class="alert alert-danger">
	<a class="close" data-dismiss="alert" href="#"></a>
 		<p><?php echo $_SESSION['msg']; unset($_SESSION['msg']);?></p>
	</div>
<?php }?>
