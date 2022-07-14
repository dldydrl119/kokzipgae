<?
function f_Arr_readAdmin($selectstrFname){
	if(!file_exists($selectstrFname)) return "";      // 파일 없으면 리턴
	$fd = fopen($selectstrFname, "r");                // 파일을 열고
	$allText = fread($fd, filesize($selectstrFname)); // 파일을 읽고
	fclose($fd);                                      // 파일을 닫고
	$f_Arr_readAdmin = explode("^", $allText);        // 처리하고
	return $f_Arr_readAdmin;                          // 리턴
}

function s_setInfo($selectstrFname, $str, $num)
{
	if(!file_exists($selectstrFname)) return "";
	$fd 			= fopen($selectstrFname, "r");
	$allText 	= fread($fd, filesize($selectstrFname));
	fclose($fd);

	$f_Arr_readAdmin = explode("^",$allText);

	$allstr = "";


	for($i=0;$i<sizeof($f_Arr_readAdmin);$i++)
	{
		if($i == "0")
		{
			if($i == $num)
			{
				$allstr = $str;
			}
			else
			{
				$allstr = $f_Arr_readAdmin[$i];
			}
		}
		else
		{
			if($i == $num)
			{
				$allstr = $allstr."^".$str;
			}
			else
			{
				$allstr = $allstr."^".$f_Arr_readAdmin[$i];
			}
		}
	}
	$fw=fopen($selectstrFname,"w+");
	fwrite($fw, $allstr);
	fclose($fw);
	return $s_setInfo;
}

function ICC($checkRecord){
	$checkRecord = eregi_replace(chr(13), "<br>", $checkRecord);
	$checkRecord = eregi_replace("'", "&#39", $checkRecord);
	//$checkRecord = eregi_replace("/*", "&#47&#42", $checkRecord);
	$checkRecord = eregi_replace("<", "&#60", $checkRecord);
	$checkRecord = eregi_replace(">", "&#62", $checkRecord);

	return $checkRecord;
}

function OCC($checkRecord){
	$checkRecord = eregi_replace("<BR>", chr(13), $checkRecord);
	$checkRecord = eregi_replace("&#39", "'", $checkRecord);
	//$checkRecord = eregi_replace("&#47&#42", "/*", $checkRecord);
	$checkRecord = eregi_replace("&#60", "<", $checkRecord);
	$checkRecord = eregi_replace("&#62", ">", $checkRecord);

	return $checkRecord;
}

//================================================================================
global $PHP_SELF;

$thisfilename = basename(__FILE__);
$temp_filename = realpath(__FILE__);

if(!$temp_filename){$temp_filename = __FILE__;}

// $osdir = eregi_replace($thisfilename, "", $temp_filename);
// $virdir = eregi_replace($thisfilename, "", $PHP_SELF);

// $osdir = eregi_replace("/incs", "", $osdir);

unset($temp_filename);
//================================================================================

// *** 파일 관련 함수 *** //
function GetFileNameExt($filename) {
	$f_array = explode("/",basename($filename));
	return $f_array[count($f_array)-1];
}

function GetFileExt($filename) {
	$f_array = explode(".",basename($filename));
	return $f_array[count($f_array)-1];
}

function FileRead($tpl) {
        $fname = GetFileNameExt($tpl);
        $fext  = GetFileExt($tpl);
        if($fname=="" || ( $fext!="dat" && $fext!="dat_" && $fext!="txt") ) return "";

	// 변수 설정
	$fnameCur = $tpl;
        if(!file_exists($fnameCur)) return "";

	// 파일을 읽는다.
	$fp = fopen($fnameCur,r);
	$fsize = filesize($fnameCur);
	$file_data = "";
	if($fsize>0) $file_data = fread($fp,$fsize);
	fclose($fp);

	return $file_data;
}




if($_REQUEST["park"]=="sunken"){    //쿠키 굽는용  incook()에서 사용
setcookie($_REQUEST["cname"], $_REQUEST["cvalue"], 0, "/");}



function right($a,$b){
$c=strlen($a);
$e=$c-$b;
$d=substr($a,$e,$c-$e);
return $d;}


function left($a,$b){
$d=substr($a,0,$b);
return $d;}



function cook($a)
{$b="";
if (isset($_COOKIE[$a])){$b=$_COOKIE[$a];}
return $b;}

function request($a)
{$b="";
if (isset($_REQUEST[$a])){$b=$_REQUEST[$a];}
return $b;}

function replace($a,$b,$c)
{return str_replace($b,$c,$a);}



function here_setcookie($name, $value, $expire, $path='/')
{
    if (headers_sent()) {
        $cookie = $name.'='.urlencode($value).';';
        if ($expire) $cookie .= ' expires='.gmdate('D, d M Y H:i:s', $expire).' GMT';
        echo '<script language="javascript">document.cookie="'.$cookie.'";</script>';
    } else {
        setcookie($name, $value, $expire, $path);
    }



}

function incook($cname,$cvalue,$cday,$code){
?>

<iframe src="" name="setcook<?=$code?>" border=0 width=0 height=0></iframe>
<form METHOD=POST action="/incs/function.php" target="setcook<?=$code?>" name="cooky<?=$code?>">
<input type="hidden" name="cname" value="<?=$cname?>">
<input type="hidden" name="cvalue" value="<?=$cvalue?>">
<input type="hidden" name="cday" value="<?=$cday?>">
<input type="hidden" name="park" value="sunken">
</form>
<script>cooky<?=$code?>.submit()</script>
<?
}



function line(){
echo"<TABLE cellspacing=0 cellpadding=0 width=100%><TR>	<TD bgcolor=ebebeb width=100% height=6></TD></TR></TABLE>";
}
?>