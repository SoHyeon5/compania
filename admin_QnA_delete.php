<?php
    if (isset($_POST["qna"]))
        $num_qna = count($_POST["qna"]); 
    else
        echo("
                    <script>
                    alert('삭제할 게시글을 선택해주세요!');
                    history.go(-1)
                    </script>
        ");

    $con = mysqli_connect("localhost", "user2", "12345", "compania");

    for($i=0; $i<count($_POST["qna"]); $i++){
        $num = $_POST["qna"][$i];

        $sql = "select * from qna where num = $num";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $sql = "delete from qna where num = $num";
        mysqli_query($con, $sql);
    }       

    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
?>

