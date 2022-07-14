

<?php
include_once('../common.php');

// 모바일접속인가?
if (TB_IS_MOBILE) {
  goto_url(TB_MURL);
}

define('_INDEX_', true);

// 인트로를 사용중인가?


include_once(TB_PATH . '/head.php'); // 상단
include_once(TB_PATH . '/tail_unse.php');
include_once(TB_PATH . '/main.php');




// 하단 


?>



<!-- 
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"> 
 
<frameset cols="100%" frameborder="NO" border="0" framespacing="0">
  <!-- <frame src="/left.php" name="leftFrame" id="leftFrame" scrolling="yes" noresize> -->
<!-- <embed type="text/html" src="/forms/comm_forms.php?urlinfo=saju&sel=2" name="mainFrame" id="mainFrame" scrolling="yes">
</frameset>



</html> -->