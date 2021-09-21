/*create table rows*/
$(document).ready(function(){
    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/manager-information."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
          items.push( "<div class=\"student-inner-std res-mg-b-30\"><div class=\"student-img\"><img src=\""
          + val.managerprofile +
          "\" alt=\"table-img\"></div><div class=\"student-dtl\"><h2>" 
           + val.managername +
            "</h2><p class=\"dp\">"
            + val.Specifications +
            "</p></div></div>");
        });
        $(".contacts-area").html(items.join(''));
    });

})





