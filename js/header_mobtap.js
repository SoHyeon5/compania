
    $(function(){
        $(".mob-btn_open").on("click", function() {
            $("#mobiletap").show(500);
            $(".mob-btn_open").hide();
            $(".mob-btn_close").show();
        });
        $(".mob-btn_close").on("click", function(){
            $("#mobiletap").hide(500);
            $(".mob-btn_close").hide();
            $(".mob-btn_open").show();
        });
    })
    $(function(){
        $(".mob-searchtap").on("click", function(){
            $("#mob-searchBar").slideToggle(1000, "linear");  
        })
    })
