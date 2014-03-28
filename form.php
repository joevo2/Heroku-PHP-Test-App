	<?php 
		#PHP Function and connection
		include 'function.php';
		$errName = $errEmail = $errSex = NULL;
	?>
	<form action="" method="post">
		<input type="text" name="name" placeholder="Your Name">
		<span class="err">* <?php echo $errName;?> </span><br>
		<input type="text" name="address" placeholder="Your email">
		<span class="err">* <?php echo $errEmail;?> </span><br>
		<input type="radio" name="sex" value="male">Male<br>
		<input type="radio" name="sex" value="female">Female<br>
		<span class="err">* <?php echo $errSex;?> </span><br>
		<input type="submit" value="Submit"><br>
	</form>

	<?php
		if(empty($_POST['name'])) {
			$errName = "Name is required";
		}
		if (empty($_POST['email'])) {
			$errEmail = "Email is required";
		}
		if (empty($_POST['sex'])) {
			$errSex = "Please specify your gender";
		}
		else
			queryInsert($con, "test", array('name', 'address','sex'),array("$_POST[name]", "$_POST[email]","$_POST[sex]"));
	 ?>

