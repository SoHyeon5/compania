    $(function(){
        $(".Q1>.btn_Q1").on("click", function( ) {
            $(".A1").slideDown(1000, "linear",
            function(){
                $(".Q1>.btn_Q1").hide();
                $(".Q1>.btn_Q2").show();
            });
        });
        $(".Q1>.btn_Q2").on("click", function(){
            $(".A1").slideUp(1000, "linear",
            function(){
                $(".Q1>.btn_Q2").hide();
                $(".Q1>.btn_Q1").show();
            });
        });
    })
    $(function(){
        $(".Q2>.btn_Q1").on("click", function( ) {
            $(".A2").slideDown(1000, "linear",
            function(){
                $(".Q2>.btn_Q1").hide();
                $(".Q2>.btn_Q2").show();
            });
        });
        $(".Q2>.btn_Q2").on("click", function(){
            $(".A2").slideUp(1000, "linear",
            function(){
                $(".Q2>.btn_Q2").hide();
                $(".Q2>.btn_Q1").show();
            });
        });
    })
    $(function(){
        $(".Q3>.btn_Q1").on("click", function( ) {
            $(".A3").slideDown(1000, "linear",
            function(){
                $(".Q3>.btn_Q1").hide();
                $(".Q3>.btn_Q2").show();
            });
        });
        $(".Q3>.btn_Q2").on("click", function(){
            $(".A3").slideUp(1000, "linear",
            function(){
                $(".Q3>.btn_Q2").hide();
                $(".Q3>.btn_Q1").show();
            });
        });
    })
    $(function(){
        $(".Q4>.btn_Q1").on("click", function( ) {
            $(".A4").slideDown(1000, "linear",
            function(){
                $(".Q4>.btn_Q1").hide();
                $(".Q4>.btn_Q2").show();
            });
        });
        $(".Q4>.btn_Q2").on("click", function(){
            $(".A4").slideUp(1000, "linear",
            function(){
                $(".Q4>.btn_Q2").hide();
                $(".Q4>.btn_Q1").show();
            });
        });
    })
    $(function(){
        $(".Q5>.btn_Q1").on("click", function( ) {
            $(".A5").slideDown(1000, "linear",
            function(){
                $(".Q5>.btn_Q1").hide();
                $(".Q5>.btn_Q2").show();
            });
        });
        $(".Q5>.btn_Q2").on("click", function(){
            $(".A5").slideUp(1000, "linear",
            function(){
                $(".Q5>.btn_Q2").hide();
                $(".Q5>.btn_Q1").show();
            });
        });
    })