<!DOCTYPE html>
<html>
	<head>
		<title>CP Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
		<meta name="viewport" content="width=device-width, user-scalable=no">
        <style>
            .admin {
                width: 900px;
                margin: 0 auto;
            }
            .col-1 {
                max-width: 200px;
                min-height: 300px;
                border: 1px solid grey;
                padding: 0px 20px;
                margin: 10px;
                background-color: rgba(255,255,255,0.7);
                display: block;
            }
        </style>
	</head>
	<body>
		<a href="../index.php"><h1>CarPool</h1></a>
		<h2>Admin Panel</h2>
        <div class="admin">
            <section class="col-1">
                <h3>Feedback</h3>
                <form action="" method="post">
                  <input type="number" name="numRow" value="5">
                  <input type="submit" value="Submit">
                </form>
                <?php
                    require '../modal/function.php';
                    $table = "feedback";
                    if (isset($_POST['numRow'])) {
                        $numRow = $_POST['numRow'];
                    } else {
                        $numRow = 5;
                    }
                    queryDisplay(queryAll($table),$numRow);
                ?>
            </section>
            <section class="col-1">
                <h3>Google Analytics</h3>
            </section>
            <section class="col-1">
                <h3>Feedback</h3>
            </section>
        </div>
	</body>
</html>
