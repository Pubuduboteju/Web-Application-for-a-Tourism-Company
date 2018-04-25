<?php
session_start();

$connect = mysqli_connect("localhost", "root", "", "tourism");

include('header.php')
?>

<form action="" method="post" style="align-content: center; height: 300px; width: 400px; margin-right: auto; margin-left: auto;">

<h3>Login to the Admin Page</h3>
<br>
<div class="form-group ">
  <label for="example-text-input" class="col-2 col-form-label">Admin Name</label>
  <div class="col-10">
    <input class="form-control" type="text" name="admin_name" placeholder="Admin" id="example-text-input">
  </div>
</div>
<div class="form-group ">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password" name="password" placeholder="Password" id="example-password-input">
  </div>
</div>
<p><input type="submit" name="submit1" value="Log in"></p>
</form>

	<?php
	if(isset($_POST["submit1"]))
	{
	
	
	$res=mysqli_query($connect,"select * from admin_login where admin_name='$_POST[admin_name]' && password='$_POST[password]'");
	while($row=mysqli_fetch_array($res))
	{
	$_SESSION["admin"]=$row["username"];
	$_SESSION['logged_in'] = true;
	?>
	<script type="text/javascript">
	window.location="../index.php";
	</script>
	<?php	
	}
	
	
	
	
	}
	
	?>
    








<?php
include('footer.php')


?>