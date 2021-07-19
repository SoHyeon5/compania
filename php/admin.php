<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
   	<div id="admin_box">
	    <h3 id="member_title">
	    	관리자 모드 > 회원 관리
		</h3>
	    <ul id="member_list">
				<li>
					<span class="col1">번호</span>
					<span class="col2">아이디</span>
					<span class="col3">이름</span>
					<span class="col4">레벨</span>
					<span class="col6">가입일</span>
					<span class="col7">수정</span>
					<span class="col8">삭제</span>
				</li>
<?php
	$con = mysqli_connect("localhost", "user2", "12345", "compania");
	$sql = "select * from members order by num desc";
	$result = mysqli_query($con, $sql);
	$total_record = mysqli_num_rows($result); // 전체 회원 수

	$number = $total_record;

   while ($row = mysqli_fetch_array($result))
   {
      $num         = $row["num"];
	  $id          = $row["id"];
	  $name        = $row["name"];
	  $level       = $row["level"];
      $regist_day  = $row["regist_day"];
?>
			
		<li>
		<form method="post" action="admin_member_update.php?num=<?=$num?>">
			<span class="col1"><?=$number?></span>
			<span class="col2"><?=$id?></a></span>
			<span class="col3"><?=$name?></span>
			<span class="col4"><input type="text" name="level" value="<?=$level?>"></span>
			<span class="col6"><?=$regist_day?></span>
			<span class="col7"><button type="submit">수정</button></span>
			<span class="col8"><button type="button" onclick="location.href='admin_member_delete.php?num=<?=$num?>'">삭제</button></span>
		</form>
		</li>	
			
<?php
   	   $number--;
   }
?>
	    </ul>
	    <h3 id="member_title">
	    	관리자 모드 > 상품 관리
		</h3>
	    <ul id="board_list">
		<div id="product_box">
	   <div id="product"> <!--소현이 상품등록 게시판 php-->
                <div class="pro-line">
                    <p class="pro-line_name">행사중인 상품</p>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                </div>
                <div class="pro-line">
                    <p class="pro-line_name"></p>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                </div>
                <div id="product-banner">
                    <img class="banner_pro1" src="images/banner_pro1.png">
                </div>
                <div class="pro-line">
                    <p class="pro-line_name"></p>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                </div>
                <div class="pro-line_back">
                    <p class="pro-line_name"></p>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name">강쥐사료</p>
                        <p class="pro_price">얼마?</p>
                    </div>
                </div>
                                <div class="pro-line">
                    <p class="pro-line_name">이 상품은 어때요?</p>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                    <div class="pro1">
                        <div class="pro_img"></div>
                        <p class="pro_name"></p>
                        <p class="pro_price"></p>
                    </div>
                </div>
            </div>
		<form method="post" action="admin_product_delete.php">
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
                <span class="col1"><input type="checkbox" name="item[]" value="<?=$num?>"></span>
					<p class="pro_animal"><?=$animal?></p>
					<p class="pro_category"><?=$category?></p>
                    <span class="pro_name"><a href="admin_product_view.php?num=<?=$num?>&page=<?=$page?>"><?=$name?></a></span>
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
				<li>
<?php 
    if($userid) {
?>
					<button onclick="location.href='product_form.php'">상품 등록</button>
<?php
	} else {
?>
					<a href="javascript:alert('로그인 후 이용해 주세요!')"><button>상품 등록</button></a>
<?php
	}
?>
				</li>
			</ul>
	</div> <!-- product_box -->	
				<button type="submit">선택된 글 삭제</button>
			</form>
	    </ul>
	</div> <!-- admin_box -->
</section> 
<footer>
</footer>
</body>
</html>
