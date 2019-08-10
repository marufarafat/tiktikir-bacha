<?php
error_reporting(0); 
if(count($errors)>0):?>
	<div class="alert alert-danger">
	<a class="close" data-dismiss="alert" href="#"></a>
 		<?php foreach($errors as $error):?>
			<p><?php echo $error;?></p>
		<?php endforeach ?>
	</div>
<?php endif ?>