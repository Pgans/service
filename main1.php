<head>
<title>���ҧ�Ѻ�ҹ����Ἱ</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<script language='javascript' src='../../../AppServ/www/job/popcalendar.js'></script>
</head>
<?  include"config.php";?>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="../../../AppServ/www/job/imag/mainpage.gif">

  <tr> 
    <form name="form1" method="post" action="../../../AppServ/www/job/index.php?show=main&who=1">
      <td> <div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong><font face="tahoma">��ǧ�ѹ��� 
          <input name="datejob1" type="text" id="datejob1" value="<? echo $datejob1;?>" size="9">
                <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datejob1, \"yyyy/mm/dd\")' value=' �ѹ��� ' style='font-size:9px'>")
				}	//-->
				
                </script>
          �֧ 
          <input name="datejob2" type="text" id="datejob2" value="<? echo $datejob2;?>" size="9">
          <script language='JavaScript'>
	<!--
	 			 if (!document.layers) {
	   			 document.write("<input type=button onclick='popUpCalendar(this, form1.datejob2, \"yyyy/mm/dd\")' value=' �ѹ��� ' style='font-size:9px'>")
				}	//-->
				
          </script>
          </font></strong></font> <font face="tahoma"><strong><font size="2"> 
          <input type="submit" name="Submit" value="��Ǩ�ͺ">
          </font></strong></font></div></td>
    </form>
  </tr>
  <tr> 
    <td>
	  <p>
	    <font face="tahoma">
	    <? 
	$list_page = 19;
	if (empty($page)){
		$page=1;
	}
		if($orderby==""){$orderby="jobcom.id";}
	// �Դ��� database ������ҹ������	
	// �Ҩӹǹ˹�ҷ�����
	$sql_total= "select id from jobcom ";
	$result_total = mysql_query($sql_total);
	$NRow = mysql_num_rows($result_total);
	$rt = $NRow%$list_page;
	if($rt!=0) { 
		$totalpage = floor($NRow/$list_page)+1; 
	}
	else {
		$totalpage = floor($NRow/$list_page); 
	}
	$goto = ($page-1)*$list_page;
				
						//$sql1="select  * from jobtana_company  order by id_com asc limit $goto,$list_page";
	
	if($who<>""){

	$sql="select * from jobcom left join jobcom_service on jobcom.id=jobcom_service.id  where jobcom_service.datework between '$datejob1'and'$datejob2'  order by $orderby desc limit $goto,$list_page";
	}else{
	$sql="select * from jobcom left join jobcom_service on jobcom.id=jobcom_service.id order by $orderby desc limit $goto,$list_page";
	}
	//echo $sql;
			$result=mysql_query($sql);
			?>
        <font size="2"><strong>���ҧ�Ѻ�ҹ�ͧ 
	        : 
        <? ?>
          </strong></font></font><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong></strong></font></p>
	  <table width="99%" border="0" align="center" cellpadding="3" cellspacing="1">
        <tr bgcolor="#6464FF">
          <td width="4%" height="23"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�Ţ���</font></strong></font></div></td>
          <td width="22%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�Ԩ����/�ҹ</font></strong></font></div></td>
          <td width="6%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.�����</font></strong></font></div></td>
          <td width="7%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.����ͧ���</font></strong></font></div></td>
          <td width="15%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">˹��§ҹ</font></strong></font></div></td>
          <td width="9%" bgcolor="#6464FF"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">�����</font></strong></font></div></td>
          <td width="8%" bgcolor="#6464FF"><div align="center"><a href="../../../AppServ/www/job/index.php?show=main&orderby=jobcom_service.type"><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>�������ҹ</strong></font></a></div></td>
          <td width="6%"><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>����Ѻ�ҹ</strong></font></td>
          <td width="6%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">Ǵ�.�觧ҹ</font></strong></font></div></td>
          <td width="8%"><div align="center"><font color="#FFFFFF"><strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif">ʶҹ�/�ѹ�������</font></strong></font></div></td>
          <? if(isset($_SESSION['user'])){?>
          <td width="5%"><font color="#FFFFFF" size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong>��� 
            / ź</strong></font></td>
          <? } ?>
        </tr>
        <tr>
          <? while($row=mysql_fetch_object($result)){?>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->id;?></font></div></td>
          <td bgcolor="#FFFFFF"><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
            <? if(isset($_SESSION['user'])){?>
            <a href="../../../AppServ/www/job/index.php?show=add_job&what=edit&id=<? echo $row->id;?>" title="<? echo $row->datail;?>"><? echo $row->head;?></a>
            <? }else{?>
            <? echo $row->head;?>
            <? } ?>
          </font></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->datejob;?></font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->dateline;?></font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <? //echo $row->plan;
	$sql_plan="select * from jobcom_hospital_department  where id='$row->plan'";
	$result_plan=mysql_query($sql_plan);
	$row_plan=mysql_fetch_object($result_plan);
	echo $row_plan->name;
	
	?> </font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->user_com;?></font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
            <? 
	$sql_jobcom_type="select * from  jobcom_type  where  id='$row->type' ";
	$result_jobcom_type=mysql_query($sql_jobcom_type);
	$row_jobcom_type=mysql_fetch_object($result_jobcom_type);
	//echo $row->type." : ".$row_jobcom_type->type;
	echo $row_jobcom_type->type;
	?>
          </font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif">
            <? //echo $row->user_job;
	$sql_login="select * from  jobcom_login  where  pwd='$row->user_job' ";
	$result_login=mysql_query($sql_login);
	$row_login=mysql_fetch_object($result_login);
	echo $row_login->fullname;
	?>
          </font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><? echo $row->datefinal;?></font></div></td>
          <td bgcolor="#FFFFFF"><div align="center"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"> <? //echo $row->commant;
	$sql_status="select * from  jobcom_status where  id='$row->commant' ";
	$result_status=mysql_query($sql_status);
	$row_status=mysql_fetch_object($result_status);
	echo " : ",$row_status->status;
	?>/ <?php

echo ceil((strtotime($row->datefinal) - strtotime($row->datejob) + 1) / (24 * 60 * 60));

php?>
	</font></div></td>
          <? if(isset($_SESSION['user'])){?>
          <td bgcolor="#FFFFFF"><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><strong><a href="../../../AppServ/www/job/index.php?show=add_job&what=edit&id=<? echo $row->id;?>">���</a></strong></font> / <strong><font size="2" face="MS Sans Serif, Tahoma, sans-serif"><a href="../../../AppServ/www/job/index.php?show=main&what=del&id=<? echo $row->id;?>">ź</a></font></strong></td>
          <? } ?>
        </tr>
        <? } ?>
        <tr>
          <td colspan="10"><? 		
					if($page>1 && $page<=$totalpage) {
			$prevpage = $page-1;
			echo "\t<font color=blue size=2 face='MS Sans Serif'><a href='index.php?show=main&Category=$Category&page=$prevpage&all=all&by=number'>[˹�ҡ�͹ = $prevpage]</a></font>\n";
		}


		echo "\t <font color=blue size=2 face='MS Sans Serif'>���ѧ�ʴ�˹�ҷ�� $page/$totalpage </font>\n";

		if($page!=$totalpage) {
			$nextpage = $page+1;
			echo "\t<font color=blue size=2 face='MS Sans Serif'><a href='index.php?show=main&Category=$Category&page=$nextpage&all=all&by=number'>[˹�ҶѴ� = $nextpage]</a></font>\n";
		}echo"<br>";
		// ǹ�ٻ�ʴ��Ţ˹�ҷ�����
		for($i=1 ; $i<$page ; $i++) {
			echo "\t<font color=blue size=2 face='MS Sans Serif'><a href='index.php?show=main&Category=$Category&page=$i&all=all&by=number'>$i</a> </font>\n";
		}
		echo "\t<font size=2 color=red face='MS Sans Serif'><b>$page</b></font> \n";
		for($i=$page+1 ; $i<=$totalpage ; $i++) {
			echo "\t<font size=2 color=blue face='MS Sans Serif'><a href='index.php?show=main&Category=$Category&page=$i&all=all&by=number'>$i</a></font> \n";
		}?></td>
        </tr>
      </table>	  </td>
  </tr>
</table>
<?
if($what=="del"){
echo "<script language='javascript'>
				if (confirm('��ͧ���ź�����Ţͧ  �����  $id  ���駷��  $head  ��������� ?')) {					
					var	link='add_what.php?what=del&id=$id'
					window.location=link
				}else{
								alert('  ¡���ԡ���ź�����Ź��  ')
								history.back()
							}
								</script>";
}

?>
</body>
