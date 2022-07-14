<?

//Randomize

//intSuja = Int((21 * Rnd) + 1)


$intSuja=rand(1, 21);

$sql = "Select DB_data, DB_title from T043 where DB_express = '".($intSuja - 1)."'";

$query = mysql_query($sql);
$all = mysql_affected_rows();

for ($i = 0 ; $i<$all; $i++) {
	mysql_data_seek($query,$i);
	$row = mysql_fetch_array($query);
	$s_title = stripslashes($row[DB_title]);
	$m_intro = stripslashes($row[DB_data]);
}

$m_intro = str_replace("<FONT color=#000000>", "", $m_intro);
$s_title = str_replace("◐", "▣", $s_title);
$m_intro = str_replace("◐", "▣", $m_intro);

$Cards = "<TABLE width='100%'><TR><TD align=Center></TD></TR></TABLE>";

$Tb_T043 = $m_intro;

?>
<table cellpadding="0" cellspacing="0">
	<tR>
		<td style="<?=$fontcolor;?>"><table width='210' height='160' cellpadding='0' cellspacing='0' align='left'><tr><Td valign='top'><img src="/UNSE_DATA/images/T043_img/mj<?=$intSuja - 2?>.jpg" align='left'></tD></tr></table><IMG height=5 src='/images/nolink.png'><BR><?=$Tb_T043?></td>
	</tr>
</table>

<?$Tb_T043="";?>