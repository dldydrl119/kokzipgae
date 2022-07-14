<!-- =============================================================================== -->
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<link rel="stylesheet" href="/theme/basic/style.css">
<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src = 
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-MPFD645');
</script>



<!-- End Google Tag Manager -->
<?
include "../incs/function.php";
include "../incs/comm_form.php";
?>
<!-- =============================================================================== -->
<html>

<head>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPFD645" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<body topmargin="0" leftmargin="0">
	<?
	$v_strFname 			= "../data/etcDATA.dat";
	$arr_adminInfo		= f_Arr_readAdmin($v_strFname);

	?>
	<table cellpadding="0" cellspacing="0" class="unsebackground" border="0" align="center">


		<tR>
			<Td valign="top">
				<table cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF" height=100%>
					<tR>
						<tD width="791" valign="top" align="CenteR">
							<?
							include "../forms/saju_form.php";
							?>
						</tD>
					</tR>
				</table>

			</td>

		</tR>

	</table>


</body>

</html>