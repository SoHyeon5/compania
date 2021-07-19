<?php
            if (isset($_GET["page"]))
                $page = $_GET["page"];
            else
                $page = 1;

            $con = mysqli_connect("localhost", "user2", "12345", "compania");
            $sql = "select * from product order by num desc";
            $result = mysqli_query($con, $sql);
            $total_record = mysqli_num_rows($result); // 전체 글 수

            $scale = 10;

            // 전체 페이지 수($total_page) 계산 
            if ($total_record % $scale == 0)     
                $total_page = floor($total_record/$scale);      
            else
                $total_page = floor($total_record/$scale) + 1; 
        
            // 표시할 페이지($page)에 따라 $start 계산  
            $start = ($page - 1) * $scale;      

            $number = $total_record - $start;

            for ($i=$start; $i<$start+$scale && $i < $total_record; $i++)
            {
                mysqli_data_seek($result, $i);
                // 가져올 레코드로 위치(포인터) 이동
                $row = mysqli_fetch_array($result);
                // 하나의 레코드 가져오기
                $num         = $row["num"];
                $animal      = $row["animal"];
                $category    = $row["category"];
                $name        = $row["name"];
                $price       = $row["price"];
        ?>