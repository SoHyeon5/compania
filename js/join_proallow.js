
    $(function(){
        $(".btn_allowopen2").on("click", function( ) {
            $(".box_allow2").slideDown(0, "linear",
            function(){
                $(".btn_allowopen2").hide();
                $(".btn_allowclose2").show();
            });
        });
        $(".btn_allowclose2").on("click", function(){
            $(".box_allow2").slideUp(0, "linear",
            function(){
                $(".btn_allowclose2").hide();
                $(".btn_allowopen2").show();
            });
        });
    })

    
    $(function(){
        $(".btn_allowopen1").on("click", function( ) {
            $(".box_allow1").slideDown(0, "linear",
            function(){
                $(".btn_allowopen1").hide();
                $(".btn_allowclose1").show();
            });
        });
        $(".btn_allowclose1").on("click", function(){
            $(".box_allow1").slideUp(0, "linear",
            function(){
                $(".btn_allowclose1").hide();
                $(".btn_allowopen1").show();
            });
        });
    })

    $(function(){
        $(".btn_allowopen3").on("click", function( ) {
            $(".box_allow3").slideDown(0, "linear",
            function(){
                $(".btn_allowopen3").hide();
                $(".btn_allowclose3").show();
            });
        });
        $(".btn_allowclose3").on("click", function(){
            $(".box_allow3").slideUp(0, "linear",
            function(){
                $(".btn_allowclose3").hide();
                $(".btn_allowopen3").show();
            });
        });
    })