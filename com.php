<?php
$id=$_GET['id'];
$credit=$_GET['credit'];
$amt=$_GET['amt'];
$bal=(int)$credit+(int)$amt;
$c=mysqli_connect("localhost","root","","samarth");
$qry=mysqli_query($c,"UPDATE `credit` SET `current credit`='$bal' WHERE id='$id'");
if($qry==true)
{echo"
<script>
alert('sucessfully edited');
window.location.href='home.php';
</script>";
}
else
{
	echo"
<script>
alert('failed');
 </script>";
}

?>
