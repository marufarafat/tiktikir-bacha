<?php
error_reporting(0); 
if(count($successfull)>0):?>
	<div class="alert alert-success">
	<a class="close" data-dismiss="alert" href="#"></a>
 		<?php foreach($successfull as $successfull):?>
			<p><?php echo $successfull; unset($_SESSION['$successfull']);?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>
<?php header("location:index.php");?>