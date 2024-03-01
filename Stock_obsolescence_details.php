<?php

class Stock_obsolescence_details
{

	public $conn;
 	function __construct($conn)
 	{
		$this->conn = $conn;
		require_once "../Libraries/Excel/PHPExcel.php";
		require_once 'helpers.php';
 	}
	
	public function stock_obsolescence_save($request)
	{
		$extension 			 = pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION);
		
		$status  			 = 422;
		$message  			 = "unprocessable entry";
		if($extension == 'xlsx' || $extension == 'xlx') {
			$file 			= $_FILES['file']['tmp_name'];

			$objPHPExcel 	= PHPExcel_IOFactory::load($file);
			$sheet 			= $objPHPExcel->getSheet(0);
			
			$highestRow 	= $sheet->getHighestRow();
			$highestColumn 	= $sheet->getHighestColumn();
			$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

			for($row = 2;$row<= $highestRow;$row++) {
				$val =  array();
				for ($col = 0; $col < $highestColumnIndex; $col++) {
					$cell = $sheet->getCellByColumnAndRow($col, $row);
					$val[] = $cell->getValue();
				}
				$data = array();
				$db_conn = $this->conn;
				$data['Product_Division'] = $val[0];
				$data['business_year']    = $val[1];
				$data['season_code']      = $val[2];
				$data['crop']      		  = $val[3];
				$data['actual_item']      = $val[4];
				$data['zone']    		  = $val[5];
				$data['region']    		  = $val[6];
				$data['territory']    	  = $val[7];


				$business_year_check = Get_Business_Year_Details($data,$db_conn);
				$season_check        = Get_Season_Details($data,$db_conn);
				$crop_check          = Get_Crop_Details($data,$db_conn);
				$zone_check          = Get_Zone_Details($data,$db_conn);
				$region_check        = Get_Region_Details($data,$db_conn);
				$territory_check     = Get_Territory_Details($data,$db_conn);
				$actul_item_check    = Get_actual_item_Details($data,$db_conn);

				if($business_year_check == 0) {
					$response['status']   = 403;
					$response['message']  = 'Row no '.$row.' business year is Invalid.Please enter valid year.';
					return $response; 
				} elseif ($season_check == 0) {
					$response['status']   = 403;
					$response['message']  = 'Row no '.$row.' season code is Invalid.Please enter valid season.';
					return $response; 
				} elseif ($crop_check == 0) {
					$response['status']   = 403;
					$response['message']  = 'Row no '.$row.' crop is Invalid.Please enter valid crop.';
					return $response; 
				} elseif ($zone_check == 0) {
					$response['status']   = 403;
					$response['message']  = 'Row no '.$row.' zone is Invalid.Please enter valid zone.';
					return $response; 
				} elseif ($region_check == 0) {
					$response['status']   = 403;
					$response['message']  = 'Row no '.$row.' region is Invalid.Please enter valid region.';
					return $response; 
				} elseif ($territory_check == 0) {
					$response['status']   = 403;
					$response['message']  = 'Row no '.$row.' territory is Invalid.Please enter valid territory.';
					return $response; 
				} elseif ($actul_item_check == 0) {
					$response['status']   = 403;
					$response['message']  = 'Row no '.$row.' actual item is Invalid.Please enter valid actual item.';
					return $response; 
				} else {
					if($request['stock_type'] == 'obsolescnce') {
						$exist_query = "SELECT * FROM Territory_Stock_Obsolescence WHERE product_division = '".$val[0]."' AND business_year = '".$val[1]."' AND season_code = '".$val[2]."' AND crop = '".$val[3]."' AND zone = '".$val[5]."' AND region = '".$val[6]."' AND territory = '".$val[7]."' AND actual_item = '".$val[4]."' AND stock_type = 'obsolescnce'";

						$exist_res = sqlsrv_query($this->conn,$exist_query, array(), array( "Scrollable" => 'static' ));
						$exist_count = sqlsrv_num_rows($exist_res); 

						if($exist_count == 0) {
	  						$query = "INSERT INTO Territory_Stock_Obsolescence (product_division,business_year,season_code,crop,zone,region,territory,actual_item,obsolescence_percentage,stock_type) VALUES ('".$val[0]."','".$val[1]."','".$val[2]."','".$val[3]."','".$val[5]."','".$val[6]."','".$val[7]."','".$val[4]."','".$val[8]."','".$request['stock_type']."')";
							$msg = "Stock obsolescnce created successfully.";
						} else {
							$response['status']   = 403;
							$response['message']  = 'Row no '.$row.' obsolescnce percentage is already entered.Please remove that row and import again.';
							return $response; 
						}

					} elseif ($request['stock_type'] == 'cogm') {
						$exist_query = "SELECT * FROM Territory_Stock_Obsolescence WHERE product_division = '".$val[0]."' AND business_year = '".$val[1]."' AND season_code = '".$val[2]."' AND crop = '".$val[3]."' AND zone = '".$val[5]."' AND region = '".$val[6]."' AND territory = '".$val[7]."' AND actual_item = '".$val[4]."' AND stock_type = 'cogm'";

						$exist_res   = sqlsrv_query($this->conn,$exist_query, array(), array( "Scrollable" => 'static' ));
						$exist_count = sqlsrv_num_rows($exist_res); 

						if($exist_count == 0) {
							$query = "UPDATE Territory_Stock_Obsolescence SET cogm_per_kg = '".$val[8]."',stock_type = '".$request['stock_type']."' WHERE product_division = '".$val[0]."' AND business_year = '".$val[1]."' AND season_code = '".$val[2]."' AND crop = '".$val[3]."' AND zone = '".$val[5]."' AND region = '".$val[6]."' AND territory = '".$val[7]."' AND actual_item = '".$val[4]."' AND stock_type = 'obsolescnce'";
							$msg = "Stock cogm updated successfully.";
						} else {
							$response['status']   = 403;
							$response['message']  = 'Row no '.$row.' cogm kg is already entered.Please remove that row and import again.';
							return $response; 
						}

					} elseif ($request['stock_type'] == 'logistic') {
						$exist_query = "SELECT * FROM Territory_Stock_Obsolescence WHERE product_division = '".$val[0]."' AND business_year = '".$val[1]."' AND season_code = '".$val[2]."' AND crop = '".$val[3]."' AND zone = '".$val[5]."' AND region = '".$val[6]."' AND territory = '".$val[7]."' AND actual_item = '".$val[4]."' AND stock_type = 'logistic'";

						$exist_res   = sqlsrv_query($this->conn,$exist_query, array(), array( "Scrollable" => 'static' ));
						$exist_count = sqlsrv_num_rows($exist_res); 

						if($exist_count == 0) {
							$query = "UPDATE Territory_Stock_Obsolescence SET logistic_percentage = '".$val[8]."',stock_type = '".$request['stock_type']."' WHERE product_division = '".$val[0]."' AND business_year = '".$val[1]."' AND season_code = '".$val[2]."' AND crop = '".$val[3]."' AND zone = '".$val[5]."' AND region = '".$val[6]."' AND territory = '".$val[7]."' AND actual_item = '".$val[4]."' AND stock_type = 'cogm'";
							$msg = "Stock logistic updated successfully."; 
						} else {
							$response['status']   = 403;
							$response['message']  = 'Row no '.$row.' logistic percentage is already entered.Please remove that row and import again.';
							return $response; 
						}
					}
	 				$stock_insertion = sqlsrv_query($this->conn,$query);
				}
			}

			if($stock_insertion) {
				$status  			 = 200;
				$message  			 = $msg;
			}
 
		} else {
			$message  = "Invalid file format.Only XlSX and XLS format are allowed.";
		}
		$response['status']   = $status;
		$response['message']  = $message;
		return $response; 
	}
}

?>


