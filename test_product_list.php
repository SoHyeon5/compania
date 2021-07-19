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

 

    print <<<HTML


<form action="$_SERVER[PHP_SELF]" method="post">

        <li>번호</li>

        <li>동물 종류</li>>

        <li>카테고리</li>

        <li>상품 명</li>

        <li>가격</li>

HTML;

    //반복문 돌면서 데이터 출력

    while ($row = mysqli_fetch_array($result)) {

        print<<<_HTML_

    
                <li>{$row['num']}</li>

                <li>{$row['animal']}</li>

                <li>{$row['category']}</li>

                <li>{$row['name']}</li>

                <li>{$row['price']}</li>


 

_HTML_;

}

    //조건 검색

    print <<<HTML

                <input type="hidden" name="condition" value="category">

                <input type="hidden" name="search" value="푸드">

                <input type="submit" value="검색">


</form>

HTML;

 

//close해줌

mysqli_close($conn);

?>


