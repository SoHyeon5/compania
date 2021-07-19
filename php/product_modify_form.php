<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<script>
  function check_input() {
      if (!document.product_form.name.value)
      {
          alert("상품 명을 입력하세요!");
          document.product_form.name.focus();
          return;
      }
      if (!document.product_form.introduce.value)
      {
          alert("제품 소개를 입력하세요!");    
          document.product_form.introduce.focus();
          return;
      }
      if (!document.product_form.information.value)
      {
          alert("제품 정보를 입력하세요!");    
          document.product_form.information.focus();
          return;
      }
      document.product_form.submit();
   }
</script>
</head>
<body> 
<header>
</header>  
<section>
    </div>
	    <h3 id="board_title">
	    		상품 등록
		</h3>
<?php
	$num  = $_GET["num"];
	$page = $_GET["page"];
	
	$con = mysqli_connect("localhost", "user2", "12345", "compania");
	$sql = "select * from product where num=$num";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
    $name        = $row["name"];
	$price       = $row["price"];
	$animal      = $row["animal"];
	$category    = $row["category"];
    $introduce   = $row["introduce"];
    $information = $row["information"];
    $file_name   = $row["file_name"];
?>	    

        <form  name="product_form" method="post" action="product_modify.php?num=<?=$num?>&page=<?=$page?>" enctype="multipart/form-data">
	    	 <ul id="product_form">
				<li>
					<span class="col1">상품 명 : </span>
					<span class="col2"><input name="name" type="text" value="<?=$name?>"></span>
				</li>
                <li>
					<span class="col1">가격 : </span>
					<span class="col2"><input name="price" type="text" value="<?=$price?>"></span>
				</li>
                <div>카테고리
                    <select name = "animal">
                    <option value="">동물 분류</option>
                    <option value="강아지">강아지</option>
                    <option value="고양이">고양이</option>
                    <option value="새">새</option>
                    <option value="설치류">설치류</option>
                    <option value="파충류">파충류</option>
                    </select>
                    <select name = "category">
                    <option value="">카테고리 분류</option>
                    <option value="푸드">푸드</option>
                    <option value="외출용품">외출용품</option>
                    <option value="리빙">리빙</option>
                    <option value="미용/목욕">미용/목욕</option>
                    <option value="위생/배변">위생/배변</option>
                    </select>
                </div>

	    		<li>
	    			<span class="col1">제품 소개 : </span>
	    			<span class="col2"><textarea name="introduce" value="<?=$introduce?>"></textarea></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">제품 정보 : </span>
	    			<span class="col2">
	    				<textarea name="information" value="<?=$information?>"></textarea>
	    			</span>
	    		</li>
	    		<li>
			        <span class="col1"> 첨부 파일</span>
			        <span class="col2"><?=$file_name?></span>
			    </li>
	    	    </ul>
                <ul class="buttons">
				<li><button type="button" onclick="check_input()">수정하기</button></li>
				<li><button type="button" onclick="location.href='product_list.php'">목록</button></li>
			</ul>
	    </form>
	</div> 
	</section> 
	<footer>
    </footer>
</body>
</html>
