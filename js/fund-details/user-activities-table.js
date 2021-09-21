/*create table rows*/
$(document).ready(function(){
    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/user-activities-table."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
          items.push( "<tr><td>" 
           + val.transactiondate +
           "</td><td>"
           + val.Typeoftransaction +
            "</td><td>"
            +"$"+val.transactionamount+
            "</td><td>"
            +val.Transactionvolume+
            "</td><td>"
            +val.Condition+
            "</td></tr>" );
        });
        $("#activities-data").html(items.join(''));
       

        });

})




