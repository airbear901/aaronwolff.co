<?php
//Teacher Queries


function teacherCount($startDate,$endDate) {

	$link = mysqli_connect("mce130-db1-int", "chalkfly_magento", "PixieSquawsCajoleBlink68") or die(mysqli_error()); 
		mysqli_select_db($link, "chalkfly_magento") or die(mysqli_error());

	$result = mysqli_query($link, "SELECT COUNT(customer_id) AS TeacherCount FROM enterprise_customersegment_customer WHERE segment_id=1;");
	$teacherCount = mysqli_fetch_array( $result );

	echo $teacherCount['TeacherCount'];
}



function givebackSentCount ($startDate,$endDate) {

	$link = mysqli_connect("mce130-db1-int", "chalkfly_magento", "PixieSquawsCajoleBlink68") or die(mysqli_error()); 
	mysqli_select_db($link, "chalkfly_magento") or die(mysqli_error());

	$result = mysqli_query($link,"SELECT COUNT(balance_id) AS TeacherGivenOutCount FROM enterprise_customerbalance_history WHERE action IN(1,2)
AND (updated_at BETWEEN '{$startDate}' AND '{$endDate}');");
	$givebackSentCount = mysqli_fetch_array( $result );

	echo $givebackSentCount['TeacherGivenOutCount'];
}

function teacherRedemptionCount ($startDate,$endDate) {

	$link = mysqli_connect("mce130-db1-int", "chalkfly_magento", "PixieSquawsCajoleBlink68") or die(mysqli_error()); 
	mysqli_select_db($link, "chalkfly_magento") or die(mysqli_error());

	$result = mysqli_query($link,"SELECT COUNT(balance_id) AS TeacherRedeemCount FROM enterprise_customerbalance_history 
WHERE action=3 AND updated_at BETWEEN '{$startDate}' AND '{$endDate}';");
	$teacherRedemptionCount = mysqli_fetch_array( $result );

	echo $teacherRedemptionCount['TeacherRedeemCount'];

}

function teacherAmountGivenOut ($startDate,$endDate) {

	$link = mysqli_connect("mce130-db1-int", "chalkfly_magento", "PixieSquawsCajoleBlink68") or die(mysqli_error()); 
	mysqli_select_db($link, "chalkfly_magento") or die(mysqli_error());

	$result = mysqli_query($link,"SELECT SUM(balance_delta) AS giveBackGivenOut FROM enterprise_customerbalance_history
WHERE (updated_at BETWEEN '$startDate' AND '$endDate')
AND (action IN(1,2));");
	$teacherAmountGivenOut = mysqli_fetch_array( $result );

	echo "$" . number_format($teacherAmountGivenOut['giveBackGivenOut'],0);

}

function teacherAmountRedeemed ($startDate,$endDate) {

	$link = mysqli_connect("mce130-db1-int", "chalkfly_magento", "PixieSquawsCajoleBlink68") or die(mysqli_error()); 
	mysqli_select_db($link, "chalkfly_magento") or die(mysqli_error());

	$result = mysqli_query($link,"SELECT SUM(balance_delta) AS giveBackRedeemed FROM enterprise_customerbalance_history WHERE (updated_at BETWEEN '$startDate' AND '$endDate') AND (action = 3);");
	$teacherAmountRedeemed = mysqli_fetch_array( $result );

	echo "$" . number_format($teacherAmountRedeemed['giveBackRedeemed'],0);

}


	

?>