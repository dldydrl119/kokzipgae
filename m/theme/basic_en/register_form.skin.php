﻿<?php
if(!defined("_TUBEWEB_")) exit; // No access to individual pages
?>

<form name="fregisterform" id="fregisterform" action="<?php echo $register_action_url; ?>" onsubmit="return fregisterform_submit(this);" method="post" autocomplete="off">
<input type="hidden" name="w" value="<?php echo $w; ?>">
<input type="hidden" name="pt_id" value="<?php echo $pt_id; ?>">
<input type="hidden" name="token" value="<?php echo $token; ?>">

<div class="tbl_frm01 tbl_wrap">
	<table>
	<colgroup>
		<col class="w100">
		<col>
	</colgroup>
	<tbody>
	<tr>
		<th scope="row"><label for="reg_mb_name">Name of member</label></th>
		<td>
			<input type="text" name="name" value="<?php echo $member['name']; ?>" id="reg_mb_name" required itemname="Name of member" class="frm_input required"<?php if($w=='u' || $default['de_certify_use']) echo $readonly; ?>>			
		</td>
	</tr>
	<tr>
		<th scope="row"><label for="reg_mb_id">ID</label></th>
		<td>
			<input type="text" name="id" value="<?php echo $member['id']; ?>" id="reg_mb_id" required memberid itemname="ID" class="frm_input required" onkeyup="reg_mb_id_ajax();" minlength="3" maxlength="20"<?php if($w=='u') echo $readonly; ?>>
			<span class="frm_info" id="msg_mb_id">cancel Enter three or more alphabetic characters, numbers, and _only</span>
		</td>
	</tr>
	<?php if($w=='') { ?>
	<tr>
		<th scope="row"><label for="reg_mb_password">pass word</label></th>
		<td>
			<input type="password" name="passwd" id="reg_mb_password" required itemname="password" class="frm_input required" minlength="4" maxlength="20">
			<span class="frm_info">4+ characters in English and Numeric</span>
		</td>
	</tr>
	<tr>
		<th scope="row"><label for="reg_mb_password_re">Password verification</label></th>
		<td><input type="password" name="repasswd" id="reg_mb_password_re" required itemname="Password verification" class="frm_input required" minlength="4" maxlength="20"></td>
	</tr>
	<?php } else if($w=='u') { ?>
	<tr>
		<th scope="row"><label for="reg_mb_password_db">Current password</label></th>
		<td><input type="password" name="dbpasswd" id="reg_mb_password_db" required itemname="Current password" class="frm_input required" minlength="4" maxlength="20"></td>
	</tr>
	<tr>
		<th scope="row"><label for="reg_mb_password">New password</label></th>
		<td>
			<input type="password" name="passwd" id="reg_mb_password" class="frm_input" minlength="4" maxlength="20">
			<span class="frm_info">4+ characters in English and Numeric</span>
		</td>
	</tr>
	<tr>
		<th scope="row"><label for="reg_mb_password_re">Confirm new password</label></th>
		<td><input type="password" name="repasswd" id="reg_mb_password_re" class="frm_input" minlength="4" maxlength="20"></td>
	</tr>
	<?php } ?>	
	<tr>
		<th scope="row">the date of one’s birth</th>
		<td>	
			<label for="reg_mb_birth_year" class="sound_only"></label>
			<input type="text" name="birth_year" value="<?php echo $member['birth_year']; ?>" id="reg_mb_birth_year" required itemname="the date of one’s birth" class="frm_input required" maxlength="4" size="5"<?php if($default['de_certify_use']) echo $readonly; ?>>year
			
			<label for="reg_mb_birth_month" class="sound_only"></label>
			<input type="text" name="birth_month" value="<?php echo $member['birth_month']; ?>" id="reg_mb_birth_month" required itemname="the date of one’s birth" class="frm_input required" maxlength="2" size="5"<?php if($default['de_certify_use']) echo $readonly; ?>>month
			
			<label for="reg_mb_birth_day" class="sound_only"></label>
			<input type="text" name="birth_day" value="<?php echo $member['birth_day']; ?>" id="reg_mb_birth_day" required itemname="the date of one’s birth" class="frm_input required" maxlength="2" size="5"<?php if($default['de_certify_use']) echo $readonly; ?>>day
		</td>
	</tr>
	<tr>
		<th scope="row"><label for="reg_mb_birth_type">
Lifting / lunar power</label></th>
		<td>
			<select name="birth_type" id="reg_mb_birth_type">
				<?php echo option_selected('S', $member['birth_type'], '
Lifting'); ?>
				<?php echo option_selected('L', $member['birth_type'], 'lunar power'); ?>
			</select>
		</td>
	</tr>
	<tr>
		<th scope="row"><label for="reg_mb_gender">jender</label></th>
		<td>
			<select name="gender" id="reg_mb_gender">
				<?php echo option_selected('',  $member['gender'], 'jender'); ?>
				<?php echo option_selected('M', $member['gender'], 'man'); ?>
				<?php echo option_selected('F', $member['gender'], 'woman'); ?>
			</select>
		</td>
	</tr>
	<?php if($config['register_use_tel']) { ?>
	<tr>
		<th scope="row"><label for="reg_telephone">phone number</label></th>
		<td>
			<input type="text" name="telephone" value="<?php echo $member['telephone']; ?>" id="reg_telephone"<?php echo $config['register_req_tel']?' required':''; ?> itemname="Phone number" class="frm_input<?php echo $config['register_req_tel']?' required':''; ?>">
		</td>
	</tr>
	<?php } ?>
	<?php if($config['register_use_hp']) { ?>
	<tr>
		<th scope="row"><label for="reg_cellphone">cell phone</label></th>
		<td>
			<input type="text" name="cellphone" value="<?php echo $member['cellphone']; ?>" id="reg_cellphone"<?php echo $config['register_req_hp']?' required':''; ?> itemname="cell phone" class="frm_input<?php echo $config['register_req_hp']?' required':''; ?>">
			<div class="padt5">
				<input type="checkbox" name="smsser" value="Y" id="smsser_yes"<?php echo get_checked('Y', $member['smsser']); ?> class="css-checkbox lrg"><label for="smsser_yes" class="css-label">
Receive SMS.</label>
			</div>
		</td>
	</tr>
	<?php } ?>
	<?php if($config['register_use_email']) { ?>
	<tr>
		<th scope="row"><label for="reg_mb_email">E-mail</label></th>
		<td>
			<input type="email" name="email" value="<?php echo $member['email']; ?>" id="reg_mb_email"<?php echo $config['register_req_email']?' required':''; ?> email itemname="E-mail" class="frm_input<?php echo $config['register_req_email']?' required':''; ?>">
			<div class="padt5">
				<input type="checkbox" name="mailser" value="Y" id="mailser_yes"<?php echo get_checked('Y', $member['mailser']); ?> class="css-checkbox lrg"><label for="mailser_yes" class="css-label">Receive E-Mail.</label>
			</div>
		</td>
	</tr>
	<?php } ?>
	<?php if($config['register_use_addr']) { ?>
	<tr>
		<th scope="row">Address</th>
		<td>
			<label for="reg_mb_zip" class="sound_only">Postal code</label>
			<input type="text" name="zip" value="<?php echo $member['zip']; ?>" id="reg_mb_zip"<?php echo $config['register_req_addr']?' required':''; ?> itemname="Postal code" class="frm_input<?php echo $config['register_req_addr']?' required':''; ?>" size="5" maxlength="5" readonly>
			<button type="button" class="btn_small grey" onclick="win_zip('fregisterform', 'zip', 'addr1', 'addr2', 'addr3', 'addr_jibeon');">Address search</button><br>

			<label for="reg_mb_addr1" class="sound_only">Address</label>
			<input type="text" name="addr1" value="<?php echo $member['addr1']; ?>" id="reg_mb_addr1"<?php echo $config['register_req_addr']?' required':''; ?> itemname="Address" class="frm_input frm_address<?php echo $config['register_req_addr']?' required':''; ?>" readonly><br>
			
			<label for="reg_mb_addr2" class="sound_only">Detail address</label>
			<input type="text" name="addr2" value="<?php echo $member['addr2']; ?>" id="reg_mb_addr2" class="frm_input frm_address"><br>
			
			<label for="reg_mb_addr3" class="sound_only">Reference item</label>
			<input type="text" name="addr3" value="<?php echo $member['addr3']; ?>" id="reg_mb_addr3" class="frm_input frm_address" readonly>
			<input type="hidden" name="addr_jibeon" value="<?php echo $member['addr_jibeon']; ?>">
		</td>
	</tr>
	<?php } ?>
	</tbody>
	</table>
</div>

<div class="btn_confirm">
	<input type="submit" value="<?php echo $w==''?'join membership':'Modifying information'; ?>" id="btn_submit" class="btn_medium wset" accesskey="s">
	<a href="<?php echo TB_MURL; ?>" class="btn_medium bx-white"cancel</a>
</div>
</form>

<script>
function fregisterform_submit(f)
{
	var str;
	<?php if($w=='') { ?>
	var mb_id = reg_mb_id_check(f.id.value);
	if(mb_id) {
		alert("'"+mb_id+"'This ID is not available.");
		f.id.focus();
		return false;
	}
	<?php } ?>

    // Member ID check
	if(f.id.value.length < 3) {
		alert('Please enter at least 3 characters of ID.');
		f.id.focus();
		return false;
	}

	<?php if($w=='') { ?>
    // password check
	if(f.passwd.value.length < 4) {
		alert('Please enter a password with at least 4 characters.');
		f.passwd.focus();
		return false;
	}

    if(f.passwd.value != f.repasswd.value) {
        alert('The password is not the same.');
        f.repasswd.focus();
        return false;
    }

    if(f.passwd.value.length > 0) {
        if(f.repasswd.value.length < 4) {
            alert('Please enter a password with at least 4 characters.');
            f.repasswd.focus();
            return false;
        }
    }

	str = "join membership";
	<?php } else if($w=='u') { ?>
	if(f.passwd.value) {
		// password check
		if(f.passwd.value.length < 4) {
			alert('Please enter a password with at least 4 characters.');
			f.passwd.focus();
			return false;
		}

		if(f.passwd.value != f.repasswd.value) {
			alert('The password is not the same.');
			f.repasswd.focus();
			return false;
		}

		if(f.passwd.value.length > 0) {
			if(f.repasswd.value.length < 4) {
				alert('Please enter a password with at least 4 characters.');
				f.repasswd.focus();
				return false;
			}
		}
	}

	str = "Modifying information";
	<?php } ?>

	<?php if($config['register_use_email']) { ?>
	// Unavailable E-mail Domains
	var domain = prohibit_email_check(f.email.value);
	if(domain) {
		alert("'"+domain+"'This is an e-mail that you cannot use.");
		f.email.focus();
		return false;
	}
	<?php } ?>

	if(confirm(str+" Would you like to?") == false)
		return false;

	document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

// Member ID check
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

// Scan Prohibited Mail Domain
function prohibit_email_check(email)
{
    email = email.toLowerCase();

    var prohibit_email = "<?php echo trim(strtolower(preg_replace("/(\r\n|\r|\n)/", ",", $config['prohibit_email']))); ?>";
    var s = prohibit_email.split(",");
    var tmp = email.split("@");
    var domain = tmp[tmp.length - 1]; // I only get the mail domain

    for(i=0; i<s.length; i++) {
        if(s[i] == domain)
            return domain;
    }
    return "";
}

function reg_mb_id_ajax() {
	var mb_id = $.trim($("#reg_mb_id").val());
	$.post(
		tb_bbs_url+"/ajax.mb_id_check.php",
		{ mb_id: mb_id },
		function(data) {
			$("#msg_mb_id").empty().html(data);
		}
	);
}
</script>
