
<?php
	require_once "../../dbconnect.php";
	session_start();
	$name			= mysqli_real_escape_string($conn, $_POST['pname']);
	$id				= mysqli_real_escape_string($conn, $_POST['proid']);
	$price			= mysqli_real_escape_string($conn, $_POST['price']);
	$quantity		= mysqli_real_escape_string($conn, $_POST['quantity']);
	$category		= mysqli_real_escape_string($conn, $_POST['category']);
	$description	= mysqli_real_escape_string($conn, $_POST['description']);
	$product_image= $_FILES['bgimage']['name'];  
	$product_tmp = $_FILES['bgimage']['tmp_name'];
	$errors = array();
	$successfull = array();
	error_reporting (0);
	
	if(isset($_POST['submit'])) {
		
		if (empty($name)) {
			$_SESSION['msg'] = "Product Name can't blank";
		 }
		if (empty($description)) {
			$_SESSION['msg'] = "Description can't blank";
		 }
		 if (empty($quantity)) {
			$_SESSION['msg'] = "Quantity can't blank";
		 }
		 if (preg_match("/^[a-zA-Z ]*$/",$quantity)) {
				$_SESSION['msg'] = "Quantity can't be letter";
			 }
		if (preg_match("/^[a-zA-Z ]*$/",$price)) {
				$_SESSION['msg'] = "Price can't be letter";
			 }
		if (empty($price)) {
				$_SESSION['msg'] = "Price can't be blank";
			 }
		 
		if($_POST['category'] == "default"){
            $_SESSION['msg'] ="Please select One option from Category";
			 }			 		 			 
		   						
		if(!isset($_SESSION['msg'])){
			if(is_uploaded_file($product_tmp)){
				move_uploaded_file($product_tmp,"../../img/product/$product_image");

				 $sql="UPDATE `product` SET
				 `product_type`='$category',
				 `name`='$name',
				 `price`='$price',
				 `quantity`='$quantity', 
				 `description`='$description', 
				 `image`='$product_image' WHERE product_id='$id'";

				$run=mysqli_query($conn,$sql);

				if ($run){
                    $_SESSION['msg'] = "Product Updated Successfully";
                    echo "<script>window.location='product_update.php?id=".$id."'</script>";
				}else{
                    $_SESSION['msg'] = "Product Not Updated";
                    echo "<script>window.location='product_update.php?id=".$id."'</script>";
                }

			}else{
				$sql="UPDATE `product` SET
				 `product_type`='$category',
				 `name`='$name',
				 `price`='$price',
				 `quantity`='$quantity', 
				 `description`='$description' 
				  WHERE product_id='$id'";
                $run=mysqli_query($conn,$sql);
                if ($run){
                    $_SESSION['msg'] = "Product Updated Successfully";
                    echo "<script>window.location='product_update.php?id=".$id."'</script>";
                }else{
                    $_SESSION['msg'] = "Product Not Updated";
                    echo "<script>window.location='product_update.php?id=".$id."'</script>";
                }

			}

		}else{
            echo "<script>window.location='product_update.php?id=".$id."'</script>";
        }
	}

?>
