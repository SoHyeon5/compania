<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
<script>
  function check_input() {
      if (!document.admin_qna_form.subject.value)
      {
          alert("제목을 입력하세요!");
          document.admin_qna_form.subject.focus();
          return;
      }
      if (!document.admin_qna_form.content.value)
      {
          alert("내용을 입력하세요!");    
          document.admin_qna_form.content.focus();
          return;
      }
      document.admin_qna_form.submit();
   }
</script>
<style>
	@import url(css/admin_qna-mobile.css);
</style>
</head>
<body> 

    <?php include "header.php";?>
 
<section>
   	<div id="qna_box">
	    <h3>관리자 모드 > 자주묻는 질문 관리</h3>
		
		<form name="admin_qna_form" method="post" action="QnA_insert.php">
	    	 <ul id="admin_qna_form">
				<li class="name">
					<p class="col1">작성자 : </p>
					<p class="col2"><?=$username?></p>
				</li>
                <li class="category">
                    <select name = "category">
                        <option value="주문/결제">주문/결제</option>
                        <option value="배송">배송</option>
                        <option value="취소/반품/교환">취소/반품/교환</option>
                    </select>
                </li>
	    		<li class="title">
	    			<p class="col2"><input name="subject" type="text" placeholder="제목을 입력하세요"></p>
	    		</li>	    	
	    		<li class="content">	
	    			<p class="col2">
	    				<textarea name="content" placeholder="내용을 입력하세요"></textarea>
					</p>
	    		</li>
	    	</ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
                </form>
				<li><button type="button" onclick="location.href='admin.php'">목록</button></li>
                
			</ul>
	    
	</div> <!-- QnA_box -->
</section> 

    <?php include "footer.php";?>

</body>
</html>
