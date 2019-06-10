<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><center>users</center></h1>
	<?php
	$co=mysqli_connect("localhost","root","","samarth");
	$q=mysqli_query($co,"select * from credit");
      while($d=mysqli_fetch_assoc($q))
	{
			echo'<br><br><center><a href="view.php?id='.$d['id'].'" >'.$d['name'].'</a></center><br>';
	}


	?>

</body>
</html>