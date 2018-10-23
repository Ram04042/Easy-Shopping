




 <?php
 require "connect.php";
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$conn = mysqli_connect("localhost", "root", "", "easy_shopping");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
// $productname = isset($conn,$_POST['productname']);
// $quantity = isset($conn,$_POST['quantity']); 
// $price = isset($conn,$_POST['price']); 
// $upc = isset($conn,$_POST['upc']); 
$productname = $_POST['productname'];
$quantity = $_POST['quantity']; 
$price = $_POST['price']; 
$upc = $_POST['upc']; 
echo "<script>alert('".$productname.$quantity.$price.$upc."');</script>";
// Attempt insert query execution
$sql = "INSERT INTO product_details(upc, product_name, stock, price) VALUES ('$upc', '$productname', '$quantity', '$price')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
echo $sql;
?> 

