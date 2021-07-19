<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title>compania</title>

		<style>
			@import url(css/product_view-mobile.css);
			@import url(css/product_view-tablet.css);
			@import url(css/product_view-web.css);
		</style>
	</head>
	
	<body> 

		<?php include "header.php";?>

		<section id="product_view">

			<div id="product_view-top">
				

				<?php
				$num  = $_GET["num"];
				$page  = $_GET["page"];

				$con = mysqli_connect("localhost", "user2", "12345", "compania");
				$sql = "select * from product where num=$num";
				$result = mysqli_query($con, $sql);

				$row = mysqli_fetch_array($result);
				$file_copied   = $row["file_copied"];
				$animal        = $row["animal"];
				$category      = $row["category"];
				$category_f    = $row["category_f"];
				$name          = $row["name"];
				$link         = $row["link"];
				$sum_introduce=$row["sum_introduce"];
				$brand=$row["brand"];
				$recommended_time=$row["recommended_time"];
					$introduce     = $row["introduce"];
					$information   = $row["information"];
					$price         = $row["price"];
					$dis_price     = $row["dis_price"];
					$regist_day    = $row["regist_day"];
					$hit           = $row["hit"];

					$component_a=$row["component_a"];
					$component_b=$row["component_b"];
					$component_c=$row["component_c"];
					$component_d=$row["component_d"];
					$component_e=$row["component_e"];
					$component_f=$row["component_f"];
					$component_g=$row["component_g"];

					$daily_recommend=$row["daily_recommend"];
					$way=$row["way"];
					$precautions=$row["precautions"];
					

				$content = str_replace(" ", "&nbsp;", $information);
				$content = str_replace("\n", "<br>", $information);

				$new_hit = $hit + 1;
				$sql = "update product set hit=$new_hit where num=$num";   
				mysqli_query($con, $sql);
				?>   
				
				<div id="product-text">
					<div id="product-img">
						<img src="data/<?=$file_copied?>" width="100px" height="100px">
					</div>
					<p class="Pro_category"><?=$animal?> > <?=$category?> > <?=$category_f?></p>
					<ul class="view_content">
						<li>
							<p class="Pro_name">상품명 : <?=$name?></p>
							<p class="Pro_price">가격 : <?=$price?></p>
							<p class="Pro_orilgn">가격 : <?=$dis_price?></p>
						</li>
						
						<div class="Pro_table">
							<ul>
								<li><hr style="pading:0;"></li>
								<li>제품 소개</li><!--제품소개 한줄-->
								<li><?=$sum_introduce?></li>
								<li><hr></li>
								<li>브랜드</li>
								<li><?=$brand?></li>
								<li><hr></li>
								<li>급여 시기</li><!--추천급여시기-->
								<li><?=$recommended_time?></li>
								<li><hr></li>
							</ul>
						</div>    
					</ul>
					
					<div class="view-url">
						<a  href="<?=$link?>" target="_blank">판매사이트 바로가기</a>
					</div>
				</div>
			</div><!--top-->

			<div id="product_view-bottom">
				<div>
                    <p class="bottom-title">제품 소개</p>
                    <p class="bottom-content"> <?=$introduce?></p>
                </div>
                <div>
                    <p class="bottom-title">제품 정보</p>
					<p class="bottom-content"> <?=$information?></p>
				</div>
				<div>
					<p class="bottom-title">제품 등록 성분</p>                    
					<div class="ingre">
						<ul>
							<li>조단백</li>
							<li>조지방</li>
							<li>조섬유</li>
							<li>조회분</li>
							<li>칼슘</li>
							<li>인</li>
							<li>수분</li>
						</ul>
						<ul>
							<li><!--input--><?=$component_a?></li>
							<li><?=$component_b?></li>
							<li><?=$component_c?></li>
							<li><?=$component_d?></li>
							<li><?=$component_e?></li>
							<li><?=$component_f?></li>
							<li><?=$component_g?></li>
						</ul>
					</div><!--ingre-->
				</div>
							
				<div class="Pro_bar">
					<p class="bottom-title">주 원료 및 성분 구성</p>
					<prograss>
				</div>
							
				<div>
					<p class="bottom-title">1일 권장 급여량</p>
					<p class="bottom-content"><?=$daily_recommend?></p>
				</div>
				<div>
					<p class="bottom-title">보관 및 사용 방법</p>
					<p class="bottom-content"><?=$way?></p>
				</div>
				<div>
					<p class="bottom-title">주의사항</p>
					<p class="bottom-content"><?=$precautions?></p>
				</div>
			</div>
			
			<div class="list-url">
				<ul class="buttons">
					<li><button onclick="location.href='product_list.php?page=<?=$page?>'">목록으로 돌아가기</button></li>
				</ul>
			</div>
		</section> 

		<?php include "footer.php";?>
	</body>
</html>