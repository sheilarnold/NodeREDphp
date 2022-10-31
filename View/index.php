<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
	/*echo "This is a warning error";*/
	include '../DAO/LeituraDao.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Leituras registradas</title>
		
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="../Resources/index.js"></script>
		
	</head>
	<body>

	   <br>
	   <div id="list_leituras">
	   <table border="1">
			<thead>
				<td>ID</td>
				<td>Valor</td>
			</thead>
			<tbody>
			   
					<?php
						$obj = new LeituraDao();
						$dados= $obj->listAll();
						
						foreach ($dados as $dado) {
							echo "<tr>";
								echo "<td>".$dado->id."</td>";
								echo "<td>".$dado->valor."</td>";
							echo "</tr>";
						}
					?>
			   
		   </tbody>
		   </div>
	   </table>
	</body>
</html>


