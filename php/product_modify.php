<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

	$name        = $_POST["name"];
	$price       = $_POST["price"];
	$animal      = $_POST["animal"];
	$category    = $_POST["category"];
    $introduce   = $_POST["introduce"];
    $information = $_POST["information"];
          
    $con = mysqli_connect("localhost", "user2", "12345", "compania");
    $sql = "update product set name='$name', price='$price', animal='$animal', category='$category', introduce='$introduce', information='$information' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'product_list.php?page=$page';
	      </script>
	  ";
?>

   
