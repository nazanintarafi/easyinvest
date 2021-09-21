function addComma( str ) {
	var objRegex = new RegExp( '(-?[0-9]+)([0-9]{3})' );
 
	while( objRegex.test( str ) ) {
		str = str.replace( objRegex, '$1,$2' );
	}
 
	return str;
}
$(document).ready(function(){
    $lang = $('body').attr('lang');
    $.getJSON( "http://localhost/kiaalap-master/json/activities."+$lang+".json", function( data ) {
        var items = [];
        $.each( data, function( key, val ) {

          items.push( "<li><a href=\""
          + val.href +
          "\"><div class=\"message-content\"><span class=\"message-date\">"
          + val.date +
          "</span><span class=\"message-date message-time\">"
          + val.time +
          "</span><p>"
          + val.description +
          "</p><span class=\"message-price\">"
          + addComma(val.amount) +
          "</span></div></a></li>"  );
        });
        $(".message-menu").html(items.join(''));
    });

})





