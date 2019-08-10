<?php
error_reporting(0); 
if(count($logsuccessfully)>0):?>
	<div class="alert alert-success">
	<a class="close" data-dismiss="alert" href="#"></a>
 		<?php foreach($logsuccessfully as $successfull):?>
			<p><?php echo $successfull;  unset($_SESSION['$successfull']);?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
<?php header("location:index.php");?>