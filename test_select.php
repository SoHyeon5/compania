<?php
//DB 연결
$conn = mysqli_connect("localhost","user2","12345","compania");

//검색을 안 할 시 ""를 사용해서 공백으로 처리

$cond = "";

//검색 조건문

if($_POST["condition"] != null && $_POST["search"] != null){

    $cond = " where ".$_POST['condition']." like '%".$_POST['search']."%' ";

}

//쿼리문

$sql = "select * from product ".$cond;
$result = mysqli_query($conn, $sql);

    print <<<HTML


<form action="$_SERVER[PHP_SELF]" method="post">

<table width="50%" border="1" align="center">

    <tr>

        <td>번호</td>

        <td>동물 종류</td>

        <td>카테고리</td>

        <td>상품 명</td>

        <td>가격</td>


    <tr>

HTML;

    //반복문 돌면서 데이터 출력

    while ($row = mysqli_fetch_array($result)) {

        print<<<_HTML_

            <tr>

                <td>{$row['num']}</td>

                <td>{$row['animal']}</td>

                <td>{$row['category']}</td>

                <td>{$row['name']}</td>

                <td>{$row['price']}</td>

            <tr>

 

_HTML_;

}

    //조건 검색

    print <<<HTML

        <tr>

            <td colspan="6">

             <select name="condition">

                <option value="animal">동물 종류</option>

                <option value="category">카테고리</option>

                <option value="name">상품 명</option>

             </select>

 

                <input type="text" name="search">

                <input type="submit" value="검색">

            </td>

        </tr>

</table>

</form>

HTML;

 

//close해줌

mysqli_close($conn);

?>


