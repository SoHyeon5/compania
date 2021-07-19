<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<style>
    @import url(css/product_list.css);
    @import url(css/section_mn.css);
</style>
<script>
</script>
</head>
<body> 
 
<section>
   	<div id="product_box">
	   <div id="product"> <!--소현이 상품등록 게시판 php-->
        </div>

<?php
	if (isset($_GET["page"]))
		$page = $_GET["page"];
	else
		$page = 1;

	$con = mysqli_connect("localhost", "user2", "12345", "compania");
	$sql = "select * from product order by num desc";
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
?>
				<li>
					<p class="pro_animal"><?=$animal?></p>
					<p class="pro_category"><?=$category?></p>
                    <span class="pro_name"><a href="product_view.php?num=<?=$num?>&page=<?=$page?>"><?=$name?></a></span>
					<p class="pro_price"><?=$price?></p>
				</li>	
    <?php
   	   $number--;
   }
   mysqli_close($con);

?>
	    	</ul>
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
				<li><button onclick="location.href='product_list.php'">목록</button></li>
			</ul>
	</div> <!-- product_box -->
</section> 
<footer>
</footer>
</body>
</html>
