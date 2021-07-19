<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
</head>
<body> 
<header>
</header>  
<section>
    </div>
   	<div id="product_box">
	    <h3 class="title">
			ITEMS
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "user2", "12345", "compania");
	$sql = "select * from product where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
    $animal        = $row["animal"];
    $category      = $row["category"];
    $name          = $row["name"];
    $introduce     = $row["introduce"];
    $information   = $row["information"];
    $price         = $row["price"];
    $regist_day    = $row["regist_day"];
    $hit           = $row["hit"];

	$content = str_replace(" ", "&nbsp;", $information);
	$content = str_replace("\n", "<br>", $information);

	$new_hit = $hit + 1;
	$sql = "update product set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li>
				<p class="col1"><b>상품명 :</b> <?=$name?></p>
                <p class="col2"><b>가격 :</b> <?=$price?></p>
				<p class="col3"><?=$animal?> > <?=$category?></p>
                <p class="col4"><b>제품소개 :</b> <?=$introduce?></p>
                <p class="col5"><b>제품정보 :</b> <?=$information?></p>
			</li>		
	    </ul>
	    <ul class="buttons">
				<li><button onclick="location.href='admin.php?page=<?=$page?>'">목록</button></li>
		</ul>
	</div> <!-- product_box -->
</section> 
<footer>
</footer>
</body>
</html>
