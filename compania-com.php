<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>콤파니아</title>

            
        <script src="js/jquery.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/header_sliderbanner.js"></script>
        <script src="js/header_tapmenu.js"></script>
        <link rel="stylesheet" href="css/jquery.bxslider.min.css">


        <style>
            @media all and (min-width:1024px) and (max-width:2048px)/*(max-width:420px)*/{
                section{
                    margin-top:100px;
                    margin-bottom:200px;
                }
                div{
                    margin:auto;
                    text-align:center;
                }
                div>img{
                    width:1200px;
                }
            }
            @media all and (min-width:768px) and (max-width:1023px)/*(max-width:420px)*/{
                section{
                    margin-top:50px;
                    margin-bottom:200px;
                }
                div{
                    margin:auto;
                    text-align:center;
                }
                div>img{
                    width:900px;
                }
            }
            @media all and (min-width:320px) and (max-width:767px)/*(max-width:420px)*/{
                section{
                    margin-top:20px;
                    margin-bottom:150px;
                }
                div{
                    margin:auto;
                    text-align:center;
                }
                div>img{
                    width:500px;
                }
            }
        </style>


    </head>
    <body>
            <?php include "header.php";?>

        <section>
            <div>
                <img src="images/com.png">
            </div>
        </section>

            <?php include "footer.php";?>

    </body>
</html>