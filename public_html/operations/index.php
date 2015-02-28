<?php 
$page_style_href = '../css/style.css';
$page_style_href = '../css/style.css';
include '../includes/header.php';

//MYSQL Connect
$qbo = mysqli_connect('mce130-db1.nexcess.net', 'chalkfly_magento', 'PixieSquawsCajoleBlink68');
mysqli_select_db($qbo, 'chalkfly_fartfactory');

$link = mysqli_connect('mce130-db1.nexcess.net', 'chalkfly_magento', 'PixieSquawsCajoleBlink68');
mysqli_select_db($link, 'chalkfly_magento');

// Post order Id to self
 if(isset($_POST['orderId']))
{
    $orderId = $_POST['name'];
}

// Find the total cost by order ID
$result = mysqli_query($qbo, "SELECT order_id, SUM(amount) AS totalCost FROM vendor_transaction_detail WHERE order_id='$orderId';");
$vendorCost = mysqli_fetch_array($result);

//find the total amount paid
$result = mysqli_query($link, "SELECT total_paid FROM sales_flat_order WHERE increment_id='$orderId';");
$saleSubtotal = mysqli_fetch_array($result);

//total amount of tax collected
$result = mysqli_query($link, "SELECT tax_amount FROM sales_flat_order WHERE increment_id='$orderId';");
$saleTaxAmount = mysqli_fetch_array($result);


$totalCost =  $vendorCost['totalCost'] ;
$totalSale =  number_format($saleSubtotal['total_paid'] - $saleTaxAmount['tax_amount'],2);
$profit = number_format($totalSale - $totalCost,2);
$margin = number_format($profit / $totalSale * 100,0) . "%";

$query = mysqli_query($qbo, "SELECT * FROM vendor_transaction_detail WHERE date BETWEEN '2014-04-01' AND '2014-04-23';");
// $vendorTable = mysqli_fetch_array($result);


// $rows = array();
// while ($row = mysqli_fetch_array($query)) {
//     $rows[] = $row;
// }
// echo "<pre>";
// print_r($rows);
// echo "</pre>";
// echo $rows[1][id];

	// DISPLAY TABLE order id / po number
	Print "<table border cellpadding=1>"; 
	Print " <th>Vendor</th> <th>Date</th> <th>Transaction Type</th> <th>Invoice ID</th> <th>Order ID</th> <th>Account</th> <th>Amount</th>";
	 while($info = mysqli_fetch_array( $query )) 
	 { 
	Print "<tr>"; 
	 // Print "<td>".$info['id'] . "</td> "; 
	Print "<td>".$info['vendor'] . "</td> ";
	Print "<td>".$info['date'] . "</td> ";
	Print "<td>".$info['transaction_type'] . "</td> ";
	Print "<td>".$info['invoice_id'] . "</td> ";
	// Print "<td>".$info['posting'] . "</td> ";
	Print "<td>".$info['order_id'] . "</td> ";
	Print "<td>".$info['account'] . "</td> ";
	Print " <td>".$info['amount'] . " </td></tr>"; 
	} 
	Print "</table>"; 
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1>Margin by Order Number</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			    <input type="text" name="name"><br>
			    <input type="submit" name="orderId" value="Submit"><br>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<?php if(isset($_POST['orderId'])) { ?>
				<table class="table">
					<tr>
						<th>Order ID</th>
						<th>Sale</th>
						<th>Cost</th>
						<th>Profit</th>
						<th>Margin</th>
					</tr>
					<tr>
						<td><?php echo $orderId ?></td>
						<td><?php echo "$" . $totalSale ?></td>
						<td><?php echo "$" . $totalCost ?></td>
						<td><?php echo "$" . $profit ?></td>
						<td><?php echo $margin ?></td>
					</tr>
				</table>
			<?php } ?>
		</div>
	</div>
</div> <!--container-->


</body>
</html>