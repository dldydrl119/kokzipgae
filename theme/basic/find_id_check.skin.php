<?php
if(!defined('_TUBEWEB_')) exit;
?>
<style type="text/css">
	@font-face {
		font-family: 'GmarketSansLight';
		src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansLight.woff') format('woff');
		font-weight: normal;
		font-style: normal;
	  }
	  
	  @font-face {
		font-family: 'GmarketSansBold';
		src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff');
		font-weight: normal;
		font-style: normal;
	  }
	  
	  @font-face {
		font-family: 'GmarketSansMedium';
		src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansMedium.woff') format('woff');
		font-weight: normal;
		font-style: normal;
	  }



	@media (max-width: 768px){
		form, form fieldset input[type=button]{font-family: 'GmarketSansMedium';}
		form{
			width: 680px; height: 543px; background-color: #1a1a1a; padding: 59px 0;
			text-align: center; color: #ffffff; border: 1px solid #ffffff; border-radius: 10px;
			box-sizing: border-box;
		}
		form fieldset{border: none; padding: 0; margin: 0;}
		form fieldset:after{
			content: ''; display: block; visibility: hidden; clear: both;
		}
		form fieldset legend{display: none;}
		form fieldset img{display: inline-block; margin-bottom: 23px; width: 61px;}
		form fieldset p{line-height: 1;}
		form fieldset p:first-of-type{font-size: 30px; margin: 0;}
		form fieldset input[type="text"]{
			width: 500px; height: 62px; font-size: 30px; color: #000000; 
			text-align: center; margin: 60px 0 30px; border: 1px solid #aaaaaa; box-sizing: border-box;
		}
		form fieldset p:last-of-type{font-family: 'GmarketSansLight'; font-size: 18px; margin: 0 0 60px;}
		form fieldset input[type=button]{
			float: left; display: block; width: 246px; height: 73px; background-color: #4a4a4a; color: #ffffff;
			border: 1px solid #ffffff; border-radius: 3px; font-size: 30px;
		}
		form fieldset input[type=button]{margin-left: 89px;}
		form fieldset input[type=button]:last-of-type{margin-left: 19px;}
	}

	@media (min-width: 769px){
		form, form fieldset input[type=button]{font-family: 'GmarketSansMedium';}
		form{
			width: 680px; height: 399px; background-color: #1a1a1a; padding: 59px 0;
			text-align: center; color: #ffffff; border: 1px solid #ffffff; border-radius: 10px;
			box-sizing: border-box;
		}
		form fieldset{border: none; padding: 0; margin: 0;}
		form fieldset:after{
			content: ''; display: block; visibility: hidden; clear: both;
		}
		form fieldset legend{display: none;}
		form fieldset img{display: inline-block; margin-bottom: 20px;}
		form fieldset p{line-height: 1;}
		form fieldset p:first-of-type{font-size: 25px; margin: 0;}
		form fieldset input[type="text"]{
			width: 500px; height: 45px; font-size: 23px; color: #000000; 
			text-align: center; margin: 30px 0; border: 1px solid #aaaaaa; box-sizing: border-box;
		}
		form fieldset p:last-of-type{font-family: 'GmarketSansLight'; font-size: 16px; margin: 0 0 30px;}
		form fieldset input[type=button]{
			float: left; display: block; width: 162px; height: 35px; background-color: #4a4a4a; color: #ffffff;
			border: 1px solid #ffffff; border-radius: 3px; font-size: 16px;
		}
		form fieldset input[type=button]{margin-left: 162px;}
		form fieldset input[type=button]:last-of-type{margin-left: 30px;}
	}

	
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아이디 찾기 팝업</title>
</head>
<body>
    <form action="#">
        <fieldset>
            <legend>아이디 찾기 팝업</legend>
            <img src="/img/ico.png" alt="searchIcon">
            <p>회원님의 아이디 찾기 결과입니다.</p>
            <input type="text"  value="<?=$mb['id']?>" readonly >
            <p>* 문제가 해결되지 않은 경우 고객센터를 이용해 주세요.</p>
            <input type="button" value="비밀번호 찾기" onclick="javascript:opener.location.href = '<?php echo TB_BBS_URL; ?>/find_pwd.php';window.close();">
            <input type="button" value="로그인하기" onclick="javascript:opener.location.href = '<?php echo TB_BBS_URL; ?>/login.php';window.close();">
        </fieldset>
    </form>
</body>
</html>