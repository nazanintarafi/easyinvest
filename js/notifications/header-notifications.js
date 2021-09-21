$(document).ready(function(){
    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/notifications."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {

          items.push( "<li><a href=\""
          + val.href +
          "\"><div class=\"notification-icon\"><i class=\" class=\"educate-icon educate-checked edu-checked-pro admin-check-pro\" aria-hidden=\"true\"></i></div><div class=\"notification-content\"><h2 class=\"notification-topic\">"
          + val.topic +
          "</h2><p>"
          + val.description +
          "</p><span class=\"notification-date\">"
          + val.date +
          "</span></div></a></li>"  );
        });
        $(".notification-menu").html(items.join(''));
    });

})





