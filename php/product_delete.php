<?php

    $num   = $_GET["num"];
    $page   = $_GET["page"];

    $con = mysqli_connect("localhost", "user2", "12345", "compania");
    $sql = "select * from product where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

	if ($copied_name)
	{
		$file_path = "./data/".$copied_name;
		unlink($file_path);
    }

    $sql = "delete from product where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'product_list.php?page=$page';
	     </script>
	   ";
?>

