<?php
if(!defined('_TUBEWEB_')) exit;
?>

<form name="fregisterform" id="fregisterform" action="<?php echo $register_action_url; ?>" onsubmit="return fregisterform_submit(this);" method="post" autocomplete="off">
<input type="hidden" name="pt_id" value="<?php echo $pt_id; ?>">
<input type="hidden" name="token" value="<?php echo $token; ?>">

<div><img src="<?php echo TB_IMG_URL; ?>/register_2.gif"></div>

<h3>网站使用信息输入</h3>
<div class="tbl_frm01 tbl_wrap">
	<table>
	<colgroup>
		<col class="w140">
		<col>
	</colgroup>
	<tbody>
	<tr>
		<th scope="row">会员名</th>
		<td><input type="text" name="name" value="<?php echo $cert_name; ?>" <?php if($default['de_certify_use']){echo $readonly;}?> required itemname="会员名" class="frm_input required" size="20"></td>
	</tr>
	<tr>
		<th scope="row">用户名</th>
		<td>
			<input type="text" name="id" id="mb_id" required memberid itemname="用户名" class="frm_input required" onkeyup="reg_mb_id_ajax();" size="20" minlength="3" maxlength="20">
			<span id="msg_mb_id" class="marl5"></span>
			<span class="frm_info">※ 只能输入英文字母,数字,_。 请至少输入3字以上。</span>
		</td>
	</tr>
	<tr>
		<th scope="row">密码</th>
		<td>
			<input type="password" name="passwd" required itemname="密码" class="frm_input required" size="20" minlength="4" maxlength="20">
			<span class="frm_info">※ 四字以上的英文和数字</span>
		</td>
	</tr>
	<tr>
		<th scope="row">密码确认</th>
		<td><input type="password" name="repasswd" required itemname="密码确认" class="frm_input required" size="20" minlength="4" maxlength="20"></td>
	</tr>
	</tbody>
	</table>
</div>

<h3 class="mart30">个人信息输入</h3>
<div class="tbl_frm01 tbl_wrap">
	<table>
	<colgroup>
		<col class="w140">
		<col>
	</colgroup>
	<tbody>
	<tr>
		<th scope="row">出生年月日</th>
		<td>
			<div class="ini_wrap">
			<table>
			<tr>
				<td><input type="text" name="birth_year" value="<?php echo $cert_year; ?>" required itemname="出生年月日" <?php if($default['de_certify_use']){echo $readonly;}?> class="frm_input required" size="8" maxlength="4"> 年</td>
				<td class="padl5"><input type="text" name="birth_month" value="<?php echo $cert_month; ?>" required itemname="出生年月日" <?php if($default['de_certify_use']){echo $readonly;}?> class="frm_input required" size="4" maxlength="2"> 月</td>
				<td class="padl5"><input type="text" name="birth_day" value="<?php echo $cert_day; ?>" required itemname="出生年月日" <?php if($default['de_certify_use']){echo $readonly;}?> class="frm_input required" size="4" maxlength="2"> 事</td>
				<td class="padl5">
					<select name="gender">
						<option value="">性别</option>
						<option value="M"<?php if($cert['j_sex']=='1'){echo " selected";}?>>男人</option>
						<option value="F"<?php if($cert['j_sex']=='0'){echo " selected";}?>>女子</option>
					</select>
				</td>
				<td class="padl5">
					<select name="birth_type">
						<option value="S">阳历</option>
						<option value="L">阴历</option>
					</select>
				</td>
			</tr>
			</table>
			</div>
		</td>
	</tr>
	<?php if($config['register_use_tel']) { ?>
	<tr>
		<th scope="row">电话号码</th>
		<td><input type="text" name="telephone" size="20"<?php echo $config['register_req_tel']?' required':''; ?> itemname="电话号码" class="frm_input<?php echo $config['register_req_tel']?' required':''; ?>"></td>
	</tr>
	<?php } ?>
	<?php if($config['register_use_hp']) { ?>
	<tr>
		<th scope="row">手机</th>
		<td>
			<input type="text" name="cellphone" value="<?php echo $cert['cell']; ?>" <?php if($default['de_certify_use'] && $cert['cell']){echo $readonly;}?> size="20"<?php echo $config['register_req_hp']?' required':''; ?> itemname="手机" class="frm_input<?php echo $config['register_req_hp']?' required':''; ?>">
			<input type="checkbox" checked value="Y" name="smsser" class="marl7"> 接收SMS。
		</td>
	</tr>
	<?php } ?>
	<?php if($config['register_use_email']) { ?>
	<tr>
		<th scope="row">电子邮件</th>
		<td>
			<input type="text" name="email"<?php echo $config['register_req_email']?' required':''; ?>
			email itemname="电子邮件" class="frm_input<?php echo $config['register_req_email']?' required':''; ?>" size="40">
			<input type="checkbox" checked value="Y" name="mailser" class="marl7"> 接收E-Mail。
		</td>
	</tr>
	<?php } ?>
	<?php if($config['register_use_addr']) { ?>
	<tr>
		<th scope="row">住址</th>
		<td>
			<div>
				<input type="text" name="zip"<?php echo $config['register_req_addr']?' required':''; ?> itemname="邮政编码" class="frm_input<?php echo $config['register_req_addr']?' required':''; ?>" size="8" maxlength="5" readonly>
				<a href="javascript:win_zip('fregisterform', 'zip', 'addr1', 'addr2', 'addr3', 'addr_jibeon');" class="btn_small grey marl3">地址检索</a>
			</div>
			<div class="mart5">
				<input type="text" name="addr1"<?php echo $config['register_req_addr']?' required':''; ?> itemname="住址" class="frm_input<?php echo $config['register_req_addr']?' required':''; ?>" size="60" readonly> 默认地址
			</div>
			<div class="mart5">
				<input type="text" name="addr2" class="frm_input" size="60"> 详细地址
			</div>
			<div class="mart5">
				<input type="text" name="addr3" class="frm_input" size="60" readonly> 参考项目
				<input type="hidden" name="addr_jibeon" value="">
			</div>
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
</div>

<div class="btn_confirm">
	<input type="submit" value="注册会员" id="btn_submit" class="btn_large wset" accesskey="s">
	<a href="<?php echo TB_URL; ?>" class="btn_large bx-white">取消</a>
</div>
</form>

<script>
function fregisterform_submit(f)
{
	var mb_id = reg_mb_id_check(f.id.value);
	if(mb_id) {
		alert("'"+mb_id+"'不能使用银的ID。");
		f.id.focus();
		return false;
	}

    // 회원아이디 검사
	if(f.id.value.length < 3) {
		alert("请输入3个以上用户名。");
		f.id.focus();
		return false;
	}

    // 패스워드 검사
	if(f.passwd.value.length < 4) {
		alert("请输入4个以上密码。");
		f.passwd.focus();
		return false;
	}

    if(f.passwd.value != f.repasswd.value) {
        alert("密码不一样");
        f.repasswd.focus();
        return false;
    }

    if(f.passwd.value.length > 0) {
        if(f.repasswd.value.length < 4) {
            alert("请输入4个以上密码。");
            f.repasswd.focus();
            return false;
        }
    }

	<?php if($config['register_use_email']) { ?>
	// 不能使用的E-mail域名
	var domain = prohibit_email_check(f.email.value);
	if(domain) {
		alert("'"+domain+"'不能使用银的邮件。");
		f.email.focus();
		return false;
	}
	<?php } ?>

	if(confirm("确定要注册会员吗?") == false)
		return false;

	document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

// 회원아이디 검사
function reg_mb_id_check(mb_id)
{
    mb_id = mb_id.toLowerCase();

    var prohibit_mb_id = "<?php echo trim(strtolower($config['prohibit_id'])); ?>";
    var s = prohibit_mb_id.split(",");

    for(i=0; i<s.length; i++) {
        if(s[i] == mb_id)
            return mb_id;
    }
    return "";
}

// 禁止邮件域名检查
function prohibit_email_check(email)
{
    email = email.toLowerCase();

    var prohibit_email = "<?php echo trim(strtolower(preg_replace("/(\r\n|\r|\n)/", ",", $config['prohibit_email']))); ?>";
    var s = prohibit_email.split(",");
    var tmp = email.split("@");
    var domain = tmp[tmp.length - 1]; // 只获得邮件域名

    for(i=0; i<s.length; i++) {
        if(s[i] == domain)
            return domain;
    }
    return "";
}

function reg_mb_id_ajax() {
	var mb_id = $.trim($("#mb_id").val());
	$.post(
		tb_bbs_url+"/ajax.mb_id_check.php",
		{ mb_id: mb_id },
		function(data) {
			$("#msg_mb_id").empty().html(data);
		}
	);
}
</script>