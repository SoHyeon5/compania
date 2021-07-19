<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>compania</title>
<style>
    @import url(css/product_list.css);
    @import url(css/section_mn.css);
</style>
<script>
</script>
</head>
<body> 
 

<?php
    $con = mysqli_connect("localhost","user2","12345","compania");
    $cond = "";

    if($_POST['condition'] != null && $_POST['search'] != null){
        $cond = " where ".$_POST['condition']." like '%".$_POST['search']."%' ";
    }

    $sql = "select * from members ".$cond;
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($result)) {
      $pass         = $row["pass"];
     $name        = $row["name"];
?>
            <li>
               <p class=""><?=$name?>님의 비밀번호는</p>
               <p class=""><?=$pass?> 입니다.</p>
            </li>
<?php
    }
?>
</section> 
<footer>
</footer>
</body>
</html>