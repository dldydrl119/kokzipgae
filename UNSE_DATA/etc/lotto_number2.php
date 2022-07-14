<?
$select_num = $_REQUEST["select_num"];
$select_count = $_REQUEST["select_count"];

$want1 = $_REQUEST["want1"];
$want2 = $_REQUEST["want2"];
$want3 = $_REQUEST["want3"];
$want4 = $_REQUEST["want4"];
$want11 = $_REQUEST["want11"];
$want0 = $_REQUEST["want0"];
?>
<form name="signform" method="post" action="?">
<?
$result = explode(",",$select_num); 

for ($i=0; $i<$select_count; $i++){
 if ($result[$i] < 10) {$result[$i] = '0'.$result[$i];}

$n[$i] = $result[$i];
}

if ($select_count == '7') {$select_i = '7';}
if ($select_count == '8') {$select_i = '28';}
if ($select_count == '9') {$select_i = '84';}
if ($select_count == '10') {$select_i = '210';}

$nums[0] = 0; 

for ($i=0; $i<$select_count; $i++){
$nums[$i+1] = $n[$i]; 
}

	$row = 0;
	$k = 0;
	$sum = 0;

#########################################################################################	
if ($select_count == '7') {	

	for($p1 = 1; $p1 <= 2; $p1++) { 
	        for($p2 = $p1 + 1; $p2 <= 3; $p2++) { 
                	for($p3 = $p2 + 1; $p3 <= 4; $p3++) { 
        	                for($p4 = $p3 + 1; $p4 <= 5; $p4++) { 
	                                for($p5 = $p4 + 1; $p5 <= 6; $p5++) { 
                                	        for($p6 = $p5 + 1; $p6 <= 7; $p6++) { 
							
							$row = $row + 1;
							$games[$row] = $nums[$p1].','.$nums[$p2].','.$nums[$p3].','.$nums[$p4].','.$nums[$p5].','.$nums[$p6];
							$k = $k + 1;
							$q1 = 0;
							$q2 = 0;
							$q3 = 0;
							$q4 = 0;
							$q5 = 0;
							$sum = $nums[$p1]%2  + $nums[$p2]%2  + $nums[$p3]%2  + $nums[$p4]%2  + $nums[$p5]%2  + $nums[$p6]%2;
							if ($sum == 1) {$check[$k] =  '홀1짝5';}
							if ($sum == 2) {$check[$k] =  '홀2짝4';}
							if ($sum == 3) {$check[$k] =  '홀3짝3';}
							if ($sum == 4) {$check[$k] =  '홀4짝2';}
							if ($sum == 5) {$check[$k] =  '홀5짝1';}
							if ($sum == 6) {$check[$k] =  '홀6';}
							if ($sum == 0) {$check[$k] =  '짝6';}

							if (($nums[$p1] <10)&&($nums[$p1] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p2] <10)&&($nums[$p2] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p3] <10)&&($nums[$p3] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p4] <10)&&($nums[$p4] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p5] <10)&&($nums[$p5] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p6] <10)&&($nums[$p6] >0)) {$q1 = $q1 + 1;}
							$check_q1[$k] = $q1; 

							if (($nums[$p1] <20)&&($nums[$p1] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p2] <20)&&($nums[$p2] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p3] <20)&&($nums[$p3] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p4] <20)&&($nums[$p4] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p5] <20)&&($nums[$p5] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p6] <20)&&($nums[$p6] >9)) {$q2 = $q2 + 1;}
							$check_q2[$k] = $q2; 

							if (($nums[$p1] <30)&&($nums[$p1] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p2] <30)&&($nums[$p2] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p3] <30)&&($nums[$p3] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p4] <30)&&($nums[$p4] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p5] <30)&&($nums[$p5] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p6] <30)&&($nums[$p6] >19)) {$q3 = $q3 + 1;}
							$check_q3[$k] = $q3; 

							if (($nums[$p1] <40)&&($nums[$p1] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p2] <40)&&($nums[$p2] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p3] <40)&&($nums[$p3] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p4] <40)&&($nums[$p4] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p5] <40)&&($nums[$p5] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p6] <40)&&($nums[$p6] >29)) {$q4 = $q4 + 1;}
							$check_q4[$k] = $q4; 

							if (($nums[$p1] <50)&&($nums[$p1] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p2] <50)&&($nums[$p2] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p3] <50)&&($nums[$p3] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p4] <50)&&($nums[$p4] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p5] <50)&&($nums[$p5] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p6] <50)&&($nums[$p6] >39)) {$q5 = $q5 + 1;}
							$check_q5[$k] = $q5; 

							//echo "$games[$row] / $check[$k]<br>";

						}
                                	} 
                        	} 
                	} 
        	} 
	}
}
########################################################################################### 
if ($select_count == '8') {	
	for($p1 = 1; $p1 <= 3; $p1++) { 
	        for($p2 = $p1 + 1; $p2 <= 4; $p2++) { 
                	for($p3 = $p2 + 1; $p3 <= 5; $p3++) { 
        	                for($p4 = $p3 + 1; $p4 <= 6; $p4++) { 
	                                for($p5 = $p4 + 1; $p5 <= 7; $p5++) { 
                                	        for($p6 = $p5 + 1; $p6 <= 8; $p6++) { 

							$row = $row + 1;
							$games[$row] = $nums[$p1].','.$nums[$p2].','.$nums[$p3].','.$nums[$p4].','.$nums[$p5].','.$nums[$p6];
							$k = $k + 1;
							$q1 = 0;
							$q2 = 0;
							$q3 = 0;
							$q4 = 0;
							$q5 = 0;
							$sum = $nums[$p1]%2  + $nums[$p2]%2  + $nums[$p3]%2  + $nums[$p4]%2  + $nums[$p5]%2  + $nums[$p6]%2;
							if ($sum == 1) {$check[$k] =  '홀1짝5';}
							if ($sum == 2) {$check[$k] =  '홀2짝4';}
							if ($sum == 3) {$check[$k] =  '홀3짝3';}
							if ($sum == 4) {$check[$k] =  '홀4짝2';}
							if ($sum == 5) {$check[$k] =  '홀5짝1';}
							if ($sum == 6) {$check[$k] =  '홀6';}
							if ($sum == 0) {$check[$k] =  '짝6';}

							if (($nums[$p1] <10)&&($nums[$p1] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p2] <10)&&($nums[$p2] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p3] <10)&&($nums[$p3] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p4] <10)&&($nums[$p4] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p5] <10)&&($nums[$p5] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p6] <10)&&($nums[$p6] >0)) {$q1 = $q1 + 1;}
							$check_q1[$k] = $q1; 

							if (($nums[$p1] <20)&&($nums[$p1] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p2] <20)&&($nums[$p2] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p3] <20)&&($nums[$p3] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p4] <20)&&($nums[$p4] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p5] <20)&&($nums[$p5] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p6] <20)&&($nums[$p6] >9)) {$q2 = $q2 + 1;}
							$check_q2[$k] = $q2; 

							if (($nums[$p1] <30)&&($nums[$p1] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p2] <30)&&($nums[$p2] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p3] <30)&&($nums[$p3] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p4] <30)&&($nums[$p4] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p5] <30)&&($nums[$p5] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p6] <30)&&($nums[$p6] >19)) {$q3 = $q3 + 1;}
							$check_q3[$k] = $q3; 

							if (($nums[$p1] <40)&&($nums[$p1] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p2] <40)&&($nums[$p2] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p3] <40)&&($nums[$p3] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p4] <40)&&($nums[$p4] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p5] <40)&&($nums[$p5] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p6] <40)&&($nums[$p6] >29)) {$q4 = $q4 + 1;}
							$check_q4[$k] = $q4; 

							if (($nums[$p1] <50)&&($nums[$p1] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p2] <50)&&($nums[$p2] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p3] <50)&&($nums[$p3] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p4] <50)&&($nums[$p4] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p5] <50)&&($nums[$p5] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p6] <50)&&($nums[$p6] >39)) {$q5 = $q5 + 1;}
							$check_q5[$k] = $q5; 

							//echo "$games[$row] / $check[$k]<br>";						
						
						
						}
                                	} 
                        	} 
                	} 
        	} 
	}

}
##########################################################################################
if ($select_count == '9') {
	for($p1 = 1; $p1 <= 4; $p1++) { 
	        for($p2 = $p1 + 1; $p2 <= 5; $p2++) { 
                	for($p3 = $p2 + 1; $p3 <= 6; $p3++) { 
        	                for($p4 = $p3 + 1; $p4 <= 7; $p4++) { 
	                                for($p5 = $p4 + 1; $p5 <= 8; $p5++) { 
                                	        for($p6 = $p5 + 1; $p6 <= 9; $p6++) { 
							$row = $row + 1;
							$games[$row] = $nums[$p1].','.$nums[$p2].','.$nums[$p3].','.$nums[$p4].','.$nums[$p5].','.$nums[$p6];
							$k = $k + 1;
							$q1 = 0;
							$q2 = 0;
							$q3 = 0;
							$q4 = 0;
							$q5 = 0;
							$sum = $nums[$p1]%2  + $nums[$p2]%2  + $nums[$p3]%2  + $nums[$p4]%2  + $nums[$p5]%2  + $nums[$p6]%2;
							if ($sum == 1) {$check[$k] =  '홀1짝5';}
							if ($sum == 2) {$check[$k] =  '홀2짝4';}
							if ($sum == 3) {$check[$k] =  '홀3짝3';}
							if ($sum == 4) {$check[$k] =  '홀4짝2';}
							if ($sum == 5) {$check[$k] =  '홀5짝1';}
							if ($sum == 6) {$check[$k] =  '홀6';}
							if ($sum == 0) {$check[$k] =  '짝6';}

							if (($nums[$p1] <10)&&($nums[$p1] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p2] <10)&&($nums[$p2] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p3] <10)&&($nums[$p3] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p4] <10)&&($nums[$p4] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p5] <10)&&($nums[$p5] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p6] <10)&&($nums[$p6] >0)) {$q1 = $q1 + 1;}
							$check_q1[$k] = $q1; 

							if (($nums[$p1] <20)&&($nums[$p1] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p2] <20)&&($nums[$p2] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p3] <20)&&($nums[$p3] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p4] <20)&&($nums[$p4] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p5] <20)&&($nums[$p5] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p6] <20)&&($nums[$p6] >9)) {$q2 = $q2 + 1;}
							$check_q2[$k] = $q2; 

							if (($nums[$p1] <30)&&($nums[$p1] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p2] <30)&&($nums[$p2] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p3] <30)&&($nums[$p3] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p4] <30)&&($nums[$p4] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p5] <30)&&($nums[$p5] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p6] <30)&&($nums[$p6] >19)) {$q3 = $q3 + 1;}
							$check_q3[$k] = $q3; 

							if (($nums[$p1] <40)&&($nums[$p1] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p2] <40)&&($nums[$p2] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p3] <40)&&($nums[$p3] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p4] <40)&&($nums[$p4] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p5] <40)&&($nums[$p5] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p6] <40)&&($nums[$p6] >29)) {$q4 = $q4 + 1;}
							$check_q4[$k] = $q4; 

							if (($nums[$p1] <50)&&($nums[$p1] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p2] <50)&&($nums[$p2] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p3] <50)&&($nums[$p3] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p4] <50)&&($nums[$p4] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p5] <50)&&($nums[$p5] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p6] <50)&&($nums[$p6] >39)) {$q5 = $q5 + 1;}
							$check_q5[$k] = $q5; 


							//echo "$games[$row] / $check[$k]<br>";						
						
						
						}
                                	} 
                        	} 
                	} 
        	} 
	}

}
##########################################################################################
if ($select_count == '10') {
	for($p1 = 1; $p1 <= 5; $p1++) { 
	        for($p2 = $p1 + 1; $p2 <= 6; $p2++) { 
                	for($p3 = $p2 + 1; $p3 <= 7; $p3++) { 
        	                for($p4 = $p3 + 1; $p4 <= 8; $p4++) { 
	                                for($p5 = $p4 + 1; $p5 <= 9; $p5++) { 
                                	        for($p6 = $p5 + 1; $p6 <= 10; $p6++) { 
							$row = $row + 1;
							$games[$row] = $nums[$p1].','.$nums[$p2].','.$nums[$p3].','.$nums[$p4].','.$nums[$p5].','.$nums[$p6];
							$k = $k + 1;
							$q1 = 0;
							$q2 = 0;
							$q3 = 0;
							$q4 = 0;
							$q5 = 0;
							$sum = $nums[$p1]%2  + $nums[$p2]%2  + $nums[$p3]%2  + $nums[$p4]%2  + $nums[$p5]%2  + $nums[$p6]%2;
							if ($sum == 1) {$check[$k] =  '홀1짝5';}
							if ($sum == 2) {$check[$k] =  '홀2짝4';}
							if ($sum == 3) {$check[$k] =  '홀3짝3';}
							if ($sum == 4) {$check[$k] =  '홀4짝2';}
							if ($sum == 5) {$check[$k] =  '홀5짝1';}
							if ($sum == 6) {$check[$k] =  '홀6';}
							if ($sum == 0) {$check[$k] =  '짝6';}

							if (($nums[$p1] <10)&&($nums[$p1] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p2] <10)&&($nums[$p2] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p3] <10)&&($nums[$p3] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p4] <10)&&($nums[$p4] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p5] <10)&&($nums[$p5] >0)) {$q1 = $q1 + 1;}
							if (($nums[$p6] <10)&&($nums[$p6] >0)) {$q1 = $q1 + 1;}
							$check_q1[$k] = $q1; 

							if (($nums[$p1] <20)&&($nums[$p1] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p2] <20)&&($nums[$p2] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p3] <20)&&($nums[$p3] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p4] <20)&&($nums[$p4] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p5] <20)&&($nums[$p5] >9)) {$q2 = $q2 + 1;}
							if (($nums[$p6] <20)&&($nums[$p6] >9)) {$q2 = $q2 + 1;}
							$check_q2[$k] = $q2; 

							if (($nums[$p1] <30)&&($nums[$p1] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p2] <30)&&($nums[$p2] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p3] <30)&&($nums[$p3] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p4] <30)&&($nums[$p4] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p5] <30)&&($nums[$p5] >19)) {$q3 = $q3 + 1;}
							if (($nums[$p6] <30)&&($nums[$p6] >19)) {$q3 = $q3 + 1;}
							$check_q3[$k] = $q3; 

							if (($nums[$p1] <40)&&($nums[$p1] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p2] <40)&&($nums[$p2] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p3] <40)&&($nums[$p3] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p4] <40)&&($nums[$p4] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p5] <40)&&($nums[$p5] >29)) {$q4 = $q4 + 1;}
							if (($nums[$p6] <40)&&($nums[$p6] >29)) {$q4 = $q4 + 1;}
							$check_q4[$k] = $q4; 

							if (($nums[$p1] <50)&&($nums[$p1] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p2] <50)&&($nums[$p2] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p3] <50)&&($nums[$p3] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p4] <50)&&($nums[$p4] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p5] <50)&&($nums[$p5] >39)) {$q5 = $q5 + 1;}
							if (($nums[$p6] <50)&&($nums[$p6] >39)) {$q5 = $q5 + 1;}
							$check_q5[$k] = $q5; 





							//echo "$games[$row] / $check[$k]<br>";						
						
						
						}
                                	} 
                        	} 
                	} 
        	} 
	}

}
?>
<SCRIPT LANGUAGE="JavaScript">
<!--
function checkIt() {
   if(signform.want0.checked == true){
      if((signform.want1.checked == true)||(signform.want2.checked == true)||(signform.want3.checked == true)||(signform.want4.checked == true)||(signform.want11.checked == true)){
         alert('원상태 하나만 체크하세요');
         signform.want0.focus();
         return false;
	 }

    }
	  document.signform.submit();
}
//-->
</SCRIPT>

			<table width='510' border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
                         <tr bgcolor=f8f8f8><td align=center>
			 <input type=checkbox name=want1 value=1 <?if ($want1) {echo "checked";}?>>홀1짝5,홀5짝1 제거
			 <input type=checkbox name=want2 value=1 <?if ($want2) {echo "checked";}?>>홀2짝4,홀4짝2 제거
			 <input type=checkbox name=want3 value=1 <?if ($want3) {echo "checked";}?>>홀3짝3 제거
			 <input type=checkbox name=want4 value=1 <?if ($want4) {echo "checked";}?>>홀6,짝6 제거<br>
			 <input type=checkbox name=want11 value=1 <?if ($want11) {echo "checked";}?>>중복제거
			 <input type=checkbox name=want0 value=1 <?if ($want0) {echo "checked";}?>>원상태
			
                         </td>
			 </tr>
			 <tr>
			 <td><font color=navy> 중복제거란 예를 들면 10~19 까지의 숫자나 40~45 까지의 숫자가 반복해서 3개이상 나오는 것을 말합니다.</font>

			 </td></tr>
			 </table>
			 
			 <table align=center>
			 <tr><td align=center>

<input type=hidden name=select_count value=<?=$select_count?>>
<input type=hidden name=select_num value=<?=$select_num?>>

<input type="hidden" name="cate" value="<?=$cate?>">
<input type="hidden" name="sel" value="<?=$sel?>">
<input type="hidden" name="nextresult" value="1">
<input type="hidden" name="lotto_var" value="Y">
<input type="hidden" name="user_name" value="<?=$user_name?>">
<input type="hidden" name="your_user_name" value="<?=$your_user_name?>">
<input type="hidden" name="solunar" value="<?=$solunar?>">
<input type="hidden" name="my_solnuar" value="<?=$my_solnuar?>">
<input type="hidden" name="youn" value="<?=$youn?>">
<input type="hidden" name="sex" value="<?=$sex?>">
<input type="hidden" name="your_year" value="<?=$your_year?>">
<input type="hidden" name="your_month" value="<?=$your_month?>">
<input type="hidden" name="your_day" value="<?=$your_day?>">
<input type="hidden" name="your_hour" value="<?=$your_hour?>">
<input type="hidden" name="your_min" value="<?=$your_min?>">
<input type="hidden" name="your_youn" value="<?=$your_youn?>">
<input type="hidden" name="your_solunar" value="<?=$your_solunar?>">
<input type="hidden" name="request_year" value="<?=$request_year?>">
<input type="hidden" name="request_month" value="<?=$request_month?>">
<input type="hidden" name="request_day" value="<?=$request_day?>">
<input type="hidden" name="request_hour" value="<?=$request_hour?>">
<input type="hidden" name="request_min" value="<?=$request_min?>">


<input type=button value='           제거하기           ' onclick='javascript:checkIt();'>


			 </td></tr>
			 </table>

<br><br>

                        <table width='510'  border=0 cellspacing=1 cellpadding=5 bgcolor=CCCCCC align='center'>
                          <tr bgcolor=f8f8f8>   
                            <td width='55'  align='center'><b>번호</b></td>
                            <td width='100' align='center'><b>조합번호</b></td>
                            <td width='100' align='center'><b>홀짝</b></td>
			    
                            
			    <td width='55'  align='center'><b>번호</b></td>
                            <td width='100' align='center'><b>조합번호</b></td>
			    <td width='100' align='center'><b>홀짝</b></td>
                            
                          </tr>

<?
if (((!$want1)&&(!$want2)&&(!$want3)&&(!$want4)&&(!$want0)&&(!$want11))|| ($want0)){///////////////////////전부

for ($i=1; $i<$select_i+1; $i++) {

$index = $i;
	
	if($i%2 == 1){
		echo "<tr bgcolor=f8f8f8>";
	} 
	
	echo "
	<td align=center><b>$index</b></td>
	<td align=center bgcolor=FFFFFF>$games[$i]</td>
	<td align=center bgcolor=FFFFFF>$check[$i]</td>
	
       ";
	
	
	
	if($i%2 == 0){
		echo "</tr>";
	} 
}

if($select_count == 7){

       echo "
	<td align=center>&nbsp;</td>
	<td align=center>&nbsp;</td>
	<td align=center>&nbsp;</td>

	</tr>
       ";
} 

}

##################################################################################################
if ((!$want1)&&($want2)&&(!$want3)&&(!$want4)&&(!$want0)&&(!$want11)) {                           ///////////홀2짝4 홀4짝2 제거하기

                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
###################################################################################################
if (($want1)&&(!$want2)&&(!$want3)&&(!$want4)&&(!$want0)&&(!$want11)) {                          ///////////홀1짝5 홀5짝1 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if ((!$want1)&&(!$want2)&&($want3)&&(!$want4)&&(!$want0)&&(!$want11)) {         ///////////홀3짝3 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if ($check[$i] <> '홀3짝3') {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if ((!$want1)&&(!$want2)&&(!$want3)&&($want4)&&(!$want0)&&(!$want11)) {         ///////////홀6짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                         if (($check[$i] <> '홀6')&&($check[$i] <> '짝6')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&($want2)&&(!$want3)&&(!$want4)&&(!$want0)&&(!$want11)) {         ///////////홀1짝5 홀5짝1 홀2짝4 홀4짝2제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&(!$want2)&&($want3)&&(!$want4)&&(!$want0)&&(!$want11)) {         ///////////홀1짝5 홀5짝1 홀3짝3 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀3짝3')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&(!$want2)&&(!$want3)&&($want4)&&(!$want0)&&(!$want11)) {         ///////////홀1짝5 홀5짝1 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if ((!$want1)&&($want2)&&($want3)&&(!$want4)&&(!$want0)&&(!$want11)) {         ///////////홀2짝4 홀4짝2 홀3짝3 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀3짝3')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
if ((!$want1)&&($want2)&&(!$want3)&&($want4)&&(!$want0)&&(!$want11)) {         ///////////홀2짝4 홀4짝2 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
if ((!$want1)&&(!$want2)&&($want3)&&($want4)&&(!$want0)&&(!$want11)) {         ///////////홀3짝3 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀3짝3')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
 if (($want1)&&($want2)&&($want3)&&(!$want4)&&(!$want0)&&(!$want11)) {         ///////////홀1짝5 홀5짝1 홀2짝4 홀4짝2 홀3짝3  제거하기  
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀3짝3')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
if ((!$want1)&&($want2)&&($want3)&&($want4)&&(!$want0)&&(!$want11)) {         ///////////홀2짝4 홀4짝2 홀3짝3 홀6 짝6 제거하기		
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check[$i] <> '홀3짝3')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&($want2)&&(!$want3)&&($want4)&&(!$want0)&&(!$want11)) {         ///////////홀1짝5 홀5짝1 홀2짝4 홀4짝2 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&(!$want2)&&($want3)&&($want4)&&(!$want0)&&(!$want11)) {         ///////////홀1짝5 홀5짝1 홀3짝3  홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀3짝3')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')) {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################


###################################################################################################################
###################################################################################################################
####################################################################################################################
###################################################################################################################
##################################################################################################
if ((!$want1)&&(!$want2)&&(!$want3)&&(!$want4)&&(!$want0)&&($want11)) {                           ///////////홀2짝4 홀4짝2 제거하기

                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

##################################################################################################
if ((!$want1)&&($want2)&&(!$want3)&&(!$want4)&&(!$want0)&&($want11)) {                           ///////////홀2짝4 홀4짝2 제거하기

                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
###################################################################################################
if (($want1)&&(!$want2)&&(!$want3)&&(!$want4)&&(!$want0)&&($want11)) {                          ///////////홀1짝5 홀5짝1 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if ((!$want1)&&(!$want2)&&($want3)&&(!$want4)&&(!$want0)&&($want11)) {         ///////////홀3짝3 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀3짝3')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if ((!$want1)&&(!$want2)&&(!$want3)&&($want4)&&(!$want0)&&($want11)) {         ///////////홀6짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                         if (($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			 {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&($want2)&&(!$want3)&&(!$want4)&&(!$want0)&&($want11)) {         ///////////홀1짝5 홀5짝1 홀2짝4 홀4짝2제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&(!$want2)&&($want3)&&(!$want4)&&(!$want0)&&($want11)) {         ///////////홀1짝5 홀5짝1 홀3짝3 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀3짝3')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&(!$want2)&&(!$want3)&&($want4)&&(!$want0)&&($want11)) {         ///////////홀1짝5 홀5짝1 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3)) 
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if ((!$want1)&&($want2)&&($want3)&&(!$want4)&&(!$want0)&&($want11)) {         ///////////홀2짝4 홀4짝2 홀3짝3 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀3짝3')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
if ((!$want1)&&($want2)&&(!$want3)&&($want4)&&(!$want0)&&($want11)) {         ///////////홀2짝4 홀4짝2 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
if ((!$want1)&&(!$want2)&&($want3)&&($want4)&&(!$want0)&&($want11)) {         ///////////홀3짝3 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀3짝3')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3))
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
 if (($want1)&&($want2)&&($want3)&&(!$want4)&&(!$want0)&&($want11)) {         ///////////홀1짝5 홀5짝1 홀2짝4 홀4짝2 홀3짝3  제거하기  
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀3짝3')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3)) 
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}

####################################################################################################
if ((!$want1)&&($want2)&&($want3)&&($want4)&&(!$want0)&&($want11)) {         ///////////홀2짝4 홀4짝2 홀3짝3 홀6 짝6 제거하기		
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check[$i] <> '홀3짝3')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3)) 
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&($want2)&&(!$want3)&&($want4)&&(!$want0)&&($want11)) {         ///////////홀1짝5 홀5짝1 홀2짝4 홀4짝2 홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀2짝4')&&($check[$i] <> '홀4짝2')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3)) 
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
if (($want1)&&(!$want2)&&($want3)&&($want4)&&(!$want0)&&($want11)) {         ///////////홀1짝5 홀5짝1 홀3짝3  홀6 짝6 제거하기
                 for ($i=1; $i<$select_i+1; $i++) {

                          if (($check[$i] <> '홀1짝5')&&($check[$i] <> '홀5짝1')&&($check[$i] <> '홀3짝3')&&($check[$i] <> '홀6')&&($check[$i] <> '짝6')&&($check_q1[$i] < 3)&&($check_q2[$i] < 3)&&($check_q3[$i] < 3)&&($check_q4[$i] < 3)&&($check_q5[$i] < 3)) 
			  {$temp = $temp + 1; $games[$temp] = $games[$i]; $check[$temp] = $check[$i];}
                 

		 }
//echo "$temp";
}
####################################################################################################
		for ($m=1; $m<$temp+1; $m++) {

                       $index = $m;
	
	               if($m%2 == 1){
		            echo "<tr bgcolor=f8f8f8>";
	               } 
	
	

	               echo "
	              <td align=center><b>$index</b></td>
	              <td align=center bgcolor=FFFFFF>$games[$m]</td>
	              <td align=center bgcolor=FFFFFF>$check[$m]</td>
	
                       ";
		
	
	               if($m%2 == 0){
		             echo "</tr>";
	               } 
               
	       }
if($temp%2 == 1){

       echo "
	<td align=center>&nbsp;</td>
	<td align=center bgcolor=FFFFFF>&nbsp;</td>
	<td align=center bgcolor=FFFFFF>&nbsp;</td>
	
	</tr>
       ";
} ?>

</table>
</form>