<? include "../../db_connect/db_connect.php"; ?>
<? include "../../common/function.php"; ?>

<!-- #yourCheck# -->

<!-- 폼값 확인 -->
<? include "../../common/requestBuffer.php"; ?>

<!-- #autoMyBuffer# -->
<!-- #autoYourBuffer# -->
<!-- 사주명식 -->
<!-- 별자리인데 붎필요 -->
<? include "../../solve/setting_var.php"; ?>
<!-- 천간 지지 -->
<? include "../../solve/sajujowha.php"; ?>
<!-- 사주 조화  -->
<? include "../../solve/saju_made.php"; ?>
<!-- 별 영향없음 -->
<? include "../../solve/saju_date.php"; ?>
<!-- 별 영향 없음 -->
<? include "../../solve/saju_made_mate.php"; ?>

<!-- #sajujowha_your.php# -->
<!-- 신살 -->
<? include "../../solve/12sinsal.php"; ?>
<!-- 모르겠음 -->
<? include "../../solve/12unsung.php"; ?>
<!-- 기운 그래프 -->
<? include "../../solve/sinyaksingang.php"; ?>
<!-- 십신 -->
<? include "../../solve/sipsin.php"; ?>
<? include "../../solve/daeun_sipsin.php"; ?>

<!-- #Janimal.php# -->
<!-- #Nanimal.php# -->


<?
$UNSE_TITLE = "콕집게 오늘의 운세";
$title_var = "<a href='#0'><font color='#FFFFFF'><b>자평명리학 오늘의 운세</b></font></a>&nbsp;&nbsp;|&nbsp;&nbsp;";
$o_manse_data = "Y";
$manse_data = "Y";
$ohang_data = "Y";
$yukhyo_data = "Y";
$week_data = "N";
$puritime_data = "Y";
$puritime_data1 = "Y";
$puritime_data2 = "Y";
$puritime_data3 = "Y";
$puritime_data4 = "Y";
?>
<!-- 상위 기본값 인클루드 -->
<? include "../../common/include_top_c2.php"; ?>

<!-- 운세결과물 출력 시작 -->

<table style="width:100%;" align="Center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">

    <tR>
        <td align='center'><A name='#0'><img src='/UNSE_DATA/images/c2_img/MB_img/today.jpg'></td>
    </tr>
    <?
    if ($puritime_data != "Y") {

        if ($_COOKIE['username']) {
            $user_name = $_COOKIE['username'];
        } else {
            $user_name = "고객";
        }


        $umyang_text = "";
    } else {
        $user_name = $user_name;
        $umyang_text = "<font color='#000'>" . $my_date_str . "&nbsp;(양)&nbsp;" . $my_time_str . "&nbsp;&nbsp;|&nbsp;&nbsp;" . $my_um_date_str . "&nbsp;(음)&nbsp;" . $my_time_str . "</font>";
    }

    $now_year = date("Y");
    $now_month = date("m");
    $now_day = date("d");
    $now_yoil = F_yoil(date("w"));
    $now_day_part = date("a");
    switch ($now_day_part) {
        case "am":
            $now_day_part = "오전";
        case "pm":
            $now_day_part = "오후";
    }
    $now_hour = date("h");
    $now_min = date("i");

    if (strlen($now_month) == 1) {
        $now_month = "0" . $now_month;
    }
    if (strlen($now_day) == 1) {
        $now_day = "0" . $now_day;
    }
    if ($now_hour > 12) {
        $now_hour = $now_hour - 12;
    }
    if (strlen($now_hour) == 1) {
        $now_hour = "0" . $now_hour;
    }
    if (strlen($now_min) == 1) {
        $now_min = "0" . $now_min;
    }

    $puri_time = "<font color='#000'>" . $now_year . "년 " . $now_month . "월 " . $now_day . "일 (" . $now_yoil . ") / " . $now_day_part . " " . $now_hour . ":" . $now_min . "</font>"
    ?>
    <div id="unse_top">
        <div class="unse_top1">
            <div class="unse_box">
                <img src="/images/title_img.jpg">
                <div class="text">
                    <p><?= $user_name ?>님의 오늘의 운세</p>
                </div>
            </div>
        </div>
    </div>

    <!-- #S_S046_sol.php# -->
    <!-- #S_S047_sol.php# -->

    <!-- #S_S129_sol.php# -->

    <!-- #S_S131_sol.php# -->
    <!-- #S_S132_sol.php# -->
    <!-- #S_S128_sol.php# -->



    <!-- #S_S094_S101_sol.php# -->

    <!-- #S_S103_S110_sol.php# -->

    <!-- #S_S136_S141_sol.php# -->

    <!-- #S_J017_J030_sol.php# -->

    <!-- #S_N008_N014_sol_Rand.php# -->

    <!-- #S_N008_N014_sol.php# -->

    <!-- #S_G030_G034_sol.php# -->

    <!-- 무슨운세알려주는칸 -->
    <?
    //  S_SB_img("S087", $solution_var);
    ?>
    <tr>
        <td style="<?= $fontcolor ?>; padding: 0 40px 25px;">
            <!-- 이미지 -->
            <?
            //  S_CI_img(substr("S087", 0, 1), intval(str_Replace(substr("S087", 0, 1), "", "S087")) . ".jpg")
            ?>
            <!-- 텍스트 -->
            <br><div style="color: #666; font-family: unset; "><? include "../../solve/S_S087_S092_sol.php"; ?>
            <br>
            <? include "../../solve/S/S087.php"; ?>
            <br>
            <?= $Tb_S087 ?>
            </div>
        </td>
    </tr>



    <?
    //  S_SB_img("S088", $solution_var); 
    ?><tr>
        <td style="<?= $fontcolor ?> padding-bottom: 65px;" >
            <div id="unse_top">
                <div class="unse_top">
                    <div class="unse_box">
                        <img src="/images/title_img.jpg">
                        <div class="text">
                            <p>애정운</p>
                        </div>
                        <img src='/UNSE_DATA/images/c2_img/MB_img/love.jpg'>
                        
                    </div>
                </div>
            </div>
            <br>
            <? include "../../solve/S/S088.php"; ?>
            <br>
            <?
            //  S_CI_img(substr("S088", 0, 1), intval(str_Replace(substr("S088", 0, 1), "", "S088")) . ".jpg") 
            ?>
            <?= $Tb_S088 ?>
            
        </td>
    </tr>


    <?
    //  S_SB_img("S089", $solution_var); 
    ?>
    <!-- <tr>
        <td style="<?= $fontcolor ?>">
            <div id="unse_top" style="text-align: ;">
                <div class="unse_top">
                    <div class="unse_box">
                        <img src="/images/title_img.jpg">
                        <div class="text">
                            <p>소망운</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <? 
            // include "../../solve/S/S089.php";
             ?>
            <?
            //  S_CI_img(substr("S089", 0, 1), intval(str_Replace(substr("S089", 0, 1), "", "S089")) . ".jpg")
            ?>
            <?= $Tb_S089 ?>
        <!-- </td>
    </tr> -->


    <?
    // S_SB_img("S090", $solution_var);
    ?><tr>
        <td style="<?= $fontcolor ?> padding-bottom: 65px;">
            <div id="unse_top">
                <div class="unse_top">
                    <div class="unse_box">
                        <img src="/images/title_img.jpg">
                        <div class="text">
                            <p>사업운</p>
                        </div>
                        <img src='/UNSE_DATA/images/c2_img/MB_img/somang.jpg'>
                    </div>
                </div>
            </div>
            <br>
            <? include "../../solve/S/S090.php"; ?>
            <br>
            <?
            // S_CI_img(substr("S090", 0, 1), intval(str_Replace(substr("S090", 0, 1), "", "S090")) . ".jpg")
            ?>
            <?= $Tb_S090 ?>
        </td>
    </tr>


    <?
    // S_SB_img("S091", $solution_var); 
    ?>
    <!-- <tr>
        <td style="<?= $fontcolor ?>">
            <div id="unse_top">
                <div class="unse_top">
                    <div class="unse_box">
                        <img src="/images/title_img.jpg">
                        <div class="text">
                            <p>방향운</p>
                        </div>
                    </div>
                </div>
            </div>
            <? include "../../solve/S/S091.php"; ?>
            <?
            //  S_CI_img(substr("S091", 0, 1), intval(str_Replace(substr("S091", 0, 1), "", "S091")) . ".jpg") 
            ?>
            <?= $Tb_S091 ?>
        </td>
    </tr> -->


    <?
    //  S_SB_img("S092", $solution_var); 
    ?><tr>
        <td style="<?= $fontcolor ?> padding-bottom: 65px;">
            <div id="unse_top">
                <div class="unse_top">
                    <div class="unse_box">
                        <img src="/images/title_img.jpg">
                        <div class="text">
                            <p>금전운</p>
                        </div>
                        <img src='/UNSE_DATA/images/c2_img/MB_img/money.jpg'>
                    </div>
                </div>
            </div>
            <br>
            <? include "../../solve/S/S092.php"; ?>
            <br>
            <?
            //  S_CI_img(substr("S092", 0, 1), intval(str_Replace(substr("S092", 0, 1), "", "S092")) . ".jpg") 
            ?>
            <?= $Tb_S092 ?>
        </td>
    </tr>
</table>
<div style="height: 50px;"> </div>
<div style="width: 25%; margin:0 auto;">
<img src="https://kokzipgae.com:443/data/banner/aGTHWArwppBVKCABDbdwKecd58MlH5.png">
</div>
<div style="height: 80px;"> </div>
<!-- 운세결과물 출력 종료 -->
<?
// include "../../common/include_bottom_c2.php";
?>