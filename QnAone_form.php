<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<style>
	@import url(css/qnaone_form.css);
</style>
<script>
    function check_input() {
      if (!document.QnAone_form.title.value)
      {
          alert("제목을 입력하세요!");
          document.QnAone_form.title.focus();
          return;
      }
      if (!document.QnAone_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.QnAone_form.content.focus();
          return;
      }
      document.QnAone_form.submit();
   }
</script>
    
</head>
<body> 
	<?php include "header.php";?>

	<section>
    <div id="qnaone_box">
	    <h3 id="qnaone_title">1:1 문의하기</h3>
	    <form name="QnAone_form" method="post" action="QnAone_insert.php">
	    	<ul id="one_form">
				<li>
					<p class="col2"><input name="title" type="text" placeholder="제목을 입력하세요"></p>
				</li>
                <li>
	    			<p class="col2"><textarea name="content" placeholder="내용을 입력하세요"></textarea></p>
	    		</li>	    	
	    	</ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='QnAone_index.php'">목록</button></li>
			</ul>
	    </form>
	</div> 
	</section> 
	<?php include "footer.php";?>
</body>
</html>