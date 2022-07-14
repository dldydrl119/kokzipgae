<?

function popup_msg($msg) {
echo("
<body background=/21C_back.gif>
<script language='javascript'> 
alert('$msg');
history.back();
</script>



");
}

function error($errcode) {
   switch ($errcode) {
      case ("OVERDAY_ERROR") :
	 popup_msg("입력하신 날짜는 현재 이후입니다.\\n\\n다시 입력해 주십시요.");
         break;

      case ("YANGDATE_ERROR") :
	 popup_msg("입력하신 양력 날짜가 잘못되었습니다.\\n\\n정확히 입력해 주십시요.");
         break;

      case ("YOUR_YANGDATE_ERROR") :
	 popup_msg("상대방의 양력 날짜가 잘못되었습니다.\\n\\n정확히 입력해 주십시요.");
         break;     

      case ("MY_YANGDATE_ERROR") :
	 popup_msg("본인의 양력 날짜가 잘못되었습니다.\\n\\n정확히 입력해 주십시요.");
         break;     

      case ("SO_MANY_SEARCH") :
         popup_msg("입력하신 검색어의 결과가 너무 많습니다.\\n\\n20 자 이내의 문장을 입력하셔도 검색 가능합니다.");
         break;

      case ("INVALID_NAME") :
         popup_msg("입력하신 이름은 허용되지 않는 문자열입니다.\\n\\n이름은 반드시 한글로 공백없이 입력하셔야 합니다.");
         break;

      case ("INVALID_HNAME_m") :
         popup_msg("본인의 성씨를 선택하십시요.");
         break;

      case ("INVALID_HNAME_y") :
         popup_msg("상대방의 성씨를 선택하십시요.");
         break;

      
      case ("INVALID_HNAME_SPACE") :
         popup_msg("입력한 성씨가 없거나 한자가 아닙니다.\\n\\n확인하시고 다시 입력하세요.");
         break;

      case ("UMDATE_ERROR") :
         popup_msg("입력하신 음력날짜가 잘못되었습니다.\\n\\n음력날짜를 정확히 입력하여야 합니다.");
         break;

      case ("YOUR_UMDATE_ERROR") :
         popup_msg("상대방의 음력 날짜가 잘못되었습니다.\\n\\n음력날짜를 정확히 입력하여야 합니다.");
         break;

      case ("MY_UMDATE_ERROR") :
         popup_msg("본인의 음력 날짜가 잘못되었습니다.\\n\\n음력날짜를 정확히 입력하여야 합니다.");
         break;

      case ("ERROR_GAJOK") :
         popup_msg("입력하신 가족관계가 잘못되었습니다.\\n\\n정확히 입력하여야 합니다.");
         break;


      case ("YOUN_ERROR") :
         popup_msg("윤달, 평달 구분이 잘못되었습니다.\\n\\n윤달, 평달 구분을 정확히 입력하여야 합니다.");
         break;

      
      case ("NOEXE") :
         popup_msg("귀하께서는 아직 검사를 하지않으셨군요.\\n\\n검사를 하신후에 결과보기를 누르세요.");
         break;
	 
      case ("INVALID_ID") :
         popup_msg("입력하신 아이디는 허용되지 않는 문자열입니다.\\n\\n아이디는 5 ~ 10자의 영문소문자나 숫자 또는 조합된 문자열이어야 합니다.");
         break;         

      case ("INVALID_PASSWD") :
         popup_msg("입력하신 비밀번호는 허용되지 않는 문자열입니다.\\n\\n비밀번호는 4 ~ 8자의 영문소문자나 숫자 또는 조합된 문자열이어야 합니다.");
         break;         

      case ("INVALID_BIRTHDAY") :
         popup_msg("선택하신 생년월일이 잘못되었습니다.\\n\\n올바른 생년월일을 선택하여 주십시오.");
         break;                  
         
      case ("INVALID_EMAIL") :
         popup_msg("입력하신 전자우편주소는 올바른 주소가 아닙니다. \\n\\n다시 입력하여 주십시오.");
         break;                 

      case ("INVALID_HOMEPAGE") :
         popup_msg("입력하신 주소는 올바른 홈페이지주소가 아닙니다. \\n\\n다시 입력하여 주십시오.");
         break;
         
      case ("ID_EXISTS") :
         popup_msg("신청하신 아이디(ID)는 이미 등록되어 있습니다. \\n\\n다른 아이디로 신청하여 주십시오.");
         break;

      case ("LOGIN_ID_NOT_FOUND") :
         popup_msg("입력하신 아이디(ID)는 등록되어 있지 않습니다. \\n\\n다시한번 확인하시고 입력하여 주십시오.");
         break;                  

       case ("LOGIN_INVALID_NO") :
         popup_msg("입력하신 등록번호가 맞지 않습니다. \\n\\n다시한번 확인하시고 입력하여 주십시오.");
         break;
      
       case ("LOGIN_INVALID_1NO") :
         popup_msg("입력하신 승인번호가 맞지 않습니다. \\n\\n다시한번 확인하시고 입력하여 주십시오.");
         break;

     case ("LOGIN_INVALID_2NO") :
         popup_msg("입력하신 운세권 번호가 맞지 않습니다. \\n\\n다시한번 확인하시고 입력하여 주십시오.");
         break;

      case ("LOGIN_OVER_NO") :
         popup_msg("입력하신 등록번호는 24시간이 지났습니다. \\n\\n다시한번 등록하여 주십시오.");
         break; 

      case ("LOGIN_OVER_1NO") :
         popup_msg("입력하신 승인번호는 24시간이 지났습니다.$during \\n\\n다시 승인번호를 신청하여 주십시오.");
         break; 


      case ("LOGIN_INVALID_PW") :
         popup_msg("회원님이 입력하신 비밀번호가 맞지 않습니다. \\n\\n다시한번 확인하시고 입력하여 주십시오.");
         break;            

      case ("LOGIN_INVALID_KEY") :
         popup_msg("회원님이 입력하신 인증키 번호가 맞지 않습니다. \\n\\n다시한번 확인하시고 입력하여 주십시오.");
         break;            
      
      case ("UPDATE_MEMBER_INVALID_MODE") :
         popup_msg("부적절한 실행옵션으로 인해 회원정보를 수정할 수 없습니다. \\n\\n관리자에게 문의하여 주십시오.");
         break;
 
       case ("S_NO_EXISTS") :
         popup_msg("없는 번호입니다.. \\n\\n관리자에게 문의하여 주십시오.");
         break;
				    
       case ("S_NO_ALLREDY") :
         popup_msg("이미 사용한 번호입니다.. \\n\\n관리자에게 문의하여 주십시오.");
         break;





      case ("QUERY_ERROR") :      
         $err_no = mysql_errno();
         $err_msg = mysql_error();         
         $error_msg = "ERROR CODE " . $err_no . " : $err_msg";                           
         $error_msg = addslashes($error_msg);         
         popup_msg($error_msg);  
         break;

      case ("DB_ERROR") :      
         $err_no = mysql_errno();
         $err_msg = mysql_error();         
         $error_msg = "ERROR CODE " . $err_no . " : $err_msg";                           
         echo("$error_msg");
         break;

      default :
   }
}
?>