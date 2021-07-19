
    $(function(){
            $(".cycle-img_ham").on("click", function( ) {
                $(".txbox-ham").slideToggle(0, "linear");
                $(".txbox-camel").hide();
            });
        })
        $(function(){
            $(".cycle-img_camel").on("click", function( ) {
                $(".txbox-camel").slideToggle(0, "linear");
                $(".txbox-ham").hide();
            });
        })


    /*   <!-- <script>
            function txChangeColor(element){
                element.style.color="black";
            }
    </script>-->*/
        
