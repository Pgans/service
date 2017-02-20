<?php
//We've included ../Includes/FusionCharts.php and ../Includes/DBConn.php, which contains
//functions to help us easily embed the charts and connect to a database.
include("Includes/FusionCharts.php");
include("Includes/DBConn.php");
?>
<HTML>
<HEAD>
	<TITLE>select_report</TITLE>
	<?php
	//You need to include the following JS file, if you intend to embed the chart using JavaScript.
	//Embedding using JavaScripts avoids the "Click to Activate..." issue in Internet Explorer
	//When you make your own charts, make sure that the path to this JS file is correct. Else, you would get JavaScript errors.
	?>	
	<SCRIPT LANGUAGE="Javascript" SRC="FusionCharts2/FusionCharts.js"></SCRIPT>
	<style type="text/css">
	<!--
	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 22px;
	}
	.text{
		font-family: Arial, Helvetica, sans-serif;
		font-size: 22px;
	}
	-->
	</style>
<meta http-equiv="Content-Type" content="text/html; charset=tis-620"></HEAD>
<BODY>

<CENTER>
  <h2><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $type_report; echo " ",$graph; ?> <br> <? echo "ช่วงวันที่ ",$date_begin," - ",$date_out;?> </font></h2>
<?php
	//In this example, we show how to connect FusionCharts to a database.
	//For the sake of ease, we've used an MySQL databases containing two
	//tables.
		
	// Connect to the DB
	$link = connectToDB();
		$strQuery_plan = "select * from jobcom_hospital_department where id='$plan'";
	//echo $strQuery;
	$result_plan = mysql_query($strQuery_plan) or die(mysql_error());
	$ors_plan = mysql_fetch_array($result_plan);
	$plan_show=$ors_plan['name'];
	if($plan==""){$plan_show="ทุกหน่วยงาน";}
	//$strXML will be used to store the entire XML document generated
	//Generate the chart element
	$strXML = "<chart caption='กราฟ COMS  แยกประเภทตาม $plan_show' subCaption='By armds' pieSliceDepth='30' showBorder='1' formatNumberScale='0' numberSuffix=' ครั้ง' outCnvBaseFontSize='12'>";

	// Fetch all factory records
	
	//jobcom_hospital_department    =  plan  =  รายงานรับแจ้งฯ แยกตามฝ่ายงาน
	//jobcom_type = ประเภทงาน   = รายงานรับแจ้งฯ แยกตามประเภทปัญหา
	//jobcom_login =  ผู้รับงาน = รายงานรับแจ้งฯ แยกตามผู้รับงาน
	switch($type_report){
case "รายงานรับแจ้งฯ แยกตามฝ่ายงาน":  		{
																		//$table="jobcom_hospital_department";
			                     									  //	$file="plan";
																		//$file_select="id";
																		//$file_show="name";
																		//$table_select="jobcom";
																		if($plan==""){
																		$strQuery = "select * from jobcom_hospital_department  ";
																		}else{
																		$strQuery = "select * from jobcom_hospital_department where id='".$plan ."' ";
																		}
																		
																		$result = mysql_query($strQuery) or die(mysql_error());
																		
																		//Iterate through each factory
																		if ($result) {
																			while($ors = mysql_fetch_array($result)) {
																				//Now create a second query to get details for this factory
																				$strQuery = "select count(id) as TotOutput from jobcom  where plan='" . $ors['id'] . "' and datejob between '" .$date_begin. "' and '" .$date_out. "'";
																				//echo $strQuery;
																				$result2 = mysql_query($strQuery) or die(mysql_error()); 
																				$ors2 = mysql_fetch_array($result2);
																				//Generate <set label='..' value='..' />        
																				$strXML .= "<set label='" . $ors['name'] . "' value='" . $ors2['TotOutput'] . "' />";
																				//free the resultset
																				mysql_free_result($result2);
																			}
																		}
																		mysql_close($link);
																	
																		//Finally, close <chart> element
																		$strXML .= "</chart>";
	
																		}
																		break; 
case "รายงานรับแจ้งฯ แยกตามประเภทปัญหา":       	{
																					//$table="jobcom_type";
																					//$file="type";
																					//$file_select="id";
																					//$file_show="type";
																					//$table_select="jobcom_service";
																						$strQuery = "select * from jobcom_type";
																					$result = mysql_query($strQuery) or die(mysql_error());
																					
																					//Iterate through each factory
																					if ($result) {
																						while($ors = mysql_fetch_array($result)) {
																							//Now create a second query to get details for this factory
																							if($plan==""){
																							$strQuery = "select count(jobcom_service.id) as TotOutput from jobcom_service left join jobcom on jobcom_service.id=jobcom.id  where jobcom_service.type='" . $ors['id'] . "' and  jobcom.datejob between '" .$date_begin. "' and '" .$date_out. "'";
																							}else{
																							$strQuery = "select count(jobcom_service.id) as TotOutput from jobcom_service left join jobcom on jobcom_service.id=jobcom.id  where jobcom_service.type='" . $ors['id'] . "' and plan='" . $plan . "' and jobcom.datejob between '" .$date_begin. "' and '" .$date_out. "'";
																							}
																							
																							//echo $strQuery;
																							$result2 = mysql_query($strQuery) or die(mysql_error()); 
																							$ors2 = mysql_fetch_array($result2);
																							//Generate <set label='..' value='..' />        
																							$strXML .= "<set label='" . $ors['type'] . "' value='" . $ors2['TotOutput'] . "' />";
																							//free the resultset
																							mysql_free_result($result2);
																						}
																					}
																					mysql_close($link);
																				
																					//Finally, close <chart> element
																					$strXML .= "</chart>";

                                    												}
																					break; 
case "รายงานรับแจ้งฯ แยกตามผู้รับงาน":  		{
																		//$table="jobcom_login";
																		$file="user_job";
																		$file_select="pwd";
																		$file_show="fullname";
																		//$table_select="jobcom_service";
																			$strQuery = "select * from jobcom_login";
																		$result = mysql_query($strQuery) or die(mysql_error());
																		
																		//Iterate through each factory
																		if ($result) {
																			while($ors = mysql_fetch_array($result)) {
																				//Now create a second query to get details for this factory
																				if($plan==""){
																				$strQuery = "select count(jobcom_service.id) as TotOutput from jobcom_service left join jobcom on jobcom_service.id=jobcom.id  where jobcom_service.user_job='" . $ors['pwd'] . "' and datejob between '" .$date_begin. "' and '" .$date_out. "'";
																				}else{
																				$strQuery = "select count(jobcom_service.id) as TotOutput from jobcom_service left join jobcom on jobcom_service.id=jobcom.id  where jobcom_service.user_job='" . $ors['pwd'] . "' and plan='" . $plan . "' and jobcom.datejob between '" .$date_begin. "' and '" .$date_out. "'";
																				}
																				//echo $strQuery;
																				$result2 = mysql_query($strQuery) or die(mysql_error()); 
																				$ors2 = mysql_fetch_array($result2);
																				//Generate <set label='..' value='..' />        
																				$strXML .= "<set label='" . $ors['fullname'] . "' value='" . $ors2['TotOutput'] . "' />";
																				//free the resultset
																				mysql_free_result($result2);
																			}
																		}
																		mysql_close($link);
																	
																		//Finally, close <chart> element
																		$strXML .= "</chart>";

			                       										}
																		break; 
default : echo "";
}

	
	//Create the chart - Pie 3D Chart with data from $strXML
switch($graph){
case "Pie2D":  		echo renderChart("FusionCharts1/Pie2D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
			                       	break; 
case "Pie3D":       	echo renderChart("FusionCharts1/Pie3D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
case "Column2D":  		echo renderChart("FusionCharts1/Column2D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
			                       	break; 
case "Column3D":       	echo renderChart("FusionCharts1/Column3D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
case "Line":  		echo renderChart("FusionCharts1/Line.swf", "", $strXML, "FactorySum", 800, 400, false, false);
			                       	break; 
case "Area2D":       	echo renderChart("FusionCharts1/Area2D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
case "Bar2D":       	echo renderChart("FusionCharts1/Bar2D.swf", "", $strXML, "FactorySum", 800, 400, false, false);
                                    break; 
default : echo "";
}	//echo renderChart("../../FusionCharts/Pie3D.swf", "", $strXML, "FactorySum", 600, 300, false, false);
	//echo renderChart("FusionCharts1/Line.swf", "", $strXML, "ประเภทปัญหา", 600, 300, false, false);
	
//	echo renderChart("FusionCharts1/Pie2D.swf", "", $strXML, "FactorySum", 700, 400, false, false);
?>
<BR><BR>
</CENTER>
</BODY>
</HTML>