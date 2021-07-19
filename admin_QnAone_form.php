<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<style>
	@import url(css/admin_qnaone_form.css);
</style>
<script>
  function check_input() {
      if (!document.admin_QnAone_form.answer.value)
      {
          alert("답변을 입력하세요!");
          document.admin_QnAone_form.answer.focus();
          return;
      }
      document.admin_QnAone_form.submit();
   }
</script>
    
</head>
<body> 
<?php include "header.php";?>
	<section>
    <div id="qnaone_box">
	    <h3 id="qnaone_title">
	    		QnA > 1:1 상담 > 답변 등록
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];
	
	$con = mysqli_connect("localhost", "user2", "12345", "compania");
	$sql = "select * from qnaone where num=$num";
?>	
	    <form  name="admin_QnAone_form" method="post"action="admin_QnAone_insert.php?num=<?=$num?>&page=<?=$page?>">
	    	<ul id="admin_qnaone_form">
			 	<li class="col1">답변 등록</li>	    	
				<li class="col2">
					<textarea name="answer"></textarea>
				</li>
	    	</ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">답변 등록</button></li>
				<li><button type="button" onclick="location.href='admin.php'">목록</button></li>
			</ul>
	    </form>
	</div> 
	</section> 
	<?php include "footer.php";?>
</body>
</html>