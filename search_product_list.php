<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>compania</title>
	<style>		
		@import url("css/product_list.css");
	</style>

	<script src="js/jquery.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/header_sliderbanner.js"></script>
    <script src="js/header_tapmenu.js"></script>
</head>
<body> 
 
	<?php include "header.php";?>

	<section id="product-list">
		<div id="product_list-top"><!--11.19 행사명 나오게 수정-->	
		<?php
			$search = $_POST["search"];
		?>
					
			<ul>
				<li class="category-event"><?=$search?></li>
			</ul>
		</div>

		<div id="pro-line">
			<?php
				if (isset($_GET["page"]))
					$page = $_GET["page"];
				else
					$page = 1;

					$con = mysqli_connect("localhost","user2","12345","compania");
					$cond = "";

				if($_POST['condition'] != null && $_POST['search'] != null){
					$cond = " where ".$_POST['condition']." like '%".$_POST['search']."%' ";
				}

					$sql = "select * from product ".$cond;
					$result = mysqli_query($con, $sql);
					$total_record = mysqli_num_rows($result); // 전체 글 수

					$scale = 10;

					// 전체 페이지 수($total_page) 계산 
				if ($total_record % $scale == 0)     
						$total_page = floor($total_record/$scale);      
				else
						$total_page = floor($total_record/$scale) + 1; 
				
					// 표시할 페이지($page)에 따라 $start 계산  
					$start = ($page - 1) * $scale;      

					$number = $total_record - $start;

				for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
				{
					mysqli_data_seek($result, $i);
					// 가져올 레코드로 위치(포인터) 이동
					$row = mysqli_fetch_array($result);
					// 하나의 레코드 가져오기
					$num         = $row["num"];
					$animal      = $row["animal"];
					$category    = $row["category"];
					$name        = $row["name"];
					$price       = $row["price"];
					$file_copied = $row["file_copied"];
					$event = $row["event"];
					$sum_introduce=$row["sum_introduce"];
					$dis_price=$row["dis_price"];
			?>

			<div id="product_one">
				<p><?=$animal?>&nbsp<?=$category?></p>
				<div>
					<img class="pro_img" src="data/<?=$file_copied?>" width="200px" height="200px">
				</div>
                <div>
					<p class="pro_name"><a style="font-weight:bolder"
											href="product_view.php?num=<?=$num?>&page=<?=$page?>"><?=$name?></a></p>
					<p class="pro_intro"><?=$sum_introduce?></p>
					<p class="pro_price"><?=$price?>원</p>
					<p class="pro_dis"><?=$dis_price?>원</p>
				</div>	
			</div>
		

			<?php
				$number--;
			}
			mysqli_close($con);
			?>
		</div>




		<div id="product_list-bottom">
			<ul id="page_num"> 	
				<?php
					if ($total_page>=2 && $page >= 2)	
					{
						$new_page = $page-1;
						echo "<li><a href='product_list.php?page=$new_page'>◀ 이전</a> </li>";
					}		
					else 
						echo "<li>&nbsp;</li>";

					// 게시판 목록 하단에 페이지 링크 번호 출력
					for ($i=1; $i<=$total_page; $i++)
					{
						if ($page == $i)     // 현재 페이지 번호 링크 안함
						{
							echo "<li><b> $i </b></li>";
						}
						else
						{
							echo "<li><a href='product_list.php?page=$i'> $i </a><li>";
						}
					}
					if ($total_page>=2 && $page != $total_page)		
					{
						$new_page = $page+1;	
						echo "<li> <a href='product_list.php?page=$new_page'>다음 ▶</a> </li>";
					}
					else 
						echo "<li>&nbsp;</li>";
				?>
			</ul> <!-- page -->	    	
				
			<ul class="buttons">
				<li><button onclick="location.href='product_list.php'">상품 전체 보기</button></li>
			</ul>
		</div> 
	</section> 

	<?php include "footer.php";?>

</body>
</html>
