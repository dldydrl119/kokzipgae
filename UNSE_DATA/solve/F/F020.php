<?

$page = $_REQUEST["page"];

if($page == ""){$page = 1;}

$PageSize = 20;
$Absolutepage = $page;

$sql = "SELECT count(DB_num) as cnt FROM F020 WHERE DB_title like '%[".$dream_name."]%'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

		for ($i = 0 ; $i<$all; $i++) {
			mysql_data_seek($query,$i);
			$row = mysql_fetch_array($query);
			$recordcount = stripslashes($row[cnt]);
         		}

$pageCount = (($recordcount -1)/$PageSize)+1	;
$lastpage = $pageCount;

$num = $recordcount - ($PageSize * ($page - 1));
$pxgg=(($Absolutepage-1)*$PageSize)+1; //<--- 탑십

//$sqlaa = "SELECT  DB_data, DB_title from F020 WHERE DB_title like '%[".$dream_name."]%' and DB_num <= (SELECT MIN(DB_num) FROM (SELECT DB_num FROM F020 order by DB_num desc limit ".((($Absolutepage-1)*$PageSize)+1).", 10) AS A) order by DB_num desc limit ".((($Absolutepage-1)*$PageSize)+1).", 20";

$sqlaa = "SELECT DB_data, DB_title FROM F020 WHERE DB_title like '%[".$dream_name."]%' order by DB_num desc limit ".((($Absolutepage-1)*$PageSize)).", 20";

//$sqlaa = "SELECT  DB_data, DB_title from F016 WHERE DB_title like '%[".$dream_name."]%' order by DB_num desc limit 0, 10";


$query = mysql_query($sqlaa);
$all = mysql_affected_rows();
?>
<BR>
<TABLE width=512 align=center border=0 cellspacing=1 cellpadding=10 bgcolor=FFFFFF>
<tr><td bgcolor=FFFFFF align=center><font color=blue> 총 <?=$recordcount?> 개의 내용이 검색되었습니다.</font></td></tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="1" bordercolor="#D5D5D5">
<?
if (1>$all) {
?>
	<tr>
		<td height="23" align="center">검색된 결과값이 없습니다.</td>
	</tr>
<?
}else{
	for ($i = 0 ; $i<$all; $i++) {
		mysql_data_seek($query,$i);
		$row = mysql_fetch_array($query);
		$DB_title = stripslashes($row[DB_title]);
		$DB_data = stripslashes($row[DB_data]);

		$DB_title = str_replace("[", "", $DB_title);
		$DB_title = str_replace("]", "", $DB_title);
		$DB_title = str_replace("<BR>", "", $DB_title);

		$DB_data = str_replace("<BR>", "", $DB_data);

		If($i % 2 == 0){$td_bgcolor="bgcolor='#F9F8F8'";}Else{$td_bgcolor = "";}
?>
	<tR>
		<td style="padding:5px; cursor:hand;" <?=$td_bgcolor;?>  onmouseover="F_show('div_show<?=$i;?>', '1')" onmouseout="F_show('div_show<?=$i;?>', '2')">
		<div id="div_day_bg" style="position:absolute; z-index:1;">
			<div id="div_show<?=$i;?>" style="width:515px; position:absolute; z-index:3; border:solid 1px; display:none; padding:5px; background-color:#FFFFFF;" onmouseout="F_show('div_show<?=$i;?>', '2')"><?=$DB_data;?><BR></div>
		</div>
		<?=$DB_title;?>
		</td>
	</tR>
<?
	}
}
?>
</table>

	<TABLE align="center">
		<tR>
			<tD height="10"></tD>
		</tR>
		<TR>
			<TD align="center">
			<?
			$limit=20;
			$pos=($page - 1) % $limit;
			$startpage = $page - $pos;

			if($startpage - $limit > 0){
			?>
			<A HREF="#이전글" onclick="F_page_num(<?=$startpage-1;?>)"><img src="/UNSE_DATA/images/before.jpg" border="0"align="absmiddle"></A>&nbsp;
			<?}else{?>
			<?
			};

			for($i = $startpage; $i < $startpage + $limit - 2; $i++){
				if($i == $page){
			?>
				<B><?=$i;?></B>&nbsp;
			<?}else{?>
				<A HREF="#다음" onclick="F_page_num(<?=$i;?>)"><?=$i;?></A>&nbsp;
			<?}
				if($i >= $lastpage - 1){
					break;
				}
			}
			?>
			<?if($startpage + $limit <= $lastpage){?>
			<A HREF="#다음글" onclick="F_page_num(<?=$startpage + $limit;?>)"><img src="/UNSE_DATA/images/next.jpg" border="0"align="absmiddle"></A>&nbsp;
			<?}else{?>
			<?}?>
			</TD>
		</TR>
	</TABLE>