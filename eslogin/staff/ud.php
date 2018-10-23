<html>
<head>
</head>
<body>

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'easy_shopping';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db );
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}

$query = "SELECT * FROM product_details";
$result = $conn->query($query);
?>



<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>

<?php

while($row = mysqli_fetch_array($result))
            {

$upc = $row['upc'];
$product_name = $row['product_name'];
$stock = $row['stock'];
$price = $row['price'];

?>


<form method="post" action="<?php $_PHP_SELF ?>">
<td width="100"></td>

</tr>
<tr>
<td width="100">upc</td>
<td><input name="upc" type="text" value="<?=$upc?>"></td>
</tr>
<tr>
<td width="100">product name</td>
<td><input name="product_name" type="text" value="<?=$product_name?>"></td>
</tr>
<tr>
<td width="100">stock</td>
<td><input name="stock" type="text" value="<?=$stock?>"></td>
</tr>
<tr>
<td width="100">price</td>
<td><input name="price" type="text" value="<?=$price?>"></td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="update" type="submit" id="update" value="Update">
</td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="delete" type="submit" id="delete" value="delete">
</td>
</tr>

</form>
<?php } ?>


</table>




<?php

if(isset($_POST['update']))
{


$upc = $_POST['upc'];
$product_name = $_POST['product_name'];
$stock = $_POST['stock'];
$price = $_POST['price'];


$sql = "UPDATE product_details SET upc = '".$upc."',
								product_name = '". $product_name."',
							   stock = '".$stock."',
							    price = '".$price."'
		   WHERE product_details.upc = '".$upc."'";

$retval = $conn->query($sql);
/////$retval = mysqli_query(  $conn ,$sql);


if(! $retval )
{
  die('Could not update data: ' . mysqli_error());
}
echo "Updated data successfully\n";
header("refresh: 3;");

}


?>


<?php

if(isset($_POST['delete']))
{


$upc = $_POST['upc'];



$sql = "DELETE FROM `product_details` WHERE `product_details`.`upc` = $upc";

$retval = $conn->query($sql);
/////$retval = mysqli_query(  $conn ,$sql);


if(! $retval )
{
  die('Could not update data: ' . mysqli_error());
}
echo "Updated data successfully\n";
header("refresh: 3;");

}


?>
</body>
</html>
