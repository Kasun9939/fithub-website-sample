<?php include('C:\wamp64\www\fithub.lk\admin\partials\menu.php'); ?>


<div class="main-content">
<div class="wrapper">
	<h1>Add Admin</h1>
	<br/><br/>
	
	
	<?php
	
	if(isset($_SESSION['add']))//checking session is set of not 
     {
		echo $_SESSION['add'];//display session message if set
		unset($_SESSION['add']);// remove session messege
			  
		
	  }
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	<form action="" method="POST">
	<table class="tbl-30">
		<tr>
		<td>Full Name:</td>
			<td><input type="text"  name="full_name" placeholder="Enter your name"></td>
		
		
</tr>
		<tr>
		<td>Userame:</td>
			<td>
				<input type="text"  name="username" placeholder="Enter your Username"></td>
		
		
</tr>
		<tr>
		<td>Password:</td>
			<td>
				<input type="password"  name="password" placeholder="Enter your Password"></td>
		
		
</tr>
	
		<tr>
		<td colspan="2">
			<input type="submit" name="submit" value="Add Admin" class="btn-secondary">
			</td>
	     </tr>
	</table>	
</form>
</div>
</div>







<?php include('C:\wamp64\www\fithub.lk\admin\partials\footer.php'); ?>



<?php 

//value save data base



//check whether the button submit button clicked or not

if(isset($_POST['submit']))
{
	//button clicked
	//echo "Button Clicked";
	
	//get data our form
	 $full_name = $_POST['full_name'];
	 $username = $_POST['username'];
	 $password = md5($_POST['password']); //password encription with md5
	
	 //2.sql query save database
	
	$sql = "INSERT INTO tbl_admin SET
	       full_name = '$full_name',
		   username = '$username',
		   password = '$password'
		   
	
	";
	
	//3. executing query and saving data into databse
	$res = mysqli_query($conn,$sql)or die(mysqli_error());
	
	//4. check whether the (query is executed) data is inserted or not  and display appropriate message
	
	if($res==TRUE)
	{
	   	// data inserted
		//echo "Data Inserted";
		//create a session display message
		$_SESSION['add'] = "Admin Added Sucessfully";
		//redirect page
		header("location:".SITEURL.'../admin/Manage-admin.php');
	}
	else
	{
		// failed to insered data
		//echo "Fail to inserted data";
		//create a session display message
		$_SESSION['add'] = "fail to add admin";
		//redirect page
		header("location:".SITEURL.'../fithub.lk/admin/Add-admin.php');
	}



}

?>
























