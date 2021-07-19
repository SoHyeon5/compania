<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>goods_list</title>
<style>
    .list_box {
        width: 300px;
        height: 200px;
        background-color: lightgray;
    }
</style>

<script>
    function click_change($a) {
        switch($a) {
            case "사료" :
                echo "사료"
        }
    }
</script>

</head>
<body> 
<header>
</header>  
<section>
<div id="menu-text">
    <ul class="menu-element-text">
        <li><a href="#">전체보기</a></li>
        <li><a href="#">푸드</a>
            <ul class="menu-element-text">
                <li><a href="#" onclick="click_change(사료)">사료</a></li>
                <li><a href="#">간식</a></li>
            </ul>
        </li>
        <li><a href="#">외출용품</a></li>
        <li><a href="#">리빙</a></li>
        <li><a href="#">장난감</a></li>
        <li><a href="#">미용 / 목욕</a></li>
        <li><a href="#">위생 / 배변</a></li>
    </ul>
</div>
<div class = "list_box">


   </div>	
</section> 
<footer>

</footer>
</body>
</html>
