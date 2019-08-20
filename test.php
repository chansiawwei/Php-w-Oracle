<html>
<head><title>Oracle demo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
<div class="topnav">
  <a class="active" href="#addcust">Add Customer</a>
  <a href="#news">Delete All Customer</a>
  <a href="#contact">Add Product</a>
  <a href="#about">Delete All Product</a>
  <a href="#about">Get Customer</a>
  <a href="#about">Update Customer</a>
  <a href="#about">Get Product</a>
  <a href="#about">Update Product</a>
  <a href="#about">Update Customers' Status</a>
  <a href="#about">Add Simple Sales</a>
  <a href="#about">Sum Customers' SalesYTD</a>
</div>
<br/>

<form action="ajax.php" method="get">
  Customer ID:<br>
  <input type="text" name="custid" >
  <br>
  Customer Name:<br>
  <input type="text" name="custname" >
  <br><br>
  <input type="submit" class="button" name="addcustomer" value="addcustomer">
</form> 

    <?php 
    $conn=oci_connect("s101742578","Siawwei98#","feenix-oracle.swin.edu.au:1521/DMS");
    If (!$conn)
        echo 'Failed to connect to Oracle';
    else
        echo 'Succesfully connected with Oracle DB';
 

?>

</body>
</html>


