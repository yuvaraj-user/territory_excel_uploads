<?php
include '../auto_load.php';

include 'Discount_budget_details.php';
include 'Transfer_price_details.php';
include 'Stock_obsolescence_details.php';
include 'Logistics_details.php';
include 'Nrv_details.php';

$discount       = new Discount_budget_details($conn);
$transfer_price = new Transfer_price_details($conn);
$stock          = new Stock_obsolescence_details($conn);
$logistics      = new Logistics_details($conn);
$nrv            = new Nrv_details($conn);


if(isset($_POST) && $_POST['Action']){
	if($_POST['Action'] =='discount_budget_save'){
		$discount_save = $discount->discount_budget_save($_POST);
		echo json_encode($discount_save);	
	} elseif ($_POST['Action'] =='transfer_price_save') {
		$transfer_price_save = $transfer_price->transfer_price_save($_POST);
		echo json_encode($transfer_price_save);	
	} elseif ($_POST['Action'] =='stock_obsolescence_save') {
		$stock_obsolescence_save = $stock->stock_obsolescence_save($_POST);
		echo json_encode($stock_obsolescence_save);	
	} elseif ($_POST['Action'] =='logistics_save') {
		$logistics_save = $logistics->logistics_save($_POST);
		echo json_encode($logistics_save);	
	} elseif ($_POST['Action'] =='nrv_save') {
		$nrv_save = $nrv->nrv_save($_POST);
		echo json_encode($nrv_save);	
	}
}

?>