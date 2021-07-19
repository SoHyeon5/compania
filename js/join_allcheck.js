$(document).ready(function(){
    $("#ckpro_all").click(function(){
        if($(this).prop("checked")==true){
            $(".ckproallow").prop("checked",true);
            $(".check_choice").prop("checked", true);
        }
        else{
            $(".ckproallow").prop("checked", false);
            $(".check_choice").prop("checked", false);
        }
    });
})

$(document).ready(function(){
    $(".ckproallow").click(function(){
        if($(this).prop("checked")==true){
            $(".check_choice").prop("checked",true);
        }
        else{
            $(".check_choice").prop("checked", false);
        }
    });
})