<?php
function delete_recipe($id){
	$res=array();
    $sql = "DELETE FROM default_recipes WHERE drecipe_id='$id'";
	$query=mysqli_query($conn,$sql);
	if(mysqli_affected_rows($conn)>0){
		$res['bool']=true;
	}else{
		$res['bool']=false;
	}
	return $res;
}
?>