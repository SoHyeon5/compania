<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

	$answer        = $_POST["answer"];
	$regist_day_a  = date("Y-m-d (H:i)");
          
    $con = mysqli_connect("localhost", "user2", "12345", "compania");
    $sql = "update qnaone set answer='$answer', regist_day_a='$regist_day_a'";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'admin.php?page=$page';
	      </script>
	  ";
?>

   
