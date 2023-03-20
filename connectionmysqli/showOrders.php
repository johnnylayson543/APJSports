<?php
include "connectionsqli.php";


$sql = "select * from order";  // $sql var to do select query
$qryResult = mysqli_query($conn, $sql);  // $qry the result with the connection


// If the results were found or not 0
if (mysqli_num_rows($qryResult) > 0)
{
    // Fetch and echo the sql query results
    while ($row = mysqli_fetch_assoc($qryResult)) {

        echo "Order id = " . $row["orderID"] . " Price = " . $row["price"] . " Order Status = " . $row["orderStatus"] . " Customer ID = " . $row["Customer_customerID"] . " Transaction ID = " . $row["Transactions_transactionID"] . "<br><br>";
    }
}
else
{
    echo '0 results found';  // Print 0 found
}


mysqli_close($conn);   // Close the sql connection when done
