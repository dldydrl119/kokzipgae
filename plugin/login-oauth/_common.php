<?php
include_once('../../common.php');

if($is_member) {
	alert_close('현재 로그인 중입니다.');
}

include_once('./_apikey.php');
?>
<script language='javascript'>
// window.setTimeout('window.location.reload()',1800); 
window.setTimeout('window.location.href="/index.php"',1500); 
</script>
