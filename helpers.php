<?php
 
// function headers_data()
// {
// 	$product_division = "SELECT DISTINCT Sales_Org FROM Master_Season";
// 	$business_year    = "SELECT DISTINCT Business_Year FROM Master_Season";
// 	$season_code      = "SELECT DISTINCT Season_Code FROM Master_Season";
// 	$crop             = "SELECT DISTINCT Season_Code FROM Master_Season";	
// } 
 // include '../auto_load.php';


  function Get_Business_Year_Details($User_Input=array(),$conn)
  {
  	// echo "<pre>";print_r($User_Input);exit;
    $Product_Division = $User_Input['Product_Division'];
    $b_year           = $User_Input['business_year'];
    $Result=array();
    $Sql="SELECT DISTINCT Business_Year FROM Master_Season where Sales_Org COLLATE Latin1_General_CS_AS = '".@$Product_Division."' and Business_Year = '".$b_year."'";
    $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
    $result = sqlsrv_num_rows($Sql_Connection);
    return $result;
  }



   function Get_Season_Details($User_Input=array(),$conn)
  {
    $Product_Division = $User_Input['Product_Division'];
    $b_year           = $User_Input['business_year'];
    $s_code           = $User_Input['season_code'];
    $Result=array();
    $Sql="SELECT DISTINCT Season_Code FROM Master_Season where Sales_Org COLLATE Latin1_General_CS_AS = '".$Product_Division."' and Business_Year = '".$b_year."' and Season_Code COLLATE Latin1_General_CS_AS = '".$s_code."'";
    $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
    $result = sqlsrv_num_rows($Sql_Connection);
    return $result;
  }

   function Get_Crop_Details($User_Input=array(),$conn)
  {
    $Product_Division   = $User_Input['Product_Division'];
    $crop_code		    = $User_Input['crop'];
    if($Product_Division == 'CT01') {
    	$Product_Division = 'COT';
    } elseif ($Product_Division == 'FC01') {
    	$Product_Division = 'FC';
    } elseif($Product_Division == 'FR01') {
    	$Product_Division = 'FO';
    }
    $Result=array();
    $Sql="SELECT DISTINCT CropCode FROM Master_Stock_Prod_2_Crop where ProductDivionCode = '".$Product_Division."' and CropCode = '".$crop_code."' and Record_Status = '1'";
    $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
    $result = sqlsrv_num_rows($Sql_Connection);
    return $result;
  }

   function Get_actual_item_Details($User_Input=array(),$conn)
  {
    $Product_Division = $User_Input['Product_Division'];
    $crop_code		  = $User_Input['crop'];
    $actual_item       = $User_Input['actual_item'];    

    if($Product_Division == 'CT01') {
    	$Product_Division = 'COT';
    } elseif ($Product_Division == 'FC01') {
    	$Product_Division = 'FC';
    } elseif($Product_Division == 'FR01') {
    	$Product_Division = 'FO';
    }
    $Result = array();
    $Sql    = "SELECT DISTINCT VarietyCode FROM Master_Stock_Prod_4_Product LEFT JOIN Master_Stock_Prod_2_Crop ON Master_Stock_Prod_2_Crop.CropCode = Master_Stock_Prod_4_Product.Division WHERE Master_Stock_Prod_2_Crop.Record_Status='1' AND Master_Stock_Prod_4_Product.VarietyCode IS NOT NULL AND Master_Stock_Prod_2_Crop.ProductDivionCode = '".$Product_Division."' AND Master_Stock_Prod_2_Crop.CropCode = '".$crop_code."' AND Master_Stock_Prod_4_Product.VarietyCode = '".$actual_item."'";
    $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
    $result = sqlsrv_num_rows($Sql_Connection);
    return $result;
  }

   function Get_Zone_Details($User_Input=array(),$conn)
  {
    $Product_Division  = $User_Input['Product_Division'];
    $zone    		   = $User_Input['zone'];
	
    $Result  = array();
    $Sql     = "SELECT DISTINCT ZONE_CODE FROM ZONE_MASTER where TYPE = '".$Product_Division."' and ZONE_CODE = '".$zone."' and ZONE_CODE IS NOT NULL";
    $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
    $result = sqlsrv_num_rows($Sql_Connection);
    return $result;
  }

   function Get_Region_Details($User_Input=array(),$conn)
  {
    $Product_Division  = $User_Input['Product_Division'];
    $zone    		   = $User_Input['zone'];
    $region    		   = $User_Input['region'];
	
	$Result=array();

	$Sql="SELECT DISTINCT REG_MASTER.REG_CODE FROM ZONE_MASTER 
	 LEFT JOIN TRZ_Mapping ON TRZ_Mapping.ZONE_CODE=ZONE_MASTER.ZONE_CODE AND TRZ_Mapping.TYPE=ZONE_MASTER.TYPE
	 LEFT JOIN REG_MASTER ON REG_MASTER.REG_CODE=TRZ_Mapping.REGION AND REG_MASTER.TYPE=TRZ_Mapping.TYPE 
	 LEFT JOIN TER_MASTER ON TER_MASTER.TE_CODE=TRZ_Mapping.TER_CODE AND TER_MASTER.TYPE=TRZ_Mapping.TYPE
	 where ZONE_MASTER.TYPE = '".$Product_Division."' and ZONE_MASTER.ZONE_CODE = '".$zone."' and ZONE_MASTER.ZONE_CODE IS NOT NULL
	 and REG_MASTER.REG_CODE = '".$region."' and REG_MASTER.REG_CODE IS NOT NULL and REG_MASTER.TYPE = '".$Product_Division."'";

	 $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
	 $result = sqlsrv_num_rows($Sql_Connection);
	 return $result;
  }

   function Get_Territory_Details($User_Input=array(),$conn)
  {
    $Product_Division  = $User_Input['Product_Division'];
    $zone    		   = $User_Input['zone'];
    $region    		   = $User_Input['region'];
    $territory    	   = $User_Input['territory'];    
	
    $Result  = array();

     $Sql  =  "SELECT DISTINCT REG_MASTER.REG_CODE FROM ZONE_MASTER 
	 LEFT JOIN TRZ_Mapping ON TRZ_Mapping.ZONE_CODE=ZONE_MASTER.ZONE_CODE AND TRZ_Mapping.TYPE=ZONE_MASTER.TYPE
	 LEFT JOIN REG_MASTER ON REG_MASTER.REG_CODE=TRZ_Mapping.REGION AND REG_MASTER.TYPE=TRZ_Mapping.TYPE 
	 LEFT JOIN TER_MASTER ON TER_MASTER.TE_CODE=TRZ_Mapping.TER_CODE AND TER_MASTER.TYPE=TRZ_Mapping.TYPE
	 where ZONE_MASTER.TYPE = '".$Product_Division."' and ZONE_MASTER.ZONE_CODE = '".$zone."' and ZONE_MASTER.ZONE_CODE IS NOT NULL
	 and REG_MASTER.REG_CODE = '".$region."' and REG_MASTER.TYPE = '".$Product_Division."' and TER_MASTER.TE_CODE = '".$territory."' and TER_MASTER.TE_CODE IS NOT NULL and TER_MASTER.TYPE = '".$Product_Division."'";
    $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
    $result = sqlsrv_num_rows($Sql_Connection);
    return $result;
  }

   function Get_hybrid_Details($User_Input=array(),$conn)
  {
    $Product_Division  = $User_Input['Product_Division'];
    $crop_code		  = $User_Input['crop'];
    $actual_item       = $User_Input['actual_item'];    
    $hybrid		      = $User_Input['hybrid'];    
    $Result  = array();

    $Sql  =  "SELECT DISTINCT Material_code FROM sales_variety_master WHERE Product_Division = '".$Product_Division."' and Crop_Code = '".$crop_code."' and Variety_Code = '".$actual_item."' and Material_code = '".$hybrid."'";
    $Sql_Connection =sqlsrv_query($conn,$Sql, array(), array( "Scrollable" => 'static' ));
    $result = sqlsrv_num_rows($Sql_Connection);
    return $result;
  }


?>