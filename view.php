<html>
<head>
<body>
<center><table border='1'>
<thead>
		<th>name</th>
		<th>password</th>
		<th>Email</th>
		<th>Gender</th>
</thead>
<tbody>
<?php
$id=$_GET['id'];
$conn=mysqli_connect("localhost","root","","samarth");
$re=mysqli_query($conn,"select * from credit where id='$id'");
while($de=mysqli_fetch_assoc($re))
{
			echo'<tr>
			<td>'.$de['name'].'</td>
            <td>'.$de['email'].'</td>
            <td>'.$de['current credit'].'</td>
            <td>'.$de['DOB'].'</td>
            </tr>';
}
?>

  		</tbody>
  		</table>
  		<form action="tranfer.php" method="post">
  		Enter Credit<input type="number" name="credit"><br><br>
  		<input type ="submit" value="transfer" name="submit">

   
  
		</body>
  		</head>
  		</html>		
 