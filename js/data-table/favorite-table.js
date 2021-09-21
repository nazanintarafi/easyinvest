/*add favorits row*/
$(document).ready(function(){
    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/data."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {
          items.push( "<tr><td>" + val.id + "</td><td>" + val.name + "</td><img class=\"main-logo\" src=\"img/logo/logo.png\" /></td></tr>" );
        });
        $("#alldata tbody").html(items.join(''))
      });

    $('#favorite').click(function(){
        
        $("#alldata").find("tr.selected").each(function(){
            $("#favdata tbody").append($(this))
        })
    })
})
