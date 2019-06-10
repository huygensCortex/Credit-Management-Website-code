
<?php
    if(isset($_POST['submit'])){
	$c=$_POST['credit'];
	echo"<center>select the user";
	$conn=mysqli_connect("localhost","root","","samarth");
	$q=mysqli_query($conn,"select * from credit");
      while($d=mysqli_fetch_assoc($q))
	{
			echo'<center><a  href="com.php?id='.$d['id'].'&credit='.$d['current credit'].'&amt='.$c.'" >'.$d['name'].'</a></center><br>';
	}

		}
    ?>
