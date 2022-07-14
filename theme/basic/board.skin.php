<?php
if (!defined('_TUBEWEB_')) exit;
?>

<?php

header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
$db = new mysqli("211.47.74.10", "kokzipgaedev", "a123456789!", "dbkokzipgaedev");
$db->set_charset("utf8");

function mq($sql)
{
	global $db;
	return $db->query($sql);
}
?>
<style>
	@import url(https://fonts.googleapis.com/css?family=Raleway:400,500,700);
	@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

	figure.snip1477 {
		font-family: 'Raleway', Arial, sans-serif;
		position: relative;
		overflow: hidden;
		min-width: 230px;
		max-width: 315px;
		width: 100%;
		color: #ffffff;
		text-align: center;
		font-size: 16px;
		background-color: #000000;
		border-radius: 10px;
	}

	figure.snip1477 *,
	figure.snip1477 *:before,
	figure.snip1477 *:after {
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
		-webkit-transition: all 0.55s ease;
		transition: all 0.55s ease;
	}

	figure.snip1477 img {
		max-width: 100%;
		backface-visibility: hidden;
		vertical-align: top;
		opacity: 0.7;
	}

	figure.snip1477 .title {
		position: absolute;
		top: 70%;
		left: 3%;
		padding: 5px 10px 10px;
	}

	figure.snip1477 .title:before,
	figure.snip1477 .title:after {
		height: 2px;
		width: 400px;
		position: absolute;
		content: '';
		background-color: #ffffff;
	}

	figure.snip1477 .title:before {
		top: 0;
		left: 10px;
		-webkit-transform: translateX(100%);
		transform: translateX(100%);
	}

	figure.snip1477 .title:after {
		bottom: 0;
		right: 10px;
		-webkit-transform: translateX(-100%);
		transform: translateX(-100%);
	}

	figure.snip1477 .title div:before,
	figure.snip1477 .title div:after {
		width: 2px;
		height: 300px;
		position: absolute;
		content: '';
		background-color: #ffffff;
	}

	figure.snip1477 .title div:before {
		top: 10px;
		right: 0;
		-webkit-transform: translateY(100%);
		transform: translateY(100%);
	}

	figure.snip1477 .title div:after {
		bottom: 10px;
		left: 0;
		-webkit-transform: translateY(-100%);
		transform: translateY(-100%);
	}

	figure.snip1477 h2,
	figure.snip1477 h4 {
		margin: 0;
		text-transform: uppercase;
	}

	figure.snip1477 h2 {
		font-weight: 400;
	}

	figure.snip1477 h4 {
		display: block;
		font-weight: 700;
		background-color: #ffffff;
		padding: 5px 10px;
		color: #000000;
	}

	figure.snip1477 figcaption {
		position: absolute;
		bottom: 42%;
		left: 25px;
		text-align: left;
		opacity: 0;
		padding: 5px 60px 5px 10px;
		font-size: 0.8em;
		font-weight: 500;
		letter-spacing: 1.5px;
	}

	figure.snip1477 figcaption p {
		margin: 0;
	}

	figure.snip1477 a {
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
	}

	figure.snip1477:hover img,
	figure.snip1477.hover img {
		zoom: 1;
		filter: alpha(opacity=35);
		-webkit-opacity: 0.35;
		opacity: 0.35;
	}

	figure.snip1477:hover .title:before,
	figure.snip1477.hover .title:before,
	figure.snip1477:hover .title:after,
	figure.snip1477.hover .title:after,
	figure.snip1477:hover .title div:before,
	figure.snip1477.hover .title div:before,
	figure.snip1477:hover .title div:after,
	figure.snip1477.hover .title div:after {
		-webkit-transform: translate(0, 0);
		transform: translate(0, 0);
	}

	figure.snip1477:hover .title:before,
	figure.snip1477.hover .title:before,
	figure.snip1477:hover .title:after,
	figure.snip1477.hover .title:after {
		-webkit-transition-delay: 0.15s;
		transition-delay: 0.15s;
	}

	figure.snip1477:hover figcaption,
	figure.snip1477.hover figcaption {
		opacity: 1;
		-webkit-transition-delay: 0.2s;
		transition-delay: 0.2s;
	}

	a {
		text-decoration: none;
		color: #333;
	}

	ul li {
		list-style: none;
	}

	/* 공통 */
	.fl {
		float: left;
	}

	.tc {
		text-align: center;
	}

	/* 게시판 목록 */
	#board_area {
		width: 100%;
		position: relative;
		text-align: center;
		padding: 70px 0;
	}

	.list-table {
		margin: 0 auto;
		text-align: center;
	}

	.list-table thead th {
		height: 40px;
		border-top: 1px solid #b22323;
		border-bottom: 1px solid #CCC;
		font-weight: bold;
		font-size: 17px;
	}

	.list-table tbody td {
		text-align: center;
		padding: 10px 0;
		border-bottom: 1px solid #CCC;
		height: 20px;
		font-size: 14px
	}

	.re_ct {
		font-weight: bold;
		color: blue;
	}

	#write_btn {
		margin-top: 20px;
		right: 0;
	}

	
</style>

<div id="board_area">
	<!-- <div><img src="/images/top_img/Campany_MOB.jpg"></div> -->
	<h1>포스팅</h1>
	<h4>콕집게의 이야기 입니다.</h4>
	<table class="list-table">
		<thead>
			<tr>
				<th width="300"></th>
				<!-- <th width="100">제목</th>
				<th width="100">글쓴이</th> -->
				<!-- <th width="100">작성일</th>
				<th width="100">조회수</th> -->
				<!-- <th width="200">이미지</th> -->
			</tr>
		</thead>
		<?php
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}
		$sql = mq("select * from shop_blog");
		$row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
		$list = 5; //한 페이지에 보여줄 개수
		$block_ct = 5; //블록당 보여줄 페이지 개수

		$block_num = ceil($page / $block_ct); // 현재 페이지 블록 구하기
		$block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
		$block_end = $block_start + $block_ct - 1; //블록 마지막 번호

		$total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
		if ($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
		$total_block = ceil($total_page / $block_ct); //블럭 총 개수
		$start_num = ($page - 1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

		$sql2 = mq("select * from shop_blog order by co_id desc limit $start_num, $list");
		while ($shop_blog = $sql2->fetch_array()) {
			$title = $shop_blog["co_subject"];
			if (strlen($title) > 30) {
				$title = str_replace($shop_blog["co_subject"], mb_substr($shop_blog["co_subject"], 0, 30, "utf-8") . "...", $shop_blog["co_subject"]);
			}
			$sql3 = mq("select * from reply where con_num='" . $shop_blog['co_id'] . "'");
			$rep_count = mysqli_num_rows($sql3);
		?>
			<tbody>
				<tr>

					<td width="10">
						<!-- <?php echo $shop_blog['co_id']; ?><br> -->
						<!-- <?php $lockimg = "<img src='/img/lock.png' alt='lock' z title='lock' with='20' height='20' />";
						if ($shop_blog['lock_post'] == "1") { ?><a href='<?php echo TB_BBS_URL; ?>/blog.php?co_id=<?php echo $shop_blog["co_id"]; ?>'><?php echo $title, $lockimg;
																																					} else {  ?>
								<a href='<?php echo TB_BBS_URL; ?>/blog.php?co_id=<?php echo $shop_blog["co_id"]; ?>'><?php echo $title;
																																					} ?><span class="re_ct">[<?php echo $rep_count; ?>]</span></a>
								<br> -->
								<!-- <div class="item-wrapper">
									<?php echo $shop_blog['co_mobile_blog'] ?>
									<div class="item-info-box">

									</div>
								</div> -->


								<script>
									/* Demo purposes only */
									$(".hover").mouseleave(
										function() {
											$(this).removeClass("hover");
										}
									);
								</script>


								<figure class="snip1477">
									<?php echo $shop_blog['co_mobile_blog'] ?>
									<div class="title">
										<div>
											<h3><?php echo $shop_blog['co_subject'] ?></h3>
											<h4><?php echo $shop_blog['co_subject'] ?></h4>
										</div>
									</div>
									<figcaption>
										<p>에스비제이, 라이프스타일 콕집게를 오픈하였다.</p>
									</figcaption>
									<a href='<?php echo TB_BBS_URL; ?>/blog.php?co_id=<?php echo $shop_blog["co_id"]; ?>'></a>
								</figure>

								<!-- <?php echo $shop_blog['co_subject'] ?> -->
								<!-- <td width="100"><?php echo $shop_blog['date'] ?></td> -->
								<!-- <td width="100"><?php echo $shop_blog['hit']; ?></td> -->
					</td>
				</tr>

			</tbody>
		<?php } ?>
	</table>

	<!---페이징 넘버 --->
	<div id="page_num">
		<ul>
			<?php
			if ($page <= 1) { //만약 page가 1보다 크거나 같다면
				echo "<li class='fo_re'>처음</li>"; //처음이라는 글자에 빨간색 표시 
			} else {
				echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
			}
			if ($page <= 1) { //만약 page가 1보다 크거나 같다면 빈값

			} else {
				$pre = $page - 1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
				echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
			}
			for ($i = $block_start; $i <= $block_end; $i++) {
				//for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
				if ($page == $i) { //만약 page가 $i와 같다면 
					echo "<li class='fo_re'>[$i]</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
				} else {
					echo "<li><a href='?page=$i'>[$i]</a></li>"; //아니라면 $i
				}
			}
			if ($block_num >= $total_block) { //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
			} else {
				$next = $page + 1; //next변수에 page + 1을 해준다.
				echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
			}
			if ($page >= $total_page) { //만약 page가 페이지수보다 크거나 같다면
				echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
			} else {
				echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
			}
			?>
		</ul>
	</div>
	<div id="write_btn">
		<a href="<?php echo TB_BBS_URL; ?>/board_write.php"><button>글쓰기</button></a>
	</div>
</div>