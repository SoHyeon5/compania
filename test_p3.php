<html>

<body>

<?php

  $db_user="user2";

  $db_pass="12345!";

  $db_host="localhost";

  $db_name="compania";

  $db_type="mysql";           $dsn="$db_type:host=$db_host;dbname=$db_name;charset=utf8";

  try {

    $pdo=new pdo($dsn,$db_user, $db_pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

    print "접속하였습니다.<br>";

  }catch(PODException $Exception){

      die('오류:'.$Exception->getMessage());

  }

    

    

  $search_key='%'.$_POST['search_key'].'%';

  try {

      $sql="select * from product where animal like :animal;

      $stmt=$pdo->prepare($sql);

      $stmt->bindvalue(':last_name',$search_key,PDO::PARAM_STR);

      $stmt->bindvalue(':first_name',$search_key,PDO::PARAM_STR);

      $stmt->execute();

      $count=$stmt->rowCount();

      print "검색결과는" .$count."건입니다.<br>";

   } catch(PDOException $Exception) {

      print "오류:".$Exception->getMessage();

  }

  

    

   

if($count<1) {

   print "검색 결과가 없습니다.<br>";

} else {

?>

    <table width="450" border="1" cellsapceing="0" cellpadding="8">

        <tbody>

              <tr>

                 <th>번호</th>

                <th>동물 종류</th>

                <th>카테고리</th>

                <th>상품 명</th>

              </tr> 

                <?php

                 while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {

                ?>

                <tr>

                    <td align="center"><?=htmlspecialchars($row['num'])?></td>

                    <td><?=htmlspecialchars($row['animal'])?></td>

                    <td><?=htmlspecialchars($row['category'])?></td>

                    <td><?=htmlspecialchars($row['name'])?></td>                                </tr>

                <?php

                 }

                ?>

            </tbody>

        </table>         

    <?php

     }

    ?>

</body>

</html> 

