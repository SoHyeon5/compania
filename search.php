<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>

<?php

    //DB 연결
    $conn = mysqli_connect("localhost","user2","12345","compania");

    //검색을 안 할 시 ""를 사용해서 공백으로 처리
    $cond = "";

    //검색 조건문
    if($_POST['condition'] != null && $_POST['search'] != null){
        $cond = " where ".$_POST['condition']." like '%".$_POST['search']."%' ";
    }

    //쿼리문
    $sql = "select * from product ".$cond;
    $result = mysqli_query($conn, $sql);

?>
        <li>번호</li>
        <li>동물 종류</li>>
        <li>카테고리</li>
        <li>상품 명</li>
        <li>가격</li>

<?php
    //반복문 돌면서 데이터 출력

    while ($row = mysqli_fetch_array($result)) {
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
}

//close해줌
mysqli_close($conn);

?>


