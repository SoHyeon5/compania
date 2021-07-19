<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<style>
         @import url(css/product_view-mobile.css);
         @import url(css/product_view-tablet.css);
         @import url(css/product_view-web.css);
         </style>
</head>
<body> 
<?php include "header.php";?>
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
<div id="product_view-bottom">
            <div>
                    <p class="bottom-title">제품 소개</p>
                    <p class="bottom-content"> <?=$introduce?></p>
                </div>
                <div>
                    <p class="bottom-title">제품 정보</p>
               <p class="bottom-content"> <?=$information?></p>
            </div>
            <div>
               <p class="bottom-title">제품 등록 성분</p>                    
               <div class="ingre">
                  <ul>
                     <li>조단백</li>
                     <li>조지방</li>
                     <li>조섬유</li>
                     <li>조회분</li>
                     <li>칼슘</li>
                     <li>인</li>
                     <li>수분</li>
                  </ul>
                  <ul>
                     <li><!--input--><?=$component_a?></li>
                     <li><?=$component_b?></li>
                     <li><?=$component_c?></li>
                     <li><?=$component_d?></li>
                     <li><?=$component_e?></li>
                     <li><?=$component_f?></li>
                     <li><?=$component_g?></li>
                  </ul>
               </div><!--ingre-->
            </div>
                     
            <div class="Pro_bar">
               <p class="bottom-title">주 원료 및 성분 구성</p>
               <prograss>
            </div>
                     
            <div>
               <p class="bottom-title">1일 권장 급여량</p>
               <p class="bottom-content"><?=$daily_recommend?></p>
            </div>
            <div>
               <p class="bottom-title">보관 및 사용 방법</p>
               <p class="bottom-content"><?=$way?></p>
            </div>
            <div>
               <p class="bottom-title">주의사항</p>
               <p class="bottom-content"><?=$precautions?></p>
            </div>
         </div>
         
       <ul class="buttons">
            <li><button onclick="location.href='product_form.php'">글쓰기</button></li>
            <li><button onclick="location.href='product_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
            <li><button onclick="location.href='product_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
            
            <li class="list"><button onclick="location.href='admin.php?page=<?=$page?>'">글 목록으로 바로가기</button></li>
      </ul>
   </div> <!-- product_box -->
</section> 
<?php include "footer.php";?>
</body>
</html>