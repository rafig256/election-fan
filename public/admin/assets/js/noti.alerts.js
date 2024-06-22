$(function(){


    function jqunoti(title,text,noticolor,notiline) {


        let notial = `
    
    <div class="noti-alert">
    
        <div style="background-color:${noticolor};" class="noti">
            <div class="noti-title">${title}</div>
            <div class="noti-text">${text}</div>
            <div style="background-color:${notiline};" class="noti-line"></div>
        </div>
        
    </div>
 
    `;


        $(".cont").after(notial)
        $(".noti-line").animate({width: 0}, 2500);
        setTimeout(function () {
            $(".noti-alert").addClass("x1")
        }, 2500)
    }


    jqunoti("موفق","با تشکر موفق بود","#0652DD","#236ef9");

});