	<?php 
		#PHP Function and connection
		include 'function.php';

		$errName = $errEmail = $errSex = NULL;
	?>
	<form action="" method="post">
		<input class="form" type="text" name="name" placeholder="Your Name">
		<span class="err">* <?php echo $errName;?> </span><br>
		<input class="form" type="text" name="email" placeholder="Your email">
		<span class="err">* <?php echo $errEmail;?> </span><br>
		<input type="radio" name="sex" value="Male">Male<br>
		<input type="radio" name="sex" value="Female">Female<br>
		<span class="err">* <?php echo $errSex;?> </span><br>
		<input class="btn" type="submit" value="Submit"><br>
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
			queryInsert($con, $table, array('name', 'email','sex'),array("$_POST[name]", "$_POST[email]","$_POST[sex]"));
	 ?>

