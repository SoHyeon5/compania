
    $(function(){
        $(".btn_11").on("click", function( ) {
            $(".one_box").slideToggle(0, "linear");
            $(".often_box").hide();
        });
    })
    $(function(){
        $(".btn_often").on("click", function( ) {
            $(".often_box").slideToggle(0, "linear");
            $(".one_box").hide();
        });
    })
