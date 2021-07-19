<?php
    if (isset($_POST["qnaone"]))
        $num_qnaone = count($_POST["qnaone"]); 
    else
        echo("
                    <script>
                    alert('삭제할 게시글을 선택해주세요!');
                    history.go(-1)
                    </script>
        ");

    $con = mysqli_connect("localhost", "user2", "12345", "compania");

    for($i=0; $i<count($_POST["qnaone"]); $i++){
        $num = $_POST["qnaone"][$i];

        $sql = "select * from qnaone where num = $num";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);

        $sql = "delete from qnaone where num = $num";
        mysqli_query($con, $sql);
    }       

    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'admin.php';
	     </script>
	   ";
?>

