<?php include('C:\wamp64\www\fithub.lk\admin\partials\menu.php');  ?>


<div class="main-content">
<div class="wrapper"><h1>Manage Product</h1>
	<br/><br/>
	
	<?php
	
	if(isset($_SESSION['add']))
	{
		echo $_SESSION['add'];
		unset($_SESSION['add']);
	}
	
	
	
	
	
	
	
	?>
	
	
	
	
	
	
	
	
	
	
	<!---------------add category button--------------->
	
		<a href="<?php  echo SITEURL;  ?>admin/Add-product.php" class="btn-primary">Add Product</a>
	<br/><br/><br/>
			
			<table class="tbl-full">
			<tr>
				<th>S.N</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Action</th>
		    </tr>
				<tr>
				<td>1.</td>
				<td>Dulsara Samujith</td>
				<td>dulsarasamujith</td>
				<td>
					<a href="#" class="btn-secondary">Upadate Admin</a>
					<a href="#" class="btn-danger">Delete Admin</a>
				</td>	
			    </tr>
					<tr>
				<td>2.</td>
				<td>Dulsara Samujith</td>
				<td>dulsarasamujith</td>
				<td>
					<a href="#" class="btn-secondary">Upadate Admin</a>
					<a href="#" class="btn-danger">Delete Admin</a>
				</td>	
			    </tr>
					<tr>
				<td>3.</td>
				<td>Dulsara Samujith</td>
				<td>dulsarasamujith</td>
				<td>
					<a href="#" class="btn-secondary">Upadate Admin</a>
					<a href="#" class="btn-danger">Delete Admin</a>
				</td>	
			    </tr>
				</table>
	
	
	
	
	
	
	</div>


</div>







<?php include('C:\wamp64\www\fithub.lk\admin\partials\footer.php');  ?>