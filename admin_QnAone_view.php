<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>compania</title>
	<style>
		@import url(css/qnaone_view.css);
	</style>
</head>
<body> 
<?php include "header.php";?>
<section>
    </div>
   	<div id="QnAone_box">
	    <h3>
			QnA > 1:1 상담
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost", "user2", "12345", "compania");
	$sql = "select * from qnaone where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
    $num        = $row["num"];
    $id      	= $row["id"];
    $name       = $row["name"];
    $title     	= $row["title"];
    $content   	= $row["content"];
	$regist_day = $row["regist_day"];
	$answer = $row["answer"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);
  
	mysqli_query($con, $sql);
?>		
	    <ul id="view_content">
			<li class="num">
				글 번호 <?=$num?>
				<span class="date"><?=$regist_day?></span>
			</li>
			<li class="id">작성자: <?=$name?> (<?=$id?>)</li>
			<li class="title">제목 : <?=$title?></li>
            <li class="content">내용
				<div><?=$content?></div>
			</li>
			<li class="answer">답변
				<div><?=$answer?></div>
			</li>		
	    </ul>
	    <ul class="buttons">
				<li><button onclick="location.href='admin.php'">목록</button></li>
		</ul>
        <ul class="buttons">
		<li><button onclick="location.href='admin_QnAone_form.php?num=<?=$num?>&page=<?=$page?>'">답변 등록</button></li>
		</ul>
	</div> <!-- product_box -->
</section> 
<?php include "footer.php";?>
</body>
</html>
