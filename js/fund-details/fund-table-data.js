/*create table rows*/
$(document).ready(function(){
    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/fund-table."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
          items.push( "<tr><td>" 
           + val.assetsname +
            "</td><td>"
            +val.Market+
            "</td><td>"
            +val.Percentageofassets+
            "</td><td>"
            +val.Profitandlosspercentage+
            "</td><td>"
            +val.entrydate+
            "</td></tr>" );
        });
        $("#funddata").html(items.join(''));
      
        });

})





