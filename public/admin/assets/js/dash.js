$(function(){
    $(".item-select").attr("prestatus","closed");
    $(".item-select").click(function(){
        $(this).siblings(".item-select-box").slideUp("slow")
        $(this).attr("status","open");
        $(this).siblings(".item-select").attr("status","closed");
        $(this).children(".icon").removeClass("bi-caret-left-fill");
        $(this).children(".icon").addClass("bi-caret-down-fill");
        $(this).siblings(".item-select").children(".icon").removeClass("bi-caret-down-fill");
        $(this).siblings(".item-select").children(".icon").addClass("bi-caret-left-fill");
    })
    $(".item-select").click(function(){
        let x = $(this).next(".item-select-box");
        let y = $(this).attr("status")
        let z = $(this).attr("prestatus")
        if(y=="open" && z=="closed"){
            x.slideDown("slow")
            x.prev(".item-select").attr("prestatus","open")
        }
        if(y=="open" && z=="open"){
            x.slideUp("slow")
            x.prev(".item-select").attr("prestatus","0")
            $(".icon").removeClass("bi-caret-down-fill");
            $(".icon").addClass("bi-caret-left-fill");
            $(".item-select").attr("status","closed")
            $(".item-select").attr("prestatus","closed")
        }
        if(y=="open" && z=="0"){
            x.slideDown("slow")
            $(".icon").removeClass("bi-caret-down-fill");
            $(".icon").addClass("bi-caret-left-fill");
            $(".item-select").attr("prestatus","closed")
            $(".item-select").attr("status","closed")
        }

    });











})