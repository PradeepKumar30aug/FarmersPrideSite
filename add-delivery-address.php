<?php 
include('conn.php');
if(!empty($_POST['action']))
{
	$action = $_POST['action'];
	if($action=="ADD"){
		if(!empty($_POST['areaname']) || !empty($_POST['areapincode']) || !empty($_POST['deliverystatus']))
		{
			$areaname = $_POST['areaname'];
			$pincode = $_POST['areapincode'];
			$status = $_POST['deliverystatus'];
			$SqlQuery = "SELECT * from `delivery_location_verification` WHERE pincode='$pincode';";
			$check=mysqli_query($con,$SqlQuery);
			$checkrows=mysqli_num_rows($check);
			if($checkrows>0) {
				echo "already";
			} else {
			$sql="INSERT INTO `delivery_location_verification` (`pincode`, `name`, `staus`) VALUES ('$pincode','$areaname','$status')";
			$result=mysqli_query($con,$sql);
			if($result)
			{
				$status= true;
			} else {
				$status = false;
			}
			if($status)
			{
				echo "success";
			} else 
			{
				echo "invalid";
			}
		}
		}
	} // end of ADD Action
	if($action=="EDIT")
	{
		// code to update data from form... 
		$newname = $_POST['updateareaname'];
		$areaID = $_POST['areaID'];
		$newPinCode = $_POST['updatepincode'];
		$newstatus = $_POST['updatedeliverystatus'];
		$sql = "UPDATE `delivery_location_verification` SET `name`='$newname',`pincode`='$newPinCode',`staus`='$newstatus' WHERE id='$areaID'";
		if (mysqli_query($con, $sql)) {
		echo "success";
		} else {
		echo "invalid. ";
		}

	} // end of Edit Action ... 
	if($action=="DEL"){
		$recordID = $_POST['id'];
		$sql = "DELETE FROM `delivery_location_verification` WHERE id=".$recordID.";";
		if (mysqli_query($con, $sql)) {
			echo "Success";
		} else {
			echo "fail". mysqli_error($con);
		}
	} // end of delete command 
	if($action=="updateStatus"){
		$recordID = $_POST['id'];
		$statusdata = $_POST['status'];
		$sql = "UPDATE `delivery_location_verification` SET `staus`='$statusdata' WHERE id='$recordID'";
		if (mysqli_query($con, $sql)) {
		echo "Success";
		} else {
		echo "invalid. ";
		}
	}
	
}
?>