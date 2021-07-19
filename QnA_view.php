<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/product.css">
<style>
  @import url(css/admin-qnaview.css);
</style>
</head>
<body> 
<?php include "header.php";?>
<section>
    </div>
   	<div id="QnA_box">
	    <h3>
			QnA > 자주묻는 질문
		  </h3>
    <?php
        $num  = $_GET["num"];
        $page  = $_GET["page"];

        $con = mysqli_connect("localhost", "user2", "12345", "compania");
        $sql = "select * from qna where num=$num";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);
        $id         = $row["id"];
        $name       = $row["name"];
        $category   = $row["category"];
        $subject    = $row["subject"];
        $content    = $row["content"];
        $regist_day = $row["regist_day"];
        $hit        = $row["hit"];

        $content = str_replace(" ", "&nbsp;", $content);
        $content = str_replace("\n", "<br>", $content);

        $new_hit = $hit + 1;
        $sql = "update product set hit=$new_hit where num=$num";   
        mysqli_query($con, $sql);
    ?>		
	    <ul id="view_content">
        <li class="cate"><b>카테고리 : </b> <?=$category?></li>
        <li class="title">
          <b>제목 : </b> <?=$subject?>
          <span class="name"><?=$name?></span>
          <span class="date"><?=$regist_day?></span>
        </li>
        <li class="content">
          <?=$content?>
        </li>		
	    </ul>
	    <ul class="buttons">
				<li><button onclick="location.href='QnA_index.php?page=<?=$page?>'">목록</button></li>
		</ul>
	</div> <!-- QnA_box -->
</section> 

    <?php include "footer.php";?>

</body>
</html>
