<?php
include('includes/config.php');
if(!empty($_POST["yearid"])) 
{
 $id=intval($_POST['yearid']);
 if(!is_numeric($id)){
 
 	echo htmlentities("invalid industryid");exit;
 }
 else{
 $stmt = mysqli_query($con,"SELECT year FROM year WHERE departmentid ='$id'");
 ?><option selected="selected">Select Year </option><?php
 while($row=mysqli_fetch_array($stmt))
 {
  ?>
  <option value="<?php echo htmlentities($row['year']); ?>"><?php echo htmlentities($row['year']); ?></option>
  <?php
 }
}

}
?>