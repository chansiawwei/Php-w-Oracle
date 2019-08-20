<?php
  if(isset($_GET['addcustomer'])) {
    addcustomer();
}

function addcustomer(){
    $conn=oci_connect("username","password","feenix-oracle.swin.edu.au:1521/DMS");

    echo "<h3>Adding Customer....</h3>";
    $custid = htmlentities($_GET['custid']);
    $custname = htmlentities($_GET['custname']);
            /* The call */
$sql = "CALL ADD_CUST_TO_DB(:PCUSTID,:PCUSTNAME)";

/* Parse connection and sql */
$foo = oci_parse($conn, $sql);

/* Binding Parameters */
oci_bind_by_name($foo, ':PCUSTID', $custid) ;
oci_bind_by_name($foo, ':PCUSTNAME', $custname) ;

/* Execute */
$res = oci_execute($foo);

/* Get the output on the screen */
print_r($res, true);
oci_close($conn);

   
}

?>