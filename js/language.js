$(document).ready(function(){
    var items = [];
    //get profile informations api
    $.ajax({
        url : "http://easyinvest.ir/api/langs",
        type: "get",
        data :{},
        success: (data) =>{

            
            $.each( JSON.parse(data), function( key, val ) {
                items.push( "<li class=\"lang\"><a href=\"?lang="
                +val.Short+
                "\" id=\""
                +val.Short+
                "fa\"><div class=\"language-img\"><img src=\"img/languages/"
                +val.Short+
                ".png\" alt=\"\"></div><div class=\"language-content\"><span class=\"message-date\">"
                +val.Name+
                "</span></div></a></li>" );
            });
            $(".langUl").html(items.join(''));


    
        },
        error:(data) => {
            console.log(data.responseJSON.message);
        }
    });
})