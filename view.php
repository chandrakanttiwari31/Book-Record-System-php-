<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'dt');
$q="select * from book";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
</head>
<style>
tr{color:#FF338A;}
th{color:blue;}
td{color:black;}
</style>
<title>
view form</title>
</head>
<body>
<h1>BOOK RECORD SYSTEM OF KALANI COLLEGE</h1>
<table border="1" style="background-color:pink">
<tr>
<th>Id</th>
<th>NAME</th>
<th>PRICE</th>
<th>AUTHOR</th>
<th>DATE</th>
<th>CLASS</th>
<th>NO OF BOOKS</th>
</tr>
<?php 
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result)
?>
	<tr>
	<td><?php echo $i;  ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['price'];  ?></td>
	<td><?php echo $row['author']; ?></td>
	<td><?php echo $row['Date']; ?></td>
	<td><?php echo $row['class']; ?></td>
	<td><?php echo $row['quantity']; ?></td>
	</tr>
<?php	
}	
?>
</table>
<h1>go to home page<a href="home.php">click here</a></h1></br>
<hr>
</body>
</html>